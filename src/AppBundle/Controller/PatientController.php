<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Media;
use AppBundle\Entity\Patient;
use AppBundle\Form\PatientType;
use AppBundle\Form\MediaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Form\PrescriptionPatientType;
use AppBundle\Entity\Prescription;
use AppBundle\Entity\Medication;
use AppBundle\Entity\PrescriptionMedication;
use AppBundle\Entity\User;
use AppBundle\Form\SendToPharmacyType;
use AppBundle\Form\OrderType;
use AppBundle\Entity\Pharmacy;


/**
 * @Route("/patient", name="")
 */
class PatientController extends Controller
{

    /**
     * @Route("/addinfo", name="add_info_patient")
     * @Security("has_role('ROLE_USER')")
     */
    public function addInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('AppBundle:Patient')->findByUser($user);
        if ($patient)
        {
            return $this->redirectToRoute('edit_info_patient');
        } else {
            $patient = new Patient();
            $form = $this->createForm(PatientType::class, $patient);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $patient->setUser($this->getUser());
                $em->persist($patient);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_patient.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/editinfo", name="edit_info_patient")
     * @Security("has_role('ROLE_USER')")
     */
    public function editInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('AppBundle:Patient')->findOneBy(array('user'=>$user));
        if ($patient)
        {
            $form = $this->createForm(PatientType::class, $patient);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $patient->setUser($this->getUser());
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_patient.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('edit_add_patient');
        }

    }

    /**
     * @Route("/editmedia", name="edit_media_patient")
     * @Security("has_role('ROLE_USER')")
     */

    public function editMediaAction(Request $request)
    {
        $user = $this->getUser();
        $media = $user->getMedia();
        if ($media){
            $form = $this->createForm(MediaType::class, $media);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
//                 $form->getData();
                $oldPath = $media->getPath();
                $file = $form["file"]->getData();
                $fileName = md5(uniqid()).".".$file->guessExtension();
                $media->setPath("upload/picture_user/".$fileName);
                $media->setAlt("user");
//                dump($media);
//                die();
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                unlink(__DIR__."/../../../"."web/".$oldPath);
                $file->move($this->getParameter('user_media'),$fileName);
                $request->getSession()->getFlashBag()->add('notice', 'Image a bien été modifiée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_media_patient.html.twig', array(
                'form' => $form->createView(),
            ));

        } else {
            $media = new Media();
            $form = $this->createForm(MediaType::class, $media);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $media->setUser($user);
                $em->persist($media);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Image a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Patient/add_media_patient.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/mylistprescription/{status}", name="patient_prescriptions_by_status")
     * @Security("has_role('ROLE_USER')")
     */
    public function getPrescriptionsActionByState(Request $request, $status) {

        $userId = $this->getUser()->getId();
        switch ($status) {
            case 'pending':
                $status = 'Non confirmée';
                break;
            case 'success':
                $status = 'Confirmée';
                break;
            case 'canceled':
                $status = 'annulée';
                break;
            case 'delivred':
                $status = 'en attente';
                break;
        }
        $patient = $this->getDoctrine()->getRepository(Patient::class)->findOneBy(["user" => $userId]);
        if ($patient){
            $prescriptions = $this->getDoctrine()->getRepository(Prescription::class)->findBy([
                'patient' => $patient,
                'status' => $status
            ]);
            return $this->render('@App/Prescription/list_prescription_patient.html.twig', array(
                'prescription' => $prescriptions,
            ));
        } else {
            return $this->redirectToRoute('add_info_patient');
        }
    }


    /**
     * @Route("/mylistprescription", name="list_prescription_patient")
     * @Security("has_role('ROLE_USER')")
     */

    public function listPrescriptionPatientAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('AppBundle:Patient')->findOneBy(array('user'=>$user));
        if ($patient)
        {
            $prescription = $patient->getPrescriptions();
            return $this->render('@App/Prescription/list_prescription_patient.html.twig',array('prescription'=>$prescription));
        } else {
            return $this->redirectToRoute('add_info_patient');
        }

    }
    /**
     * @Route("/choicepharmacy/{id}", name="add_pharmacy_to_prescription")
     * @Security("has_role('ROLE_USER')")
     */
    public function choicePharmacyPacientAction(Request $request, Prescription $prescription)
    {
        $patient = $prescription->getPatient();
        $user = $patient->getUser();
        $userCurrent = $this->getUser();
        if ($user === $userCurrent){
            $form = $this->createForm(PrescriptionPatientType::class, $prescription);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $prescription->setStatus("en attente");
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Pharmacie ajoutée avec succès ');
                return $this->redirectToRoute('list_prescription_patient');
            }
            return $this->render('@App/Prescription/add_prescription.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('homepage');
        }

    }

    /**
     * @Route("/mylistprescriptionmedication/{id}", name="my_list_prescription_medicacation")
     * @Security("has_role('ROLE_USER')")
     */
    public function listPrescriptionMedication(Prescription $prescription)
    {
        $user = $this->getUser();
        $patient = $prescription->getPatient();
        $userPatient = $patient->getUser();
        if ($user === $userPatient) {
            $prescriptionMedication = $prescription->getPrescriptionMedication();
            return $this->render('@App/Prescription/list_prescription_medication_patient.html.twig',array('prescriptionMedication'=>$prescriptionMedication));
        } else{
            return $this->redirectToRoute('homepage');
        }
    }

    /**
     * @return mixed
     * @Route("/searchprescritions", name="patient_search_query")
     * @Security("has_role('ROLE_USER')")
     */
    public function searchAction(Request $request) {

        $term = $request->query->get('term');
        $userId = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository(Prescription::class);
        $patient = $this->getDoctrine()->getRepository(Patient::class)->findOneBy(["user" => $userId]);
        $patientId = $patient->getId();
        $prescriptions = $repository->searchPrescriptions($term, 'patient', $patientId);
        return $this->render('@App/Prescription/search.html.twig',array(
            'prescriptions'=>$prescriptions
        ));
    }

    /**
     * @Route("/Order", name="go_to_view")
     * @Security("has_role('ROLE_USER')")
     */
    public function generateViewAction(){
        return $this->render('@App/Patient/Order_Meds.html.twig');
    }


    /**
     * @Route("/addOrder", name="add_Order")
     * @Security("has_role('ROLE_USER')")
     */
    public function createPrescriptionAction(){
        $em=$this->getDoctrine()->getManager();
        $repoPatient=$this->getDoctrine()->getRepository('AppBundle:Patient');
        $patient=$repoPatient->findOneByUser($this->getUser());
        if ($patient==null){
            echo "you are not a patient yet, but we added you in the database";
            $patient=new Patient();
            $patient->setUser($this->getUser());
            $patient->setDateBirth(new \Datetime("NOW"));
            $patient->setHeight(0);
            $patient->setWeight(0);
            $em->persist($patient);
            $em->flush();
        }
        $prescription=new Prescription();
        $prescription->setDateAdd(new \DateTime("NOW"));
        $prescription->setDoctor(null);
        $random = time() * rand(10*45, 100*98);
        $prescription->setReference(abs($random));
        $prescription->setStatus('en attente');
        $prescription->setPatient($patient);
        $prescription->setPharmacy(null);
        $em->persist($prescription);
        $em->flush();
        $id=$prescription->getId();
        return $this->redirectToRoute('add_Meds_To_Order',array('id'=>$id));
    }

    /**
     * @Route("/addMeds/{id}", name="add_Meds_To_Order")
     * @Security("has_role('ROLE_USER')")
     */
    public function addOrderToPharmacyAction(Request $request,$id){

        $prescription=new Prescription();
        $repoPrescription=$this->getDoctrine()->getRepository('AppBundle:Prescription');
        $prescription=$repoPrescription->findOneById($id);
        $repo=$this->getDoctrine()->getRepository('AppBundle:Medication');
        $repoPrescriptionMed=$this->getDoctrine()->getRepository('AppBundle:PrescriptionMedication');
        $medications= new Medication();
        $medications=$repo->findAll();
        for ($i=0;$i<count($medications);$i++){
            $MedNames[$medications[$i]->getName()]=$medications[$i]->getName();
        }
        $prescriptionMed=new PrescriptionMedication();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(OrderType::class,$prescriptionMed,array('data'=>$MedNames));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $OrderMeds=new PrescriptionMedication();
            $MedicationName=$form->get('Medicament')->getViewData();
            $MedQuantity=$form->get('quantite')->getViewData();
            $Medication=new Medication();
            $Medication=$repo->findOneByName($MedicationName);
            $MedExists=$repoPrescriptionMed->findOneBy(array('prescription'=>$prescription,'medication'=>$Medication));
            if ($MedExists==null){
                $OrderMeds->setMedication($Medication);
                $OrderMeds->setQuantity($MedQuantity);
                $OrderMeds->setPrescription($prescription);
                $em->persist($OrderMeds);

                $em->flush();
            }
            return $this->redirectToRoute('add_Meds_To_Order',array('id'=>$id));
//            $quantity=$form->get('quantite')->getViewData();

        }
//        $var = $prescription->getPrescriptionMedications()[0]->getMedications();
//        dump($var);
//        die();
        $Meds=array();
//        dump($prescription->getPrescriptionMedication());exit();
        for ($i=0;$i<count($prescription->getPrescriptionMedication());$i++){
            array_push($Meds,$prescription->getPrescriptionMedication()[$i]->getMedication()->getName());
            dump($prescription->getPrescriptionMedication()[$i]->getMedication());
        }
//        die();
        return $this->render('@App/Patient/thnks.html.twig',array('form'=>$form->createView(),'id'=>$id,'meds'=>$Meds));

    }

    /**
     * @Route("/candcelOrder/{id}", name="Cancel_Order")
     * @Security("has_role('ROLE_USER')")
     */
    public function deletePrescriptionAction($id){
        $prescription=new Prescription();
        $em=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Prescription');
        $prescription=$repo->findOneById($id);
//        dump($prescription);
//        die();
        $em->remove($prescription);
        $em->flush();
        return $this->render('@App/Default/index.html.twig');
    }

    /**
     * @Route("/sendOrder/{id}", name="Send_Order_To_Pharmacy")
     * @Security("has_role('ROLE_USER')")
     */
    public function SendOrderToPharmacyAction(Request $request,$id){
        $prescription=new Prescription();
        $em=$this->getDoctrine()->getManager();
        $repoPharmacy=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $repo=$this->getDoctrine()->getRepository('AppBundle:Prescription');
        $prescription=$repo->findOneById($id);
        $pharmacies=$repoPharmacy->findAll();
        for ($i=0;$i<count($pharmacies);$i++){
            $PharmaNames[$pharmacies[$i]->getNamePharmacy()]=$pharmacies[$i]->getNamePharmacy();
        }
        $form=$this->createForm(SendToPharmacyType::class,$prescription,array('data'=>$PharmaNames));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pharmacyName=$form->get('Medicament')->getViewData();
            $pharmacy=$repoPharmacy->findOneByNamePharmacy($pharmacyName);
            $prescription->setPharmacy($pharmacy);
            $em=$this->getDoctrine()->getManager();
            $em->persist($prescription);
            $em->flush();
            return $this->render('@App/Default/index.html.twig');
        }
//            dump($PharmaNames);die();
//        $prescription->setPharmacy()
        return $this->render('@App/Patient/sendOrder.html.twig',array('form'=>$form->createView()));
    }


    /**
     * @Route("/PharmaList", name="PharmaList")
     */
    public function ListController(){
        $repo=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $pharmacy=new Pharmacy();
        $pharmacy=$repo->findAll();
//        dump($pharmacy);
//        die();
        return $this->render('@App/Patient/list_pharmacy.html.twig',array('pharmas'=>$pharmacy));
    }

}




<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pharmacy;
use AppBundle\Form\PharmacyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Prescription;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Medication;
use AppBundle\Entity\OrderMedication;
use AppBundle\Entity\Supplier;
use AppBundle\Entity\SupplierOrder;
use AppBundle\Form\PharmacyStockType;
use AppBundle\Form\UpdateAddStockType;
use AppBundle\Entity\PharmacyStock;
use AppBundle\Form\SendToPharmacyType;
use AppBundle\Form\OrderType;

/**
 * @Route("/pharmacy", name="")
 */
class PharmacyController extends Controller
{

    /**
     * @Route("/addinfo", name="add_info_pharmacy")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function addInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pharmacy = $em->getRepository('AppBundle:Pharmacy')->findByUser($user);
        if ($pharmacy)
        {
            return $this->redirectToRoute('edit_info_pharmacy');
        } else {
            $pharmacy = new Pharmacy();
            $form = $this->createForm(PharmacyType::class, $pharmacy);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $pharmacy->setUser($this->getUser());
                $em->persist($pharmacy);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Pharmacy/add_pharmacy.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/editinfo", name="edit_info_pharmacy")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function editInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pharmacy = $em->getRepository('AppBundle:Pharmacy')->findOneBy(array('user'=>$user));
        if ($pharmacy)
        {
            $form = $this->createForm(PharmacyType::class, $pharmacy);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $pharmacy->setUser($this->getUser());
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Pharmacy/add_pharmacy.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('edit_add_pharmacy');
        }

    }


    /**
     * @Route("/listprescription/{status}", name="pharmacy_prescriptions_by_status")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function getPrescriptionsActionByState(Request $request, $status) {
        $userId = $this->getUser()->getId();
        switch ($status) {
            case 'pending':
                $status = 'Non confirmé';
                break;
            case 'succes':
                $status = 'Confirmé';
                break;
            case 'canceled':
                $status = 'annulée';
                break;
            case 'delivred':
                $status = 'Livrée';
                break;
            case 'success':
                $status = 'confirmé';
                break;
        }

            $pharmacy = $this->getDoctrine()->getRepository(Pharmacy::class)->findOneBy(["user" => $userId]);
        if ($pharmacy) {
            $prescriptions = $this->getDoctrine()->getRepository(Prescription::class)->findBy([
                'patient' => $pharmacy,
                'status' => $status
            ]);
            return $this->render('@App/Prescription/list_prescription_doctor.html.twig', array(
                'prescription' => $prescriptions,
            ));
        } else {
            return $this->redirectToRoute('add_info_pharmacy');
        }
    }



    /**
     * @Route("/listprescription", name="list_priscription_pharmacy")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function listPrescriptionPharmacyAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pharmacy = $em->getRepository('AppBundle:Pharmacy')->findOneBy(array('user'=>$user));
        if ($pharmacy){
        $prescriptions = $pharmacy->getPrescription();
        return $this->render('@App/Prescription/list_prescription_pharmacy.html.twig',array('prescription'=>$prescriptions));

        } else {
            return $this->redirectToRoute('add_info_pharmacy');
        }
    }


    /**
     * @Route("/listprescriptionmedication/{id}", name="list_priscription_medication_pharmacy")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function listPrescriptionMedicationPharmacyAction(Prescription $prescription)
    {
        $prescriptionMedication = $prescription->getPrescriptionMedication();
        return $this->render('@App/Prescription/list_prescription_medication_pharmacy.html.twig',array('prescriptionMedication'=>$prescriptionMedication));
    }


    /**
     * @Route("/setpriceprescriptinmedication/{id}/{price}",
     *      name="set_price_priscription_medication_pharmacy",
     *      requirements={"id"="\d+","price"="\d+"},
     *      options={"expose"="true"})
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function setPricePrescriptionMedicationAction($id,$price, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $prescriptionMedication = $em->getRepository('AppBundle:PrescriptionMedication')->find($id);
        $prescriptionMedication->setPrice($price);
        $em->flush();
        $priceNew = array("price"=>$price);
        return new JsonResponse($priceNew);
    }

    /**
     * @Route("/confirmationprescriptin/{id}/",
     *      name="confirmation_priscription_medication_pharmacy",
     *      requirements={"id"="\d+"},
     *      options={"expose"="true"})
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function confirmationPrescriptionAction(Prescription $prescription, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $prescriptionMedications = $prescription->getPrescriptionMedication();
        foreach ($prescriptionMedications as $prescriptionMedication){
            if ($prescriptionMedication->getPrice() == null){
                $priceEmpty = array("status"=>"Prix vide !");
                return new JsonResponse($priceEmpty);
            } else {
                $prescription->setStatus("Confirmée");
                $em->flush();
                $priceNew = array("status"=>"Confirmé");
                return new JsonResponse($priceNew);
            }
        }

    }
    /**
     * @return mixed
     * @Route("/searchprescritions", name="pharmacy_search_query")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function searchAction(Request $request) {

        $term = $request->query->get('term');
        $userId = $this->getUser()->getId();


        $repository = $this->getDoctrine()->getRepository(Prescription::class);
        $pharmacy = $this->getDoctrine()->getRepository(Pharmacy::class)->findOneBy(["user" => $userId]);
        $pharmacyId = $pharmacy->getId();
        $prescriptions = $repository->searchPrescriptions($term, 'pharmacy', $pharmacyId);

        return $this->render('@App/Prescription/search.html.twig',array(
            'prescriptions'=>$prescriptions
        ));
    }

    /**
     * @return mixed
     * @Route("/cancelprescription/{id}", name="cancel_prescription")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function cancelDemandeAction(Request $request, Prescription $prescription)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $pharmacy = $em->getRepository('AppBundle:Pharmacy')->findOneBy(array('user'=>$user));
        if ($pharmacy)
        {
            $pharmacyPrescription =$prescription->getPharmacy();
            if ($pharmacyPrescription === $pharmacy){
                $prescription->setStatus("Annulée");
              $prescriptionMedication = $prescription->getPrescriptionMedication();
                foreach ($prescriptionMedication as $prescriptionmed){
                    $prescriptionmed->setPrice(0);
                }
                $em->flush();
                return $this->redirectToRoute('list_priscription_pharmacy');
            } else {
                return $this->redirectToRoute('list_priscription_pharmacy');
            }
        } else {
            return $this->redirectToRoute('list_priscription_pharmacy');
        }
    }




    //========================================================================================================
    //========================================================================================================
    //========================================================================================================
    //========================================================================================================
    //========================================================================================================
    //========================================================================================================

    /**
     * @Route("/Order", name="go_to_view_supplier")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function generateViewAction(){
        return $this->render('@App/Pharmacy/Order_Meds.html.twig');
    }


    /**
     * @Route("/addOrder", name="add_Order_supplier")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function createPrescriptionAction(){

        $em=$this->getDoctrine()->getManager();
        $repoPharmacy=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $pharmacy=$repoPharmacy->findOneByUser($this->getUser());
        if ($pharmacy==null){
            echo "you are not a patient yet, but we added you in the database";
            $pharmacy=new Pharmacy();
            $pharmacy->setUser($this->getUser());
            $pharmacy->setNamePharmacy($this->getUser()->getName());
            $pharmacy->setOpeningTime('JOUR');
            $em->persist($pharmacy);
            $em->flush();
        }
        $Order=new SupplierOrder();
        $date = new \DateTime();
        $Order->setDateAdd($date);
//        $Order->setDoctor(null);
        $random = md5(((FLOAT)microtime())*950000);
        $Order->setReference($random);
        $Order->setStatus('en attente');
        $Order->setPharmacy($pharmacy);
        $Order->setSupplier(null);
        $em->persist($Order);
        $em->flush();
        $id=$Order->getId();
        return $this->redirectToRoute('add_Meds_To_Order_supplier',array('id'=>$id));
    }

    /**
     * @Route("/addMeds/{id}", name="add_Meds_To_Order_supplier")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function addOrderToSupplierAction(Request $request,$id){

        $supplierOrder=new SupplierOrder();
        $repoOrder=$this->getDoctrine()->getRepository('AppBundle:SupplierOrder');
        $supplierOrder=$repoOrder->findOneById($id);
        $repo=$this->getDoctrine()->getRepository('AppBundle:Medication');
        $repoOrderMeds=$this->getDoctrine()->getRepository('AppBundle:OrderMedication');
        $medications= new Medication();
        $medications=$repo->findAll();
        for ($i=0;$i<count($medications);$i++){
            $MedNames[$medications[$i]->getName()]=$medications[$i]->getName();
        }
        $OrderMedications=new OrderMedication();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(OrderType::class,$OrderMedications,array('data'=>$MedNames));
        $form->handleRequest($request);

//        dump($medications);die();

        if ($form->isSubmitted() && $form->isValid()) {
            $OrderMeds=new OrderMedication();
            $MedicationName=$form->get('Medicament')->getViewData();
            $MedicationQuantity=$form->get('quantite')->getViewData();
//            dump($MedicationName);die();
            $Medication=new Medication();
            $Medication=$repo->findOneByName($MedicationName);

            $MedExists=$repoOrderMeds->findOneBy(array('supplierOrder'=>$supplierOrder,'medication'=>$Medication));
//            dump($MedExists);die();

            if ($MedExists==null){
                $OrderMeds->addMedication($Medication);


                $OrderMeds->setSupplierOrders($supplierOrder);
                $OrderMeds->setQuantity($MedicationQuantity);
                $OrderMeds->setPrice(0);
                $em->persist($OrderMeds);

                $em->flush();

            }


            return $this->redirectToRoute('add_Meds_To_Order_supplier',array('id'=>$id));
//            $quantity=$form->get('quantite')->getViewData();

        }

        $Meds=array();

        for ($i=0;$i<count($supplierOrder->getOrderMedications());$i++){
//            dump($supplierOrder->getOrderMedications()[$i]);
            array_push($Meds,$supplierOrder->getOrderMedications()[$i]->getMedication()->getName());
//dump($supplierOrder->getOrderMedications()[$i]->getMedications()->getName());
        }

//
//        else echo "no meds";
//        dump($MedNames);
//        die();

        return $this->render('@App/Pharmacy/thnks.html.twig',array('form'=>$form->createView(),'id'=>$id,'meds'=>$Meds));

    }

    /**
     * @Route("/candcelOrder/{id}", name="Cancel_Order_supplier")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function deleteOrderAction($id){
        $supplierOrder=new SupplierOrder();
        $em=$this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository('AppBundle:SupplierOrder');
        $supplierOrder=$repo->findOneById($id);
//        dump($prescription);
//        die();
        $em->remove($supplierOrder);
        $em->flush();
        return $this->render('@App/Default/index.html.twig');
    }

    /**
     * @Route("/sendOrder/{id}", name="Send_Order_To_Pharmacy_supplier")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function SendOrderToPharmacyAction(Request $request,$id){
        $supplierOrder=new SupplierOrder();
        $em=$this->getDoctrine()->getManager();
        $repoSupplier=$this->getDoctrine()->getRepository('AppBundle:Supplier');
        $repo=$this->getDoctrine()->getRepository('AppBundle:SupplierOrder');
        $supplierOrder=$repo->findOneById($id);
        $suppliers=$repoSupplier->findAll();
        for ($i=0;$i<count($suppliers);$i++){
            $suppNames[$suppliers[$i]->getNameSociety()]=$suppliers[$i]->getNameSociety();
        }

        $form=$this->createForm(SendToPharmacyType::class,$supplierOrder,array('data'=>$suppNames));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $supplierName=$form->get('Medicament')->getViewData();
            $supplier=$repoSupplier->findOneByNameSociety($supplierName);
            $supplierOrder->setSupplier($supplier);
            $em=$this->getDoctrine()->getManager();
            $em->persist($supplierOrder);
            $em->flush();
            return $this->render('@App/Default/index.html.twig');
        }
//            dump($PharmaNames);die();
//        $prescription->setPharmacy()
        return $this->render('@App/Pharmacy/sendOrder.html.twig',array('form'=>$form->createView()));
    }


    /**
     * @Route("/stock", name="stock_pharmacy")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function showStockAction(){
        $pharmacy=new Pharmacy();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $repoP=$this->getDoctrine()->getRepository('AppBundle:PharmacyStock');
        $user = $this->getUser()->getId();
        $MyPharmacy=$repo->findByUser($user);
        $MyStock=new PharmacyStock();
        $MyStock=$repoP->findByPharmacies($MyPharmacy);
//        dump($MyPharmacy);
//        exit();
        return $this->render('@App/Pharmacy/stock_pharmacy.html.twig',array(
            "stock"=>$MyStock,
            "id"=>$MyPharmacy[0]->getId()
        ));
    }

    /**
     * @Route("/Update/{StockID}/{PharmacyID}/{MedicationID}", name="stock_pharmacy_update")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function updateStockAction(Request $request, $StockID,$PharmacyID,$MedicationID){
        $pharmacyStock=new PharmacyStock();
        $repo=$this->getDoctrine()->getRepository('AppBundle:PharmacyStock');
        $pharmacyStock=$repo->findOneById($StockID);

//        dump($pharmacyStock);
//        die();
        $form=$this->createForm(PharmacyStockType::class,$pharmacyStock);
        $form->handleRequest($request);
//        $pharmacyStock=$form->getData();
        $NewPrice=$form->get('price')->getViewData();
        $NewQuantity=$form->get('quantity')->getViewData();
//die();
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $pharmacyStock->setPrice($NewPrice);
            $pharmacyStock->setQuantity($NewQuantity);
//            $pharmacyStock->set
            $em->persist($pharmacyStock);
            $em->flush();
            return $this->redirectToRoute('stock_pharmacy');
        }
        return $this->render('@App/Pharmacy/UpdateStock.html.twig',array(
            'form'=>$form->createView()
        ));

    }


    /**
     * @Route("/addMed/{PharmacyID}", name="stock_pharmacy_add")
     * @Security("has_role('ROLE_PHARMACY')")
     */
    public function addToStockAction(Request $request,$PharmacyID){
        $pharmacyStock=new PharmacyStock();
        $MedNames=array();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Medication');
        $repoPharm=$this->getDoctrine()->getRepository('AppBundle:Pharmacy');
        $repoStock=$this->getDoctrine()->getRepository('AppBundle:pharmacyStock');
        $medications= new Medication();
        $medications=$repo->findAll();
        for ($i=0;$i<count($medications);$i++){
            $MedNames[$medications[$i]->getName()]=$medications[$i]->getName();
        }

        $form=$this->createForm(UpdateAddStockType::class,$pharmacyStock,array('data'=>$MedNames));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $MedicationName=$form->get('Medicament')->getViewData();
//            $medications=new Medication();
            $medicationID=$repo->findOneByName($MedicationName)->getId();
            $price=$form->get('prix')->getViewData();
            $quantity=$form->get('Quantiter')->getViewData();
            $em=$this->getDoctrine()->getManager();
            $pharmacy=new Pharmacy();
            $Medication=new Medication();
            $pharmacy=$repoPharm->findOneById($PharmacyID);
            $Medication=$repo->findOneById($medicationID);
            $pharmacyStock->addPharmacy($pharmacy);
            $pharmacyStock->addMedication($Medication);
            $pharmacyStock->setPrice($price);
            $pharmacyStock->setQuantity($quantity);

            $Stock=$repoStock->findOneById($medicationID);
//            dump($Stock);
//            die();
            if ($Stock==null){
                $em->persist($pharmacyStock);
                $em->flush();
                return $this->redirectToRoute('stock_pharmacy');
            }
            else return $this->redirectToRoute('stock_pharmacy_add',array('PharmacyID'=>$PharmacyID));

        }

        return $this->render('@App/Pharmacy/addStock.html.twig',array('form'=>$form->createView()));
    }



}

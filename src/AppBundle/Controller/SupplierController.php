<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Supplier;
use AppBundle\Entity\SupplierOrder;
use AppBundle\Form\SupplierType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\SupplierStock;
use AppBundle\Entity\Medication;
use AppBundle\Form\UpdateAddStockType;
use Symfony\Component\HttpFoundation\JsonResponse;





/**
 * @Route("/supplier", name="")
 */
class SupplierController extends Controller
{

    /**
     * @Route("/addinfo", name="add_info_supplier")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function addInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $supplier = $em->getRepository('AppBundle:Supplier')->findByUser($user);
        if ($supplier)
        {
            return $this->redirectToRoute('edit_info_supplier');
        } else {
            $supplier = new Supplier();
            $form = $this->createForm(SupplierType::class, $supplier);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $supplier->setUser($this->getUser());
                $em->persist($supplier);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Supplier/add_supplier.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    /**
     * @Route("/editinfo", name="edit_info_supplier")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function editInfoAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $supplier = $em->getRepository('AppBundle:Supplier')->findOneBy(array('user'=>$user));
        if ($supplier)
        {
            $form = $this->createForm(SupplierType::class, $supplier);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $supplier->setUser($this->getUser());
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Information a bien été ajoutée.');
                return $this->redirectToRoute('homepage');
            }
            return $this->render('@App/Supplier/add_supplier.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {
            return $this->redirectToRoute('edit_add_supplier');
        }

    }

    /**
     * @Route("/Update/{StockID}/{SupplierID}/{MedicationID}", name="stock_supplier_update")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function updateStockAction(Request $request, $StockID,$SupplierID,$MedicationID){
        $supplierStock=new SupplierStock();
        $repo=$this->getDoctrine()->getRepository('AppBundle:SupplierStock');
        $supplierStock=$repo->findOneById($StockID);

//        dump($pharmacyStock);
//        die();
        $form=$this->createForm(SupplierStockType::class,$supplierStock);
        $form->handleRequest($request);
//        $pharmacyStock=$form->getData();
        $NewPrice=$form->get('price')->getViewData();
        $NewQuantity=$form->get('quantity')->getViewData();
//die();
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $supplierStock->setPrice($NewPrice);
            $supplierStock->setQuantity($NewQuantity);
//            $pharmacyStock->set
            $em->persist($supplierStock);
            $em->flush();
            return $this->redirectToRoute('stock_supplier');
        }
        return $this->render('@App/Supplier/UpdateStock.html.twig',array(
            'form'=>$form->createView()
        ));

    }


    /**
     * @Route("/addMed/{SupplierID}", name="stock_supplier_add")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function addToStockAction(Request $request,$SupplierID){
        $supplierStock=new SupplierStock();
        $MedNames=array();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Medication');
        $repoPharm=$this->getDoctrine()->getRepository('AppBundle:Supplier');
        $repoStock=$this->getDoctrine()->getRepository('AppBundle:supplierStock');
        $medications= new Medication();
        $medications=$repo->findAll();
        for ($i=0;$i<count($medications);$i++){
            $MedNames[$medications[$i]->getName()]=$medications[$i]->getName();
        }

        $form=$this->createForm(UpdateAddStockType::class,$supplierStock,array('data'=>$MedNames));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $MedicationName=$form->get('Medicament')->getViewData();
            $medications=new Medication();
            $medicationID=$repo->findOneByName($MedicationName)->getId();
            $price=$form->get('prix')->getViewData();
            $quantity=$form->get('Quantiter')->getViewData();

            $em=$this->getDoctrine()->getManager();
            $supplier=new Supplier();
            $Medication=new Medication();
            $supplier=$repoPharm->findOneById($SupplierID);
            $Medication=$repo->findOneById($medicationID);
            $supplierStock->addSupplier($supplier);
            $supplierStock->addMedication($Medication);
            $supplierStock->setPrice($price);
            $supplierStock->setQuantity($quantity);

            $Stock=$repoStock->findOneById($medicationID);
            dump($Stock);
//            die();
            if ($Stock==null){
                $em->persist($supplierStock);
                $em->flush();
                return $this->redirectToRoute('stock_supplier');
            }
            else return $this->redirectToRoute('stock_supplier_add',array('SupplierID'=>$SupplierID));

        }

        return $this->render('@App/Supplier/addStock.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/stock", name="stock_supplier")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function showStockAction(){
        $supplier=new Supplier();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Supplier');
        $repoP=$this->getDoctrine()->getRepository('AppBundle:SupplierStock');
        $user = $this->getUser()->getId();
        $MySupplier=$repo->findByUser($user);
        $MyStock=new SupplierStock();
        $MyStock=$repoP->findBySuppliers($MySupplier);
//        dump($MySupplier);exit();
        return $this->render('@App/Supplier/stock_supplier.html.twig',array(
            "stock"=>$MyStock,
            "id"=>$MySupplier[0]->getId()
        ));
    }

    /**
     * @Route("/listorder", name="list_order_supplier")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function listOrderSupplierAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $supplier = $em->getRepository('AppBundle:Supplier')->findOneBy(array('user'=>$user));
        if ($supplier){
            $orders = $supplier->getOrder();
            return $this->render('@App/Order/list_prescription_pharmacy.html.twig',array('prescription'=>$orders));

        } else {
            return $this->redirectToRoute('add_info_supplier');
        }
    }

    /**
     * @Route("/listordermedication/{id}", name="list_order_medication_supplier")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function listOrderMedicationSupplierAction(SupplierOrder $supplierOrder)
    {
        $orderMedication = $supplierOrder->getOrderMedications();
        return $this->render('@App/Order/list_prescription_medication_pharmacy.html.twig',array('prescriptionMedication'=>$orderMedication));
    }



    /**
     * @Route("/setpriceordermedication/{id}/{price}",
     *      name="set_price_order_medication_supplier",
     *      requirements={"id"="\d+","price"="\d+"},
     *      options={"expose"="true"})
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function setPriceOrderMedicationAction($id,$price, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $OrderMedication = $em->getRepository('AppBundle:OrderMedication')->find($id);
        $OrderMedication->setPrice($price);
//        dump($price);die();
        $em->flush();
        $priceNew = array("price"=>$price);
        return new JsonResponse($priceNew);
    }


    /**
     * @Route("/confirmationorder/{id}/",
     *      name="confirmation_order_medication_supplier",
     *      requirements={"id"="\d+"},
     *      options={"expose"="true"})
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function confirmationOrderAction( SupplierOrder $supplierOrder, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $orderMedications = $supplierOrder->getOrderMedications();
        foreach ($orderMedications as $orderMedication){
            if ($orderMedication->getPrice() == null){
                $priceEmpty = array("status"=>"Prix vide !");
                return new JsonResponse($priceEmpty);
            } else {
                $supplierOrder->setStatus("Confirmée");
                $em->flush();
                $priceNew = array("status"=>"Confirmé");
                return new JsonResponse($priceNew);
            }
        }

    }



    /**
     * @return mixed
     * @Route("/searchorders", name="supplier_search_query")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function searchAction(Request $request) {

        $term = $request->query->get('term');
        $userId = $this->getUser()->getId();


        $repository = $this->getDoctrine()->getRepository(SupplierOrder::class);
        $supplier = $this->getDoctrine()->getRepository(Supplier::class)->findOneBy(["user" => $userId]);
        $supplierId = $supplier->getId();
        $orders = $repository->searchOrders($term, 'supplier', $supplierId);

        return $this->render('@App/Order/search.html.twig',array(
            'prescriptions'=>$orders
        ));
    }


    /**
     * @return mixed
     * @Route("/cancelorder/{id}", name="cancel_order")
     * @Security("has_role('ROLE_SUPPLIER')")
     */
    public function cancelDemandeAction(Request $request, SupplierOrder $supplierOrder)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $supplier = $em->getRepository('AppBundle:Supplier')->findOneBy(array('user'=>$user));

        if ($supplier)
        {
            $supplierOrd =$supplierOrder->getSupplier();
//            dump($supplierOrd );
//            dump($supplier);
//            exit();
            if ($supplierOrd == $supplier){
                $supplierOrder->setStatus("Annulée");
                $orderMedication = $supplierOrder->getOrderMedications();
                foreach ($orderMedication as $prescriptionmed){
                    $prescriptionmed->setPrice(0);
                }

                $em->flush();
                return $this->redirectToRoute('list_order_supplier');
            } else {

                return $this->redirectToRoute('list_order_supplier');
            }
        } else {
            return $this->redirectToRoute('list_order_supplier');
        }
    }



}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gmcmap_default_index
        if ('/map' === $pathinfo) {
            return array (  '_controller' => 'GMCMapBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gmcmap_default_index',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/doctor')) {
            if (0 === strpos($pathinfo, '/doctor/add')) {
                // add_info_doctor
                if ('/doctor/addinfo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::addInfoAction',  '_route' => 'add_info_doctor',);
                }

                // add_prescription
                if ('/doctor/addprescription' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::addPrescriptionDoctorAction',  '_route' => 'add_prescription',);
                }

                // add_prescription_medication
                if ('/doctor/addmedication' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::addPrescriptionMedicationDoctorAction',  '_route' => 'add_prescription_medication',);
                }

            }

            // edit_info_doctor
            if ('/doctor/editinfo' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::editInfoAction',  '_route' => 'edit_info_doctor',);
            }

            if (0 === strpos($pathinfo, '/doctor/listprescription')) {
                // doctor_prescriptions_by_status
                if (preg_match('#^/doctor/listprescription/(?P<status>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctor_prescriptions_by_status')), array (  '_controller' => 'AppBundle\\Controller\\DoctorController::getPrescriptionsActionByState',));
                }

                // list_prescription_doctor
                if ('/doctor/listprescription' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::listPrescriptionForDocotrAction',  '_route' => 'list_prescription_doctor',);
                }

                // list_priscription_medication_doctor
                if (0 === strpos($pathinfo, '/doctor/listprescriptionmedication') && preg_match('#^/doctor/listprescriptionmedication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_priscription_medication_doctor')), array (  '_controller' => 'AppBundle\\Controller\\DoctorController::prescriptionDetailedForDoctor',));
                }

            }

            // find_medication
            if (0 === strpos($pathinfo, '/doctor/finmedication') && preg_match('#^/doctor/finmedication/(?P<medic>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'find_medication')), array (  '_controller' => 'AppBundle\\Controller\\DoctorController::findMedicationDoctor',));
            }

            // delete_prescription
            if (0 === strpos($pathinfo, '/doctor/deleteprescription') && preg_match('#^/doctor/deleteprescription/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_prescription')), array (  '_controller' => 'AppBundle\\Controller\\DoctorController::deletePrescriptionAction',));
            }

            // doctor_search_query
            if ('/doctor/searchprescritions' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DoctorController::searchAction',  '_route' => 'doctor_search_query',);
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/patient')) {
                if (0 === strpos($pathinfo, '/patient/add')) {
                    // add_info_patient
                    if ('/patient/addinfo' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PatientController::addInfoAction',  '_route' => 'add_info_patient',);
                    }

                    // add_Order
                    if ('/patient/addOrder' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PatientController::createPrescriptionAction',  '_route' => 'add_Order',);
                    }

                    // add_Meds_To_Order
                    if (0 === strpos($pathinfo, '/patient/addMeds') && preg_match('#^/patient/addMeds/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_Meds_To_Order')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::addOrderToPharmacyAction',));
                    }

                }

                // edit_info_patient
                if ('/patient/editinfo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PatientController::editInfoAction',  '_route' => 'edit_info_patient',);
                }

                // edit_media_patient
                if ('/patient/editmedia' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PatientController::editMediaAction',  '_route' => 'edit_media_patient',);
                }

                if (0 === strpos($pathinfo, '/patient/mylistprescription')) {
                    // patient_prescriptions_by_status
                    if (preg_match('#^/patient/mylistprescription/(?P<status>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_prescriptions_by_status')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::getPrescriptionsActionByState',));
                    }

                    // list_prescription_patient
                    if ('/patient/mylistprescription' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PatientController::listPrescriptionPatientAction',  '_route' => 'list_prescription_patient',);
                    }

                    // my_list_prescription_medicacation
                    if (0 === strpos($pathinfo, '/patient/mylistprescriptionmedication') && preg_match('#^/patient/mylistprescriptionmedication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_list_prescription_medicacation')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::listPrescriptionMedication',));
                    }

                }

                // add_pharmacy_to_prescription
                if (0 === strpos($pathinfo, '/patient/choicepharmacy') && preg_match('#^/patient/choicepharmacy/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_pharmacy_to_prescription')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::choicePharmacyPacientAction',));
                }

                // Cancel_Order
                if (0 === strpos($pathinfo, '/patient/candcelOrder') && preg_match('#^/patient/candcelOrder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Cancel_Order')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::deletePrescriptionAction',));
                }

                // patient_search_query
                if ('/patient/searchprescritions' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PatientController::searchAction',  '_route' => 'patient_search_query',);
                }

                // Send_Order_To_Pharmacy
                if (0 === strpos($pathinfo, '/patient/sendOrder') && preg_match('#^/patient/sendOrder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Send_Order_To_Pharmacy')), array (  '_controller' => 'AppBundle\\Controller\\PatientController::SendOrderToPharmacyAction',));
                }

                // go_to_view
                if ('/patient/Order' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PatientController::generateViewAction',  '_route' => 'go_to_view',);
                }

                // PharmaList
                if ('/patient/PharmaList' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PatientController::ListController',  '_route' => 'PharmaList',);
                }

            }

            elseif (0 === strpos($pathinfo, '/pharmacy')) {
                if (0 === strpos($pathinfo, '/pharmacy/add')) {
                    // add_info_pharmacy
                    if ('/pharmacy/addinfo' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::addInfoAction',  '_route' => 'add_info_pharmacy',);
                    }

                    // add_Order_supplier
                    if ('/pharmacy/addOrder' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::createPrescriptionAction',  '_route' => 'add_Order_supplier',);
                    }

                    if (0 === strpos($pathinfo, '/pharmacy/addMed')) {
                        // add_Meds_To_Order_supplier
                        if (0 === strpos($pathinfo, '/pharmacy/addMeds') && preg_match('#^/pharmacy/addMeds/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_Meds_To_Order_supplier')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::addOrderToSupplierAction',));
                        }

                        // stock_pharmacy_add
                        if (preg_match('#^/pharmacy/addMed/(?P<PharmacyID>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_pharmacy_add')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::addToStockAction',));
                        }

                    }

                }

                // edit_info_pharmacy
                if ('/pharmacy/editinfo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::editInfoAction',  '_route' => 'edit_info_pharmacy',);
                }

                if (0 === strpos($pathinfo, '/pharmacy/listprescription')) {
                    // pharmacy_prescriptions_by_status
                    if (preg_match('#^/pharmacy/listprescription/(?P<status>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pharmacy_prescriptions_by_status')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::getPrescriptionsActionByState',));
                    }

                    // list_priscription_pharmacy
                    if ('/pharmacy/listprescription' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::listPrescriptionPharmacyAction',  '_route' => 'list_priscription_pharmacy',);
                    }

                    // list_priscription_medication_pharmacy
                    if (0 === strpos($pathinfo, '/pharmacy/listprescriptionmedication') && preg_match('#^/pharmacy/listprescriptionmedication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_priscription_medication_pharmacy')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::listPrescriptionMedicationPharmacyAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/pharmacy/se')) {
                    // set_price_priscription_medication_pharmacy
                    if (0 === strpos($pathinfo, '/pharmacy/setpriceprescriptinmedication') && preg_match('#^/pharmacy/setpriceprescriptinmedication/(?P<id>\\d+)/(?P<price>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_price_priscription_medication_pharmacy')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::setPricePrescriptionMedicationAction',));
                    }

                    // pharmacy_search_query
                    if ('/pharmacy/searchprescritions' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::searchAction',  '_route' => 'pharmacy_search_query',);
                    }

                    // Send_Order_To_Pharmacy_supplier
                    if (0 === strpos($pathinfo, '/pharmacy/sendOrder') && preg_match('#^/pharmacy/sendOrder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Send_Order_To_Pharmacy_supplier')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::SendOrderToPharmacyAction',));
                    }

                }

                // stock_pharmacy
                if ('/pharmacy/stock' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::showStockAction',  '_route' => 'stock_pharmacy',);
                }

                if (0 === strpos($pathinfo, '/pharmacy/c')) {
                    // confirmation_priscription_medication_pharmacy
                    if (0 === strpos($pathinfo, '/pharmacy/confirmationprescriptin') && preg_match('#^/pharmacy/confirmationprescriptin/(?P<id>\\d+)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmation_priscription_medication_pharmacy')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::confirmationPrescriptionAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_confirmation_priscription_medication_pharmacy;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'confirmation_priscription_medication_pharmacy'));
                        }

                        return $ret;
                    }
                    not_confirmation_priscription_medication_pharmacy:

                    // cancel_prescription
                    if (0 === strpos($pathinfo, '/pharmacy/cancelprescription') && preg_match('#^/pharmacy/cancelprescription/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cancel_prescription')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::cancelDemandeAction',));
                    }

                    // Cancel_Order_supplier
                    if (0 === strpos($pathinfo, '/pharmacy/candcelOrder') && preg_match('#^/pharmacy/candcelOrder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Cancel_Order_supplier')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::deleteOrderAction',));
                    }

                }

                // go_to_view_supplier
                if ('/pharmacy/Order' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::generateViewAction',  '_route' => 'go_to_view_supplier',);
                }

                // stock_pharmacy_update
                if (0 === strpos($pathinfo, '/pharmacy/Update') && preg_match('#^/pharmacy/Update/(?P<StockID>[^/]++)/(?P<PharmacyID>[^/]++)/(?P<MedicationID>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_pharmacy_update')), array (  '_controller' => 'AppBundle\\Controller\\PharmacyController::updateStockAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/supplier')) {
            // add_info_supplier
            if ('/supplier/addinfo' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::addInfoAction',  '_route' => 'add_info_supplier',);
            }

            // stock_supplier_add
            if (0 === strpos($pathinfo, '/supplier/addMed') && preg_match('#^/supplier/addMed/(?P<SupplierID>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_supplier_add')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::addToStockAction',));
            }

            // edit_info_supplier
            if ('/supplier/editinfo' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::editInfoAction',  '_route' => 'edit_info_supplier',);
            }

            // stock_supplier_update
            if (0 === strpos($pathinfo, '/supplier/Update') && preg_match('#^/supplier/Update/(?P<StockID>[^/]++)/(?P<SupplierID>[^/]++)/(?P<MedicationID>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_supplier_update')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::updateStockAction',));
            }

            if (0 === strpos($pathinfo, '/supplier/s')) {
                // stock_supplier
                if ('/supplier/stock' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::showStockAction',  '_route' => 'stock_supplier',);
                }

                // set_price_order_medication_supplier
                if (0 === strpos($pathinfo, '/supplier/setpriceordermedication') && preg_match('#^/supplier/setpriceordermedication/(?P<id>\\d+)/(?P<price>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_price_order_medication_supplier')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::setPriceOrderMedicationAction',));
                }

                // supplier_search_query
                if ('/supplier/searchorders' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::searchAction',  '_route' => 'supplier_search_query',);
                }

            }

            elseif (0 === strpos($pathinfo, '/supplier/listorder')) {
                // list_order_supplier
                if ('/supplier/listorder' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SupplierController::listOrderSupplierAction',  '_route' => 'list_order_supplier',);
                }

                // list_order_medication_supplier
                if (0 === strpos($pathinfo, '/supplier/listordermedication') && preg_match('#^/supplier/listordermedication/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_order_medication_supplier')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::listOrderMedicationSupplierAction',));
                }

            }

            // confirmation_order_medication_supplier
            if (0 === strpos($pathinfo, '/supplier/confirmationorder') && preg_match('#^/supplier/confirmationorder/(?P<id>\\d+)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmation_order_medication_supplier')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::confirmationOrderAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_confirmation_order_medication_supplier;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'confirmation_order_medication_supplier'));
                }

                return $ret;
            }
            not_confirmation_order_medication_supplier:

            // cancel_order
            if (0 === strpos($pathinfo, '/supplier/cancelorder') && preg_match('#^/supplier/cancelorder/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cancel_order')), array (  '_controller' => 'AppBundle\\Controller\\SupplierController::cancelDemandeAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_easyadmin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                }

                return $ret;
            }
            not_easyadmin:

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }
            not_admin:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

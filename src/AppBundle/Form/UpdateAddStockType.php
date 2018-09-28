<?php
/**
 * Created by PhpStorm.
 * User: karim
 * Date: 9/23/2018
 * Time: 3:25 PM
 */

namespace AppBundle\Form;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Entity\Medication;
use AppBundle\Entity\Pharmacy;
use AppBundle\Form\PharmacyStockType;
use AppBundle\Form\PharmacyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UpdateAddStockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('Medicament',ChoiceType::class,array('choices'=>$options['data']))
                ->add('Quantiter',NumberType::class)
                ->add('prix',TextType::class)
                ->add('Envoyer',SubmitType::class,
                    array(
                        'attr'=>array(
                            'class'=>'style-button')));
    }
}
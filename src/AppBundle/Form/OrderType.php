<?php
/**
 * Created by PhpStorm.
 * User: karim
 * Date: 9/24/2018
 * Time: 4:07 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Medicament',ChoiceType::class,array('choices'=>$options['data']))
            ->add('quantite',NumberType::class)
            ->add('Ajouter',SubmitType::class,
                array('attr'=>array('class'=>'style-button')));
    }
}
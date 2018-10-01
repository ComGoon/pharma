<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\PrescriptionRepository;

class PrescriptionMedicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $reference = $options['reference'];
        $builder ->add('prescription',EntityType::class,
                         array('class'=>'AppBundle\Entity\Prescription',
                             'choice_label'=>'reference',
                             'multiple'=>false,
                             'expanded'=>false,
                             'attr'=>array('class'=>'reference-order'),
                             'label'=>' ',
                             'query_builder' => function(PrescriptionRepository $pres) use ($reference) {
                             return $pres->getPrescriptionByReferenceQueryBuilder($reference);
                             }
                         ))
               ->add('medication',EntityType::class,
                        array('class'=>'AppBundle\Entity\Medication',
                            'choice_label'=>'name',
                            'multiple'=>false,
                            'expanded'=>false,
                            'label'=>' '
                            )
                        )
                ->add('quantity',TextType::class,array('label'=>'Quantité'))


               ->add('Envoyer',SubmitType::class,
                    array(
                        'attr'=>array(
                            'class'=>'style-button')));
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PrescriptionMedication',
            $resolver->setRequired('reference')
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_prescriptionmedication';
    }

}

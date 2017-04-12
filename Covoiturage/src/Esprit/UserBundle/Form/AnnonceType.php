<?php

namespace Esprit\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tripDate', DateTimeType::class, array(
            'widget' => 'single_text',

            // do not render as type="date", to avoid HTML5 date pickers
            'html5' => false,

            // add a class that can be selected in JavaScript
            'attr' => ['class' => 'form-control'],
        ))->add('lieuDepart')->add('lieuArrive')->add('nbrPersonne')->add('prix')->add('critere')->add('distance')      ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\UserBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esprit_userbundle_annonce';
    }


}

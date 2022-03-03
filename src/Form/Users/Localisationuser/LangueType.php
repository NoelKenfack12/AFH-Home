<?php

namespace Users\LocalisationuserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LangueType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Langue')))
            ->add('abbreviation','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Abbreviation')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\LocalisationuserBundle\Entity\Langue'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'users_localisationuserbundle_langue';
    }
}

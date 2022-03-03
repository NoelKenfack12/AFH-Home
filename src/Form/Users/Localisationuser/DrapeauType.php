<?php

namespace Users\LocalisationuserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DrapeauType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file','file',array('required'=>false,'label_attr'=>array('style'=>'display: none;')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\LocalisationuserBundle\Entity\Drapeau'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'users_localisationuserbundle_drapeau';
    }
}

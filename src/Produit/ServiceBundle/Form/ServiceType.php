<?php

namespace Produit\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('attr'=>array('placeholder'=>'Nom de l\'indicateur','class'=>'form-control','style'=>'width: 100%;')))
            ->add('rang','integer',array('attr'=>array('placeholder'=>'Rang dans le classement','class'=>'form-control','style'=>'width: 100%;')))
            ->add('description','textarea',array('attr'=>array('placeholder'=>'Description de l\'indicateur','class'=>'form-control','style'=>'width: 100%;')))
            ->add('imgservice',new ImgserviceType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Produit\ServiceBundle\Entity\Service'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'produit_servicebundle_service';
    }
}

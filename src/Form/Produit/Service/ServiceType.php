<?php

namespace App\Form\Produit\Service;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\Produit\Service\Service;

class ServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,array('attr'=>array('placeholder'=>'Nom de l\'indicateur','class'=>'form-control','style'=>'width: 100%;')))
            ->add('rang',IntegerType::class,array('attr'=>array('placeholder'=>'Rang dans le classement','class'=>'form-control','style'=>'width: 100%;')))
            ->add('description',TextareaType::class,array('attr'=>array('placeholder'=>'Description de l\'indicateur','class'=>'form-control','style'=>'width: 100%;')))
            ->add('imgservice',ImgserviceType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Service::class
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

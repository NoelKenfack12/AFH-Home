<?php

namespace App\Form\Produit\Service;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\Produit\Service\Message;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez le Titre de votre message*')))
            ->add('tel',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre numéro de téléphone'),'required'=>false))
            ->add('nom',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre nom*')))
            ->add('email',EmailType::class,array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre e-mail*'),'required'=>true))
            ->add('contenu',TextareaType::class,array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Votre message ici*','style'=>'height: 230px;'),'required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Message::class
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'produit_servicebundle_message';
    }
}

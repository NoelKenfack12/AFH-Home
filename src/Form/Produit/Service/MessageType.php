<?php

namespace Produit\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez le Titre de votre message*')))
            ->add('tel','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre numéro de téléphone'),'required'=>false))
            ->add('nom','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre nom*')))
            ->add('email','email',array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Rentrez votre e-mail*'),'required'=>true))
            ->add('contenu','textarea',array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Votre message ici*','style'=>'height: 230px;'),'required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Produit\ServiceBundle\Entity\Message'
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

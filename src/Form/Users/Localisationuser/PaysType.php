<?php

namespace Users\LocalisationuserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaysType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Entrer le nom du pays')))
            ->add('siteweb','url', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Le site d\'Afrique Explorer'),'required'=>false))
            ->add('citoyen','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Nom attribué aux citoyens'),'required'=>false))
			->add('citoyenne','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Nom attribué aux citoyennes'),'required'=>false))
            ->add('code','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Code du pays'),'required'=>false))
            ->add('domaine','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Domaine internet'),'required'=>false))
            ->add('drapeau',new DrapeauType())
            ->add('file','file', array('required'=>false))
            ->add('continent','entity', array(
			'class'=>'UsersLocalisationuserBundle:Continent',
			'property'=>'nom',
			'multiple'=>false, 
			'attr'=>array('class'=>'form-control input-lg')))
            ->add('langues','entity', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Sélectionner une lague'),
                      'class' => 'UsersLocalisationuserBundle:Langue',
                      'property' => 'nom',
					  'multiple' => true,
					  'expanded' => false,
					  'required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\LocalisationuserBundle\Entity\Pays'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'users_localisationuserbundle_pays';
    }
}

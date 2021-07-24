<?php

namespace Users\LocalisationuserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContinentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non du continent')))
			->add('citoyen','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non des citoyens de ce continent')))
			->add('citoyenne','text', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non des citoyennes de ce continent')))
			->add('file','file',array('required'=>false,'label_attr'=>array('class'=>'file-imbriq')))
			->add('siteweb','url', array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Site Africexplorer'),'required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\LocalisationuserBundle\Entity\Continent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'users_localisationuserbundle_continent';
    }
}

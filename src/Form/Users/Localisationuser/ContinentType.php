<?php

namespace App\Form\Users\Localisationuser;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use App\Entity\Users\Localisationuser\Continent;

class ContinentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non du continent')))
			->add('citoyen',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non des citoyens de ce continent')))
			->add('citoyenne',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Non des citoyennes de ce continent')))
			->add('file',FileType::class,array('required'=>false,'label_attr'=>array('class'=>'file-imbriq')))
			->add('siteweb',UrlType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Site Africexplorer'),'required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Continent::class
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

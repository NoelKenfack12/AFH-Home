<?php

namespace App\Form\Users\Localisationuser;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Users\Localisationuser\Continent;
use App\Entity\Users\Localisationuser\Langue;
use App\Entity\Users\Localisationuser\Pays;

class PaysType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Entrer le nom du pays')))
            ->add('siteweb',UrlType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Le site d\'Afrique Explorer'),'required'=>false))
            ->add('citoyen',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Nom attribué aux citoyens'),'required'=>false))
			->add('citoyenne',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Nom attribué aux citoyennes'),'required'=>false))
            ->add('code',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Code du pays'),'required'=>false))
            ->add('domaine',TextType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Domaine internet'),'required'=>false))
            ->add('drapeau',DrapeauType::class)
            ->add('file',FileType::class, array('required'=>false))
            ->add('continent',EntityType::class, array(
			'class'=> Continent::class,
			'choice_label'=>'nom',
			'multiple'=>false, 
			'attr'=>array('class'=>'form-control input-lg')))
            ->add('langues',EntityType::class, array('attr'=>array('class'=>'form-control input-lg','placeholder'=>'Sélectionner une lague'),
                      'class' => Langue::class,
                      'choice_label' => 'nom',
					  'multiple' => true,
					  'expanded' => false,
					  'required'=>false)
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
    */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Pays::class
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

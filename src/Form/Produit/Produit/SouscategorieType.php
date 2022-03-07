<?php

namespace App\Form\Produit\Produit;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Produit\Produit\Categorie;
use App\Entity\Produit\Produit\Souscategorie;

class SouscategorieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('attr'=>array('class'=>'form-control', 'placeholder'=>'Nom de la sous-catégorie')))
            ->add('rang',IntegerType::class, array('attr'=>array('class'=>'form-control', 'placeholder'=>'Rang')))
            ->add('categorie',EntityType::class, array(
			'class'=> Categorie::class,
			'choice_label'=>'nom',
			'attr'=>array('class'=>'form-control'),
			'multiple'=>false))
			->add('file',FileType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Souscategorie::class
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'produit_produitbundle_souscategorie';
    }
}

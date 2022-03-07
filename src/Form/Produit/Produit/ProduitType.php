<?php

namespace App\Form\Produit\Produit;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Produit\ProduitBundle\Entity\Categorie;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Produit\Produit\Souscategorie;
use App\Entity\Produit\Produit\Produit;

class ProduitType extends AbstractType
{
    public function __construct()
    {

    }
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Nom du produit')))
            ->add('rang',IntegerType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Rang')))
            ->add('contenu',TextareaType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Description du produit'),'required'=>false))
            ->add('link',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Ajouter un lien')))
            ->add('bloglink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien du blog'),'required'=>false))
            ->add('documentlink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien de la documentation'),'required'=>false))
            ->add('forumlink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien du forum'),'required'=>false))
            ->add('tariflink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien de la tarification'),'required'=>false))
            ->add('avislink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien page avis utilisateurs'),'required'=>false))
            ->add('contactlink',TextType::class,array('attr'=>array('class'=>'form-control', 'placeholder'=>'Liens page de contacts'),'required'=>false))
			->add('imgpro',ImgproduitType::class,array('required'=>false))
			->add('file',FileType::class, array('required'=>false))
            ->add('souscategorie',EntityType::class, array(
			'class'=> Souscategorie::class,
			'choice_label'=>'nom',
			'attr'=>array('class'=>'form-control'),
			'multiple'=>false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Produit::class
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'produit_produitbundle_produit';
    }
}

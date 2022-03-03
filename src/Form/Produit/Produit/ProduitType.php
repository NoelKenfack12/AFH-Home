<?php

namespace Produit\ProduitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Produit\ProduitBundle\Entity\Categorie;

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
            ->add('nom','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Nom du produit')))
            ->add('rang','integer',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Rang')))
            ->add('contenu','textarea',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Description du produit'),'required'=>false))
            ->add('link','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Ajouter un lien')))
            ->add('bloglink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien du blog'),'required'=>false))
            ->add('documentlink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien de la documentation'),'required'=>false))
            ->add('forumlink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien du forum'),'required'=>false))
            ->add('tariflink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien de la tarification'),'required'=>false))
            ->add('avislink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Lien page avis utilisateurs'),'required'=>false))
            ->add('contactlink','text',array('attr'=>array('class'=>'form-control', 'placeholder'=>'Liens page de contacts'),'required'=>false))
			->add('imgpro',new ImgproduitType(),array('required'=>false))
			->add('file','file', array('required'=>false))
            ->add('souscategorie','entity', array(
			'class'=>'ProduitProduitBundle:Souscategorie',
			'property'=>'nom',
			'attr'=>array('class'=>'form-control'),
			'multiple'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Produit\ProduitBundle\Entity\Produit'
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

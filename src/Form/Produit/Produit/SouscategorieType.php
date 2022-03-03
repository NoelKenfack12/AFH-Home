<?php

namespace Produit\ProduitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SouscategorieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('attr'=>array('class'=>'form-control', 'placeholder'=>'Nom de la sous-catégorie')))
            ->add('rang','integer', array('attr'=>array('class'=>'form-control', 'placeholder'=>'Rang')))
            ->add('categorie','entity', array(
			'class'=>'ProduitProduitBundle:Categorie',
			'property'=>'nom',
			'attr'=>array('class'=>'form-control'),
			'multiple'=>false))
			->add('file','file')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Produit\ProduitBundle\Entity\Souscategorie'
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

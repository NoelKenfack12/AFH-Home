<?php

namespace Produit\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bestvalue','text',array('attr'=>array('placeholder'=>'Valeur Exacte','class'=>'form-control','style'=>'width: 100%;')))
            ->add('falsevalue','text',array('attr'=>array('placeholder'=>'Valeur Inexacte','class'=>'form-control','style'=>'width: 100%;')))
			->add('indicateur','entity', array(
			'class'=>'ProduitServiceBundle:Service',
			'property'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control'),
			'query_builder' => function(\Produit\ServiceBundle\Entity\ServiceRepository $d){
                      return $d->getSelectIndicateur();
					  }
					  ))
			->add('annee','entity', array(
			'class'=>'ProduitServiceBundle:Service',
			'property'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control'),
			'query_builder' => function(\Produit\ServiceBundle\Entity\ServiceRepository $d){
                      return $d->getSelectAnnee();
					  }
					  ))
			->add('produit','entity', array(
			'class'=>'ProduitProduitBundle:Produit',
			'property'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Produit\ServiceBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'produit_servicebundle_evenement';
    }
}

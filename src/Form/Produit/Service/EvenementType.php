<?php

namespace App\Form\Produit\Service;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Produit\Service\Service;
use App\Entity\Produit\Produit\Produit;
use App\Entity\Produit\Service\Evenement;

class EvenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bestvalue',TextType::class,array('attr'=>array('placeholder'=>'Valeur Exacte','class'=>'form-control','style'=>'width: 100%;')))
            ->add('falsevalue',TextType::class,array('attr'=>array('placeholder'=>'Valeur Inexacte','class'=>'form-control','style'=>'width: 100%;')))
			->add('indicateur',EntityType::class, array(
			'class'=> Service::class,
			'choice_label'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control'),
			'query_builder' => function(EntityRepository $d){
                      return $d->getSelectIndicateur();
			   }
			))
			->add('annee',EntityType::class, array(
			'class'=> Service::class,
			'choice_label'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control'),
			'query_builder' => function(EntityRepository $d){
                      return $d->getSelectAnnee();
				}
			))
			->add('produit',EntityType::class, array(
			'class'=> Produit::class,
			'choice_label'=>'nom',
			'multiple'=>false, 
			'attr'=>array('style'=>'width: 100%','class'=>'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Evenement::class
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

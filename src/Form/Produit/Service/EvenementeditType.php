<?php

namespace App\Form\Produit\Service;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EvenementeditType extends EvenementType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('bestvalue');
        $builder->remove('falsevalue');
        $builder->remove('indicateur');
        $builder->remove('annee');
        $builder->remove('produit');
        $builder->add('nom',TextType::class,array('attr'=>array('style'=>'width: 100%;', 'class'=>'form-control')));
        $builder->add('description',TextareaType::class,array('attr'=>array('class'=>'form-control materialize-textarea','style'=>'width: 100%;'), 'required'=>false));
        $builder->add('rang',IntegerType::class,array('attr'=>array('style'=>'width: 100%;', 'class'=>'form-control')));
        $builder->add('link',TextType::class,array('attr'=>array('style'=>'width: 100%;', 'class'=>'form-control'), 'required'=>false));
        $builder->add('imgevenement', ImgevenementType::class, array('required'=>false));
        $builder->add('breve',TextType::class,array('attr'=>array('style'=>'width: 100%;', 'class'=>'form-control')));
    }

    /**
     * @return string
    */
    public function getName()
    {
        return 'produit_servicebundle_souscategorie_edit';
    }
}

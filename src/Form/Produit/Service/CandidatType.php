<?php

namespace App\Form\Produit\Service;

use App\Entity\Produit\Service\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Nom du Candidat')))
            ->add('prenom',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Prenom du Candidat'), 'required'=>false))
            ->add('tel',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Téléphone du Candidat'), 'required'=>false))
            ->add('email',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Email du Candidat'), 'required'=>false))
            ->add('ville',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Ville du Candidat'), 'required'=>false))
            ->add('reponse',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Réponse du Candidat')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}

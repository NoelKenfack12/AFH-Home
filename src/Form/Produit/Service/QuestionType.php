<?php

namespace App\Form\Produit\Service;

use App\Entity\Produit\Service\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Rentrez la question')))
            ->add('consigne',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Consigne')))
            ->add('nomGagnant',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Nom du gagnant'), 'required'=>false))
            ->add('telGagnant',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Téléphone du gagnant'), 'required'=>false))
            ->add('emailGagnant',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Email du gagnant'), 'required'=>false))
            ->add('villeGagnant',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Ville du gagnant'), 'required'=>false))
            ->add('nomAuteur',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Nom de l\'auteur')))
            ->add('telAuteur',TextType::class, array('attr'=>array('class'=>'form-control','placeholder'=>'Téléphone de l\'auteur')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}

<?php

namespace App\Form\Users\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Users\Localisationuser\Pays;
use Doctrine\ORM\EntityRepository;
use App\Entity\Users\User\User;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('username',TextType::class)
            ->add('password',PasswordType::class)
            ->add('tel',TextType::class)
			->add('pays',EntityType::class, array('attr'=>array('class'=>'form-control','style'=>'padding: 0.4em 0.9em;'),
                 'class' => Pays::class,
                 'property' => 'nom',
				 'query_builder' => function(EntityRepository $d){
                      return $d->getSelectList();
					  }
				 ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'users_userbundle_user';
    }
}

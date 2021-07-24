<?php

namespace Users\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('username','text')
            ->add('password','password')
            ->add('tel','text')
			->add('pays','entity', array('attr'=>array('class'=>'form-control','style'=>'padding: 0.4em 0.9em;'),
                 'class' => 'UsersLocalisationuserBundle:Pays',
                 'property' => 'nom',
				 'query_builder' => function(\Users\LocalisationuserBundle\Entity\PaysRepository $d){
                      return $d->getSelectList();
					  }
				 ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\UserBundle\Entity\User'
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

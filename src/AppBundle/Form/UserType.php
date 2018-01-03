<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UserType extends AbstractType
/***
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    {
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder
        ->add('user')

      
        ->add('email',TextType::class,array('attr' => array('class'=>'form-control', 'style' =>'margin-bottom:15px')))
        ->add('username',TextType::class,array('attr' => array('class'=>'form-control', 'style' =>'margin-bottom:15px')))
        ->add('plainPassword',PasswordType::class,array('attr' => array('class'=>'form-control', 'style' =>'margin-bottom:15px')))
     


;


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));



    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}

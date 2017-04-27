<?php

namespace Doshibu\UserBundleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LoginType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('_username',  TextType::class,  array('attr' => array('placeholder' => 'NOM DE COMPTE'), 'label' => false, 'required' => true))
                ->add('_password',   PasswordType::class,  array('attr' => array('placeholder' => 'MOT DE PASSE'), 'label' => false, 'required' => true))
                ->add('Login', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'fos_user_login';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'doshibu_user_login';
    }
}

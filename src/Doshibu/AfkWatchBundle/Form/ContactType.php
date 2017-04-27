<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName',  TextType::class,  array('attr' => array('placeholder' => 'form.firstName'), 'label' => 'form.firstName', 'required' => true))
                ->add('lastName',   TextType::class,  array('attr' => array('placeholder' => 'form.lastName'), 'label' => 'form.lastName', 'required' => true))
                ->add('email',      TextType::class,  array('attr' => array('placeholder' => 'form.email'), 'label' => 'form.email', 'required' => true))
                ->add('subject',    TextType::class,  array('attr' => array('placeholder' => 'form.contact.subject'), 'label' => 'form.contact.subject', 'required' => true))
                ->add('message',    TextareaType::class,  array('attr' => array('placeholder' => 'form.contact.message'), 'label' => 'form.contact.message', 'required' => true))
                ->add('send', SubmitType::class, array('label' => 'form.contact.submit'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doshibu\AfkWatchBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doshibu_afkwatchbundle_contact';
    }
}

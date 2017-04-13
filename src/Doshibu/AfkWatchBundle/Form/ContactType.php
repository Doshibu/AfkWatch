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
        $builder->add('firstName',  TextType::class,  array('attr' => array('placeholder' => 'PRENOM'), 'label' => false, 'required' => true))
                ->add('lastName',   TextType::class,  array('attr' => array('placeholder' => 'NOM'), 'label' => false, 'required' => true))
                ->add('email',      TextType::class,  array('attr' => array('placeholder' => 'EMAIL'), 'label' => false, 'required' => true))
                ->add('subject',    TextType::class,  array('attr' => array('placeholder' => 'SUJET'), 'label' => false, 'required' => true))
                ->add('message',    TextareaType::class,  array('attr' => array('placeholder' => 'VOTRE MESSAGE'), 'label' => false, 'required' => true))
                ->add('Envoyer votre message', SubmitType::class);;
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

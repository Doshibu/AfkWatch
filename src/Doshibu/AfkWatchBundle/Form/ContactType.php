<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName',  'text',  array('attr' => array('placeholder' => 'PRENOM'), 'label' => false, 'required' => true))
                ->add('lastName',   'text',  array('attr' => array('placeholder' => 'NOM'), 'label' => false, 'required' => true))
                ->add('email',      'text',  array('attr' => array('placeholder' => 'EMAIL'), 'label' => false, 'required' => true))
                ->add('subject',    'text',  array('attr' => array('placeholder' => 'SUJET'), 'label' => false, 'required' => true))
                ->add('message',    'textarea',  array('attr' => array('placeholder' => 'VOTRE MESSAGE'), 'label' => false, 'required' => true));
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

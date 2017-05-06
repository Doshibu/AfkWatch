<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class ImageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('url', TextType::class,
                array('attr' => array('placeholder' => 'form.image.url'), 'label' => 'form.image.url', 'required' => true))
                ->add('alt', TextType::class,
                array('attr' => array('placeholder' => 'form.image.alt'), 'label' => 'form.image.alt', 'required' => true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doshibu\AfkWatchBundle\Entity\Image'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doshibu_afkwatchbundle_image';
    }


}

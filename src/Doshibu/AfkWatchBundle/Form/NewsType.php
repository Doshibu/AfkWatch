<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',              TextType::class,
                        array('attr' => array('placeholder' => 'form.movie.name'), 'label' => 'form.movie.name', 'required' => true))
                ->add('tinyDescription',    TextareaType::class,    
                        array('attr' => array('placeholder' => 'form.movie.tinyDescription'), 'label' => 'form.movie.tinyDescription', 'required' => true))
                ->add('description',        TextareaType::class,    
                        array('attr' => array('placeholder' => 'form.movie.description'), 'label' => 'form.movie.description', 'required' => true))
                ->add('save', SubmitType::class, array('label' => 'form.movie.submit'))
                ->add('movie',       'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class'         => 'DoshibuAfkWatchBundle:Movie',
                    'choice_label'  => 'name',
                    'multiple'      => false,
                    'attr' => array('placeholder' => 'entity.movie'), 
                    'label' => 'entity.movie', 'required' => false))
                ->add('serie',       'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class'         => 'DoshibuAfkWatchBundle:Serie',
                    'choice_label'  => 'name',
                    'multiple'      => false,
                    'attr' => array('placeholder' => 'entity.serie'), 
                    'label' => 'entity.serie', 'required' => false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doshibu\AfkWatchBundle\Entity\News'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doshibu_afkwatchbundle_news';
    }
}

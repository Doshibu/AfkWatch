<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$builder->add('name')->add('tinyDescription')->add('description')->add('filmMaker')->add('rating')->add('dateRelease')->add('urlTrailer')->add('url')->add('nbViews')->add('slug')->add('addedAt')->add('updatedAt')->add('imageLarge')->add('imageSmall')->add('genders')->add('countries');*/
        $builder->remove('addedAt');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doshibu\AfkWatchBundle\Entity\Movie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doshibu_afkwatchbundle_movie_edit';
    }


}

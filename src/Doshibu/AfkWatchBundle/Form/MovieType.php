<?php

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doshibu\AfkWatchBundle\Form\ImageType;

class MovieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',               TextType::class,
                        array('attr' => array('placeholder' => 'form.movie.name'), 'label' => 'form.movie.name', 'required' => true))
                ->add('tinyDescription',    TextareaType::class,    
                        array('attr' => array('placeholder' => 'form.movie.tinyDescription'), 'label' => 'form.movie.tinyDescription', 'required' => true))
                ->add('description',        TextareaType::class,    
                        array('attr' => array('placeholder' => 'form.movie.description'), 'label' => 'form.movie.description', 'required' => true))
                ->add('filmMaker',          TextType::class,        
                        array('attr' => array('placeholder' => 'form.movie.filmMaker'), 'label' => 'form.movie.filmMaker', 'required' => true))
                ->add('rating',             TextType::class,        
                        array('attr' => array('placeholder' => 'form.movie.rating'), 'label' => 'form.movie.rating', 'required' => true))
                ->add('dateRelease',        DateType::class,        
                        array('attr' => array('placeholder' => 'form.movie.dateRelease'), 'label' => 'form.movie.dateRelease', 'required' => true, 'widget' => 'single_text', 'format' => 'dd-MM-yyyy'))
                ->add('urlTrailer',         TextType::class,        
                        array('attr' => array('placeholder' => 'form.movie.urlTrailer'), 'label' => 'form.movie.urlTrailer', 'required' => true))
                ->add('url',                TextType::class,        
                        array('attr' => array('placeholder' => 'form.movie.url'), 'label' => 'form.movie.url', 'required' => true))
                ->add('imageLarge',         ImageType::class,        
                        array('attr' => array('placeholder' => 'form.movie.imageLarge'), 'label' => 'form.movie.imageLarge', 'required' => true))
                ->add('imageSmall',         ImageType::class,        
                        array('attr' => array('placeholder' => 'form.movie.imageSmall'), 'label' => 'form.movie.imageSmall', 'required' => true))
                ->add('genders',       'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class'         => 'DoshibuAfkWatchBundle:Genre',
                    'choice_label' => 'name',
                    'multiple'      => true,
                    'attr' => array('placeholder' => 'form.movie.genders'), 
                    'label' => 'form.movie.genders', 'required' => true))
                ->add('countries',      'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class'         => 'DoshibuAfkWatchBundle:Pays',
                    'choice_label' => 'name',
                    'multiple'      => true,
                    'attr' => array('placeholder' => 'form.movie.countries'), 
                    'label' => 'form.movie.countries', 'required' => true))
                ->add('save', SubmitType::class, array('label' => 'form.movie.submit'));

        /*$builder->addEventListener(FormEvents::POST_SET_DATA, function(FormEvent $event) { 
            // On récupère notre objet Advert sous-jacent
            $movie = $event->getData();
        
            // Cette condition est importante, on en reparle plus loin
            if ($movie === null) 
            {
                return; // On sort de la fonction sans rien faire lorsque $movie vaut null
            }

            if ($movie->getId() === null) 
            {
                $movie->setAddedAt()
            } 
        }*/
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
        return 'doshibu_afkwatchbundle_movie';
    }


}

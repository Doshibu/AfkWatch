<?php 

namespace Doshibu\AfkWatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class movie_preupdate extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('movies',       'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class'         => 'DoshibuAfkWatchBundle:Movie',
                    'choice_label'  => 'name',
                    'multiple'      => false,
                    'attr' => array('placeholder' => 'form.movies'), 
                    'label' => 'form.movies', 'required' => true));
    }
}
<?php

namespace uni\Bundle\SeriesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class seriesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSerie')
            ->add('foto')
            ->add('categoria')
            ->add('sipnosis')
            ->add('fechaComienzo')
            ->add('allpremios')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\Bundle\SeriesBundle\Entity\series'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_seriesbundle_series';
    }
}

<?php

namespace uni\Bundle\SeriesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class premiosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrePremios')
            ->add('descPremios')
            ->add('fotoPremios')
            ->add('allseries')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\Bundle\SeriesBundle\Entity\premios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_seriesbundle_premios';
    }
}

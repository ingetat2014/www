<?php

namespace Komay\bundles\Idea1Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DossierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('created')
            ->add('updated')
            ->add('enabled')
            ->add('size')
            ->add('icone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Komay\bundles\Idea1Bundle\Entity\Dossier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'komay_bundles_idea1bundle_dossier';
    }
}

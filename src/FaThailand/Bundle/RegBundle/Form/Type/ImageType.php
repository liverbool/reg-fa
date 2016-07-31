<?php

namespace FaThailand\Bundle\RegBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file', [])
            ->addModelTransformer()
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fa_image';
    }
}

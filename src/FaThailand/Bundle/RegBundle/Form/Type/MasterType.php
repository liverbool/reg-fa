<?php

namespace FaThailand\Bundle\RegBundle\Form\Type;

use FaThailand\Bundle\RegBundle\Model\CategoryInterface;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MasterType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('organize', TextType::class, [
                'required' => true,
                'label' => 'หน่วยงาน',
            ])
            ->add('address', TextareaType::class, [
                'required' => true,
                'label' => 'ที่อยู่',
            ])
            ->add('tel', TextType::class, [
                'required' => true,
                'label' => 'เบอร์ติดต่อ',
            ])
            ->add('otherCategory', TextType::class, [
                'required' => false,
                'label' => 'ระบุตำแหน่ง',
            ])
            ->add('category', CategoryChoiceType::class, [
                'expanded' => false,
                'label' => 'ประเภทของสื่อ',
                'choice_attr' => function($choice) {
                    /** @var CategoryInterface $choice */
                    if ($choice) {
                        return ['data-is-other' => $choice->isOther()];
                    }

                    return null;
                }
            ])
            ->add('personals', 'collection', [
                'entry_type' => PersonalType::class,
                'label' => 'รายชื่อผู้สื่อข่าว',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fa_reg_master';
    }
}

<?php

namespace FaThailand\Bundle\RegBundle\Form\Type;

use FaThailand\Bundle\RegBundle\Model\PositionInterface;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class PersonalType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'ชื่อ - นามสกุล',
            ])
            ->add('tel', TextType::class, [
                'required' => true,
                'label' => 'เบอร์ติดต่อ',
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'อีเมล',
            ])
            ->add('otherPosition', TextType::class, [
                'required' => false,
                'label' => 'ระบุตำแหน่ง',
            ])
            ->add('position', PositionChoiceType::class, [
                'expanded' => false,
                'label' => 'ตำแหน่ง',
                'choice_attr' => function($choice) {
                    /** @var PositionInterface $choice */
                    if ($choice) {
                        return ['data-is-other' => $choice->isOther()];
                    }

                    return null;
                }
            ])
            ->add('picture1', FileType::class, [
                'required' => true,
                'label' => 'รูปถ่าย',
            ])
            ->add('picture2', FileType::class, [
                'required' => true,
                'label' => 'หนังสือรับรองจากหน่วยงานต้นสังกัด เพื่อยืนยันการส่งตัวเข้าทำข่าว',
            ])
            ->add('picture3', FileType::class, [
                'required' => true,
                'label' => 'บัตรประจำตัวพนักงาน (จากหน่วยงานต้นสังกัด หรือ กรมประชาสัมพันธ์)',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fa_reg_personal';
    }
}

<?php

namespace FaThailand\Bundle\RegBundle\EventListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\Common\Persistence\Event\PreUpdateEventArgs;
use FaThailand\Bundle\RegBundle\Model\PersonalInterface;
use FaThailand\Bundle\RegBundle\Uploader\ImageUploaderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PersonalImageUploadListener
{
    /**
     * @var ImageUploaderInterface
     */
    protected $uploader;

    /**
     * @param ImageUploaderInterface $uploader
     */
    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->upload($args->getObject());
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $this->upload($args->getObject());
    }

    /**
     * @param mixed $object
     */
    public function upload($object)
    {
        if (!$object instanceof PersonalInterface) {
            return;
        }

        if ($object->getPicture1() instanceof UploadedFile) {
            $path = $this->uploader->upload($object->getPicture1());
            $object->setPicture1($path);
        }

        if ($object->getPicture2() instanceof UploadedFile) {
            $path = $this->uploader->upload($object->getPicture2());
            $object->setPicture2($path);
        }

        if ($object->getPicture3() instanceof UploadedFile) {
            $path = $this->uploader->upload($object->getPicture3());
            $object->setPicture3($path);
        }
    }
}

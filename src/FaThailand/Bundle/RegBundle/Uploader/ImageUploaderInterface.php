<?php

namespace FaThailand\Bundle\RegBundle\Uploader;

use Symfony\Component\HttpFoundation\File\UploadedFile;

interface ImageUploaderInterface
{
    /**
     * @param UploadedFile $image
     *
     * @return string path
     */
    public function upload(UploadedFile $image);

    /**
     * @param string $path
     */
    public function remove($path);
}

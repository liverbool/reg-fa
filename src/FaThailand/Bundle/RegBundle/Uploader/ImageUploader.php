<?php

namespace FaThailand\Bundle\RegBundle\Uploader;

use Gaufrette\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader implements ImageUploaderInterface
{
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * {@inheritdoc}
     */
    public function upload(UploadedFile $image)
    {
        do {
            $hash = md5(uniqid(mt_rand(), true));
            $path = $this->expandPath($hash.'.'.$image->guessExtension());
        } while ($this->filesystem->has($path));

        $this->filesystem->write($path, file_get_contents($image->getPathname()));

        return $path;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($path)
    {
        return $this->filesystem->delete($path);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function expandPath($path)
    {
        return sprintf(
            '%s/%s/%s',
            substr($path, 0, 2),
            substr($path, 2, 2),
            substr($path, 4)
        );
    }
}

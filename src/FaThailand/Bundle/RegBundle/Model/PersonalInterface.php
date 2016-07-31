<?php

namespace FaThailand\Bundle\RegBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface PersonalInterface extends ResourceInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set tel
     *
     * @param string $tel
     */
    public function setTel($tel);

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel();

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set position
     *
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position = null);

    /**
     * Get position
     *
     * @return PositionInterface
     */
    public function getPosition();

    /**
     * Set position
     *
     * @param string $otherPosition
     */
    public function setOtherPosition($otherPosition);

    /**
     * Get position
     *
     * @return string
     */
    public function getOtherPosition();

    /**
     * Set picture1
     *
     * @param string $picture1
     */
    public function setPicture1($picture1);

    /**
     * Get picture1
     *
     * @return string|UploadedFile
     */
    public function getPicture1();

    /**
     * Set picture2
     *
     * @param string $picture2
     */
    public function setPicture2($picture2);

    /**
     * Get picture2
     *
     * @return string|UploadedFile
     */
    public function getPicture2();

    /**
     * Set picture3
     *
     * @param string $picture3
     */
    public function setPicture3($picture3);

    /**
     * Get picture3
     *
     * @return string|UploadedFile
     */
    public function getPicture3();

    /**
     * @return MasterInterface
     */
    public function getMaster();

    /**
     * @param MasterInterface $master
     */
    public function setMaster(MasterInterface $master =  null);
}

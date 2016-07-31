<?php

namespace FaThailand\Bundle\RegBundle\Model;

class Personal implements PersonalInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $otherPosition;

    /**
     * @var string
     */
    private $picture1;

    /**
     * @var string
     */
    private $picture2;

    /**
     * @var string
     */
    private $picture3;

    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * {@inheritdoc}
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition(PositionInterface $position = null)
    {
        $this->position = $position;
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function setOtherPosition($otherPosition)
    {
        $this->otherPosition = $otherPosition;
    }

    /**
     * {@inheritdoc}
     */
    public function getOtherPosition()
    {
        return $this->otherPosition;
    }

    /**
     * {@inheritdoc}
     */
    public function setPicture1($picture1)
    {
        $this->picture1 = $picture1;
    }

    /**
     * {@inheritdoc}
     */
    public function getPicture1()
    {
        return $this->picture1;
    }

    /**
     * {@inheritdoc}
     */
    public function setPicture2($picture2)
    {
        $this->picture2 = $picture2;
    }

    /**
     * {@inheritdoc}
     */
    public function getPicture2()
    {
        return $this->picture2;
    }

    /**
     * {@inheritdoc}
     */
    public function setPicture3($picture3)
    {
        $this->picture3 = $picture3;
    }

    /**
     * {@inheritdoc}
     */
    public function getPicture3()
    {
        return $this->picture3;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaster(MasterInterface $master = null)
    {
        $this->master = $master;
    }
}

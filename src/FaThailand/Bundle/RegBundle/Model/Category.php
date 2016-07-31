<?php

namespace FaThailand\Bundle\RegBundle\Model;

class Category implements CategoryInterface
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
     * @var boolean
     */
    private $other = false;

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
    public function isOther()
    {
        return $this->other;
    }

    /**
     * {@inheritdoc}
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->name;
    }
}

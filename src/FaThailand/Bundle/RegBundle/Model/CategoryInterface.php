<?php

namespace FaThailand\Bundle\RegBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;

interface CategoryInterface extends ResourceInterface
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
     *
     * @return Category
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * @return boolean
     */
    public function isOther();

    /**
     * @param boolean $other
     */
    public function setOther($other);
}

<?php

namespace FaThailand\Bundle\RegBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;

interface PositionInterface extends ResourceInterface
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
     * @return boolean
     */
    public function isOther();

    /**
     * @param boolean $other
     */
    public function setOther($other);
}

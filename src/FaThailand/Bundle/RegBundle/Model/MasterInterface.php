<?php

namespace FaThailand\Bundle\RegBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface MasterInterface extends ResourceInterface, TimestampableInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * @return int
     */
    public function getCode();

    /**
     * @param int $code
     */
    public function setCode($code);

    /**
     * Set organize
     *
     * @param string $organize
     */
    public function setOrganize($organize);

    /**
     * Get organize
     *
     * @return string
     */
    public function getOrganize();

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address);

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress();

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
     * Set category
     *
     * @param CategoryInterface $category
     */
    public function setCategory(CategoryInterface $category = null);

    /**
     * Get category
     *
     * @return CategoryInterface
     */
    public function getCategory();

    /**
     * Set other category
     *
     * @param string $otherCategory
     */
    public function setOtherCategory($otherCategory);

    /**
     * Get other category
     *
     * @return string
     */
    public function getOtherCategory();

    /**
     * @return mixed
     */
    public function getPersonals();

    /**
     * @param mixed $personals
     */
    public function setPersonals($personals);

    /**
     * @param PersonalInterface $personal
     *
     * @return bool
     */
    public function hasPersonal(PersonalInterface $personal);

    /**
     * @param PersonalInterface $personal
     */
    public function addPersonal(PersonalInterface $personal);

    /**
     * @param PersonalInterface $personal
     */
    public function removePersonal(PersonalInterface $personal);
}

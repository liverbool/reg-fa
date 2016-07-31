<?php

namespace FaThailand\Bundle\RegBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\TimestampableTrait;

class Master implements MasterInterface
{
    use TimestampableTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $organize;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var CategoryInterface
     */
    private $category;

    /**
     * @var string
     */
    private $otherCategory;

    /**
     * @var Collection|PersonalInterface[]
     */
    private $personals;

    public function __construct()
    {
        $this->personals = new ArrayCollection();
        $this->code = uniqid(time());
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrganize($organize)
    {
        $this->organize = $organize;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrganize()
    {
        return $this->organize;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress()
    {
        return $this->address;
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
    public function setCategory(CategoryInterface $category = null)
    {
        $this->category = $category;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setOtherCategory($otherCategory)
    {
        $this->otherCategory = $otherCategory;
    }

    /**
     * {@inheritdoc}
     */
    public function getOtherCategory()
    {
        return $this->otherCategory;
    }

    /**
     * {@inheritdoc}
     */
    public function getPersonals()
    {
        return $this->personals;
    }

    /**
     * {@inheritdoc}
     */
    public function setPersonals($personals)
    {
        $this->personals = $personals;
    }

    /**
     * {@inheritdoc}
     */
    public function hasPersonal(PersonalInterface $personal)
    {
        return $this->personals->contains($personal);
    }

    /**
     * {@inheritdoc}
     */
    public function addPersonal(PersonalInterface $personal)
    {
        if (!$this->hasPersonal($personal)) {
            $personal->setMaster($this);
            $this->personals->add($personal);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removePersonal(PersonalInterface $personal)
    {
        if ($this->hasPersonal($personal)) {
            $personal->setMaster(null);
            $this->personals->removeElement($personal);
        }
    }
}

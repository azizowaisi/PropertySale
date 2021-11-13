<?php

namespace App\Entity;

use App\Helper\AppConstant;

class Property
{
    private $id;
    private $propertyKey;
    private $createdAt;
    private $updatedAt;

    private $propertyId;
    private $type;
    private $sizeSqm;
    private $startPrice;
    private $city;
    private $street;
    private $floor;

    public function __construct()
    {
        $this->propertyKey = uniqid();
        $this->type = AppConstant::PROPERTY_TYPE_APARTMENT;
        $this->createdAt = new \DateTime("now");
        $this->updatedAt = new \DateTime("now");
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPropertyKey(): string
    {
        return $this->propertyKey;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * @param mixed $propertyId
     */
    public function setPropertyId($propertyId): void
    {
        $this->propertyId = $propertyId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSizeSqm()
    {
        return $this->sizeSqm;
    }

    /**
     * @param mixed $sizeSqm
     */
    public function setSizeSqm($sizeSqm): void
    {
        $this->sizeSqm = $sizeSqm;
    }

    /**
     * @return mixed
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * @param mixed $startPrice
     */
    public function setStartPrice($startPrice): void
    {
        $this->startPrice = $startPrice;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor): void
    {
        $this->floor = $floor;
    }
}
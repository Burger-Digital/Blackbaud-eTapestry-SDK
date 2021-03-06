<?php

namespace BurgerDigital\eTapestry\Type;

class Persona
{

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $county;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedValue
     */
    private $definedValues;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $longSalutation;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \BurgerDigital\eTapestry\Type\Phone
     */
    private $phones;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var bool
     */
    private $primary;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $shortSalutation;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $stickyNoteType;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $webAddress;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Persona
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Persona
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Persona
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param string $county
     * @return Persona
     */
    public function withCounty($county)
    {
        $new = clone $this;
        $new->county = $county;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTimeInterface $createdDate
     * @return Persona
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedValue
     */
    public function getDefinedValues()
    {
        return $this->definedValues;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedValue $definedValues
     * @return Persona
     */
    public function withDefinedValues($definedValues)
    {
        $new = clone $this;
        $new->definedValues = $definedValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Persona
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDate
     * @return Persona
     */
    public function withLastModifiedDate($lastModifiedDate)
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongSalutation()
    {
        return $this->longSalutation;
    }

    /**
     * @param string $longSalutation
     * @return Persona
     */
    public function withLongSalutation($longSalutation)
    {
        $new = clone $this;
        $new->longSalutation = $longSalutation;

        return $new;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return Persona
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Phone
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Phone $phones
     * @return Persona
     */
    public function withPhones($phones)
    {
        $new = clone $this;
        $new->phones = $phones;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Persona
     */
    public function withPostalCode($postalCode)
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param bool $primary
     * @return Persona
     */
    public function withPrimary($primary)
    {
        $new = clone $this;
        $new->primary = $primary;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Persona
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return string
     */
    public function getShortSalutation()
    {
        return $this->shortSalutation;
    }

    /**
     * @param string $shortSalutation
     * @return Persona
     */
    public function withShortSalutation($shortSalutation)
    {
        $new = clone $this;
        $new->shortSalutation = $shortSalutation;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Persona
     */
    public function withState($state)
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string
     */
    public function getStickyNoteType()
    {
        return $this->stickyNoteType;
    }

    /**
     * @param string $stickyNoteType
     * @return Persona
     */
    public function withStickyNoteType($stickyNoteType)
    {
        $new = clone $this;
        $new->stickyNoteType = $stickyNoteType;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Persona
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebAddress()
    {
        return $this->webAddress;
    }

    /**
     * @param string $webAddress
     * @return Persona
     */
    public function withWebAddress($webAddress)
    {
        $new = clone $this;
        $new->webAddress = $webAddress;

        return $new;
    }


}


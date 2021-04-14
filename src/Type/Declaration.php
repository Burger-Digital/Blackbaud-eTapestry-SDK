<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class Declaration implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $apartmentNumber;

    /**
     * @var \BurgerDigital\Type\Attachment
     */
    private $attachments;

    /**
     * @var string
     */
    private $buildingNumber;

    /**
     * @var string
     */
    private $city;

    /**
     * @var \DateTimeInterface
     */
    private $confirmationDate;

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
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $suburb;

    /**
     * @var int
     */
    private $type;

    /**
     * @var bool
     */
    private $verbal;

    /**
     * Constructor
     *
     * @var string $accountName
     * @var string $accountRef
     * @var string $address
     * @var string $apartmentNumber
     * @var \BurgerDigital\eTapestry\Type\Attachment $attachments
     * @var string $buildingNumber
     * @var string $city
     * @var \DateTimeInterface $confirmationDate
     * @var string $country
     * @var string $county
     * @var \DateTimeInterface $createdDate
     * @var \DateTimeInterface $date
     * @var \DateTimeInterface $endDate
     * @var \DateTimeInterface $lastModifiedDate
     * @var string $name
     * @var string $note
     * @var string $postalCode
     * @var string $ref
     * @var \DateTimeInterface $startDate
     * @var string $state
     * @var string $streetName
     * @var string $suburb
     * @var int $type
     * @var bool $verbal
     */
    public function __construct($accountName, $accountRef, $address, $apartmentNumber, $attachments, $buildingNumber, $city, $confirmationDate, $country, $county, $createdDate, $date, $endDate, $lastModifiedDate, $name, $note, $postalCode, $ref, $startDate, $state, $streetName, $suburb, $type, $verbal)
    {
        $this->accountName = $accountName;
        $this->accountRef = $accountRef;
        $this->address = $address;
        $this->apartmentNumber = $apartmentNumber;
        $this->attachments = $attachments;
        $this->buildingNumber = $buildingNumber;
        $this->city = $city;
        $this->confirmationDate = $confirmationDate;
        $this->country = $country;
        $this->county = $county;
        $this->createdDate = $createdDate;
        $this->date = $date;
        $this->endDate = $endDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->name = $name;
        $this->note = $note;
        $this->postalCode = $postalCode;
        $this->ref = $ref;
        $this->startDate = $startDate;
        $this->state = $state;
        $this->streetName = $streetName;
        $this->suburb = $suburb;
        $this->type = $type;
        $this->verbal = $verbal;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return Declaration
     */
    public function withAccountName($accountName)
    {
        $new = clone $this;
        $new->accountName = $accountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return Declaration
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Declaration
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
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * @param string $apartmentNumber
     * @return Declaration
     */
    public function withApartmentNumber($apartmentNumber)
    {
        $new = clone $this;
        $new->apartmentNumber = $apartmentNumber;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Attachment
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Attachment $attachments
     * @return Declaration
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     * @return Declaration
     */
    public function withBuildingNumber($buildingNumber)
    {
        $new = clone $this;
        $new->buildingNumber = $buildingNumber;

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
     * @return Declaration
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getConfirmationDate()
    {
        return $this->confirmationDate;
    }

    /**
     * @param \DateTimeInterface $confirmationDate
     * @return Declaration
     */
    public function withConfirmationDate($confirmationDate)
    {
        $new = clone $this;
        $new->confirmationDate = $confirmationDate;

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
     * @return Declaration
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
     * @return Declaration
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
     * @return Declaration
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return Declaration
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return Declaration
     */
    public function withEndDate($endDate)
    {
        $new = clone $this;
        $new->endDate = $endDate;

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
     * @return Declaration
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Declaration
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

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
     * @return Declaration
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

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
     * @return Declaration
     */
    public function withPostalCode($postalCode)
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

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
     * @return Declaration
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return Declaration
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

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
     * @return Declaration
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
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Declaration
     */
    public function withStreetName($streetName)
    {
        $new = clone $this;
        $new->streetName = $streetName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * @param string $suburb
     * @return Declaration
     */
    public function withSuburb($suburb)
    {
        $new = clone $this;
        $new->suburb = $suburb;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Declaration
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVerbal()
    {
        return $this->verbal;
    }

    /**
     * @param bool $verbal
     * @return Declaration
     */
    public function withVerbal($verbal)
    {
        $new = clone $this;
        $new->verbal = $verbal;

        return $new;
    }


}


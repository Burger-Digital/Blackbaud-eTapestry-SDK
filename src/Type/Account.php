<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Account implements ResultInterface
{

    /**
     * @var \DateTimeInterface
     */
    private $accountCreatedDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedValue
     */
    private $accountDefinedValues;

    /**
     * @var \DateTimeInterface
     */
    private $accountLastModifiedDate;

    /**
     * @var int
     */
    private $accountRoleType;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $apartmentNumber;

    /**
     * @var string
     */
    private $buildingNumber;

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
     * @var string
     */
    private $donorRecognitionName;

    /**
     * @var int
     */
    private $donorRecognitionType;

    /**
     * @var string
     */
    private $donorRoleRef;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $envelopeSalutation;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $initials;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $longSalutation;

    /**
     * @var string
     */
    private $middleName;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nameFormat;

    /**
     * @var string
     */
    private $note;

    /**
     * @var bool
     */
    private $oldFormattedAddress;

    /**
     * @var \DateTimeInterface
     */
    private $optOutDate;

    /**
     * @var bool
     */
    private $optedOut;

    /**
     * @var \DateTimeInterface
     */
    private $personaCreatedDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedValue
     */
    private $personaDefinedValues;

    /**
     * @var \DateTimeInterface
     */
    private $personaLastModifiedDate;

    /**
     * @var string
     */
    private $personaType;

    /**
     * @var string
     */
    private $personaTypes;

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
    private $primaryPersona;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $shortSalutation;

    /**
     * @var \BurgerDigital\eTapestry\Type\SocialMediaProfile
     */
    private $socialMediaProfiles;

    /**
     * @var string
     */
    private $sortName;

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
    private $streetName;

    /**
     * @var string
     */
    private $suburb;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @var string
     */
    private $teamRoleRef;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $tributeRoleRef;

    /**
     * @var string
     */
    private $userRoleRef;

    /**
     * @var string
     */
    private $webAddress;

    /**
     * @return \DateTimeInterface
     */
    public function getAccountCreatedDate()
    {
        return $this->accountCreatedDate;
    }

    /**
     * @param \DateTimeInterface $accountCreatedDate
     * @return Account
     */
    public function withAccountCreatedDate($accountCreatedDate)
    {
        $new = clone $this;
        $new->accountCreatedDate = $accountCreatedDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedValue
     */
    public function getAccountDefinedValues()
    {
        return $this->accountDefinedValues;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedValue $accountDefinedValues
     * @return Account
     */
    public function withAccountDefinedValues($accountDefinedValues)
    {
        $new = clone $this;
        $new->accountDefinedValues = $accountDefinedValues;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccountLastModifiedDate()
    {
        return $this->accountLastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $accountLastModifiedDate
     * @return Account
     */
    public function withAccountLastModifiedDate($accountLastModifiedDate)
    {
        $new = clone $this;
        $new->accountLastModifiedDate = $accountLastModifiedDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccountRoleType()
    {
        return $this->accountRoleType;
    }

    /**
     * @param int $accountRoleType
     * @return Account
     */
    public function withAccountRoleType($accountRoleType)
    {
        $new = clone $this;
        $new->accountRoleType = $accountRoleType;

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
     * @return Account
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
     * @return Account
     */
    public function withApartmentNumber($apartmentNumber)
    {
        $new = clone $this;
        $new->apartmentNumber = $apartmentNumber;

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
     * @return Account
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
     * @return Account
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
     * @return Account
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
     * @return Account
     */
    public function withCounty($county)
    {
        $new = clone $this;
        $new->county = $county;

        return $new;
    }

    /**
     * @return string
     */
    public function getDonorRecognitionName()
    {
        return $this->donorRecognitionName;
    }

    /**
     * @param string $donorRecognitionName
     * @return Account
     */
    public function withDonorRecognitionName($donorRecognitionName)
    {
        $new = clone $this;
        $new->donorRecognitionName = $donorRecognitionName;

        return $new;
    }

    /**
     * @return int
     */
    public function getDonorRecognitionType()
    {
        return $this->donorRecognitionType;
    }

    /**
     * @param int $donorRecognitionType
     * @return Account
     */
    public function withDonorRecognitionType($donorRecognitionType)
    {
        $new = clone $this;
        $new->donorRecognitionType = $donorRecognitionType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDonorRoleRef()
    {
        return $this->donorRoleRef;
    }

    /**
     * @param string $donorRoleRef
     * @return Account
     */
    public function withDonorRoleRef($donorRoleRef)
    {
        $new = clone $this;
        $new->donorRoleRef = $donorRoleRef;

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
     * @return Account
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnvelopeSalutation()
    {
        return $this->envelopeSalutation;
    }

    /**
     * @param string $envelopeSalutation
     * @return Account
     */
    public function withEnvelopeSalutation($envelopeSalutation)
    {
        $new = clone $this;
        $new->envelopeSalutation = $envelopeSalutation;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Account
     */
    public function withFirstName($firstName)
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Account
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @param string $initials
     * @return Account
     */
    public function withInitials($initials)
    {
        $new = clone $this;
        $new->initials = $initials;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Account
     */
    public function withLastName($lastName)
    {
        $new = clone $this;
        $new->lastName = $lastName;

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
     * @return Account
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
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return Account
     */
    public function withMiddleName($middleName)
    {
        $new = clone $this;
        $new->middleName = $middleName;

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
     * @return Account
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return int
     */
    public function getNameFormat()
    {
        return $this->nameFormat;
    }

    /**
     * @param int $nameFormat
     * @return Account
     */
    public function withNameFormat($nameFormat)
    {
        $new = clone $this;
        $new->nameFormat = $nameFormat;

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
     * @return Account
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOldFormattedAddress()
    {
        return $this->oldFormattedAddress;
    }

    /**
     * @param bool $oldFormattedAddress
     * @return Account
     */
    public function withOldFormattedAddress($oldFormattedAddress)
    {
        $new = clone $this;
        $new->oldFormattedAddress = $oldFormattedAddress;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOptOutDate()
    {
        return $this->optOutDate;
    }

    /**
     * @param \DateTimeInterface $optOutDate
     * @return Account
     */
    public function withOptOutDate($optOutDate)
    {
        $new = clone $this;
        $new->optOutDate = $optOutDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptedOut()
    {
        return $this->optedOut;
    }

    /**
     * @param bool $optedOut
     * @return Account
     */
    public function withOptedOut($optedOut)
    {
        $new = clone $this;
        $new->optedOut = $optedOut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPersonaCreatedDate()
    {
        return $this->personaCreatedDate;
    }

    /**
     * @param \DateTimeInterface $personaCreatedDate
     * @return Account
     */
    public function withPersonaCreatedDate($personaCreatedDate)
    {
        $new = clone $this;
        $new->personaCreatedDate = $personaCreatedDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedValue
     */
    public function getPersonaDefinedValues()
    {
        return $this->personaDefinedValues;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedValue $personaDefinedValues
     * @return Account
     */
    public function withPersonaDefinedValues($personaDefinedValues)
    {
        $new = clone $this;
        $new->personaDefinedValues = $personaDefinedValues;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPersonaLastModifiedDate()
    {
        return $this->personaLastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $personaLastModifiedDate
     * @return Account
     */
    public function withPersonaLastModifiedDate($personaLastModifiedDate)
    {
        $new = clone $this;
        $new->personaLastModifiedDate = $personaLastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPersonaType()
    {
        return $this->personaType;
    }

    /**
     * @param string $personaType
     * @return Account
     */
    public function withPersonaType($personaType)
    {
        $new = clone $this;
        $new->personaType = $personaType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPersonaTypes()
    {
        return $this->personaTypes;
    }

    /**
     * @param string $personaTypes
     * @return Account
     */
    public function withPersonaTypes($personaTypes)
    {
        $new = clone $this;
        $new->personaTypes = $personaTypes;

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
     * @return Account
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
     * @return Account
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
    public function getPrimaryPersona()
    {
        return $this->primaryPersona;
    }

    /**
     * @param bool $primaryPersona
     * @return Account
     */
    public function withPrimaryPersona($primaryPersona)
    {
        $new = clone $this;
        $new->primaryPersona = $primaryPersona;

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
     * @return Account
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
     * @return Account
     */
    public function withShortSalutation($shortSalutation)
    {
        $new = clone $this;
        $new->shortSalutation = $shortSalutation;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\SocialMediaProfile
     */
    public function getSocialMediaProfiles()
    {
        return $this->socialMediaProfiles;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\SocialMediaProfile $socialMediaProfiles
     * @return Account
     */
    public function withSocialMediaProfiles($socialMediaProfiles)
    {
        $new = clone $this;
        $new->socialMediaProfiles = $socialMediaProfiles;

        return $new;
    }

    /**
     * @return string
     */
    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param string $sortName
     * @return Account
     */
    public function withSortName($sortName)
    {
        $new = clone $this;
        $new->sortName = $sortName;

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
     * @return Account
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
     * @return Account
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
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Account
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
     * @return Account
     */
    public function withSuburb($suburb)
    {
        $new = clone $this;
        $new->suburb = $suburb;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return Account
     */
    public function withSuffix($suffix)
    {
        $new = clone $this;
        $new->suffix = $suffix;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeamRoleRef()
    {
        return $this->teamRoleRef;
    }

    /**
     * @param string $teamRoleRef
     * @return Account
     */
    public function withTeamRoleRef($teamRoleRef)
    {
        $new = clone $this;
        $new->teamRoleRef = $teamRoleRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Account
     */
    public function withTitle($title)
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return string
     */
    public function getTributeRoleRef()
    {
        return $this->tributeRoleRef;
    }

    /**
     * @param string $tributeRoleRef
     * @return Account
     */
    public function withTributeRoleRef($tributeRoleRef)
    {
        $new = clone $this;
        $new->tributeRoleRef = $tributeRoleRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserRoleRef()
    {
        return $this->userRoleRef;
    }

    /**
     * @param string $userRoleRef
     * @return Account
     */
    public function withUserRoleRef($userRoleRef)
    {
        $new = clone $this;
        $new->userRoleRef = $userRoleRef;

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
     * @return Account
     */
    public function withWebAddress($webAddress)
    {
        $new = clone $this;
        $new->webAddress = $webAddress;

        return $new;
    }


}


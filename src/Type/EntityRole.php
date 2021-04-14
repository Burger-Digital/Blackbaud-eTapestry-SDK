<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EntityRole implements ResultInterface
{

    /**
     * @var int
     */
    private $accountRoleType;

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
     * @var int
     */
    private $emailStatus;

    /**
     * @var int
     */
    private $householdStatus;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $loginId;

    /**
     * @var int
     */
    private $loyaltyRating;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \BurgerDigital\eTapestry\Type\Persona
     */
    private $personas;

    /**
     * @var string
     */
    private $photoLinks;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $sortName;

    /**
     * @var string
     */
    private $teamRoleRef;

    /**
     * @var string
     */
    private $tributeRoleRef;

    /**
     * @var string
     */
    private $userRoleRef;

    /**
     * @return int
     */
    public function getAccountRoleType()
    {
        return $this->accountRoleType;
    }

    /**
     * @param int $accountRoleType
     * @return EntityRole
     */
    public function withAccountRoleType($accountRoleType)
    {
        $new = clone $this;
        $new->accountRoleType = $accountRoleType;

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
     * @return EntityRole
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
     * @return EntityRole
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
    public function getDonorRecognitionName()
    {
        return $this->donorRecognitionName;
    }

    /**
     * @param string $donorRecognitionName
     * @return EntityRole
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
     * @return EntityRole
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
     * @return EntityRole
     */
    public function withDonorRoleRef($donorRoleRef)
    {
        $new = clone $this;
        $new->donorRoleRef = $donorRoleRef;

        return $new;
    }

    /**
     * @return int
     */
    public function getEmailStatus()
    {
        return $this->emailStatus;
    }

    /**
     * @param int $emailStatus
     * @return EntityRole
     */
    public function withEmailStatus($emailStatus)
    {
        $new = clone $this;
        $new->emailStatus = $emailStatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getHouseholdStatus()
    {
        return $this->householdStatus;
    }

    /**
     * @param int $householdStatus
     * @return EntityRole
     */
    public function withHouseholdStatus($householdStatus)
    {
        $new = clone $this;
        $new->householdStatus = $householdStatus;

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
     * @return EntityRole
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

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
     * @return EntityRole
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
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * @param string $loginId
     * @return EntityRole
     */
    public function withLoginId($loginId)
    {
        $new = clone $this;
        $new->loginId = $loginId;

        return $new;
    }

    /**
     * @return int
     */
    public function getLoyaltyRating()
    {
        return $this->loyaltyRating;
    }

    /**
     * @param int $loyaltyRating
     * @return EntityRole
     */
    public function withLoyaltyRating($loyaltyRating)
    {
        $new = clone $this;
        $new->loyaltyRating = $loyaltyRating;

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
     * @return EntityRole
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Persona
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Persona $personas
     * @return EntityRole
     */
    public function withPersonas($personas)
    {
        $new = clone $this;
        $new->personas = $personas;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhotoLinks()
    {
        return $this->photoLinks;
    }

    /**
     * @param string $photoLinks
     * @return EntityRole
     */
    public function withPhotoLinks($photoLinks)
    {
        $new = clone $this;
        $new->photoLinks = $photoLinks;

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
     * @return EntityRole
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
    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param string $sortName
     * @return EntityRole
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
    public function getTeamRoleRef()
    {
        return $this->teamRoleRef;
    }

    /**
     * @param string $teamRoleRef
     * @return EntityRole
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
    public function getTributeRoleRef()
    {
        return $this->tributeRoleRef;
    }

    /**
     * @param string $tributeRoleRef
     * @return EntityRole
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
     * @return EntityRole
     */
    public function withUserRoleRef($userRoleRef)
    {
        $new = clone $this;
        $new->userRoleRef = $userRoleRef;

        return $new;
    }


}


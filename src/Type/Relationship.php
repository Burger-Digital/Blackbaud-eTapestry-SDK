<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Relationship implements ResultInterface
{

    /**
     * @var string
     */
    private $account1Name;

    /**
     * @var string
     */
    private $account1Ref;

    /**
     * @var string
     */
    private $account2Name;

    /**
     * @var string
     */
    private $account2Ref;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedValue
     */
    private $definedValues;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var int
     */
    private $hohAccount;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var int
     */
    private $matchingGiftAccount;

    /**
     * @var string
     */
    private $matchingGiftTerms;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\RelationshipType
     */
    private $type;

    /**
     * @return string
     */
    public function getAccount1Name()
    {
        return $this->account1Name;
    }

    /**
     * @param string $account1Name
     * @return Relationship
     */
    public function withAccount1Name($account1Name)
    {
        $new = clone $this;
        $new->account1Name = $account1Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccount1Ref()
    {
        return $this->account1Ref;
    }

    /**
     * @param string $account1Ref
     * @return Relationship
     */
    public function withAccount1Ref($account1Ref)
    {
        $new = clone $this;
        $new->account1Ref = $account1Ref;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccount2Name()
    {
        return $this->account2Name;
    }

    /**
     * @param string $account2Name
     * @return Relationship
     */
    public function withAccount2Name($account2Name)
    {
        $new = clone $this;
        $new->account2Name = $account2Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccount2Ref()
    {
        return $this->account2Ref;
    }

    /**
     * @param string $account2Ref
     * @return Relationship
     */
    public function withAccount2Ref($account2Ref)
    {
        $new = clone $this;
        $new->account2Ref = $account2Ref;

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
     * @return Relationship
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
     * @return Relationship
     */
    public function withDefinedValues($definedValues)
    {
        $new = clone $this;
        $new->definedValues = $definedValues;

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
     * @return Relationship
     */
    public function withEndDate($endDate)
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getHohAccount()
    {
        return $this->hohAccount;
    }

    /**
     * @param int $hohAccount
     * @return Relationship
     */
    public function withHohAccount($hohAccount)
    {
        $new = clone $this;
        $new->hohAccount = $hohAccount;

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
     * @return Relationship
     */
    public function withLastModifiedDate($lastModifiedDate)
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getMatchingGiftAccount()
    {
        return $this->matchingGiftAccount;
    }

    /**
     * @param int $matchingGiftAccount
     * @return Relationship
     */
    public function withMatchingGiftAccount($matchingGiftAccount)
    {
        $new = clone $this;
        $new->matchingGiftAccount = $matchingGiftAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchingGiftTerms()
    {
        return $this->matchingGiftTerms;
    }

    /**
     * @param string $matchingGiftTerms
     * @return Relationship
     */
    public function withMatchingGiftTerms($matchingGiftTerms)
    {
        $new = clone $this;
        $new->matchingGiftTerms = $matchingGiftTerms;

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
     * @return Relationship
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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Relationship
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
     * @return Relationship
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\RelationshipType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\RelationshipType $type
     * @return Relationship
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}


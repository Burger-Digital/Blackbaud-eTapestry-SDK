<?php

namespace BurgerDigital\eTapestry\Type;

class Bond
{

    /**
     * @var float
     */
    private $actualValue;

    /**
     * @var \DateTimeInterface
     */
    private $dateCashed;

    /**
     * @var string
     */
    private $issuingEntity;

    /**
     * @var \DateTimeInterface
     */
    private $maturityDate;

    /**
     * @var string
     */
    private $note;

    /**
     * @return float
     */
    public function getActualValue()
    {
        return $this->actualValue;
    }

    /**
     * @param float $actualValue
     * @return Bond
     */
    public function withActualValue($actualValue)
    {
        $new = clone $this;
        $new->actualValue = $actualValue;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateCashed()
    {
        return $this->dateCashed;
    }

    /**
     * @param \DateTimeInterface $dateCashed
     * @return Bond
     */
    public function withDateCashed($dateCashed)
    {
        $new = clone $this;
        $new->dateCashed = $dateCashed;

        return $new;
    }

    /**
     * @return string
     */
    public function getIssuingEntity()
    {
        return $this->issuingEntity;
    }

    /**
     * @param string $issuingEntity
     * @return Bond
     */
    public function withIssuingEntity($issuingEntity)
    {
        $new = clone $this;
        $new->issuingEntity = $issuingEntity;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMaturityDate()
    {
        return $this->maturityDate;
    }

    /**
     * @param \DateTimeInterface $maturityDate
     * @return Bond
     */
    public function withMaturityDate($maturityDate)
    {
        $new = clone $this;
        $new->maturityDate = $maturityDate;

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
     * @return Bond
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }


}


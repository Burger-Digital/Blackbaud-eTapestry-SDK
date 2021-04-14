<?php

namespace BurgerDigital\Type;

class CCP
{

    /**
     * @var \DateTimeInterface
     */
    private $CCPDate;

    /**
     * @var string
     */
    private $CCPId;

    /**
     * @var string
     */
    private $note;

    /**
     * @return \DateTimeInterface
     */
    public function getCCPDate()
    {
        return $this->CCPDate;
    }

    /**
     * @param \DateTimeInterface $CCPDate
     * @return CCP
     */
    public function withCCPDate($CCPDate)
    {
        $new = clone $this;
        $new->CCPDate = $CCPDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCCPId()
    {
        return $this->CCPId;
    }

    /**
     * @param string $CCPId
     * @return CCP
     */
    public function withCCPId($CCPId)
    {
        $new = clone $this;
        $new->CCPId = $CCPId;

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
     * @return CCP
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }


}


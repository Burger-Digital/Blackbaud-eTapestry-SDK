<?php

namespace BurgerDigital\eTapestry\Type;

class Fund
{

    /**
     * @var string
     */
    private $cashAccount;

    /**
     * @var bool
     */
    private $disabled;

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
    private $projectId;

    /**
     * @var string
     */
    private $receivablesAccount;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $revenueAccount;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedFieldValue
     */
    private $securityRights;

    /**
     * @return string
     */
    public function getCashAccount()
    {
        return $this->cashAccount;
    }

    /**
     * @param string $cashAccount
     * @return Fund
     */
    public function withCashAccount($cashAccount)
    {
        $new = clone $this;
        $new->cashAccount = $cashAccount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return Fund
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

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
     * @return Fund
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
     * @return Fund
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
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     * @return Fund
     */
    public function withProjectId($projectId)
    {
        $new = clone $this;
        $new->projectId = $projectId;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceivablesAccount()
    {
        return $this->receivablesAccount;
    }

    /**
     * @param string $receivablesAccount
     * @return Fund
     */
    public function withReceivablesAccount($receivablesAccount)
    {
        $new = clone $this;
        $new->receivablesAccount = $receivablesAccount;

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
     * @return Fund
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
    public function getRevenueAccount()
    {
        return $this->revenueAccount;
    }

    /**
     * @param string $revenueAccount
     * @return Fund
     */
    public function withRevenueAccount($revenueAccount)
    {
        $new = clone $this;
        $new->revenueAccount = $revenueAccount;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedFieldValue
     */
    public function getSecurityRights()
    {
        return $this->securityRights;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedFieldValue $securityRights
     * @return Fund
     */
    public function withSecurityRights($securityRights)
    {
        $new = clone $this;
        $new->securityRights = $securityRights;

        return $new;
    }


}


<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class DefinedField implements ResultInterface
{

    /**
     * @var int
     */
    private $applicationTypes;

    /**
     * @var string
     */
    private $category;

    /**
     * @var bool
     */
    private $consent;

    /**
     * @var int
     */
    private $dataType;

    /**
     * @var string
     */
    private $desc;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var int
     */
    private $displayType;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var \BurgerDigital\Type\DefinedFieldValue
     */
    private $securityRights;

    /**
     * @var bool
     */
    private $system;

    /**
     * @var \BurgerDigital\Type\DefinedFieldValue
     */
    private $values;

    /**
     * @return int
     */
    public function getApplicationTypes()
    {
        return $this->applicationTypes;
    }

    /**
     * @param int $applicationTypes
     * @return DefinedField
     */
    public function withApplicationTypes($applicationTypes)
    {
        $new = clone $this;
        $new->applicationTypes = $applicationTypes;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return DefinedField
     */
    public function withCategory($category)
    {
        $new = clone $this;
        $new->category = $category;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * @param bool $consent
     * @return DefinedField
     */
    public function withConsent($consent)
    {
        $new = clone $this;
        $new->consent = $consent;

        return $new;
    }

    /**
     * @return int
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param int $dataType
     * @return DefinedField
     */
    public function withDataType($dataType)
    {
        $new = clone $this;
        $new->dataType = $dataType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return DefinedField
     */
    public function withDesc($desc)
    {
        $new = clone $this;
        $new->desc = $desc;

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
     * @return DefinedField
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

        return $new;
    }

    /**
     * @return int
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * @param int $displayType
     * @return DefinedField
     */
    public function withDisplayType($displayType)
    {
        $new = clone $this;
        $new->displayType = $displayType;

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
     * @return DefinedField
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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return DefinedField
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return DefinedField
     */
    public function withRequired($required)
    {
        $new = clone $this;
        $new->required = $required;

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
     * @return DefinedField
     */
    public function withSecurityRights($securityRights)
    {
        $new = clone $this;
        $new->securityRights = $securityRights;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param bool $system
     * @return DefinedField
     */
    public function withSystem($system)
    {
        $new = clone $this;
        $new->system = $system;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedFieldValue
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedFieldValue $values
     * @return DefinedField
     */
    public function withValues($values)
    {
        $new = clone $this;
        $new->values = $values;

        return $new;
    }


}


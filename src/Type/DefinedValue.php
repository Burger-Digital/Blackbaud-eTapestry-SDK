<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DefinedValue implements RequestInterface
{

    /**
     * @var int
     */
    private $dataType;

    /**
     * @var int
     */
    private $displayType;

    /**
     * @var string
     */
    private $fieldName;

    /**
     * @var string
     */
    private $fieldRef;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $valueRef;

    /**
     * Constructor
     *
     * @var int $dataType
     * @var int $displayType
     * @var string $fieldName
     * @var string $fieldRef
     * @var string $value
     * @var string $valueRef
     */
    public function __construct($dataType, $displayType, $fieldName, $fieldRef, $value, $valueRef)
    {
        $this->dataType = $dataType;
        $this->displayType = $displayType;
        $this->fieldName = $fieldName;
        $this->fieldRef = $fieldRef;
        $this->value = $value;
        $this->valueRef = $valueRef;
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
     * @return DefinedValue
     */
    public function withDataType($dataType)
    {
        $new = clone $this;
        $new->dataType = $dataType;

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
     * @return DefinedValue
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
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return DefinedValue
     */
    public function withFieldName($fieldName)
    {
        $new = clone $this;
        $new->fieldName = $fieldName;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldRef()
    {
        return $this->fieldRef;
    }

    /**
     * @param string $fieldRef
     * @return DefinedValue
     */
    public function withFieldRef($fieldRef)
    {
        $new = clone $this;
        $new->fieldRef = $fieldRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return DefinedValue
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return string
     */
    public function getValueRef()
    {
        return $this->valueRef;
    }

    /**
     * @param string $valueRef
     * @return DefinedValue
     */
    public function withValueRef($valueRef)
    {
        $new = clone $this;
        $new->valueRef = $valueRef;

        return $new;
    }


}


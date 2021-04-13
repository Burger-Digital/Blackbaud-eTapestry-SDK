<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Question StructType
 * @subpackage Structs
 */
class Question extends AbstractStructBase
{
    /**
     * The displayText
     * @var string|null
     */
    protected ?string $displayText = null;
    /**
     * The field
     * @var \BurgerDigital\eTapestry\StructType\DefinedField|null
     */
    protected ?\StructType\DefinedField $field = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The required
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * Constructor method for Question
     * @uses Question::setDisplayText()
     * @uses Question::setField()
     * @uses Question::setRef()
     * @uses Question::setRequired()
     * @param string $displayText
     * @param \BurgerDigital\eTapestry\StructType\DefinedField $field
     * @param string $ref
     * @param bool $required
     */
    public function __construct(?string $displayText = null, ?\StructType\DefinedField $field = null, ?string $ref = null, ?bool $required = null)
    {
        $this
            ->setDisplayText($displayText)
            ->setField($field)
            ->setRef($ref)
            ->setRequired($required);
    }
    /**
     * Get displayText value
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }
    /**
     * Set displayText value
     * @param string $displayText
     * @return \BurgerDigital\eTapestry\StructType\Question
     */
    public function setDisplayText(?string $displayText = null): self
    {
        // validation for constraint: string
        if (!is_null($displayText) && !is_string($displayText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayText, true), gettype($displayText)), __LINE__);
        }
        $this->displayText = $displayText;
        
        return $this;
    }
    /**
     * Get field value
     * @return \BurgerDigital\eTapestry\StructType\DefinedField|null
     */
    public function getField(): ?\StructType\DefinedField
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param \BurgerDigital\eTapestry\StructType\DefinedField $field
     * @return \BurgerDigital\eTapestry\StructType\Question
     */
    public function setField(?\StructType\DefinedField $field = null): self
    {
        $this->field = $field;
        
        return $this;
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \BurgerDigital\eTapestry\StructType\Question
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \BurgerDigital\eTapestry\StructType\Question
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
}

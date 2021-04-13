<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomPaymentSchedule StructType
 * @subpackage Structs
 */
class CustomPaymentSchedule extends AbstractStructBase
{
    /**
     * The installmentAmounts
     * Meta information extracted from the WSDL
     * - arrayType: double[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var float[]
     */
    protected array $installmentAmounts = [];
    /**
     * The installmentDates
     * Meta information extracted from the WSDL
     * - arrayType: dateTime[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $installmentDates = [];
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The processType
     * @var int|null
     */
    protected ?int $processType = null;
    /**
     * Constructor method for CustomPaymentSchedule
     * @uses CustomPaymentSchedule::setInstallmentAmounts()
     * @uses CustomPaymentSchedule::setInstallmentDates()
     * @uses CustomPaymentSchedule::setNote()
     * @uses CustomPaymentSchedule::setProcessType()
     * @param float[] $installmentAmounts
     * @param string[] $installmentDates
     * @param string $note
     * @param int $processType
     */
    public function __construct(array $installmentAmounts = [], array $installmentDates = [], ?string $note = null, ?int $processType = null)
    {
        $this
            ->setInstallmentAmounts($installmentAmounts)
            ->setInstallmentDates($installmentDates)
            ->setNote($note)
            ->setProcessType($processType);
    }
    /**
     * Get installmentAmounts value
     * @return float[]
     */
    public function getInstallmentAmounts(): array
    {
        return $this->installmentAmounts;
    }
    /**
     * This method is responsible for validating the values passed to the setInstallmentAmounts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInstallmentAmounts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInstallmentAmountsForArrayConstraintsFromSetInstallmentAmounts(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customPaymentScheduleInstallmentAmountsItem) {
            // validation for constraint: itemType
            if (!(is_float($customPaymentScheduleInstallmentAmountsItem) || is_numeric($customPaymentScheduleInstallmentAmountsItem))) {
                $invalidValues[] = is_object($customPaymentScheduleInstallmentAmountsItem) ? get_class($customPaymentScheduleInstallmentAmountsItem) : sprintf('%s(%s)', gettype($customPaymentScheduleInstallmentAmountsItem), var_export($customPaymentScheduleInstallmentAmountsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The installmentAmounts property can only contain items of type float, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set installmentAmounts value
     * @throws InvalidArgumentException
     * @param float[] $installmentAmounts
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function setInstallmentAmounts(array $installmentAmounts = []): self
    {
        // validation for constraint: array
        if ('' !== ($installmentAmountsArrayErrorMessage = self::validateInstallmentAmountsForArrayConstraintsFromSetInstallmentAmounts($installmentAmounts))) {
            throw new InvalidArgumentException($installmentAmountsArrayErrorMessage, __LINE__);
        }
        $this->installmentAmounts = $installmentAmounts;
        
        return $this;
    }
    /**
     * Add item to installmentAmounts value
     * @throws InvalidArgumentException
     * @param float $item
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function addToInstallmentAmounts(float $item): self
    {
        // validation for constraint: itemType
        if (!(is_float($item) || is_numeric($item))) {
            throw new InvalidArgumentException(sprintf('The installmentAmounts property can only contain items of type float, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->installmentAmounts[] = $item;
        
        return $this;
    }
    /**
     * Get installmentDates value
     * @return string[]
     */
    public function getInstallmentDates(): array
    {
        return $this->installmentDates;
    }
    /**
     * This method is responsible for validating the values passed to the setInstallmentDates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInstallmentDates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInstallmentDatesForArrayConstraintsFromSetInstallmentDates(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customPaymentScheduleInstallmentDatesItem) {
            // validation for constraint: itemType
            if (!is_string($customPaymentScheduleInstallmentDatesItem)) {
                $invalidValues[] = is_object($customPaymentScheduleInstallmentDatesItem) ? get_class($customPaymentScheduleInstallmentDatesItem) : sprintf('%s(%s)', gettype($customPaymentScheduleInstallmentDatesItem), var_export($customPaymentScheduleInstallmentDatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The installmentDates property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set installmentDates value
     * @throws InvalidArgumentException
     * @param string[] $installmentDates
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function setInstallmentDates(array $installmentDates = []): self
    {
        // validation for constraint: array
        if ('' !== ($installmentDatesArrayErrorMessage = self::validateInstallmentDatesForArrayConstraintsFromSetInstallmentDates($installmentDates))) {
            throw new InvalidArgumentException($installmentDatesArrayErrorMessage, __LINE__);
        }
        $this->installmentDates = $installmentDates;
        
        return $this;
    }
    /**
     * Add item to installmentDates value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function addToInstallmentDates(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The installmentDates property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->installmentDates[] = $item;
        
        return $this;
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
    /**
     * Get processType value
     * @return int|null
     */
    public function getProcessType(): ?int
    {
        return $this->processType;
    }
    /**
     * Set processType value
     * @param int $processType
     * @return \BurgerDigital\eTapestry\StructType\CustomPaymentSchedule
     */
    public function setProcessType(?int $processType = null): self
    {
        // validation for constraint: int
        if (!is_null($processType) && !(is_int($processType) || ctype_digit($processType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processType, true), gettype($processType)), __LINE__);
        }
        $this->processType = $processType;
        
        return $this;
    }
}

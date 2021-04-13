<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringGiftSchedule StructType
 * @subpackage Structs
 */
class RecurringGiftSchedule extends AbstractStructBase
{
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The approach
     * @var string|null
     */
    protected ?string $approach = null;
    /**
     * The attachments
     * Meta information extracted from the WSDL
     * - arrayType: tns:Attachment[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\Attachment[]
     */
    protected array $attachments = [];
    /**
     * The campaign
     * @var string|null
     */
    protected ?string $campaign = null;
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The definedValues
     * Meta information extracted from the WSDL
     * - arrayType: tns:DefinedValue[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\DefinedValue[]
     */
    protected array $definedValues = [];
    /**
     * The final
     * @var bool|null
     */
    protected ?bool $final = null;
    /**
     * The fund
     * @var string|null
     */
    protected ?string $fund = null;
    /**
     * The fundraiser
     * @var string|null
     */
    protected ?string $fundraiser = null;
    /**
     * The lastModifiedDate
     * @var string|null
     */
    protected ?string $lastModifiedDate = null;
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * The linkedGiftsAmount
     * @var float|null
     */
    protected ?float $linkedGiftsAmount = null;
    /**
     * The nextGiftAmount
     * @var float|null
     */
    protected ?float $nextGiftAmount = null;
    /**
     * The nextGiftDate
     * @var string|null
     */
    protected ?string $nextGiftDate = null;
    /**
     * The nonDeductibleAmount
     * @var float|null
     */
    protected ?float $nonDeductibleAmount = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The originalAccountName
     * @var string|null
     */
    protected ?string $originalAccountName = null;
    /**
     * The originalAccountRef
     * @var string|null
     */
    protected ?string $originalAccountRef = null;
    /**
     * The originalTransactionRef
     * @var string|null
     */
    protected ?string $originalTransactionRef = null;
    /**
     * The receipt
     * @var string|null
     */
    protected ?string $receipt = null;
    /**
     * The recognitionName
     * @var string|null
     */
    protected ?string $recognitionName = null;
    /**
     * The recognitionType
     * @var int|null
     */
    protected ?int $recognitionType = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The schedule
     * @var \StructType\StandardPaymentSchedule|null
     */
    protected ?\StructType\StandardPaymentSchedule $schedule = null;
    /**
     * The scheduledValuable
     * @var \StructType\Valuable|null
     */
    protected ?\StructType\Valuable $scheduledValuable = null;
    /**
     * The softCredit
     * @var \StructType\SoftCredit|null
     */
    protected ?\StructType\SoftCredit $softCredit = null;
    /**
     * The tributeAccountName
     * @var string|null
     */
    protected ?string $tributeAccountName = null;
    /**
     * The tributeAccountRef
     * @var string|null
     */
    protected ?string $tributeAccountRef = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for RecurringGiftSchedule
     * @uses RecurringGiftSchedule::setAccountName()
     * @uses RecurringGiftSchedule::setAccountRef()
     * @uses RecurringGiftSchedule::setAmount()
     * @uses RecurringGiftSchedule::setApproach()
     * @uses RecurringGiftSchedule::setAttachments()
     * @uses RecurringGiftSchedule::setCampaign()
     * @uses RecurringGiftSchedule::setCreatedDate()
     * @uses RecurringGiftSchedule::setDate()
     * @uses RecurringGiftSchedule::setDefinedValues()
     * @uses RecurringGiftSchedule::setFinal()
     * @uses RecurringGiftSchedule::setFund()
     * @uses RecurringGiftSchedule::setFundraiser()
     * @uses RecurringGiftSchedule::setLastModifiedDate()
     * @uses RecurringGiftSchedule::setLetter()
     * @uses RecurringGiftSchedule::setLinkedGiftsAmount()
     * @uses RecurringGiftSchedule::setNextGiftAmount()
     * @uses RecurringGiftSchedule::setNextGiftDate()
     * @uses RecurringGiftSchedule::setNonDeductibleAmount()
     * @uses RecurringGiftSchedule::setNote()
     * @uses RecurringGiftSchedule::setOriginalAccountName()
     * @uses RecurringGiftSchedule::setOriginalAccountRef()
     * @uses RecurringGiftSchedule::setOriginalTransactionRef()
     * @uses RecurringGiftSchedule::setReceipt()
     * @uses RecurringGiftSchedule::setRecognitionName()
     * @uses RecurringGiftSchedule::setRecognitionType()
     * @uses RecurringGiftSchedule::setRef()
     * @uses RecurringGiftSchedule::setSchedule()
     * @uses RecurringGiftSchedule::setScheduledValuable()
     * @uses RecurringGiftSchedule::setSoftCredit()
     * @uses RecurringGiftSchedule::setTributeAccountName()
     * @uses RecurringGiftSchedule::setTributeAccountRef()
     * @uses RecurringGiftSchedule::setType()
     * @param string $accountName
     * @param string $accountRef
     * @param float $amount
     * @param string $approach
     * @param \StructType\Attachment[] $attachments
     * @param string $campaign
     * @param string $createdDate
     * @param string $date
     * @param \StructType\DefinedValue[] $definedValues
     * @param bool $final
     * @param string $fund
     * @param string $fundraiser
     * @param string $lastModifiedDate
     * @param string $letter
     * @param float $linkedGiftsAmount
     * @param float $nextGiftAmount
     * @param string $nextGiftDate
     * @param float $nonDeductibleAmount
     * @param string $note
     * @param string $originalAccountName
     * @param string $originalAccountRef
     * @param string $originalTransactionRef
     * @param string $receipt
     * @param string $recognitionName
     * @param int $recognitionType
     * @param string $ref
     * @param \StructType\StandardPaymentSchedule $schedule
     * @param \StructType\Valuable $scheduledValuable
     * @param \StructType\SoftCredit $softCredit
     * @param string $tributeAccountName
     * @param string $tributeAccountRef
     * @param int $type
     */
    public function __construct(?string $accountName = null, ?string $accountRef = null, ?float $amount = null, ?string $approach = null, array $attachments = [], ?string $campaign = null, ?string $createdDate = null, ?string $date = null, array $definedValues = [], ?bool $final = null, ?string $fund = null, ?string $fundraiser = null, ?string $lastModifiedDate = null, ?string $letter = null, ?float $linkedGiftsAmount = null, ?float $nextGiftAmount = null, ?string $nextGiftDate = null, ?float $nonDeductibleAmount = null, ?string $note = null, ?string $originalAccountName = null, ?string $originalAccountRef = null, ?string $originalTransactionRef = null, ?string $receipt = null, ?string $recognitionName = null, ?int $recognitionType = null, ?string $ref = null, ?\StructType\StandardPaymentSchedule $schedule = null, ?\StructType\Valuable $scheduledValuable = null, ?\StructType\SoftCredit $softCredit = null, ?string $tributeAccountName = null, ?string $tributeAccountRef = null, ?int $type = null)
    {
        $this
            ->setAccountName($accountName)
            ->setAccountRef($accountRef)
            ->setAmount($amount)
            ->setApproach($approach)
            ->setAttachments($attachments)
            ->setCampaign($campaign)
            ->setCreatedDate($createdDate)
            ->setDate($date)
            ->setDefinedValues($definedValues)
            ->setFinal($final)
            ->setFund($fund)
            ->setFundraiser($fundraiser)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLetter($letter)
            ->setLinkedGiftsAmount($linkedGiftsAmount)
            ->setNextGiftAmount($nextGiftAmount)
            ->setNextGiftDate($nextGiftDate)
            ->setNonDeductibleAmount($nonDeductibleAmount)
            ->setNote($note)
            ->setOriginalAccountName($originalAccountName)
            ->setOriginalAccountRef($originalAccountRef)
            ->setOriginalTransactionRef($originalTransactionRef)
            ->setReceipt($receipt)
            ->setRecognitionName($recognitionName)
            ->setRecognitionType($recognitionType)
            ->setRef($ref)
            ->setSchedule($schedule)
            ->setScheduledValuable($scheduledValuable)
            ->setSoftCredit($softCredit)
            ->setTributeAccountName($tributeAccountName)
            ->setTributeAccountRef($tributeAccountRef)
            ->setType($type);
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \StructType\RecurringGiftSchedule
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountRef value
     * @return string|null
     */
    public function getAccountRef(): ?string
    {
        return $this->accountRef;
    }
    /**
     * Set accountRef value
     * @param string $accountRef
     * @return \StructType\RecurringGiftSchedule
     */
    public function setAccountRef(?string $accountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRef) && !is_string($accountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRef, true), gettype($accountRef)), __LINE__);
        }
        $this->accountRef = $accountRef;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\RecurringGiftSchedule
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get approach value
     * @return string|null
     */
    public function getApproach(): ?string
    {
        return $this->approach;
    }
    /**
     * Set approach value
     * @param string $approach
     * @return \StructType\RecurringGiftSchedule
     */
    public function setApproach(?string $approach = null): self
    {
        // validation for constraint: string
        if (!is_null($approach) && !is_string($approach)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approach, true), gettype($approach)), __LINE__);
        }
        $this->approach = $approach;
        
        return $this;
    }
    /**
     * Get attachments value
     * @return \StructType\Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentsForArrayConstraintsFromSetAttachments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recurringGiftScheduleAttachmentsItem) {
            // validation for constraint: itemType
            if (!$recurringGiftScheduleAttachmentsItem instanceof \StructType\Attachment) {
                $invalidValues[] = is_object($recurringGiftScheduleAttachmentsItem) ? get_class($recurringGiftScheduleAttachmentsItem) : sprintf('%s(%s)', gettype($recurringGiftScheduleAttachmentsItem), var_export($recurringGiftScheduleAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attachments property can only contain items of type \StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attachments value
     * @throws InvalidArgumentException
     * @param \StructType\Attachment[] $attachments
     * @return \StructType\RecurringGiftSchedule
     */
    public function setAttachments(array $attachments = []): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentsArrayErrorMessage = self::validateAttachmentsForArrayConstraintsFromSetAttachments($attachments))) {
            throw new InvalidArgumentException($attachmentsArrayErrorMessage, __LINE__);
        }
        $this->attachments = $attachments;
        
        return $this;
    }
    /**
     * Add item to attachments value
     * @throws InvalidArgumentException
     * @param \StructType\Attachment $item
     * @return \StructType\RecurringGiftSchedule
     */
    public function addToAttachments(\StructType\Attachment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The attachments property can only contain items of type \StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attachments[] = $item;
        
        return $this;
    }
    /**
     * Get campaign value
     * @return string|null
     */
    public function getCampaign(): ?string
    {
        return $this->campaign;
    }
    /**
     * Set campaign value
     * @param string $campaign
     * @return \StructType\RecurringGiftSchedule
     */
    public function setCampaign(?string $campaign = null): self
    {
        // validation for constraint: string
        if (!is_null($campaign) && !is_string($campaign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaign, true), gettype($campaign)), __LINE__);
        }
        $this->campaign = $campaign;
        
        return $this;
    }
    /**
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \StructType\RecurringGiftSchedule
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\RecurringGiftSchedule
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get definedValues value
     * @return \StructType\DefinedValue[]
     */
    public function getDefinedValues(): array
    {
        return $this->definedValues;
    }
    /**
     * This method is responsible for validating the values passed to the setDefinedValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefinedValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefinedValuesForArrayConstraintsFromSetDefinedValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recurringGiftScheduleDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$recurringGiftScheduleDefinedValuesItem instanceof \StructType\DefinedValue) {
                $invalidValues[] = is_object($recurringGiftScheduleDefinedValuesItem) ? get_class($recurringGiftScheduleDefinedValuesItem) : sprintf('%s(%s)', gettype($recurringGiftScheduleDefinedValuesItem), var_export($recurringGiftScheduleDefinedValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The definedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set definedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue[] $definedValues
     * @return \StructType\RecurringGiftSchedule
     */
    public function setDefinedValues(array $definedValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($definedValuesArrayErrorMessage = self::validateDefinedValuesForArrayConstraintsFromSetDefinedValues($definedValues))) {
            throw new InvalidArgumentException($definedValuesArrayErrorMessage, __LINE__);
        }
        $this->definedValues = $definedValues;
        
        return $this;
    }
    /**
     * Add item to definedValues value
     * @throws InvalidArgumentException
     * @param \StructType\DefinedValue $item
     * @return \StructType\RecurringGiftSchedule
     */
    public function addToDefinedValues(\StructType\DefinedValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DefinedValue) {
            throw new InvalidArgumentException(sprintf('The definedValues property can only contain items of type \StructType\DefinedValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->definedValues[] = $item;
        
        return $this;
    }
    /**
     * Get final value
     * @return bool|null
     */
    public function getFinal(): ?bool
    {
        return $this->final;
    }
    /**
     * Set final value
     * @param bool $final
     * @return \StructType\RecurringGiftSchedule
     */
    public function setFinal(?bool $final = null): self
    {
        // validation for constraint: boolean
        if (!is_null($final) && !is_bool($final)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($final, true), gettype($final)), __LINE__);
        }
        $this->final = $final;
        
        return $this;
    }
    /**
     * Get fund value
     * @return string|null
     */
    public function getFund(): ?string
    {
        return $this->fund;
    }
    /**
     * Set fund value
     * @param string $fund
     * @return \StructType\RecurringGiftSchedule
     */
    public function setFund(?string $fund = null): self
    {
        // validation for constraint: string
        if (!is_null($fund) && !is_string($fund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fund, true), gettype($fund)), __LINE__);
        }
        $this->fund = $fund;
        
        return $this;
    }
    /**
     * Get fundraiser value
     * @return string|null
     */
    public function getFundraiser(): ?string
    {
        return $this->fundraiser;
    }
    /**
     * Set fundraiser value
     * @param string $fundraiser
     * @return \StructType\RecurringGiftSchedule
     */
    public function setFundraiser(?string $fundraiser = null): self
    {
        // validation for constraint: string
        if (!is_null($fundraiser) && !is_string($fundraiser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fundraiser, true), gettype($fundraiser)), __LINE__);
        }
        $this->fundraiser = $fundraiser;
        
        return $this;
    }
    /**
     * Get lastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->lastModifiedDate;
    }
    /**
     * Set lastModifiedDate value
     * @param string $lastModifiedDate
     * @return \StructType\RecurringGiftSchedule
     */
    public function setLastModifiedDate(?string $lastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->lastModifiedDate = $lastModifiedDate;
        
        return $this;
    }
    /**
     * Get letter value
     * @return string|null
     */
    public function getLetter(): ?string
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param string $letter
     * @return \StructType\RecurringGiftSchedule
     */
    public function setLetter(?string $letter = null): self
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($letter, true), gettype($letter)), __LINE__);
        }
        $this->letter = $letter;
        
        return $this;
    }
    /**
     * Get linkedGiftsAmount value
     * @return float|null
     */
    public function getLinkedGiftsAmount(): ?float
    {
        return $this->linkedGiftsAmount;
    }
    /**
     * Set linkedGiftsAmount value
     * @param float $linkedGiftsAmount
     * @return \StructType\RecurringGiftSchedule
     */
    public function setLinkedGiftsAmount(?float $linkedGiftsAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($linkedGiftsAmount) && !(is_float($linkedGiftsAmount) || is_numeric($linkedGiftsAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($linkedGiftsAmount, true), gettype($linkedGiftsAmount)), __LINE__);
        }
        $this->linkedGiftsAmount = $linkedGiftsAmount;
        
        return $this;
    }
    /**
     * Get nextGiftAmount value
     * @return float|null
     */
    public function getNextGiftAmount(): ?float
    {
        return $this->nextGiftAmount;
    }
    /**
     * Set nextGiftAmount value
     * @param float $nextGiftAmount
     * @return \StructType\RecurringGiftSchedule
     */
    public function setNextGiftAmount(?float $nextGiftAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nextGiftAmount) && !(is_float($nextGiftAmount) || is_numeric($nextGiftAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nextGiftAmount, true), gettype($nextGiftAmount)), __LINE__);
        }
        $this->nextGiftAmount = $nextGiftAmount;
        
        return $this;
    }
    /**
     * Get nextGiftDate value
     * @return string|null
     */
    public function getNextGiftDate(): ?string
    {
        return $this->nextGiftDate;
    }
    /**
     * Set nextGiftDate value
     * @param string $nextGiftDate
     * @return \StructType\RecurringGiftSchedule
     */
    public function setNextGiftDate(?string $nextGiftDate = null): self
    {
        // validation for constraint: string
        if (!is_null($nextGiftDate) && !is_string($nextGiftDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextGiftDate, true), gettype($nextGiftDate)), __LINE__);
        }
        $this->nextGiftDate = $nextGiftDate;
        
        return $this;
    }
    /**
     * Get nonDeductibleAmount value
     * @return float|null
     */
    public function getNonDeductibleAmount(): ?float
    {
        return $this->nonDeductibleAmount;
    }
    /**
     * Set nonDeductibleAmount value
     * @param float $nonDeductibleAmount
     * @return \StructType\RecurringGiftSchedule
     */
    public function setNonDeductibleAmount(?float $nonDeductibleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nonDeductibleAmount) && !(is_float($nonDeductibleAmount) || is_numeric($nonDeductibleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nonDeductibleAmount, true), gettype($nonDeductibleAmount)), __LINE__);
        }
        $this->nonDeductibleAmount = $nonDeductibleAmount;
        
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
     * @return \StructType\RecurringGiftSchedule
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
     * Get originalAccountName value
     * @return string|null
     */
    public function getOriginalAccountName(): ?string
    {
        return $this->originalAccountName;
    }
    /**
     * Set originalAccountName value
     * @param string $originalAccountName
     * @return \StructType\RecurringGiftSchedule
     */
    public function setOriginalAccountName(?string $originalAccountName = null): self
    {
        // validation for constraint: string
        if (!is_null($originalAccountName) && !is_string($originalAccountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalAccountName, true), gettype($originalAccountName)), __LINE__);
        }
        $this->originalAccountName = $originalAccountName;
        
        return $this;
    }
    /**
     * Get originalAccountRef value
     * @return string|null
     */
    public function getOriginalAccountRef(): ?string
    {
        return $this->originalAccountRef;
    }
    /**
     * Set originalAccountRef value
     * @param string $originalAccountRef
     * @return \StructType\RecurringGiftSchedule
     */
    public function setOriginalAccountRef(?string $originalAccountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($originalAccountRef) && !is_string($originalAccountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalAccountRef, true), gettype($originalAccountRef)), __LINE__);
        }
        $this->originalAccountRef = $originalAccountRef;
        
        return $this;
    }
    /**
     * Get originalTransactionRef value
     * @return string|null
     */
    public function getOriginalTransactionRef(): ?string
    {
        return $this->originalTransactionRef;
    }
    /**
     * Set originalTransactionRef value
     * @param string $originalTransactionRef
     * @return \StructType\RecurringGiftSchedule
     */
    public function setOriginalTransactionRef(?string $originalTransactionRef = null): self
    {
        // validation for constraint: string
        if (!is_null($originalTransactionRef) && !is_string($originalTransactionRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalTransactionRef, true), gettype($originalTransactionRef)), __LINE__);
        }
        $this->originalTransactionRef = $originalTransactionRef;
        
        return $this;
    }
    /**
     * Get receipt value
     * @return string|null
     */
    public function getReceipt(): ?string
    {
        return $this->receipt;
    }
    /**
     * Set receipt value
     * @param string $receipt
     * @return \StructType\RecurringGiftSchedule
     */
    public function setReceipt(?string $receipt = null): self
    {
        // validation for constraint: string
        if (!is_null($receipt) && !is_string($receipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receipt, true), gettype($receipt)), __LINE__);
        }
        $this->receipt = $receipt;
        
        return $this;
    }
    /**
     * Get recognitionName value
     * @return string|null
     */
    public function getRecognitionName(): ?string
    {
        return $this->recognitionName;
    }
    /**
     * Set recognitionName value
     * @param string $recognitionName
     * @return \StructType\RecurringGiftSchedule
     */
    public function setRecognitionName(?string $recognitionName = null): self
    {
        // validation for constraint: string
        if (!is_null($recognitionName) && !is_string($recognitionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recognitionName, true), gettype($recognitionName)), __LINE__);
        }
        $this->recognitionName = $recognitionName;
        
        return $this;
    }
    /**
     * Get recognitionType value
     * @return int|null
     */
    public function getRecognitionType(): ?int
    {
        return $this->recognitionType;
    }
    /**
     * Set recognitionType value
     * @param int $recognitionType
     * @return \StructType\RecurringGiftSchedule
     */
    public function setRecognitionType(?int $recognitionType = null): self
    {
        // validation for constraint: int
        if (!is_null($recognitionType) && !(is_int($recognitionType) || ctype_digit($recognitionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recognitionType, true), gettype($recognitionType)), __LINE__);
        }
        $this->recognitionType = $recognitionType;
        
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
     * @return \StructType\RecurringGiftSchedule
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
     * Get schedule value
     * @return \StructType\StandardPaymentSchedule|null
     */
    public function getSchedule(): ?\StructType\StandardPaymentSchedule
    {
        return $this->schedule;
    }
    /**
     * Set schedule value
     * @param \StructType\StandardPaymentSchedule $schedule
     * @return \StructType\RecurringGiftSchedule
     */
    public function setSchedule(?\StructType\StandardPaymentSchedule $schedule = null): self
    {
        $this->schedule = $schedule;
        
        return $this;
    }
    /**
     * Get scheduledValuable value
     * @return \StructType\Valuable|null
     */
    public function getScheduledValuable(): ?\StructType\Valuable
    {
        return $this->scheduledValuable;
    }
    /**
     * Set scheduledValuable value
     * @param \StructType\Valuable $scheduledValuable
     * @return \StructType\RecurringGiftSchedule
     */
    public function setScheduledValuable(?\StructType\Valuable $scheduledValuable = null): self
    {
        $this->scheduledValuable = $scheduledValuable;
        
        return $this;
    }
    /**
     * Get softCredit value
     * @return \StructType\SoftCredit|null
     */
    public function getSoftCredit(): ?\StructType\SoftCredit
    {
        return $this->softCredit;
    }
    /**
     * Set softCredit value
     * @param \StructType\SoftCredit $softCredit
     * @return \StructType\RecurringGiftSchedule
     */
    public function setSoftCredit(?\StructType\SoftCredit $softCredit = null): self
    {
        $this->softCredit = $softCredit;
        
        return $this;
    }
    /**
     * Get tributeAccountName value
     * @return string|null
     */
    public function getTributeAccountName(): ?string
    {
        return $this->tributeAccountName;
    }
    /**
     * Set tributeAccountName value
     * @param string $tributeAccountName
     * @return \StructType\RecurringGiftSchedule
     */
    public function setTributeAccountName(?string $tributeAccountName = null): self
    {
        // validation for constraint: string
        if (!is_null($tributeAccountName) && !is_string($tributeAccountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tributeAccountName, true), gettype($tributeAccountName)), __LINE__);
        }
        $this->tributeAccountName = $tributeAccountName;
        
        return $this;
    }
    /**
     * Get tributeAccountRef value
     * @return string|null
     */
    public function getTributeAccountRef(): ?string
    {
        return $this->tributeAccountRef;
    }
    /**
     * Set tributeAccountRef value
     * @param string $tributeAccountRef
     * @return \StructType\RecurringGiftSchedule
     */
    public function setTributeAccountRef(?string $tributeAccountRef = null): self
    {
        // validation for constraint: string
        if (!is_null($tributeAccountRef) && !is_string($tributeAccountRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tributeAccountRef, true), gettype($tributeAccountRef)), __LINE__);
        }
        $this->tributeAccountRef = $tributeAccountRef;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \StructType\RecurringGiftSchedule
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}

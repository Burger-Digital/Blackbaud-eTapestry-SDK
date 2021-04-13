<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The creditAmount
     * @var float|null
     */
    protected ?float $creditAmount = null;
    /**
     * The debitAccount
     * @var string|null
     */
    protected ?string $debitAccount = null;
    /**
     * The debitAmount
     * @var float|null
     */
    protected ?float $debitAmount = null;
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
     * The generatedReceipt
     * @var \StructType\GeneratedReceipt|null
     */
    protected ?\StructType\GeneratedReceipt $generatedReceipt = null;
    /**
     * The giftAidAmount
     * @var float|null
     */
    protected ?float $giftAidAmount = null;
    /**
     * The giftAidClaimedDate
     * @var string|null
     */
    protected ?string $giftAidClaimedDate = null;
    /**
     * The giftAidStatus
     * @var int|null
     */
    protected ?int $giftAidStatus = null;
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
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The offsettingRef
     * @var string|null
     */
    protected ?string $offsettingRef = null;
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
     * The pledgeRef
     * @var string|null
     */
    protected ?string $pledgeRef = null;
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
     * The segmentedTransactionRef
     * @var string|null
     */
    protected ?string $segmentedTransactionRef = null;
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
     * The valuable
     * @var \StructType\Valuable|null
     */
    protected ?\StructType\Valuable $valuable = null;
    /**
     * Constructor method for Payment
     * @uses Payment::setCreditAccount()
     * @uses Payment::setCreditAmount()
     * @uses Payment::setDebitAccount()
     * @uses Payment::setDebitAmount()
     * @uses Payment::setAccountName()
     * @uses Payment::setAccountRef()
     * @uses Payment::setAmount()
     * @uses Payment::setApproach()
     * @uses Payment::setAttachments()
     * @uses Payment::setCampaign()
     * @uses Payment::setCreatedDate()
     * @uses Payment::setDate()
     * @uses Payment::setDefinedValues()
     * @uses Payment::setFinal()
     * @uses Payment::setFund()
     * @uses Payment::setFundraiser()
     * @uses Payment::setGeneratedReceipt()
     * @uses Payment::setGiftAidAmount()
     * @uses Payment::setGiftAidClaimedDate()
     * @uses Payment::setGiftAidStatus()
     * @uses Payment::setLastModifiedDate()
     * @uses Payment::setLetter()
     * @uses Payment::setNote()
     * @uses Payment::setOffsettingRef()
     * @uses Payment::setOriginalAccountName()
     * @uses Payment::setOriginalAccountRef()
     * @uses Payment::setOriginalTransactionRef()
     * @uses Payment::setPledgeRef()
     * @uses Payment::setReceipt()
     * @uses Payment::setRecognitionName()
     * @uses Payment::setRecognitionType()
     * @uses Payment::setRef()
     * @uses Payment::setSegmentedTransactionRef()
     * @uses Payment::setSoftCredit()
     * @uses Payment::setTributeAccountName()
     * @uses Payment::setTributeAccountRef()
     * @uses Payment::setType()
     * @uses Payment::setValuable()
     * @param string $creditAccount
     * @param float $creditAmount
     * @param string $debitAccount
     * @param float $debitAmount
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
     * @param \StructType\GeneratedReceipt $generatedReceipt
     * @param float $giftAidAmount
     * @param string $giftAidClaimedDate
     * @param int $giftAidStatus
     * @param string $lastModifiedDate
     * @param string $letter
     * @param string $note
     * @param string $offsettingRef
     * @param string $originalAccountName
     * @param string $originalAccountRef
     * @param string $originalTransactionRef
     * @param string $pledgeRef
     * @param string $receipt
     * @param string $recognitionName
     * @param int $recognitionType
     * @param string $ref
     * @param string $segmentedTransactionRef
     * @param \StructType\SoftCredit $softCredit
     * @param string $tributeAccountName
     * @param string $tributeAccountRef
     * @param int $type
     * @param \StructType\Valuable $valuable
     */
    public function __construct(?string $creditAccount = null, ?float $creditAmount = null, ?string $debitAccount = null, ?float $debitAmount = null, ?string $accountName = null, ?string $accountRef = null, ?float $amount = null, ?string $approach = null, array $attachments = [], ?string $campaign = null, ?string $createdDate = null, ?string $date = null, array $definedValues = [], ?bool $final = null, ?string $fund = null, ?string $fundraiser = null, ?\StructType\GeneratedReceipt $generatedReceipt = null, ?float $giftAidAmount = null, ?string $giftAidClaimedDate = null, ?int $giftAidStatus = null, ?string $lastModifiedDate = null, ?string $letter = null, ?string $note = null, ?string $offsettingRef = null, ?string $originalAccountName = null, ?string $originalAccountRef = null, ?string $originalTransactionRef = null, ?string $pledgeRef = null, ?string $receipt = null, ?string $recognitionName = null, ?int $recognitionType = null, ?string $ref = null, ?string $segmentedTransactionRef = null, ?\StructType\SoftCredit $softCredit = null, ?string $tributeAccountName = null, ?string $tributeAccountRef = null, ?int $type = null, ?\StructType\Valuable $valuable = null)
    {
        $this
            ->setCreditAccount($creditAccount)
            ->setCreditAmount($creditAmount)
            ->setDebitAccount($debitAccount)
            ->setDebitAmount($debitAmount)
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
            ->setGeneratedReceipt($generatedReceipt)
            ->setGiftAidAmount($giftAidAmount)
            ->setGiftAidClaimedDate($giftAidClaimedDate)
            ->setGiftAidStatus($giftAidStatus)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLetter($letter)
            ->setNote($note)
            ->setOffsettingRef($offsettingRef)
            ->setOriginalAccountName($originalAccountName)
            ->setOriginalAccountRef($originalAccountRef)
            ->setOriginalTransactionRef($originalTransactionRef)
            ->setPledgeRef($pledgeRef)
            ->setReceipt($receipt)
            ->setRecognitionName($recognitionName)
            ->setRecognitionType($recognitionType)
            ->setRef($ref)
            ->setSegmentedTransactionRef($segmentedTransactionRef)
            ->setSoftCredit($softCredit)
            ->setTributeAccountName($tributeAccountName)
            ->setTributeAccountRef($tributeAccountRef)
            ->setType($type)
            ->setValuable($valuable);
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \StructType\Payment
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get creditAmount value
     * @return float|null
     */
    public function getCreditAmount(): ?float
    {
        return $this->creditAmount;
    }
    /**
     * Set creditAmount value
     * @param float $creditAmount
     * @return \StructType\Payment
     */
    public function setCreditAmount(?float $creditAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($creditAmount) && !(is_float($creditAmount) || is_numeric($creditAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditAmount, true), gettype($creditAmount)), __LINE__);
        }
        $this->creditAmount = $creditAmount;
        
        return $this;
    }
    /**
     * Get debitAccount value
     * @return string|null
     */
    public function getDebitAccount(): ?string
    {
        return $this->debitAccount;
    }
    /**
     * Set debitAccount value
     * @param string $debitAccount
     * @return \StructType\Payment
     */
    public function setDebitAccount(?string $debitAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($debitAccount) && !is_string($debitAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitAccount, true), gettype($debitAccount)), __LINE__);
        }
        $this->debitAccount = $debitAccount;
        
        return $this;
    }
    /**
     * Get debitAmount value
     * @return float|null
     */
    public function getDebitAmount(): ?float
    {
        return $this->debitAmount;
    }
    /**
     * Set debitAmount value
     * @param float $debitAmount
     * @return \StructType\Payment
     */
    public function setDebitAmount(?float $debitAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($debitAmount) && !(is_float($debitAmount) || is_numeric($debitAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($debitAmount, true), gettype($debitAmount)), __LINE__);
        }
        $this->debitAmount = $debitAmount;
        
        return $this;
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
        foreach ($values as $paymentAttachmentsItem) {
            // validation for constraint: itemType
            if (!$paymentAttachmentsItem instanceof \StructType\Attachment) {
                $invalidValues[] = is_object($paymentAttachmentsItem) ? get_class($paymentAttachmentsItem) : sprintf('%s(%s)', gettype($paymentAttachmentsItem), var_export($paymentAttachmentsItem, true));
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
        foreach ($values as $paymentDefinedValuesItem) {
            // validation for constraint: itemType
            if (!$paymentDefinedValuesItem instanceof \StructType\DefinedValue) {
                $invalidValues[] = is_object($paymentDefinedValuesItem) ? get_class($paymentDefinedValuesItem) : sprintf('%s(%s)', gettype($paymentDefinedValuesItem), var_export($paymentDefinedValuesItem, true));
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * Get generatedReceipt value
     * @return \StructType\GeneratedReceipt|null
     */
    public function getGeneratedReceipt(): ?\StructType\GeneratedReceipt
    {
        return $this->generatedReceipt;
    }
    /**
     * Set generatedReceipt value
     * @param \StructType\GeneratedReceipt $generatedReceipt
     * @return \StructType\Payment
     */
    public function setGeneratedReceipt(?\StructType\GeneratedReceipt $generatedReceipt = null): self
    {
        $this->generatedReceipt = $generatedReceipt;
        
        return $this;
    }
    /**
     * Get giftAidAmount value
     * @return float|null
     */
    public function getGiftAidAmount(): ?float
    {
        return $this->giftAidAmount;
    }
    /**
     * Set giftAidAmount value
     * @param float $giftAidAmount
     * @return \StructType\Payment
     */
    public function setGiftAidAmount(?float $giftAidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($giftAidAmount) && !(is_float($giftAidAmount) || is_numeric($giftAidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($giftAidAmount, true), gettype($giftAidAmount)), __LINE__);
        }
        $this->giftAidAmount = $giftAidAmount;
        
        return $this;
    }
    /**
     * Get giftAidClaimedDate value
     * @return string|null
     */
    public function getGiftAidClaimedDate(): ?string
    {
        return $this->giftAidClaimedDate;
    }
    /**
     * Set giftAidClaimedDate value
     * @param string $giftAidClaimedDate
     * @return \StructType\Payment
     */
    public function setGiftAidClaimedDate(?string $giftAidClaimedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($giftAidClaimedDate) && !is_string($giftAidClaimedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($giftAidClaimedDate, true), gettype($giftAidClaimedDate)), __LINE__);
        }
        $this->giftAidClaimedDate = $giftAidClaimedDate;
        
        return $this;
    }
    /**
     * Get giftAidStatus value
     * @return int|null
     */
    public function getGiftAidStatus(): ?int
    {
        return $this->giftAidStatus;
    }
    /**
     * Set giftAidStatus value
     * @param int $giftAidStatus
     * @return \StructType\Payment
     */
    public function setGiftAidStatus(?int $giftAidStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($giftAidStatus) && !(is_int($giftAidStatus) || ctype_digit($giftAidStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($giftAidStatus, true), gettype($giftAidStatus)), __LINE__);
        }
        $this->giftAidStatus = $giftAidStatus;
        
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * Get offsettingRef value
     * @return string|null
     */
    public function getOffsettingRef(): ?string
    {
        return $this->offsettingRef;
    }
    /**
     * Set offsettingRef value
     * @param string $offsettingRef
     * @return \StructType\Payment
     */
    public function setOffsettingRef(?string $offsettingRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offsettingRef) && !is_string($offsettingRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsettingRef, true), gettype($offsettingRef)), __LINE__);
        }
        $this->offsettingRef = $offsettingRef;
        
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * Get pledgeRef value
     * @return string|null
     */
    public function getPledgeRef(): ?string
    {
        return $this->pledgeRef;
    }
    /**
     * Set pledgeRef value
     * @param string $pledgeRef
     * @return \StructType\Payment
     */
    public function setPledgeRef(?string $pledgeRef = null): self
    {
        // validation for constraint: string
        if (!is_null($pledgeRef) && !is_string($pledgeRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pledgeRef, true), gettype($pledgeRef)), __LINE__);
        }
        $this->pledgeRef = $pledgeRef;
        
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * Get segmentedTransactionRef value
     * @return string|null
     */
    public function getSegmentedTransactionRef(): ?string
    {
        return $this->segmentedTransactionRef;
    }
    /**
     * Set segmentedTransactionRef value
     * @param string $segmentedTransactionRef
     * @return \StructType\Payment
     */
    public function setSegmentedTransactionRef(?string $segmentedTransactionRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentedTransactionRef) && !is_string($segmentedTransactionRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentedTransactionRef, true), gettype($segmentedTransactionRef)), __LINE__);
        }
        $this->segmentedTransactionRef = $segmentedTransactionRef;
        
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
     * @return \StructType\Payment
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
    /**
     * Get valuable value
     * @return \StructType\Valuable|null
     */
    public function getValuable(): ?\StructType\Valuable
    {
        return $this->valuable;
    }
    /**
     * Set valuable value
     * @param \StructType\Valuable $valuable
     * @return \StructType\Payment
     */
    public function setValuable(?\StructType\Valuable $valuable = null): self
    {
        $this->valuable = $valuable;
        
        return $this;
    }
}

<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RecurringGiftSchedule implements ResultInterface
{

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $approach;

    /**
     * @var \BurgerDigital\eTapestry\Type\Attachment
     */
    private $attachments;

    /**
     * @var string
     */
    private $campaign;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var \BurgerDigital\eTapestry\Type\DefinedValue
     */
    private $definedValues;

    /**
     * @var bool
     */
    private $final;

    /**
     * @var string
     */
    private $fund;

    /**
     * @var string
     */
    private $fundraiser;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $letter;

    /**
     * @var float
     */
    private $linkedGiftsAmount;

    /**
     * @var float
     */
    private $nextGiftAmount;

    /**
     * @var \DateTimeInterface
     */
    private $nextGiftDate;

    /**
     * @var float
     */
    private $nonDeductibleAmount;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $originalAccountName;

    /**
     * @var string
     */
    private $originalAccountRef;

    /**
     * @var string
     */
    private $originalTransactionRef;

    /**
     * @var string
     */
    private $receipt;

    /**
     * @var string
     */
    private $recognitionName;

    /**
     * @var int
     */
    private $recognitionType;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \BurgerDigital\eTapestry\Type\StandardPaymentSchedule
     */
    private $schedule;

    /**
     * @var \BurgerDigital\eTapestry\Type\Valuable
     */
    private $scheduledValuable;

    /**
     * @var \BurgerDigital\eTapestry\Type\SoftCredit
     */
    private $softCredit;

    /**
     * @var string
     */
    private $tributeAccountName;

    /**
     * @var string
     */
    private $tributeAccountRef;

    /**
     * @var int
     */
    private $type;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return RecurringGiftSchedule
     */
    public function withAccountName($accountName)
    {
        $new = clone $this;
        $new->accountName = $accountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountRef()
    {
        return $this->accountRef;
    }

    /**
     * @param string $accountRef
     * @return RecurringGiftSchedule
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return RecurringGiftSchedule
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getApproach()
    {
        return $this->approach;
    }

    /**
     * @param string $approach
     * @return RecurringGiftSchedule
     */
    public function withApproach($approach)
    {
        $new = clone $this;
        $new->approach = $approach;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Attachment
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Attachment $attachments
     * @return RecurringGiftSchedule
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param string $campaign
     * @return RecurringGiftSchedule
     */
    public function withCampaign($campaign)
    {
        $new = clone $this;
        $new->campaign = $campaign;

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
     * @return RecurringGiftSchedule
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return RecurringGiftSchedule
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

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
     * @return RecurringGiftSchedule
     */
    public function withDefinedValues($definedValues)
    {
        $new = clone $this;
        $new->definedValues = $definedValues;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * @param bool $final
     * @return RecurringGiftSchedule
     */
    public function withFinal($final)
    {
        $new = clone $this;
        $new->final = $final;

        return $new;
    }

    /**
     * @return string
     */
    public function getFund()
    {
        return $this->fund;
    }

    /**
     * @param string $fund
     * @return RecurringGiftSchedule
     */
    public function withFund($fund)
    {
        $new = clone $this;
        $new->fund = $fund;

        return $new;
    }

    /**
     * @return string
     */
    public function getFundraiser()
    {
        return $this->fundraiser;
    }

    /**
     * @param string $fundraiser
     * @return RecurringGiftSchedule
     */
    public function withFundraiser($fundraiser)
    {
        $new = clone $this;
        $new->fundraiser = $fundraiser;

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
     * @return RecurringGiftSchedule
     */
    public function withLastModifiedDate($lastModifiedDate)
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * @param string $letter
     * @return RecurringGiftSchedule
     */
    public function withLetter($letter)
    {
        $new = clone $this;
        $new->letter = $letter;

        return $new;
    }

    /**
     * @return float
     */
    public function getLinkedGiftsAmount()
    {
        return $this->linkedGiftsAmount;
    }

    /**
     * @param float $linkedGiftsAmount
     * @return RecurringGiftSchedule
     */
    public function withLinkedGiftsAmount($linkedGiftsAmount)
    {
        $new = clone $this;
        $new->linkedGiftsAmount = $linkedGiftsAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getNextGiftAmount()
    {
        return $this->nextGiftAmount;
    }

    /**
     * @param float $nextGiftAmount
     * @return RecurringGiftSchedule
     */
    public function withNextGiftAmount($nextGiftAmount)
    {
        $new = clone $this;
        $new->nextGiftAmount = $nextGiftAmount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getNextGiftDate()
    {
        return $this->nextGiftDate;
    }

    /**
     * @param \DateTimeInterface $nextGiftDate
     * @return RecurringGiftSchedule
     */
    public function withNextGiftDate($nextGiftDate)
    {
        $new = clone $this;
        $new->nextGiftDate = $nextGiftDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getNonDeductibleAmount()
    {
        return $this->nonDeductibleAmount;
    }

    /**
     * @param float $nonDeductibleAmount
     * @return RecurringGiftSchedule
     */
    public function withNonDeductibleAmount($nonDeductibleAmount)
    {
        $new = clone $this;
        $new->nonDeductibleAmount = $nonDeductibleAmount;

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
     * @return RecurringGiftSchedule
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
    public function getOriginalAccountName()
    {
        return $this->originalAccountName;
    }

    /**
     * @param string $originalAccountName
     * @return RecurringGiftSchedule
     */
    public function withOriginalAccountName($originalAccountName)
    {
        $new = clone $this;
        $new->originalAccountName = $originalAccountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getOriginalAccountRef()
    {
        return $this->originalAccountRef;
    }

    /**
     * @param string $originalAccountRef
     * @return RecurringGiftSchedule
     */
    public function withOriginalAccountRef($originalAccountRef)
    {
        $new = clone $this;
        $new->originalAccountRef = $originalAccountRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getOriginalTransactionRef()
    {
        return $this->originalTransactionRef;
    }

    /**
     * @param string $originalTransactionRef
     * @return RecurringGiftSchedule
     */
    public function withOriginalTransactionRef($originalTransactionRef)
    {
        $new = clone $this;
        $new->originalTransactionRef = $originalTransactionRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param string $receipt
     * @return RecurringGiftSchedule
     */
    public function withReceipt($receipt)
    {
        $new = clone $this;
        $new->receipt = $receipt;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecognitionName()
    {
        return $this->recognitionName;
    }

    /**
     * @param string $recognitionName
     * @return RecurringGiftSchedule
     */
    public function withRecognitionName($recognitionName)
    {
        $new = clone $this;
        $new->recognitionName = $recognitionName;

        return $new;
    }

    /**
     * @return int
     */
    public function getRecognitionType()
    {
        return $this->recognitionType;
    }

    /**
     * @param int $recognitionType
     * @return RecurringGiftSchedule
     */
    public function withRecognitionType($recognitionType)
    {
        $new = clone $this;
        $new->recognitionType = $recognitionType;

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
     * @return RecurringGiftSchedule
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\StandardPaymentSchedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\StandardPaymentSchedule $schedule
     * @return RecurringGiftSchedule
     */
    public function withSchedule($schedule)
    {
        $new = clone $this;
        $new->schedule = $schedule;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Valuable
     */
    public function getScheduledValuable()
    {
        return $this->scheduledValuable;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Valuable $scheduledValuable
     * @return RecurringGiftSchedule
     */
    public function withScheduledValuable($scheduledValuable)
    {
        $new = clone $this;
        $new->scheduledValuable = $scheduledValuable;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\SoftCredit
     */
    public function getSoftCredit()
    {
        return $this->softCredit;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\SoftCredit $softCredit
     * @return RecurringGiftSchedule
     */
    public function withSoftCredit($softCredit)
    {
        $new = clone $this;
        $new->softCredit = $softCredit;

        return $new;
    }

    /**
     * @return string
     */
    public function getTributeAccountName()
    {
        return $this->tributeAccountName;
    }

    /**
     * @param string $tributeAccountName
     * @return RecurringGiftSchedule
     */
    public function withTributeAccountName($tributeAccountName)
    {
        $new = clone $this;
        $new->tributeAccountName = $tributeAccountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getTributeAccountRef()
    {
        return $this->tributeAccountRef;
    }

    /**
     * @param string $tributeAccountRef
     * @return RecurringGiftSchedule
     */
    public function withTributeAccountRef($tributeAccountRef)
    {
        $new = clone $this;
        $new->tributeAccountRef = $tributeAccountRef;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return RecurringGiftSchedule
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}


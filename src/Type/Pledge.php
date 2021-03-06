<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Pledge implements ResultInterface
{

    /**
     * @var string
     */
    private $creditAccount;

    /**
     * @var float
     */
    private $creditAmount;

    /**
     * @var string
     */
    private $debitAccount;

    /**
     * @var float
     */
    private $debitAmount;

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
     * @var float
     */
    private $arrearsAmount;

    /**
     * @var \BurgerDigital\eTapestry\Type\Attachment
     */
    private $attachments;

    /**
     * @var string
     */
    private $campaign;

    /**
     * @var bool
     */
    private $copyUDFsToFuturePayments;

    /**
     * @var \DateTimeInterface
     */
    private $createdDate;

    /**
     * @var \BurgerDigital\eTapestry\Type\CustomPaymentSchedule
     */
    private $customSchedule;

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
     * @var \BurgerDigital\eTapestry\Type\GeneratedReceipt
     */
    private $generatedReceipt;

    /**
     * @var float
     */
    private $giftAidAmount;

    /**
     * @var \DateTimeInterface
     */
    private $giftAidClaimedDate;

    /**
     * @var int
     */
    private $giftAidStatus;

    /**
     * @var float
     */
    private $initialPaymentAmount;

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
    private $linkedPaymentsAmount;

    /**
     * @var float
     */
    private $nextPaymentAmount;

    /**
     * @var \DateTimeInterface
     */
    private $nextPaymentDate;

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
    private $offsettingRef;

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
     * @var float
     */
    private $outstandingBalance;

    /**
     * @var \BurgerDigital\eTapestry\Type\Valuable
     */
    private $paymentValuable;

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
     * @var \BurgerDigital\eTapestry\Type\Valuable
     */
    private $scheduledValuable;

    /**
     * @var string
     */
    private $segmentedTransactionRef;

    /**
     * @var \BurgerDigital\eTapestry\Type\SoftCredit
     */
    private $softCredit;

    /**
     * @var \BurgerDigital\eTapestry\Type\StandardPaymentSchedule
     */
    private $standardSchedule;

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
     * @var bool
     */
    private $writeOff;

    /**
     * @var \DateTimeInterface
     */
    private $writeOffDate;

    /**
     * @return string
     */
    public function getCreditAccount()
    {
        return $this->creditAccount;
    }

    /**
     * @param string $creditAccount
     * @return Pledge
     */
    public function withCreditAccount($creditAccount)
    {
        $new = clone $this;
        $new->creditAccount = $creditAccount;

        return $new;
    }

    /**
     * @return float
     */
    public function getCreditAmount()
    {
        return $this->creditAmount;
    }

    /**
     * @param float $creditAmount
     * @return Pledge
     */
    public function withCreditAmount($creditAmount)
    {
        $new = clone $this;
        $new->creditAmount = $creditAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDebitAccount()
    {
        return $this->debitAccount;
    }

    /**
     * @param string $debitAccount
     * @return Pledge
     */
    public function withDebitAccount($debitAccount)
    {
        $new = clone $this;
        $new->debitAccount = $debitAccount;

        return $new;
    }

    /**
     * @return float
     */
    public function getDebitAmount()
    {
        return $this->debitAmount;
    }

    /**
     * @param float $debitAmount
     * @return Pledge
     */
    public function withDebitAmount($debitAmount)
    {
        $new = clone $this;
        $new->debitAmount = $debitAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
     */
    public function withApproach($approach)
    {
        $new = clone $this;
        $new->approach = $approach;

        return $new;
    }

    /**
     * @return float
     */
    public function getArrearsAmount()
    {
        return $this->arrearsAmount;
    }

    /**
     * @param float $arrearsAmount
     * @return Pledge
     */
    public function withArrearsAmount($arrearsAmount)
    {
        $new = clone $this;
        $new->arrearsAmount = $arrearsAmount;

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
     * @return Pledge
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
     * @return Pledge
     */
    public function withCampaign($campaign)
    {
        $new = clone $this;
        $new->campaign = $campaign;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCopyUDFsToFuturePayments()
    {
        return $this->copyUDFsToFuturePayments;
    }

    /**
     * @param bool $copyUDFsToFuturePayments
     * @return Pledge
     */
    public function withCopyUDFsToFuturePayments($copyUDFsToFuturePayments)
    {
        $new = clone $this;
        $new->copyUDFsToFuturePayments = $copyUDFsToFuturePayments;

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
     * @return Pledge
     */
    public function withCreatedDate($createdDate)
    {
        $new = clone $this;
        $new->createdDate = $createdDate;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CustomPaymentSchedule
     */
    public function getCustomSchedule()
    {
        return $this->customSchedule;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CustomPaymentSchedule $customSchedule
     * @return Pledge
     */
    public function withCustomSchedule($customSchedule)
    {
        $new = clone $this;
        $new->customSchedule = $customSchedule;

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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
     */
    public function withFundraiser($fundraiser)
    {
        $new = clone $this;
        $new->fundraiser = $fundraiser;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\GeneratedReceipt
     */
    public function getGeneratedReceipt()
    {
        return $this->generatedReceipt;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\GeneratedReceipt $generatedReceipt
     * @return Pledge
     */
    public function withGeneratedReceipt($generatedReceipt)
    {
        $new = clone $this;
        $new->generatedReceipt = $generatedReceipt;

        return $new;
    }

    /**
     * @return float
     */
    public function getGiftAidAmount()
    {
        return $this->giftAidAmount;
    }

    /**
     * @param float $giftAidAmount
     * @return Pledge
     */
    public function withGiftAidAmount($giftAidAmount)
    {
        $new = clone $this;
        $new->giftAidAmount = $giftAidAmount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGiftAidClaimedDate()
    {
        return $this->giftAidClaimedDate;
    }

    /**
     * @param \DateTimeInterface $giftAidClaimedDate
     * @return Pledge
     */
    public function withGiftAidClaimedDate($giftAidClaimedDate)
    {
        $new = clone $this;
        $new->giftAidClaimedDate = $giftAidClaimedDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getGiftAidStatus()
    {
        return $this->giftAidStatus;
    }

    /**
     * @param int $giftAidStatus
     * @return Pledge
     */
    public function withGiftAidStatus($giftAidStatus)
    {
        $new = clone $this;
        $new->giftAidStatus = $giftAidStatus;

        return $new;
    }

    /**
     * @return float
     */
    public function getInitialPaymentAmount()
    {
        return $this->initialPaymentAmount;
    }

    /**
     * @param float $initialPaymentAmount
     * @return Pledge
     */
    public function withInitialPaymentAmount($initialPaymentAmount)
    {
        $new = clone $this;
        $new->initialPaymentAmount = $initialPaymentAmount;

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
     * @return Pledge
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
     * @return Pledge
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
    public function getLinkedPaymentsAmount()
    {
        return $this->linkedPaymentsAmount;
    }

    /**
     * @param float $linkedPaymentsAmount
     * @return Pledge
     */
    public function withLinkedPaymentsAmount($linkedPaymentsAmount)
    {
        $new = clone $this;
        $new->linkedPaymentsAmount = $linkedPaymentsAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getNextPaymentAmount()
    {
        return $this->nextPaymentAmount;
    }

    /**
     * @param float $nextPaymentAmount
     * @return Pledge
     */
    public function withNextPaymentAmount($nextPaymentAmount)
    {
        $new = clone $this;
        $new->nextPaymentAmount = $nextPaymentAmount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getNextPaymentDate()
    {
        return $this->nextPaymentDate;
    }

    /**
     * @param \DateTimeInterface $nextPaymentDate
     * @return Pledge
     */
    public function withNextPaymentDate($nextPaymentDate)
    {
        $new = clone $this;
        $new->nextPaymentDate = $nextPaymentDate;

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
     * @return Pledge
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
     * @return Pledge
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
    public function getOffsettingRef()
    {
        return $this->offsettingRef;
    }

    /**
     * @param string $offsettingRef
     * @return Pledge
     */
    public function withOffsettingRef($offsettingRef)
    {
        $new = clone $this;
        $new->offsettingRef = $offsettingRef;

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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
     */
    public function withOriginalTransactionRef($originalTransactionRef)
    {
        $new = clone $this;
        $new->originalTransactionRef = $originalTransactionRef;

        return $new;
    }

    /**
     * @return float
     */
    public function getOutstandingBalance()
    {
        return $this->outstandingBalance;
    }

    /**
     * @param float $outstandingBalance
     * @return Pledge
     */
    public function withOutstandingBalance($outstandingBalance)
    {
        $new = clone $this;
        $new->outstandingBalance = $outstandingBalance;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Valuable
     */
    public function getPaymentValuable()
    {
        return $this->paymentValuable;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Valuable $paymentValuable
     * @return Pledge
     */
    public function withPaymentValuable($paymentValuable)
    {
        $new = clone $this;
        $new->paymentValuable = $paymentValuable;

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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

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
     * @return Pledge
     */
    public function withScheduledValuable($scheduledValuable)
    {
        $new = clone $this;
        $new->scheduledValuable = $scheduledValuable;

        return $new;
    }

    /**
     * @return string
     */
    public function getSegmentedTransactionRef()
    {
        return $this->segmentedTransactionRef;
    }

    /**
     * @param string $segmentedTransactionRef
     * @return Pledge
     */
    public function withSegmentedTransactionRef($segmentedTransactionRef)
    {
        $new = clone $this;
        $new->segmentedTransactionRef = $segmentedTransactionRef;

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
     * @return Pledge
     */
    public function withSoftCredit($softCredit)
    {
        $new = clone $this;
        $new->softCredit = $softCredit;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\StandardPaymentSchedule
     */
    public function getStandardSchedule()
    {
        return $this->standardSchedule;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\StandardPaymentSchedule $standardSchedule
     * @return Pledge
     */
    public function withStandardSchedule($standardSchedule)
    {
        $new = clone $this;
        $new->standardSchedule = $standardSchedule;

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
     * @return Pledge
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
     * @return Pledge
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
     * @return Pledge
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWriteOff()
    {
        return $this->writeOff;
    }

    /**
     * @param bool $writeOff
     * @return Pledge
     */
    public function withWriteOff($writeOff)
    {
        $new = clone $this;
        $new->writeOff = $writeOff;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getWriteOffDate()
    {
        return $this->writeOffDate;
    }

    /**
     * @param \DateTimeInterface $writeOffDate
     * @return Pledge
     */
    public function withWriteOffDate($writeOffDate)
    {
        $new = clone $this;
        $new->writeOffDate = $writeOffDate;

        return $new;
    }


}


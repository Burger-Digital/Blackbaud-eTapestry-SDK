<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Payment implements ResultInterface
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
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var string
     */
    private $letter;

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
     * @var string
     */
    private $pledgeRef;

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
     * @var string
     */
    private $segmentedTransactionRef;

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
     * @var \BurgerDigital\eTapestry\Type\Valuable
     */
    private $valuable;

    /**
     * @return string
     */
    public function getCreditAccount()
    {
        return $this->creditAccount;
    }

    /**
     * @param string $creditAccount
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
     */
    public function withGiftAidStatus($giftAidStatus)
    {
        $new = clone $this;
        $new->giftAidStatus = $giftAidStatus;

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
     * @return Payment
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
     * @return Payment
     */
    public function withLetter($letter)
    {
        $new = clone $this;
        $new->letter = $letter;

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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
    public function getPledgeRef()
    {
        return $this->pledgeRef;
    }

    /**
     * @param string $pledgeRef
     * @return Payment
     */
    public function withPledgeRef($pledgeRef)
    {
        $new = clone $this;
        $new->pledgeRef = $pledgeRef;

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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
    public function getSegmentedTransactionRef()
    {
        return $this->segmentedTransactionRef;
    }

    /**
     * @param string $segmentedTransactionRef
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Valuable
     */
    public function getValuable()
    {
        return $this->valuable;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Valuable $valuable
     * @return Payment
     */
    public function withValuable($valuable)
    {
        $new = clone $this;
        $new->valuable = $valuable;

        return $new;
    }


}


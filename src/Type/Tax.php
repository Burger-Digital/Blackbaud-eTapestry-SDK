<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Tax implements ResultInterface
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
     * @var \BurgerDigital\eTapestry\Type\GeneratedReceipt
     */
    private $generatedReceipt;

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
     * @var float
     */
    private $taxRate;

    /**
     * @var string
     */
    private $taxRegion;

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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
     */
    public function withFund($fund)
    {
        $new = clone $this;
        $new->fund = $fund;

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
     * @return Tax
     */
    public function withGeneratedReceipt($generatedReceipt)
    {
        $new = clone $this;
        $new->generatedReceipt = $generatedReceipt;

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
     * @return Tax
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
     * @return Tax
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
    public function getNonDeductibleAmount()
    {
        return $this->nonDeductibleAmount;
    }

    /**
     * @param float $nonDeductibleAmount
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param string $receipt
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
     */
    public function withSoftCredit($softCredit)
    {
        $new = clone $this;
        $new->softCredit = $softCredit;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param float $taxRate
     * @return Tax
     */
    public function withTaxRate($taxRate)
    {
        $new = clone $this;
        $new->taxRate = $taxRate;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxRegion()
    {
        return $this->taxRegion;
    }

    /**
     * @param string $taxRegion
     * @return Tax
     */
    public function withTaxRegion($taxRegion)
    {
        $new = clone $this;
        $new->taxRegion = $taxRegion;

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
     * @return Tax
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
     * @return Tax
     */
    public function withValuable($valuable)
    {
        $new = clone $this;
        $new->valuable = $valuable;

        return $new;
    }


}


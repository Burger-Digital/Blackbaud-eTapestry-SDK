<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Disbursement implements ResultInterface
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
    private $receipt;

    /**
     * @var string
     */
    private $ref;

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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
     * @return Disbursement
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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Disbursement
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

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
     * @return Disbursement
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
     * @return Disbursement
     */
    public function withValuable($valuable)
    {
        $new = clone $this;
        $new->valuable = $valuable;

        return $new;
    }


}


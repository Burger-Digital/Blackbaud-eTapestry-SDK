<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Insurance StructType
 * @subpackage Structs
 */
class Insurance extends AbstractStructBase
{
    /**
     * The beneficiary
     * @var string|null
     */
    protected ?string $beneficiary = null;
    /**
     * The insurer
     * @var string|null
     */
    protected ?string $insurer = null;
    /**
     * The lengthOfPolicyAgreement
     * @var string|null
     */
    protected ?string $lengthOfPolicyAgreement = null;
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * The organizationPayingPremiums
     * @var bool|null
     */
    protected ?bool $organizationPayingPremiums = null;
    /**
     * The policyNumber
     * @var string|null
     */
    protected ?string $policyNumber = null;
    /**
     * The premiumAmount
     * @var float|null
     */
    protected ?float $premiumAmount = null;
    /**
     * The premiumFrequency
     * @var int|null
     */
    protected ?int $premiumFrequency = null;
    /**
     * The surrenderDate
     * @var string|null
     */
    protected ?string $surrenderDate = null;
    /**
     * The surrenderValue
     * @var float|null
     */
    protected ?float $surrenderValue = null;
    /**
     * Constructor method for Insurance
     * @uses Insurance::setBeneficiary()
     * @uses Insurance::setInsurer()
     * @uses Insurance::setLengthOfPolicyAgreement()
     * @uses Insurance::setNote()
     * @uses Insurance::setOrganizationPayingPremiums()
     * @uses Insurance::setPolicyNumber()
     * @uses Insurance::setPremiumAmount()
     * @uses Insurance::setPremiumFrequency()
     * @uses Insurance::setSurrenderDate()
     * @uses Insurance::setSurrenderValue()
     * @param string $beneficiary
     * @param string $insurer
     * @param string $lengthOfPolicyAgreement
     * @param string $note
     * @param bool $organizationPayingPremiums
     * @param string $policyNumber
     * @param float $premiumAmount
     * @param int $premiumFrequency
     * @param string $surrenderDate
     * @param float $surrenderValue
     */
    public function __construct(?string $beneficiary = null, ?string $insurer = null, ?string $lengthOfPolicyAgreement = null, ?string $note = null, ?bool $organizationPayingPremiums = null, ?string $policyNumber = null, ?float $premiumAmount = null, ?int $premiumFrequency = null, ?string $surrenderDate = null, ?float $surrenderValue = null)
    {
        $this
            ->setBeneficiary($beneficiary)
            ->setInsurer($insurer)
            ->setLengthOfPolicyAgreement($lengthOfPolicyAgreement)
            ->setNote($note)
            ->setOrganizationPayingPremiums($organizationPayingPremiums)
            ->setPolicyNumber($policyNumber)
            ->setPremiumAmount($premiumAmount)
            ->setPremiumFrequency($premiumFrequency)
            ->setSurrenderDate($surrenderDate)
            ->setSurrenderValue($surrenderValue);
    }
    /**
     * Get beneficiary value
     * @return string|null
     */
    public function getBeneficiary(): ?string
    {
        return $this->beneficiary;
    }
    /**
     * Set beneficiary value
     * @param string $beneficiary
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setBeneficiary(?string $beneficiary = null): self
    {
        // validation for constraint: string
        if (!is_null($beneficiary) && !is_string($beneficiary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beneficiary, true), gettype($beneficiary)), __LINE__);
        }
        $this->beneficiary = $beneficiary;
        
        return $this;
    }
    /**
     * Get insurer value
     * @return string|null
     */
    public function getInsurer(): ?string
    {
        return $this->insurer;
    }
    /**
     * Set insurer value
     * @param string $insurer
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setInsurer(?string $insurer = null): self
    {
        // validation for constraint: string
        if (!is_null($insurer) && !is_string($insurer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurer, true), gettype($insurer)), __LINE__);
        }
        $this->insurer = $insurer;
        
        return $this;
    }
    /**
     * Get lengthOfPolicyAgreement value
     * @return string|null
     */
    public function getLengthOfPolicyAgreement(): ?string
    {
        return $this->lengthOfPolicyAgreement;
    }
    /**
     * Set lengthOfPolicyAgreement value
     * @param string $lengthOfPolicyAgreement
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setLengthOfPolicyAgreement(?string $lengthOfPolicyAgreement = null): self
    {
        // validation for constraint: string
        if (!is_null($lengthOfPolicyAgreement) && !is_string($lengthOfPolicyAgreement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lengthOfPolicyAgreement, true), gettype($lengthOfPolicyAgreement)), __LINE__);
        }
        $this->lengthOfPolicyAgreement = $lengthOfPolicyAgreement;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Insurance
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
     * Get organizationPayingPremiums value
     * @return bool|null
     */
    public function getOrganizationPayingPremiums(): ?bool
    {
        return $this->organizationPayingPremiums;
    }
    /**
     * Set organizationPayingPremiums value
     * @param bool $organizationPayingPremiums
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setOrganizationPayingPremiums(?bool $organizationPayingPremiums = null): self
    {
        // validation for constraint: boolean
        if (!is_null($organizationPayingPremiums) && !is_bool($organizationPayingPremiums)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($organizationPayingPremiums, true), gettype($organizationPayingPremiums)), __LINE__);
        }
        $this->organizationPayingPremiums = $organizationPayingPremiums;
        
        return $this;
    }
    /**
     * Get policyNumber value
     * @return string|null
     */
    public function getPolicyNumber(): ?string
    {
        return $this->policyNumber;
    }
    /**
     * Set policyNumber value
     * @param string $policyNumber
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setPolicyNumber(?string $policyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyNumber, true), gettype($policyNumber)), __LINE__);
        }
        $this->policyNumber = $policyNumber;
        
        return $this;
    }
    /**
     * Get premiumAmount value
     * @return float|null
     */
    public function getPremiumAmount(): ?float
    {
        return $this->premiumAmount;
    }
    /**
     * Set premiumAmount value
     * @param float $premiumAmount
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setPremiumAmount(?float $premiumAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($premiumAmount) && !(is_float($premiumAmount) || is_numeric($premiumAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($premiumAmount, true), gettype($premiumAmount)), __LINE__);
        }
        $this->premiumAmount = $premiumAmount;
        
        return $this;
    }
    /**
     * Get premiumFrequency value
     * @return int|null
     */
    public function getPremiumFrequency(): ?int
    {
        return $this->premiumFrequency;
    }
    /**
     * Set premiumFrequency value
     * @param int $premiumFrequency
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setPremiumFrequency(?int $premiumFrequency = null): self
    {
        // validation for constraint: int
        if (!is_null($premiumFrequency) && !(is_int($premiumFrequency) || ctype_digit($premiumFrequency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($premiumFrequency, true), gettype($premiumFrequency)), __LINE__);
        }
        $this->premiumFrequency = $premiumFrequency;
        
        return $this;
    }
    /**
     * Get surrenderDate value
     * @return string|null
     */
    public function getSurrenderDate(): ?string
    {
        return $this->surrenderDate;
    }
    /**
     * Set surrenderDate value
     * @param string $surrenderDate
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setSurrenderDate(?string $surrenderDate = null): self
    {
        // validation for constraint: string
        if (!is_null($surrenderDate) && !is_string($surrenderDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surrenderDate, true), gettype($surrenderDate)), __LINE__);
        }
        $this->surrenderDate = $surrenderDate;
        
        return $this;
    }
    /**
     * Get surrenderValue value
     * @return float|null
     */
    public function getSurrenderValue(): ?float
    {
        return $this->surrenderValue;
    }
    /**
     * Set surrenderValue value
     * @param float $surrenderValue
     * @return \BurgerDigital\eTapestry\StructType\Insurance
     */
    public function setSurrenderValue(?float $surrenderValue = null): self
    {
        // validation for constraint: float
        if (!is_null($surrenderValue) && !(is_float($surrenderValue) || is_numeric($surrenderValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($surrenderValue, true), gettype($surrenderValue)), __LINE__);
        }
        $this->surrenderValue = $surrenderValue;
        
        return $this;
    }
}

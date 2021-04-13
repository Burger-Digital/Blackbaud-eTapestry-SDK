<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginCredentialsResponse StructType
 * @subpackage Structs
 */
class LoginCredentialsResponse extends AbstractStructBase
{
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The createdNewAccount
     * @var bool|null
     */
    protected ?bool $createdNewAccount = null;
    /**
     * The matchedMultiples
     * @var bool|null
     */
    protected ?bool $matchedMultiples = null;
    /**
     * Constructor method for LoginCredentialsResponse
     * @uses LoginCredentialsResponse::setAccountRef()
     * @uses LoginCredentialsResponse::setCreatedNewAccount()
     * @uses LoginCredentialsResponse::setMatchedMultiples()
     * @param string $accountRef
     * @param bool $createdNewAccount
     * @param bool $matchedMultiples
     */
    public function __construct(?string $accountRef = null, ?bool $createdNewAccount = null, ?bool $matchedMultiples = null)
    {
        $this
            ->setAccountRef($accountRef)
            ->setCreatedNewAccount($createdNewAccount)
            ->setMatchedMultiples($matchedMultiples);
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
     * @return \BurgerDigital\eTapestry\StructType\LoginCredentialsResponse
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
     * Get createdNewAccount value
     * @return bool|null
     */
    public function getCreatedNewAccount(): ?bool
    {
        return $this->createdNewAccount;
    }
    /**
     * Set createdNewAccount value
     * @param bool $createdNewAccount
     * @return \BurgerDigital\eTapestry\StructType\LoginCredentialsResponse
     */
    public function setCreatedNewAccount(?bool $createdNewAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createdNewAccount) && !is_bool($createdNewAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createdNewAccount, true), gettype($createdNewAccount)), __LINE__);
        }
        $this->createdNewAccount = $createdNewAccount;
        
        return $this;
    }
    /**
     * Get matchedMultiples value
     * @return bool|null
     */
    public function getMatchedMultiples(): ?bool
    {
        return $this->matchedMultiples;
    }
    /**
     * Set matchedMultiples value
     * @param bool $matchedMultiples
     * @return \BurgerDigital\eTapestry\StructType\LoginCredentialsResponse
     */
    public function setMatchedMultiples(?bool $matchedMultiples = null): self
    {
        // validation for constraint: boolean
        if (!is_null($matchedMultiples) && !is_bool($matchedMultiples)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($matchedMultiples, true), gettype($matchedMultiples)), __LINE__);
        }
        $this->matchedMultiples = $matchedMultiples;
        
        return $this;
    }
}

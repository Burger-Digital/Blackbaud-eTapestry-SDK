<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForgottenPasswordEmailHelpRequest StructType
 * @subpackage Structs
 */
class ForgottenPasswordEmailHelpRequest extends AbstractStructBase
{
    /**
     * The baseQuery
     * @var string|null
     */
    protected ?string $baseQuery = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The expirationHours
     * @var int|null
     */
    protected ?int $expirationHours = null;
    /**
     * The fromEmail
     * @var string|null
     */
    protected ?string $fromEmail = null;
    /**
     * The loginId
     * @var string|null
     */
    protected ?string $loginId = null;
    /**
     * The personaOption
     * @var string|null
     */
    protected ?string $personaOption = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for ForgottenPasswordEmailHelpRequest
     * @uses ForgottenPasswordEmailHelpRequest::setBaseQuery()
     * @uses ForgottenPasswordEmailHelpRequest::setEmail()
     * @uses ForgottenPasswordEmailHelpRequest::setExpirationHours()
     * @uses ForgottenPasswordEmailHelpRequest::setFromEmail()
     * @uses ForgottenPasswordEmailHelpRequest::setLoginId()
     * @uses ForgottenPasswordEmailHelpRequest::setPersonaOption()
     * @uses ForgottenPasswordEmailHelpRequest::setUrl()
     * @param string $baseQuery
     * @param string $email
     * @param int $expirationHours
     * @param string $fromEmail
     * @param string $loginId
     * @param string $personaOption
     * @param string $url
     */
    public function __construct(?string $baseQuery = null, ?string $email = null, ?int $expirationHours = null, ?string $fromEmail = null, ?string $loginId = null, ?string $personaOption = null, ?string $url = null)
    {
        $this
            ->setBaseQuery($baseQuery)
            ->setEmail($email)
            ->setExpirationHours($expirationHours)
            ->setFromEmail($fromEmail)
            ->setLoginId($loginId)
            ->setPersonaOption($personaOption)
            ->setUrl($url);
    }
    /**
     * Get baseQuery value
     * @return string|null
     */
    public function getBaseQuery(): ?string
    {
        return $this->baseQuery;
    }
    /**
     * Set baseQuery value
     * @param string $baseQuery
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setBaseQuery(?string $baseQuery = null): self
    {
        // validation for constraint: string
        if (!is_null($baseQuery) && !is_string($baseQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseQuery, true), gettype($baseQuery)), __LINE__);
        }
        $this->baseQuery = $baseQuery;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get expirationHours value
     * @return int|null
     */
    public function getExpirationHours(): ?int
    {
        return $this->expirationHours;
    }
    /**
     * Set expirationHours value
     * @param int $expirationHours
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setExpirationHours(?int $expirationHours = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationHours) && !(is_int($expirationHours) || ctype_digit($expirationHours))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationHours, true), gettype($expirationHours)), __LINE__);
        }
        $this->expirationHours = $expirationHours;
        
        return $this;
    }
    /**
     * Get fromEmail value
     * @return string|null
     */
    public function getFromEmail(): ?string
    {
        return $this->fromEmail;
    }
    /**
     * Set fromEmail value
     * @param string $fromEmail
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setFromEmail(?string $fromEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEmail, true), gettype($fromEmail)), __LINE__);
        }
        $this->fromEmail = $fromEmail;
        
        return $this;
    }
    /**
     * Get loginId value
     * @return string|null
     */
    public function getLoginId(): ?string
    {
        return $this->loginId;
    }
    /**
     * Set loginId value
     * @param string $loginId
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setLoginId(?string $loginId = null): self
    {
        // validation for constraint: string
        if (!is_null($loginId) && !is_string($loginId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loginId, true), gettype($loginId)), __LINE__);
        }
        $this->loginId = $loginId;
        
        return $this;
    }
    /**
     * Get personaOption value
     * @return string|null
     */
    public function getPersonaOption(): ?string
    {
        return $this->personaOption;
    }
    /**
     * Set personaOption value
     * @param string $personaOption
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setPersonaOption(?string $personaOption = null): self
    {
        // validation for constraint: string
        if (!is_null($personaOption) && !is_string($personaOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaOption, true), gettype($personaOption)), __LINE__);
        }
        $this->personaOption = $personaOption;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordEmailHelpRequest
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalLoginRequest StructType
 * @subpackage Structs
 */
class ExternalLoginRequest extends AbstractStructBase
{
    /**
     * The applicationContext
     * @var string|null
     */
    protected ?string $applicationContext = null;
    /**
     * The applicationName
     * @var string|null
     */
    protected ?string $applicationName = null;
    /**
     * The databaseId
     * @var string|null
     */
    protected ?string $databaseId = null;
    /**
     * The loginId
     * @var string|null
     */
    protected ?string $loginId = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for ExternalLoginRequest
     * @uses ExternalLoginRequest::setApplicationContext()
     * @uses ExternalLoginRequest::setApplicationName()
     * @uses ExternalLoginRequest::setDatabaseId()
     * @uses ExternalLoginRequest::setLoginId()
     * @uses ExternalLoginRequest::setPassword()
     * @param string $applicationContext
     * @param string $applicationName
     * @param string $databaseId
     * @param string $loginId
     * @param string $password
     */
    public function __construct(?string $applicationContext = null, ?string $applicationName = null, ?string $databaseId = null, ?string $loginId = null, ?string $password = null)
    {
        $this
            ->setApplicationContext($applicationContext)
            ->setApplicationName($applicationName)
            ->setDatabaseId($databaseId)
            ->setLoginId($loginId)
            ->setPassword($password);
    }
    /**
     * Get applicationContext value
     * @return string|null
     */
    public function getApplicationContext(): ?string
    {
        return $this->applicationContext;
    }
    /**
     * Set applicationContext value
     * @param string $applicationContext
     * @return \StructType\ExternalLoginRequest
     */
    public function setApplicationContext(?string $applicationContext = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationContext) && !is_string($applicationContext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationContext, true), gettype($applicationContext)), __LINE__);
        }
        $this->applicationContext = $applicationContext;
        
        return $this;
    }
    /**
     * Get applicationName value
     * @return string|null
     */
    public function getApplicationName(): ?string
    {
        return $this->applicationName;
    }
    /**
     * Set applicationName value
     * @param string $applicationName
     * @return \StructType\ExternalLoginRequest
     */
    public function setApplicationName(?string $applicationName = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationName) && !is_string($applicationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationName, true), gettype($applicationName)), __LINE__);
        }
        $this->applicationName = $applicationName;
        
        return $this;
    }
    /**
     * Get databaseId value
     * @return string|null
     */
    public function getDatabaseId(): ?string
    {
        return $this->databaseId;
    }
    /**
     * Set databaseId value
     * @param string $databaseId
     * @return \StructType\ExternalLoginRequest
     */
    public function setDatabaseId(?string $databaseId = null): self
    {
        // validation for constraint: string
        if (!is_null($databaseId) && !is_string($databaseId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($databaseId, true), gettype($databaseId)), __LINE__);
        }
        $this->databaseId = $databaseId;
        
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
     * @return \StructType\ExternalLoginRequest
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
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\ExternalLoginRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectRequest StructType
 * @subpackage Structs
 */
class ConnectRequest extends AbstractStructBase
{
    /**
     * The applicationContext
     * @var string|null
     */
    protected ?string $applicationContext = null;
    /**
     * The databaseId
     * @var string|null
     */
    protected ?string $databaseId = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for ConnectRequest
     * @uses ConnectRequest::setApplicationContext()
     * @uses ConnectRequest::setDatabaseId()
     * @uses ConnectRequest::setPassword()
     * @param string $applicationContext
     * @param string $databaseId
     * @param string $password
     */
    public function __construct(?string $applicationContext = null, ?string $databaseId = null, ?string $password = null)
    {
        $this
            ->setApplicationContext($applicationContext)
            ->setDatabaseId($databaseId)
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
     * @return \BurgerDigital\eTapestry\StructType\ConnectRequest
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
     * @return \BurgerDigital\eTapestry\StructType\ConnectRequest
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
     * @return \BurgerDigital\eTapestry\StructType\ConnectRequest
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

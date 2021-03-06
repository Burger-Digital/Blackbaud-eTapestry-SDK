<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExternalLoginRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $applicationContext;

    /**
     * @var string
     */
    private $applicationName;

    /**
     * @var string
     */
    private $databaseId;

    /**
     * @var string
     */
    private $loginId;

    /**
     * @var string
     */
    private $password;

    /**
     * Constructor
     *
     * @var string $applicationContext
     * @var string $applicationName
     * @var string $databaseId
     * @var string $loginId
     * @var string $password
     */
    public function __construct($applicationContext, $applicationName, $databaseId, $loginId, $password)
    {
        $this->applicationContext = $applicationContext;
        $this->applicationName = $applicationName;
        $this->databaseId = $databaseId;
        $this->loginId = $loginId;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getApplicationContext()
    {
        return $this->applicationContext;
    }

    /**
     * @param string $applicationContext
     * @return ExternalLoginRequest
     */
    public function withApplicationContext($applicationContext)
    {
        $new = clone $this;
        $new->applicationContext = $applicationContext;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * @param string $applicationName
     * @return ExternalLoginRequest
     */
    public function withApplicationName($applicationName)
    {
        $new = clone $this;
        $new->applicationName = $applicationName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->databaseId;
    }

    /**
     * @param string $databaseId
     * @return ExternalLoginRequest
     */
    public function withDatabaseId($databaseId)
    {
        $new = clone $this;
        $new->databaseId = $databaseId;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * @param string $loginId
     * @return ExternalLoginRequest
     */
    public function withLoginId($loginId)
    {
        $new = clone $this;
        $new->loginId = $loginId;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ExternalLoginRequest
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }


}


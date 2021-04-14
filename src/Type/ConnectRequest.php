<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ConnectRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $applicationContext;

    /**
     * @var string
     */
    private $databaseId;

    /**
     * @var string
     */
    private $password;

    /**
     * Constructor
     *
     * @var string $applicationContext
     * @var string $databaseId
     * @var string $password
     */
    public function __construct($applicationContext, $databaseId, $password)
    {
        $this->applicationContext = $applicationContext;
        $this->databaseId = $databaseId;
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
     * @return ConnectRequest
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
    public function getDatabaseId()
    {
        return $this->databaseId;
    }

    /**
     * @param string $databaseId
     * @return ConnectRequest
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ConnectRequest
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }


}


<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ForgottenPasswordEmailHelpRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $baseQuery;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $expirationHours;

    /**
     * @var string
     */
    private $fromEmail;

    /**
     * @var string
     */
    private $loginId;

    /**
     * @var string
     */
    private $personaOption;

    /**
     * @var string
     */
    private $url;

    /**
     * Constructor
     *
     * @var string $baseQuery
     * @var string $email
     * @var int $expirationHours
     * @var string $fromEmail
     * @var string $loginId
     * @var string $personaOption
     * @var string $url
     */
    public function __construct($baseQuery, $email, $expirationHours, $fromEmail, $loginId, $personaOption, $url)
    {
        $this->baseQuery = $baseQuery;
        $this->email = $email;
        $this->expirationHours = $expirationHours;
        $this->fromEmail = $fromEmail;
        $this->loginId = $loginId;
        $this->personaOption = $personaOption;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getBaseQuery()
    {
        return $this->baseQuery;
    }

    /**
     * @param string $baseQuery
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withBaseQuery($baseQuery)
    {
        $new = clone $this;
        $new->baseQuery = $baseQuery;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpirationHours()
    {
        return $this->expirationHours;
    }

    /**
     * @param int $expirationHours
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withExpirationHours($expirationHours)
    {
        $new = clone $this;
        $new->expirationHours = $expirationHours;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @param string $fromEmail
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withFromEmail($fromEmail)
    {
        $new = clone $this;
        $new->fromEmail = $fromEmail;

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
     * @return ForgottenPasswordEmailHelpRequest
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
    public function getPersonaOption()
    {
        return $this->personaOption;
    }

    /**
     * @param string $personaOption
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withPersonaOption($personaOption)
    {
        $new = clone $this;
        $new->personaOption = $personaOption;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ForgottenPasswordEmailHelpRequest
     */
    public function withUrl($url)
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }


}


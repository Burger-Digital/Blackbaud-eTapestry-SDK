<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SendEmailRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $accountRef;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $htmlMessage;

    /**
     * @var string
     */
    private $personaOption;

    /**
     * @var string
     */
    private $plainMessage;

    /**
     * @var string
     */
    private $sender;

    /**
     * @var string
     */
    private $subject;

    /**
     * Constructor
     *
     * @var string $accountRef
     * @var string $email
     * @var string $htmlMessage
     * @var string $personaOption
     * @var string $plainMessage
     * @var string $sender
     * @var string $subject
     */
    public function __construct($accountRef, $email, $htmlMessage, $personaOption, $plainMessage, $sender, $subject)
    {
        $this->accountRef = $accountRef;
        $this->email = $email;
        $this->htmlMessage = $htmlMessage;
        $this->personaOption = $personaOption;
        $this->plainMessage = $plainMessage;
        $this->sender = $sender;
        $this->subject = $subject;
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
     * @return SendEmailRequest
     */
    public function withAccountRef($accountRef)
    {
        $new = clone $this;
        $new->accountRef = $accountRef;

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
     * @return SendEmailRequest
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getHtmlMessage()
    {
        return $this->htmlMessage;
    }

    /**
     * @param string $htmlMessage
     * @return SendEmailRequest
     */
    public function withHtmlMessage($htmlMessage)
    {
        $new = clone $this;
        $new->htmlMessage = $htmlMessage;

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
     * @return SendEmailRequest
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
    public function getPlainMessage()
    {
        return $this->plainMessage;
    }

    /**
     * @param string $plainMessage
     * @return SendEmailRequest
     */
    public function withPlainMessage($plainMessage)
    {
        $new = clone $this;
        $new->plainMessage = $plainMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     * @return SendEmailRequest
     */
    public function withSender($sender)
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return SendEmailRequest
     */
    public function withSubject($subject)
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }


}


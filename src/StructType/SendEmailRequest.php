<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailRequest StructType
 * @subpackage Structs
 */
class SendEmailRequest extends AbstractStructBase
{
    /**
     * The accountRef
     * @var string|null
     */
    protected ?string $accountRef = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The htmlMessage
     * @var string|null
     */
    protected ?string $htmlMessage = null;
    /**
     * The personaOption
     * @var string|null
     */
    protected ?string $personaOption = null;
    /**
     * The plainMessage
     * @var string|null
     */
    protected ?string $plainMessage = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * Constructor method for SendEmailRequest
     * @uses SendEmailRequest::setAccountRef()
     * @uses SendEmailRequest::setEmail()
     * @uses SendEmailRequest::setHtmlMessage()
     * @uses SendEmailRequest::setPersonaOption()
     * @uses SendEmailRequest::setPlainMessage()
     * @uses SendEmailRequest::setSender()
     * @uses SendEmailRequest::setSubject()
     * @param string $accountRef
     * @param string $email
     * @param string $htmlMessage
     * @param string $personaOption
     * @param string $plainMessage
     * @param string $sender
     * @param string $subject
     */
    public function __construct(?string $accountRef = null, ?string $email = null, ?string $htmlMessage = null, ?string $personaOption = null, ?string $plainMessage = null, ?string $sender = null, ?string $subject = null)
    {
        $this
            ->setAccountRef($accountRef)
            ->setEmail($email)
            ->setHtmlMessage($htmlMessage)
            ->setPersonaOption($personaOption)
            ->setPlainMessage($plainMessage)
            ->setSender($sender)
            ->setSubject($subject);
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
     * @return \StructType\SendEmailRequest
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
     * @return \StructType\SendEmailRequest
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
     * Get htmlMessage value
     * @return string|null
     */
    public function getHtmlMessage(): ?string
    {
        return $this->htmlMessage;
    }
    /**
     * Set htmlMessage value
     * @param string $htmlMessage
     * @return \StructType\SendEmailRequest
     */
    public function setHtmlMessage(?string $htmlMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($htmlMessage) && !is_string($htmlMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlMessage, true), gettype($htmlMessage)), __LINE__);
        }
        $this->htmlMessage = $htmlMessage;
        
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
     * @return \StructType\SendEmailRequest
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
     * Get plainMessage value
     * @return string|null
     */
    public function getPlainMessage(): ?string
    {
        return $this->plainMessage;
    }
    /**
     * Set plainMessage value
     * @param string $plainMessage
     * @return \StructType\SendEmailRequest
     */
    public function setPlainMessage(?string $plainMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($plainMessage) && !is_string($plainMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plainMessage, true), gettype($plainMessage)), __LINE__);
        }
        $this->plainMessage = $plainMessage;
        
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \StructType\SendEmailRequest
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \StructType\SendEmailRequest
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OutlookIntegrationEmail StructType
 * @subpackage Structs
 */
class OutlookIntegrationEmail extends AbstractStructBase
{
    /**
     * The BCC
     * @var string|null
     */
    protected ?string $BCC = null;
    /**
     * The CC
     * @var string|null
     */
    protected ?string $CC = null;
    /**
     * The attachments
     * Meta information extracted from the WSDL
     * - arrayType: tns:Attachment[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    protected array $attachments = [];
    /**
     * The contactMethodRef
     * @var string|null
     */
    protected ?string $contactMethodRef = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The from
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The to
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * Constructor method for OutlookIntegrationEmail
     * @uses OutlookIntegrationEmail::setBCC()
     * @uses OutlookIntegrationEmail::setCC()
     * @uses OutlookIntegrationEmail::setAttachments()
     * @uses OutlookIntegrationEmail::setContactMethodRef()
     * @uses OutlookIntegrationEmail::setDate()
     * @uses OutlookIntegrationEmail::setFrom()
     * @uses OutlookIntegrationEmail::setMessage()
     * @uses OutlookIntegrationEmail::setSubject()
     * @uses OutlookIntegrationEmail::setTo()
     * @param string $bCC
     * @param string $cC
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @param string $contactMethodRef
     * @param string $date
     * @param string $from
     * @param string $message
     * @param string $subject
     * @param string $to
     */
    public function __construct(?string $bCC = null, ?string $cC = null, array $attachments = [], ?string $contactMethodRef = null, ?string $date = null, ?string $from = null, ?string $message = null, ?string $subject = null, ?string $to = null)
    {
        $this
            ->setBCC($bCC)
            ->setCC($cC)
            ->setAttachments($attachments)
            ->setContactMethodRef($contactMethodRef)
            ->setDate($date)
            ->setFrom($from)
            ->setMessage($message)
            ->setSubject($subject)
            ->setTo($to);
    }
    /**
     * Get BCC value
     * @return string|null
     */
    public function getBCC(): ?string
    {
        return $this->BCC;
    }
    /**
     * Set BCC value
     * @param string $bCC
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setBCC(?string $bCC = null): self
    {
        // validation for constraint: string
        if (!is_null($bCC) && !is_string($bCC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bCC, true), gettype($bCC)), __LINE__);
        }
        $this->BCC = $bCC;
        
        return $this;
    }
    /**
     * Get CC value
     * @return string|null
     */
    public function getCC(): ?string
    {
        return $this->CC;
    }
    /**
     * Set CC value
     * @param string $cC
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setCC(?string $cC = null): self
    {
        // validation for constraint: string
        if (!is_null($cC) && !is_string($cC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cC, true), gettype($cC)), __LINE__);
        }
        $this->CC = $cC;
        
        return $this;
    }
    /**
     * Get attachments value
     * @return \BurgerDigital\eTapestry\StructType\Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentsForArrayConstraintsFromSetAttachments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $outlookIntegrationEmailAttachmentsItem) {
            // validation for constraint: itemType
            if (!$outlookIntegrationEmailAttachmentsItem instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
                $invalidValues[] = is_object($outlookIntegrationEmailAttachmentsItem) ? get_class($outlookIntegrationEmailAttachmentsItem) : sprintf('%s(%s)', gettype($outlookIntegrationEmailAttachmentsItem), var_export($outlookIntegrationEmailAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment[] $attachments
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setAttachments(array $attachments = []): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentsArrayErrorMessage = self::validateAttachmentsForArrayConstraintsFromSetAttachments($attachments))) {
            throw new InvalidArgumentException($attachmentsArrayErrorMessage, __LINE__);
        }
        $this->attachments = $attachments;
        
        return $this;
    }
    /**
     * Add item to attachments value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Attachment $item
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function addToAttachments(\StructType\Attachment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The attachments property can only contain items of type \BurgerDigital\eTapestry\StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attachments[] = $item;
        
        return $this;
    }
    /**
     * Get contactMethodRef value
     * @return string|null
     */
    public function getContactMethodRef(): ?string
    {
        return $this->contactMethodRef;
    }
    /**
     * Set contactMethodRef value
     * @param string $contactMethodRef
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setContactMethodRef(?string $contactMethodRef = null): self
    {
        // validation for constraint: string
        if (!is_null($contactMethodRef) && !is_string($contactMethodRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactMethodRef, true), gettype($contactMethodRef)), __LINE__);
        }
        $this->contactMethodRef = $contactMethodRef;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
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
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
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
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \BurgerDigital\eTapestry\StructType\OutlookIntegrationEmail
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
}

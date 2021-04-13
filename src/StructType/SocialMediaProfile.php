<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialMediaProfile StructType
 * @subpackage Structs
 */
class SocialMediaProfile extends AbstractStructBase
{
    /**
     * The channel
     * @var string|null
     */
    protected ?string $channel = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for SocialMediaProfile
     * @uses SocialMediaProfile::setChannel()
     * @uses SocialMediaProfile::setEmail()
     * @uses SocialMediaProfile::setUrl()
     * @param string $channel
     * @param string $email
     * @param string $url
     */
    public function __construct(?string $channel = null, ?string $email = null, ?string $url = null)
    {
        $this
            ->setChannel($channel)
            ->setEmail($email)
            ->setUrl($url);
    }
    /**
     * Get channel value
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param string $channel
     * @return \BurgerDigital\eTapestry\StructType\SocialMediaProfile
     */
    public function setChannel(?string $channel = null): self
    {
        // validation for constraint: string
        if (!is_null($channel) && !is_string($channel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channel, true), gettype($channel)), __LINE__);
        }
        $this->channel = $channel;
        
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
     * @return \BurgerDigital\eTapestry\StructType\SocialMediaProfile
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
     * @return \BurgerDigital\eTapestry\StructType\SocialMediaProfile
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

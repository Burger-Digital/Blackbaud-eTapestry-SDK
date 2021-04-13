<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DonorLoginPreferences StructType
 * @subpackage Structs
 */
class DonorLoginPreferences extends AbstractStructBase
{
    /**
     * The welcomePageHtml
     * @var string|null
     */
    protected ?string $welcomePageHtml = null;
    /**
     * Constructor method for DonorLoginPreferences
     * @uses DonorLoginPreferences::setWelcomePageHtml()
     * @param string $welcomePageHtml
     */
    public function __construct(?string $welcomePageHtml = null)
    {
        $this
            ->setWelcomePageHtml($welcomePageHtml);
    }
    /**
     * Get welcomePageHtml value
     * @return string|null
     */
    public function getWelcomePageHtml(): ?string
    {
        return $this->welcomePageHtml;
    }
    /**
     * Set welcomePageHtml value
     * @param string $welcomePageHtml
     * @return \BurgerDigital\eTapestry\StructType\DonorLoginPreferences
     */
    public function setWelcomePageHtml(?string $welcomePageHtml = null): self
    {
        // validation for constraint: string
        if (!is_null($welcomePageHtml) && !is_string($welcomePageHtml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($welcomePageHtml, true), gettype($welcomePageHtml)), __LINE__);
        }
        $this->welcomePageHtml = $welcomePageHtml;
        
        return $this;
    }
}

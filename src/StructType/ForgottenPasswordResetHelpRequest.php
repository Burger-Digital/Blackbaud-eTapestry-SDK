<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForgottenPasswordResetHelpRequest StructType
 * @subpackage Structs
 */
class ForgottenPasswordResetHelpRequest extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * Constructor method for ForgottenPasswordResetHelpRequest
     * @uses ForgottenPasswordResetHelpRequest::setCode()
     * @uses ForgottenPasswordResetHelpRequest::setRef()
     * @param string $code
     * @param string $ref
     */
    public function __construct(?string $code = null, ?string $ref = null)
    {
        $this
            ->setCode($code)
            ->setRef($ref);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordResetHelpRequest
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \BurgerDigital\eTapestry\StructType\ForgottenPasswordResetHelpRequest
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
}

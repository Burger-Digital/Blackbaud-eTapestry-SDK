<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Buckaroo StructType
 * @subpackage Structs
 */
class Buckaroo extends AbstractStructBase
{
    /**
     * The note
     * @var string|null
     */
    protected ?string $note = null;
    /**
     * Constructor method for Buckaroo
     * @uses Buckaroo::setNote()
     * @param string $note
     */
    public function __construct(?string $note = null)
    {
        $this
            ->setNote($note);
    }
    /**
     * Get note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \StructType\Buckaroo
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
        
        return $this;
    }
}

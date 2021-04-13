<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attachment StructType
 * @subpackage Structs
 */
class Attachment extends AbstractStructBase
{
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The fileContent
     * @var string|null
     */
    protected ?string $fileContent = null;
    /**
     * The filename
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * The mimeType
     * @var string|null
     */
    protected ?string $mimeType = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * Constructor method for Attachment
     * @uses Attachment::setDate()
     * @uses Attachment::setFileContent()
     * @uses Attachment::setFilename()
     * @uses Attachment::setMimeType()
     * @uses Attachment::setRef()
     * @param string $date
     * @param string $fileContent
     * @param string $filename
     * @param string $mimeType
     * @param string $ref
     */
    public function __construct(?string $date = null, ?string $fileContent = null, ?string $filename = null, ?string $mimeType = null, ?string $ref = null)
    {
        $this
            ->setDate($date)
            ->setFileContent($fileContent)
            ->setFilename($filename)
            ->setMimeType($mimeType)
            ->setRef($ref);
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
     * @return \BurgerDigital\eTapestry\StructType\Attachment
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
     * Get fileContent value
     * @return string|null
     */
    public function getFileContent(): ?string
    {
        return $this->fileContent;
    }
    /**
     * Set fileContent value
     * @param string $fileContent
     * @return \BurgerDigital\eTapestry\StructType\Attachment
     */
    public function setFileContent(?string $fileContent = null): self
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->fileContent = $fileContent;
        
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \BurgerDigital\eTapestry\StructType\Attachment
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
        return $this;
    }
    /**
     * Get mimeType value
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    /**
     * Set mimeType value
     * @param string $mimeType
     * @return \BurgerDigital\eTapestry\StructType\Attachment
     */
    public function setMimeType(?string $mimeType = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->mimeType = $mimeType;
        
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
     * @return \BurgerDigital\eTapestry\StructType\Attachment
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

<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartCategory StructType
 * @subpackage Structs
 */
class CartCategory extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The image
     * @var \StructType\CartImage|null
     */
    protected ?\StructType\CartImage $image = null;
    /**
     * The immediateCategories
     * @var int|null
     */
    protected ?int $immediateCategories = null;
    /**
     * The immediateItems
     * @var int|null
     */
    protected ?int $immediateItems = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nestedCategories
     * @var int|null
     */
    protected ?int $nestedCategories = null;
    /**
     * The nestedItems
     * @var int|null
     */
    protected ?int $nestedItems = null;
    /**
     * The parents
     * Meta information extracted from the WSDL
     * - arrayType: tns:CartParent[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\CartParent[]
     */
    protected array $parents = [];
    /**
     * The publishEndDate
     * @var string|null
     */
    protected ?string $publishEndDate = null;
    /**
     * The publishStartDate
     * @var string|null
     */
    protected ?string $publishStartDate = null;
    /**
     * The publishableNow
     * @var bool|null
     */
    protected ?bool $publishableNow = null;
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for CartCategory
     * @uses CartCategory::setDescription()
     * @uses CartCategory::setDisabled()
     * @uses CartCategory::setImage()
     * @uses CartCategory::setImmediateCategories()
     * @uses CartCategory::setImmediateItems()
     * @uses CartCategory::setName()
     * @uses CartCategory::setNestedCategories()
     * @uses CartCategory::setNestedItems()
     * @uses CartCategory::setParents()
     * @uses CartCategory::setPublishEndDate()
     * @uses CartCategory::setPublishStartDate()
     * @uses CartCategory::setPublishableNow()
     * @uses CartCategory::setRef()
     * @uses CartCategory::setType()
     * @param string $description
     * @param bool $disabled
     * @param \StructType\CartImage $image
     * @param int $immediateCategories
     * @param int $immediateItems
     * @param string $name
     * @param int $nestedCategories
     * @param int $nestedItems
     * @param \StructType\CartParent[] $parents
     * @param string $publishEndDate
     * @param string $publishStartDate
     * @param bool $publishableNow
     * @param string $ref
     * @param int $type
     */
    public function __construct(?string $description = null, ?bool $disabled = null, ?\StructType\CartImage $image = null, ?int $immediateCategories = null, ?int $immediateItems = null, ?string $name = null, ?int $nestedCategories = null, ?int $nestedItems = null, array $parents = [], ?string $publishEndDate = null, ?string $publishStartDate = null, ?bool $publishableNow = null, ?string $ref = null, ?int $type = null)
    {
        $this
            ->setDescription($description)
            ->setDisabled($disabled)
            ->setImage($image)
            ->setImmediateCategories($immediateCategories)
            ->setImmediateItems($immediateItems)
            ->setName($name)
            ->setNestedCategories($nestedCategories)
            ->setNestedItems($nestedItems)
            ->setParents($parents)
            ->setPublishEndDate($publishEndDate)
            ->setPublishStartDate($publishStartDate)
            ->setPublishableNow($publishableNow)
            ->setRef($ref)
            ->setType($type);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\CartCategory
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \StructType\CartCategory
     */
    public function setDisabled(?bool $disabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        
        return $this;
    }
    /**
     * Get image value
     * @return \StructType\CartImage|null
     */
    public function getImage(): ?\StructType\CartImage
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param \StructType\CartImage $image
     * @return \StructType\CartCategory
     */
    public function setImage(?\StructType\CartImage $image = null): self
    {
        $this->image = $image;
        
        return $this;
    }
    /**
     * Get immediateCategories value
     * @return int|null
     */
    public function getImmediateCategories(): ?int
    {
        return $this->immediateCategories;
    }
    /**
     * Set immediateCategories value
     * @param int $immediateCategories
     * @return \StructType\CartCategory
     */
    public function setImmediateCategories(?int $immediateCategories = null): self
    {
        // validation for constraint: int
        if (!is_null($immediateCategories) && !(is_int($immediateCategories) || ctype_digit($immediateCategories))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($immediateCategories, true), gettype($immediateCategories)), __LINE__);
        }
        $this->immediateCategories = $immediateCategories;
        
        return $this;
    }
    /**
     * Get immediateItems value
     * @return int|null
     */
    public function getImmediateItems(): ?int
    {
        return $this->immediateItems;
    }
    /**
     * Set immediateItems value
     * @param int $immediateItems
     * @return \StructType\CartCategory
     */
    public function setImmediateItems(?int $immediateItems = null): self
    {
        // validation for constraint: int
        if (!is_null($immediateItems) && !(is_int($immediateItems) || ctype_digit($immediateItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($immediateItems, true), gettype($immediateItems)), __LINE__);
        }
        $this->immediateItems = $immediateItems;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\CartCategory
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get nestedCategories value
     * @return int|null
     */
    public function getNestedCategories(): ?int
    {
        return $this->nestedCategories;
    }
    /**
     * Set nestedCategories value
     * @param int $nestedCategories
     * @return \StructType\CartCategory
     */
    public function setNestedCategories(?int $nestedCategories = null): self
    {
        // validation for constraint: int
        if (!is_null($nestedCategories) && !(is_int($nestedCategories) || ctype_digit($nestedCategories))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nestedCategories, true), gettype($nestedCategories)), __LINE__);
        }
        $this->nestedCategories = $nestedCategories;
        
        return $this;
    }
    /**
     * Get nestedItems value
     * @return int|null
     */
    public function getNestedItems(): ?int
    {
        return $this->nestedItems;
    }
    /**
     * Set nestedItems value
     * @param int $nestedItems
     * @return \StructType\CartCategory
     */
    public function setNestedItems(?int $nestedItems = null): self
    {
        // validation for constraint: int
        if (!is_null($nestedItems) && !(is_int($nestedItems) || ctype_digit($nestedItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nestedItems, true), gettype($nestedItems)), __LINE__);
        }
        $this->nestedItems = $nestedItems;
        
        return $this;
    }
    /**
     * Get parents value
     * @return \StructType\CartParent[]
     */
    public function getParents(): array
    {
        return $this->parents;
    }
    /**
     * This method is responsible for validating the values passed to the setParents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParentsForArrayConstraintsFromSetParents(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartCategoryParentsItem) {
            // validation for constraint: itemType
            if (!$cartCategoryParentsItem instanceof \StructType\CartParent) {
                $invalidValues[] = is_object($cartCategoryParentsItem) ? get_class($cartCategoryParentsItem) : sprintf('%s(%s)', gettype($cartCategoryParentsItem), var_export($cartCategoryParentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parents property can only contain items of type \StructType\CartParent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parents value
     * @throws InvalidArgumentException
     * @param \StructType\CartParent[] $parents
     * @return \StructType\CartCategory
     */
    public function setParents(array $parents = []): self
    {
        // validation for constraint: array
        if ('' !== ($parentsArrayErrorMessage = self::validateParentsForArrayConstraintsFromSetParents($parents))) {
            throw new InvalidArgumentException($parentsArrayErrorMessage, __LINE__);
        }
        $this->parents = $parents;
        
        return $this;
    }
    /**
     * Add item to parents value
     * @throws InvalidArgumentException
     * @param \StructType\CartParent $item
     * @return \StructType\CartCategory
     */
    public function addToParents(\StructType\CartParent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CartParent) {
            throw new InvalidArgumentException(sprintf('The parents property can only contain items of type \StructType\CartParent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parents[] = $item;
        
        return $this;
    }
    /**
     * Get publishEndDate value
     * @return string|null
     */
    public function getPublishEndDate(): ?string
    {
        return $this->publishEndDate;
    }
    /**
     * Set publishEndDate value
     * @param string $publishEndDate
     * @return \StructType\CartCategory
     */
    public function setPublishEndDate(?string $publishEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($publishEndDate) && !is_string($publishEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publishEndDate, true), gettype($publishEndDate)), __LINE__);
        }
        $this->publishEndDate = $publishEndDate;
        
        return $this;
    }
    /**
     * Get publishStartDate value
     * @return string|null
     */
    public function getPublishStartDate(): ?string
    {
        return $this->publishStartDate;
    }
    /**
     * Set publishStartDate value
     * @param string $publishStartDate
     * @return \StructType\CartCategory
     */
    public function setPublishStartDate(?string $publishStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($publishStartDate) && !is_string($publishStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publishStartDate, true), gettype($publishStartDate)), __LINE__);
        }
        $this->publishStartDate = $publishStartDate;
        
        return $this;
    }
    /**
     * Get publishableNow value
     * @return bool|null
     */
    public function getPublishableNow(): ?bool
    {
        return $this->publishableNow;
    }
    /**
     * Set publishableNow value
     * @param bool $publishableNow
     * @return \StructType\CartCategory
     */
    public function setPublishableNow(?bool $publishableNow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($publishableNow) && !is_bool($publishableNow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($publishableNow, true), gettype($publishableNow)), __LINE__);
        }
        $this->publishableNow = $publishableNow;
        
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
     * @return \StructType\CartCategory
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
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \StructType\CartCategory
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}

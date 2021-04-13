<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartItem StructType
 * @subpackage Structs
 */
class CartItem extends AbstractStructBase
{
    /**
     * The bestCompDiscountPrice
     * @var float|null
     */
    protected ?float $bestCompDiscountPrice = null;
    /**
     * The disabled
     * @var bool|null
     */
    protected ?bool $disabled = null;
    /**
     * The discounts
     * Meta information extracted from the WSDL
     * - arrayType: tns:CartItemDiscount[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\CartItemDiscount[]
     */
    protected array $discounts = [];
    /**
     * The longDescription
     * @var string|null
     */
    protected ?string $longDescription = null;
    /**
     * The manageQuantity
     * @var bool|null
     */
    protected ?bool $manageQuantity = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nonDeductibleAmount
     * @var float|null
     */
    protected ?float $nonDeductibleAmount = null;
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
     * The pricingType
     * @var int|null
     */
    protected ?int $pricingType = null;
    /**
     * The publicizeQuantity
     * @var bool|null
     */
    protected ?bool $publicizeQuantity = null;
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
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The questions
     * Meta information extracted from the WSDL
     * - arrayType: tns:Question[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\Question[]
     */
    protected array $questions = [];
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The regularImages
     * Meta information extracted from the WSDL
     * - arrayType: tns:CartImage[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \StructType\CartImage[]
     */
    protected array $regularImages = [];
    /**
     * The regularPrice
     * @var float|null
     */
    protected ?float $regularPrice = null;
    /**
     * The shippable
     * @var bool|null
     */
    protected ?bool $shippable = null;
    /**
     * The shippingPrice
     * @var float|null
     */
    protected ?float $shippingPrice = null;
    /**
     * The shortDescription
     * @var string|null
     */
    protected ?string $shortDescription = null;
    /**
     * The taxableAmount
     * @var float|null
     */
    protected ?float $taxableAmount = null;
    /**
     * The thumbImage
     * @var \StructType\CartImage|null
     */
    protected ?\StructType\CartImage $thumbImage = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for CartItem
     * @uses CartItem::setBestCompDiscountPrice()
     * @uses CartItem::setDisabled()
     * @uses CartItem::setDiscounts()
     * @uses CartItem::setLongDescription()
     * @uses CartItem::setManageQuantity()
     * @uses CartItem::setName()
     * @uses CartItem::setNonDeductibleAmount()
     * @uses CartItem::setParents()
     * @uses CartItem::setPricingType()
     * @uses CartItem::setPublicizeQuantity()
     * @uses CartItem::setPublishEndDate()
     * @uses CartItem::setPublishStartDate()
     * @uses CartItem::setPublishableNow()
     * @uses CartItem::setQuantity()
     * @uses CartItem::setQuestions()
     * @uses CartItem::setRef()
     * @uses CartItem::setRegularImages()
     * @uses CartItem::setRegularPrice()
     * @uses CartItem::setShippable()
     * @uses CartItem::setShippingPrice()
     * @uses CartItem::setShortDescription()
     * @uses CartItem::setTaxableAmount()
     * @uses CartItem::setThumbImage()
     * @uses CartItem::setType()
     * @param float $bestCompDiscountPrice
     * @param bool $disabled
     * @param \StructType\CartItemDiscount[] $discounts
     * @param string $longDescription
     * @param bool $manageQuantity
     * @param string $name
     * @param float $nonDeductibleAmount
     * @param \StructType\CartParent[] $parents
     * @param int $pricingType
     * @param bool $publicizeQuantity
     * @param string $publishEndDate
     * @param string $publishStartDate
     * @param bool $publishableNow
     * @param int $quantity
     * @param \StructType\Question[] $questions
     * @param string $ref
     * @param \StructType\CartImage[] $regularImages
     * @param float $regularPrice
     * @param bool $shippable
     * @param float $shippingPrice
     * @param string $shortDescription
     * @param float $taxableAmount
     * @param \StructType\CartImage $thumbImage
     * @param int $type
     */
    public function __construct(?float $bestCompDiscountPrice = null, ?bool $disabled = null, array $discounts = [], ?string $longDescription = null, ?bool $manageQuantity = null, ?string $name = null, ?float $nonDeductibleAmount = null, array $parents = [], ?int $pricingType = null, ?bool $publicizeQuantity = null, ?string $publishEndDate = null, ?string $publishStartDate = null, ?bool $publishableNow = null, ?int $quantity = null, array $questions = [], ?string $ref = null, array $regularImages = [], ?float $regularPrice = null, ?bool $shippable = null, ?float $shippingPrice = null, ?string $shortDescription = null, ?float $taxableAmount = null, ?\StructType\CartImage $thumbImage = null, ?int $type = null)
    {
        $this
            ->setBestCompDiscountPrice($bestCompDiscountPrice)
            ->setDisabled($disabled)
            ->setDiscounts($discounts)
            ->setLongDescription($longDescription)
            ->setManageQuantity($manageQuantity)
            ->setName($name)
            ->setNonDeductibleAmount($nonDeductibleAmount)
            ->setParents($parents)
            ->setPricingType($pricingType)
            ->setPublicizeQuantity($publicizeQuantity)
            ->setPublishEndDate($publishEndDate)
            ->setPublishStartDate($publishStartDate)
            ->setPublishableNow($publishableNow)
            ->setQuantity($quantity)
            ->setQuestions($questions)
            ->setRef($ref)
            ->setRegularImages($regularImages)
            ->setRegularPrice($regularPrice)
            ->setShippable($shippable)
            ->setShippingPrice($shippingPrice)
            ->setShortDescription($shortDescription)
            ->setTaxableAmount($taxableAmount)
            ->setThumbImage($thumbImage)
            ->setType($type);
    }
    /**
     * Get bestCompDiscountPrice value
     * @return float|null
     */
    public function getBestCompDiscountPrice(): ?float
    {
        return $this->bestCompDiscountPrice;
    }
    /**
     * Set bestCompDiscountPrice value
     * @param float $bestCompDiscountPrice
     * @return \StructType\CartItem
     */
    public function setBestCompDiscountPrice(?float $bestCompDiscountPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bestCompDiscountPrice) && !(is_float($bestCompDiscountPrice) || is_numeric($bestCompDiscountPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestCompDiscountPrice, true), gettype($bestCompDiscountPrice)), __LINE__);
        }
        $this->bestCompDiscountPrice = $bestCompDiscountPrice;
        
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
     * @return \StructType\CartItem
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
     * Get discounts value
     * @return \StructType\CartItemDiscount[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscounts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscounts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountsForArrayConstraintsFromSetDiscounts(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartItemDiscountsItem) {
            // validation for constraint: itemType
            if (!$cartItemDiscountsItem instanceof \StructType\CartItemDiscount) {
                $invalidValues[] = is_object($cartItemDiscountsItem) ? get_class($cartItemDiscountsItem) : sprintf('%s(%s)', gettype($cartItemDiscountsItem), var_export($cartItemDiscountsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The discounts property can only contain items of type \StructType\CartItemDiscount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set discounts value
     * @throws InvalidArgumentException
     * @param \StructType\CartItemDiscount[] $discounts
     * @return \StructType\CartItem
     */
    public function setDiscounts(array $discounts = []): self
    {
        // validation for constraint: array
        if ('' !== ($discountsArrayErrorMessage = self::validateDiscountsForArrayConstraintsFromSetDiscounts($discounts))) {
            throw new InvalidArgumentException($discountsArrayErrorMessage, __LINE__);
        }
        $this->discounts = $discounts;
        
        return $this;
    }
    /**
     * Add item to discounts value
     * @throws InvalidArgumentException
     * @param \StructType\CartItemDiscount $item
     * @return \StructType\CartItem
     */
    public function addToDiscounts(\StructType\CartItemDiscount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CartItemDiscount) {
            throw new InvalidArgumentException(sprintf('The discounts property can only contain items of type \StructType\CartItemDiscount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->discounts[] = $item;
        
        return $this;
    }
    /**
     * Get longDescription value
     * @return string|null
     */
    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }
    /**
     * Set longDescription value
     * @param string $longDescription
     * @return \StructType\CartItem
     */
    public function setLongDescription(?string $longDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($longDescription) && !is_string($longDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longDescription, true), gettype($longDescription)), __LINE__);
        }
        $this->longDescription = $longDescription;
        
        return $this;
    }
    /**
     * Get manageQuantity value
     * @return bool|null
     */
    public function getManageQuantity(): ?bool
    {
        return $this->manageQuantity;
    }
    /**
     * Set manageQuantity value
     * @param bool $manageQuantity
     * @return \StructType\CartItem
     */
    public function setManageQuantity(?bool $manageQuantity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manageQuantity) && !is_bool($manageQuantity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manageQuantity, true), gettype($manageQuantity)), __LINE__);
        }
        $this->manageQuantity = $manageQuantity;
        
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
     * @return \StructType\CartItem
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
     * Get nonDeductibleAmount value
     * @return float|null
     */
    public function getNonDeductibleAmount(): ?float
    {
        return $this->nonDeductibleAmount;
    }
    /**
     * Set nonDeductibleAmount value
     * @param float $nonDeductibleAmount
     * @return \StructType\CartItem
     */
    public function setNonDeductibleAmount(?float $nonDeductibleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nonDeductibleAmount) && !(is_float($nonDeductibleAmount) || is_numeric($nonDeductibleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nonDeductibleAmount, true), gettype($nonDeductibleAmount)), __LINE__);
        }
        $this->nonDeductibleAmount = $nonDeductibleAmount;
        
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
        foreach ($values as $cartItemParentsItem) {
            // validation for constraint: itemType
            if (!$cartItemParentsItem instanceof \StructType\CartParent) {
                $invalidValues[] = is_object($cartItemParentsItem) ? get_class($cartItemParentsItem) : sprintf('%s(%s)', gettype($cartItemParentsItem), var_export($cartItemParentsItem, true));
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
     * @return \StructType\CartItem
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
     * @return \StructType\CartItem
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
     * Get pricingType value
     * @return int|null
     */
    public function getPricingType(): ?int
    {
        return $this->pricingType;
    }
    /**
     * Set pricingType value
     * @param int $pricingType
     * @return \StructType\CartItem
     */
    public function setPricingType(?int $pricingType = null): self
    {
        // validation for constraint: int
        if (!is_null($pricingType) && !(is_int($pricingType) || ctype_digit($pricingType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pricingType, true), gettype($pricingType)), __LINE__);
        }
        $this->pricingType = $pricingType;
        
        return $this;
    }
    /**
     * Get publicizeQuantity value
     * @return bool|null
     */
    public function getPublicizeQuantity(): ?bool
    {
        return $this->publicizeQuantity;
    }
    /**
     * Set publicizeQuantity value
     * @param bool $publicizeQuantity
     * @return \StructType\CartItem
     */
    public function setPublicizeQuantity(?bool $publicizeQuantity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($publicizeQuantity) && !is_bool($publicizeQuantity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($publicizeQuantity, true), gettype($publicizeQuantity)), __LINE__);
        }
        $this->publicizeQuantity = $publicizeQuantity;
        
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
     * @return \StructType\CartItem
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
     * @return \StructType\CartItem
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
     * @return \StructType\CartItem
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
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \StructType\CartItem
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get questions value
     * @return \StructType\Question[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }
    /**
     * This method is responsible for validating the values passed to the setQuestions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQuestions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQuestionsForArrayConstraintsFromSetQuestions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartItemQuestionsItem) {
            // validation for constraint: itemType
            if (!$cartItemQuestionsItem instanceof \StructType\Question) {
                $invalidValues[] = is_object($cartItemQuestionsItem) ? get_class($cartItemQuestionsItem) : sprintf('%s(%s)', gettype($cartItemQuestionsItem), var_export($cartItemQuestionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The questions property can only contain items of type \StructType\Question, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set questions value
     * @throws InvalidArgumentException
     * @param \StructType\Question[] $questions
     * @return \StructType\CartItem
     */
    public function setQuestions(array $questions = []): self
    {
        // validation for constraint: array
        if ('' !== ($questionsArrayErrorMessage = self::validateQuestionsForArrayConstraintsFromSetQuestions($questions))) {
            throw new InvalidArgumentException($questionsArrayErrorMessage, __LINE__);
        }
        $this->questions = $questions;
        
        return $this;
    }
    /**
     * Add item to questions value
     * @throws InvalidArgumentException
     * @param \StructType\Question $item
     * @return \StructType\CartItem
     */
    public function addToQuestions(\StructType\Question $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Question) {
            throw new InvalidArgumentException(sprintf('The questions property can only contain items of type \StructType\Question, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->questions[] = $item;
        
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
     * @return \StructType\CartItem
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
     * Get regularImages value
     * @return \StructType\CartImage[]
     */
    public function getRegularImages(): array
    {
        return $this->regularImages;
    }
    /**
     * This method is responsible for validating the values passed to the setRegularImages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegularImages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegularImagesForArrayConstraintsFromSetRegularImages(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartItemRegularImagesItem) {
            // validation for constraint: itemType
            if (!$cartItemRegularImagesItem instanceof \StructType\CartImage) {
                $invalidValues[] = is_object($cartItemRegularImagesItem) ? get_class($cartItemRegularImagesItem) : sprintf('%s(%s)', gettype($cartItemRegularImagesItem), var_export($cartItemRegularImagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The regularImages property can only contain items of type \StructType\CartImage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set regularImages value
     * @throws InvalidArgumentException
     * @param \StructType\CartImage[] $regularImages
     * @return \StructType\CartItem
     */
    public function setRegularImages(array $regularImages = []): self
    {
        // validation for constraint: array
        if ('' !== ($regularImagesArrayErrorMessage = self::validateRegularImagesForArrayConstraintsFromSetRegularImages($regularImages))) {
            throw new InvalidArgumentException($regularImagesArrayErrorMessage, __LINE__);
        }
        $this->regularImages = $regularImages;
        
        return $this;
    }
    /**
     * Add item to regularImages value
     * @throws InvalidArgumentException
     * @param \StructType\CartImage $item
     * @return \StructType\CartItem
     */
    public function addToRegularImages(\StructType\CartImage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CartImage) {
            throw new InvalidArgumentException(sprintf('The regularImages property can only contain items of type \StructType\CartImage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->regularImages[] = $item;
        
        return $this;
    }
    /**
     * Get regularPrice value
     * @return float|null
     */
    public function getRegularPrice(): ?float
    {
        return $this->regularPrice;
    }
    /**
     * Set regularPrice value
     * @param float $regularPrice
     * @return \StructType\CartItem
     */
    public function setRegularPrice(?float $regularPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($regularPrice) && !(is_float($regularPrice) || is_numeric($regularPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($regularPrice, true), gettype($regularPrice)), __LINE__);
        }
        $this->regularPrice = $regularPrice;
        
        return $this;
    }
    /**
     * Get shippable value
     * @return bool|null
     */
    public function getShippable(): ?bool
    {
        return $this->shippable;
    }
    /**
     * Set shippable value
     * @param bool $shippable
     * @return \StructType\CartItem
     */
    public function setShippable(?bool $shippable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippable) && !is_bool($shippable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippable, true), gettype($shippable)), __LINE__);
        }
        $this->shippable = $shippable;
        
        return $this;
    }
    /**
     * Get shippingPrice value
     * @return float|null
     */
    public function getShippingPrice(): ?float
    {
        return $this->shippingPrice;
    }
    /**
     * Set shippingPrice value
     * @param float $shippingPrice
     * @return \StructType\CartItem
     */
    public function setShippingPrice(?float $shippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($shippingPrice) && !(is_float($shippingPrice) || is_numeric($shippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippingPrice, true), gettype($shippingPrice)), __LINE__);
        }
        $this->shippingPrice = $shippingPrice;
        
        return $this;
    }
    /**
     * Get shortDescription value
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }
    /**
     * Set shortDescription value
     * @param string $shortDescription
     * @return \StructType\CartItem
     */
    public function setShortDescription(?string $shortDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortDescription, true), gettype($shortDescription)), __LINE__);
        }
        $this->shortDescription = $shortDescription;
        
        return $this;
    }
    /**
     * Get taxableAmount value
     * @return float|null
     */
    public function getTaxableAmount(): ?float
    {
        return $this->taxableAmount;
    }
    /**
     * Set taxableAmount value
     * @param float $taxableAmount
     * @return \StructType\CartItem
     */
    public function setTaxableAmount(?float $taxableAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxableAmount) && !(is_float($taxableAmount) || is_numeric($taxableAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxableAmount, true), gettype($taxableAmount)), __LINE__);
        }
        $this->taxableAmount = $taxableAmount;
        
        return $this;
    }
    /**
     * Get thumbImage value
     * @return \StructType\CartImage|null
     */
    public function getThumbImage(): ?\StructType\CartImage
    {
        return $this->thumbImage;
    }
    /**
     * Set thumbImage value
     * @param \StructType\CartImage $thumbImage
     * @return \StructType\CartItem
     */
    public function setThumbImage(?\StructType\CartImage $thumbImage = null): self
    {
        $this->thumbImage = $thumbImage;
        
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
     * @return \StructType\CartItem
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

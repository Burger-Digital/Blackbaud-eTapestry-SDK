<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CartItem implements ResultInterface
{

    /**
     * @var float
     */
    private $bestCompDiscountPrice;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var \BurgerDigital\eTapestry\Type\CartItemDiscount
     */
    private $discounts;

    /**
     * @var string
     */
    private $longDescription;

    /**
     * @var bool
     */
    private $manageQuantity;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $nonDeductibleAmount;

    /**
     * @var \BurgerDigital\eTapestry\Type\CartParent
     */
    private $parents;

    /**
     * @var int
     */
    private $pricingType;

    /**
     * @var bool
     */
    private $publicizeQuantity;

    /**
     * @var string
     */
    private $publishEndDate;

    /**
     * @var string
     */
    private $publishStartDate;

    /**
     * @var bool
     */
    private $publishableNow;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var \BurgerDigital\eTapestry\Type\Question
     */
    private $questions;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \BurgerDigital\eTapestry\Type\CartImage
     */
    private $regularImages;

    /**
     * @var float
     */
    private $regularPrice;

    /**
     * @var bool
     */
    private $shippable;

    /**
     * @var float
     */
    private $shippingPrice;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var float
     */
    private $taxableAmount;

    /**
     * @var \BurgerDigital\eTapestry\Type\CartImage
     */
    private $thumbImage;

    /**
     * @var int
     */
    private $type;

    /**
     * @return float
     */
    public function getBestCompDiscountPrice()
    {
        return $this->bestCompDiscountPrice;
    }

    /**
     * @param float $bestCompDiscountPrice
     * @return CartItem
     */
    public function withBestCompDiscountPrice($bestCompDiscountPrice)
    {
        $new = clone $this;
        $new->bestCompDiscountPrice = $bestCompDiscountPrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return CartItem
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CartItemDiscount
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CartItemDiscount $discounts
     * @return CartItem
     */
    public function withDiscounts($discounts)
    {
        $new = clone $this;
        $new->discounts = $discounts;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return CartItem
     */
    public function withLongDescription($longDescription)
    {
        $new = clone $this;
        $new->longDescription = $longDescription;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManageQuantity()
    {
        return $this->manageQuantity;
    }

    /**
     * @param bool $manageQuantity
     * @return CartItem
     */
    public function withManageQuantity($manageQuantity)
    {
        $new = clone $this;
        $new->manageQuantity = $manageQuantity;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CartItem
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return float
     */
    public function getNonDeductibleAmount()
    {
        return $this->nonDeductibleAmount;
    }

    /**
     * @param float $nonDeductibleAmount
     * @return CartItem
     */
    public function withNonDeductibleAmount($nonDeductibleAmount)
    {
        $new = clone $this;
        $new->nonDeductibleAmount = $nonDeductibleAmount;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CartParent
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CartParent $parents
     * @return CartItem
     */
    public function withParents($parents)
    {
        $new = clone $this;
        $new->parents = $parents;

        return $new;
    }

    /**
     * @return int
     */
    public function getPricingType()
    {
        return $this->pricingType;
    }

    /**
     * @param int $pricingType
     * @return CartItem
     */
    public function withPricingType($pricingType)
    {
        $new = clone $this;
        $new->pricingType = $pricingType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPublicizeQuantity()
    {
        return $this->publicizeQuantity;
    }

    /**
     * @param bool $publicizeQuantity
     * @return CartItem
     */
    public function withPublicizeQuantity($publicizeQuantity)
    {
        $new = clone $this;
        $new->publicizeQuantity = $publicizeQuantity;

        return $new;
    }

    /**
     * @return string
     */
    public function getPublishEndDate()
    {
        return $this->publishEndDate;
    }

    /**
     * @param string $publishEndDate
     * @return CartItem
     */
    public function withPublishEndDate($publishEndDate)
    {
        $new = clone $this;
        $new->publishEndDate = $publishEndDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPublishStartDate()
    {
        return $this->publishStartDate;
    }

    /**
     * @param string $publishStartDate
     * @return CartItem
     */
    public function withPublishStartDate($publishStartDate)
    {
        $new = clone $this;
        $new->publishStartDate = $publishStartDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPublishableNow()
    {
        return $this->publishableNow;
    }

    /**
     * @param bool $publishableNow
     * @return CartItem
     */
    public function withPublishableNow($publishableNow)
    {
        $new = clone $this;
        $new->publishableNow = $publishableNow;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return CartItem
     */
    public function withQuantity($quantity)
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Question
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Question $questions
     * @return CartItem
     */
    public function withQuestions($questions)
    {
        $new = clone $this;
        $new->questions = $questions;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return CartItem
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CartImage
     */
    public function getRegularImages()
    {
        return $this->regularImages;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CartImage $regularImages
     * @return CartItem
     */
    public function withRegularImages($regularImages)
    {
        $new = clone $this;
        $new->regularImages = $regularImages;

        return $new;
    }

    /**
     * @return float
     */
    public function getRegularPrice()
    {
        return $this->regularPrice;
    }

    /**
     * @param float $regularPrice
     * @return CartItem
     */
    public function withRegularPrice($regularPrice)
    {
        $new = clone $this;
        $new->regularPrice = $regularPrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShippable()
    {
        return $this->shippable;
    }

    /**
     * @param bool $shippable
     * @return CartItem
     */
    public function withShippable($shippable)
    {
        $new = clone $this;
        $new->shippable = $shippable;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }

    /**
     * @param float $shippingPrice
     * @return CartItem
     */
    public function withShippingPrice($shippingPrice)
    {
        $new = clone $this;
        $new->shippingPrice = $shippingPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return CartItem
     */
    public function withShortDescription($shortDescription)
    {
        $new = clone $this;
        $new->shortDescription = $shortDescription;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * @param float $taxableAmount
     * @return CartItem
     */
    public function withTaxableAmount($taxableAmount)
    {
        $new = clone $this;
        $new->taxableAmount = $taxableAmount;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CartImage
     */
    public function getThumbImage()
    {
        return $this->thumbImage;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CartImage $thumbImage
     * @return CartItem
     */
    public function withThumbImage($thumbImage)
    {
        $new = clone $this;
        $new->thumbImage = $thumbImage;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return CartItem
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}


<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CartCategory implements ResultInterface
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var \BurgerDigital\Type\CartImage
     */
    private $image;

    /**
     * @var int
     */
    private $immediateCategories;

    /**
     * @var int
     */
    private $immediateItems;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nestedCategories;

    /**
     * @var int
     */
    private $nestedItems;

    /**
     * @var \BurgerDigital\Type\CartParent
     */
    private $parents;

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
     * @var string
     */
    private $ref;

    /**
     * @var int
     */
    private $type;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return CartCategory
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return CartCategory
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\CartImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\CartImage $image
     * @return CartCategory
     */
    public function withImage($image)
    {
        $new = clone $this;
        $new->image = $image;

        return $new;
    }

    /**
     * @return int
     */
    public function getImmediateCategories()
    {
        return $this->immediateCategories;
    }

    /**
     * @param int $immediateCategories
     * @return CartCategory
     */
    public function withImmediateCategories($immediateCategories)
    {
        $new = clone $this;
        $new->immediateCategories = $immediateCategories;

        return $new;
    }

    /**
     * @return int
     */
    public function getImmediateItems()
    {
        return $this->immediateItems;
    }

    /**
     * @param int $immediateItems
     * @return CartCategory
     */
    public function withImmediateItems($immediateItems)
    {
        $new = clone $this;
        $new->immediateItems = $immediateItems;

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
     * @return CartCategory
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return int
     */
    public function getNestedCategories()
    {
        return $this->nestedCategories;
    }

    /**
     * @param int $nestedCategories
     * @return CartCategory
     */
    public function withNestedCategories($nestedCategories)
    {
        $new = clone $this;
        $new->nestedCategories = $nestedCategories;

        return $new;
    }

    /**
     * @return int
     */
    public function getNestedItems()
    {
        return $this->nestedItems;
    }

    /**
     * @param int $nestedItems
     * @return CartCategory
     */
    public function withNestedItems($nestedItems)
    {
        $new = clone $this;
        $new->nestedItems = $nestedItems;

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
     * @return CartCategory
     */
    public function withParents($parents)
    {
        $new = clone $this;
        $new->parents = $parents;

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
     * @return CartCategory
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
     * @return CartCategory
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
     * @return CartCategory
     */
    public function withPublishableNow($publishableNow)
    {
        $new = clone $this;
        $new->publishableNow = $publishableNow;

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
     * @return CartCategory
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

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
     * @return CartCategory
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}


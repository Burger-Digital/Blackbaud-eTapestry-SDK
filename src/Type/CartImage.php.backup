<?php

namespace BurgerDigital\Type;

class CartImage
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return CartImage
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return CartImage
     */
    public function withUrl($url)
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }


}


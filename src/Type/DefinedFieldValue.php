<?php

namespace BurgerDigital\eTapestry\Type;

class DefinedFieldValue
{

    /**
     * @var string
     */
    private $desc;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return DefinedFieldValue
     */
    public function withDesc($desc)
    {
        $new = clone $this;
        $new->desc = $desc;

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
     * @return DefinedFieldValue
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

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
     * @return DefinedFieldValue
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return DefinedFieldValue
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }


}


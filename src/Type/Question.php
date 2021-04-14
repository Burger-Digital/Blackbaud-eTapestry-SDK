<?php

namespace BurgerDigital\Type;

class Question
{

    /**
     * @var string
     */
    private $displayText;

    /**
     * @var \BurgerDigital\Type\DefinedField
     */
    private $field;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var bool
     */
    private $required;

    /**
     * @return string
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }

    /**
     * @param string $displayText
     * @return Question
     */
    public function withDisplayText($displayText)
    {
        $new = clone $this;
        $new->displayText = $displayText;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\DefinedField
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\DefinedField $field
     * @return Question
     */
    public function withField($field)
    {
        $new = clone $this;
        $new->field = $field;

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
     * @return Question
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Question
     */
    public function withRequired($required)
    {
        $new = clone $this;
        $new->required = $required;

        return $new;
    }


}


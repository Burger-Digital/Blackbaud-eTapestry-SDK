<?php

namespace BurgerDigital\Type;

class SearchCriteria
{

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $values;

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return SearchCriteria
     */
    public function withAction($action)
    {
        $new = clone $this;
        $new->action = $action;

        return $new;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return SearchCriteria
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return SearchCriteria
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string $values
     * @return SearchCriteria
     */
    public function withValues($values)
    {
        $new = clone $this;
        $new->values = $values;

        return $new;
    }


}


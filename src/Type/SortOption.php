<?php

namespace BurgerDigital\Type;

class SortOption
{

    /**
     * @var bool
     */
    private $ascending;

    /**
     * @var string
     */
    private $field;

    /**
     * @return bool
     */
    public function getAscending()
    {
        return $this->ascending;
    }

    /**
     * @param bool $ascending
     * @return SortOption
     */
    public function withAscending($ascending)
    {
        $new = clone $this;
        $new->ascending = $ascending;

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
     * @return SortOption
     */
    public function withField($field)
    {
        $new = clone $this;
        $new->field = $field;

        return $new;
    }


}


<?php

namespace BurgerDigital\Type;

class Cash
{

    /**
     * @var string
     */
    private $note;

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return Cash
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }


}


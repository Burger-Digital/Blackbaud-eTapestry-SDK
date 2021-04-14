<?php

namespace BurgerDigital\eTapestry\Type;

class Buckaroo
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
     * @return Buckaroo
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }


}


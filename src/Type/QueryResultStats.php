<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class QueryResultStats implements ResultInterface
{

    /**
     * @var float
     */
    private $gifted;

    /**
     * @var int
     */
    private $journalEntryCount;

    /**
     * @var float
     */
    private $pledged;

    /**
     * @var float
     */
    private $raised;

    /**
     * @var float
     */
    private $received;

    /**
     * @var int
     */
    private $transactionCount;

    /**
     * @return float
     */
    public function getGifted()
    {
        return $this->gifted;
    }

    /**
     * @param float $gifted
     * @return QueryResultStats
     */
    public function withGifted($gifted)
    {
        $new = clone $this;
        $new->gifted = $gifted;

        return $new;
    }

    /**
     * @return int
     */
    public function getJournalEntryCount()
    {
        return $this->journalEntryCount;
    }

    /**
     * @param int $journalEntryCount
     * @return QueryResultStats
     */
    public function withJournalEntryCount($journalEntryCount)
    {
        $new = clone $this;
        $new->journalEntryCount = $journalEntryCount;

        return $new;
    }

    /**
     * @return float
     */
    public function getPledged()
    {
        return $this->pledged;
    }

    /**
     * @param float $pledged
     * @return QueryResultStats
     */
    public function withPledged($pledged)
    {
        $new = clone $this;
        $new->pledged = $pledged;

        return $new;
    }

    /**
     * @return float
     */
    public function getRaised()
    {
        return $this->raised;
    }

    /**
     * @param float $raised
     * @return QueryResultStats
     */
    public function withRaised($raised)
    {
        $new = clone $this;
        $new->raised = $raised;

        return $new;
    }

    /**
     * @return float
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * @param float $received
     * @return QueryResultStats
     */
    public function withReceived($received)
    {
        $new = clone $this;
        $new->received = $received;

        return $new;
    }

    /**
     * @return int
     */
    public function getTransactionCount()
    {
        return $this->transactionCount;
    }

    /**
     * @param int $transactionCount
     * @return QueryResultStats
     */
    public function withTransactionCount($transactionCount)
    {
        $new = clone $this;
        $new->transactionCount = $transactionCount;

        return $new;
    }


}


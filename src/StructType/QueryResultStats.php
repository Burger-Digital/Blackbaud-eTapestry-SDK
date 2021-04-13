<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryResultStats StructType
 * @subpackage Structs
 */
class QueryResultStats extends AbstractStructBase
{
    /**
     * The gifted
     * @var float|null
     */
    protected ?float $gifted = null;
    /**
     * The journalEntryCount
     * @var int|null
     */
    protected ?int $journalEntryCount = null;
    /**
     * The pledged
     * @var float|null
     */
    protected ?float $pledged = null;
    /**
     * The raised
     * @var float|null
     */
    protected ?float $raised = null;
    /**
     * The received
     * @var float|null
     */
    protected ?float $received = null;
    /**
     * The transactionCount
     * @var int|null
     */
    protected ?int $transactionCount = null;
    /**
     * Constructor method for QueryResultStats
     * @uses QueryResultStats::setGifted()
     * @uses QueryResultStats::setJournalEntryCount()
     * @uses QueryResultStats::setPledged()
     * @uses QueryResultStats::setRaised()
     * @uses QueryResultStats::setReceived()
     * @uses QueryResultStats::setTransactionCount()
     * @param float $gifted
     * @param int $journalEntryCount
     * @param float $pledged
     * @param float $raised
     * @param float $received
     * @param int $transactionCount
     */
    public function __construct(?float $gifted = null, ?int $journalEntryCount = null, ?float $pledged = null, ?float $raised = null, ?float $received = null, ?int $transactionCount = null)
    {
        $this
            ->setGifted($gifted)
            ->setJournalEntryCount($journalEntryCount)
            ->setPledged($pledged)
            ->setRaised($raised)
            ->setReceived($received)
            ->setTransactionCount($transactionCount);
    }
    /**
     * Get gifted value
     * @return float|null
     */
    public function getGifted(): ?float
    {
        return $this->gifted;
    }
    /**
     * Set gifted value
     * @param float $gifted
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setGifted(?float $gifted = null): self
    {
        // validation for constraint: float
        if (!is_null($gifted) && !(is_float($gifted) || is_numeric($gifted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($gifted, true), gettype($gifted)), __LINE__);
        }
        $this->gifted = $gifted;
        
        return $this;
    }
    /**
     * Get journalEntryCount value
     * @return int|null
     */
    public function getJournalEntryCount(): ?int
    {
        return $this->journalEntryCount;
    }
    /**
     * Set journalEntryCount value
     * @param int $journalEntryCount
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setJournalEntryCount(?int $journalEntryCount = null): self
    {
        // validation for constraint: int
        if (!is_null($journalEntryCount) && !(is_int($journalEntryCount) || ctype_digit($journalEntryCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalEntryCount, true), gettype($journalEntryCount)), __LINE__);
        }
        $this->journalEntryCount = $journalEntryCount;
        
        return $this;
    }
    /**
     * Get pledged value
     * @return float|null
     */
    public function getPledged(): ?float
    {
        return $this->pledged;
    }
    /**
     * Set pledged value
     * @param float $pledged
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setPledged(?float $pledged = null): self
    {
        // validation for constraint: float
        if (!is_null($pledged) && !(is_float($pledged) || is_numeric($pledged))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pledged, true), gettype($pledged)), __LINE__);
        }
        $this->pledged = $pledged;
        
        return $this;
    }
    /**
     * Get raised value
     * @return float|null
     */
    public function getRaised(): ?float
    {
        return $this->raised;
    }
    /**
     * Set raised value
     * @param float $raised
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setRaised(?float $raised = null): self
    {
        // validation for constraint: float
        if (!is_null($raised) && !(is_float($raised) || is_numeric($raised))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($raised, true), gettype($raised)), __LINE__);
        }
        $this->raised = $raised;
        
        return $this;
    }
    /**
     * Get received value
     * @return float|null
     */
    public function getReceived(): ?float
    {
        return $this->received;
    }
    /**
     * Set received value
     * @param float $received
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setReceived(?float $received = null): self
    {
        // validation for constraint: float
        if (!is_null($received) && !(is_float($received) || is_numeric($received))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($received, true), gettype($received)), __LINE__);
        }
        $this->received = $received;
        
        return $this;
    }
    /**
     * Get transactionCount value
     * @return int|null
     */
    public function getTransactionCount(): ?int
    {
        return $this->transactionCount;
    }
    /**
     * Set transactionCount value
     * @param int $transactionCount
     * @return \BurgerDigital\eTapestry\StructType\QueryResultStats
     */
    public function setTransactionCount(?int $transactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionCount) && !(is_int($transactionCount) || ctype_digit($transactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionCount, true), gettype($transactionCount)), __LINE__);
        }
        $this->transactionCount = $transactionCount;
        
        return $this;
    }
}

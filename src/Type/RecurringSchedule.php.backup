<?php

namespace BurgerDigital\Type;

class RecurringSchedule
{

    /**
     * @var int
     */
    private $frequency;

    /**
     * @var int
     */
    private $measure;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $stopDate;

    /**
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param int $frequency
     * @return RecurringSchedule
     */
    public function withFrequency($frequency)
    {
        $new = clone $this;
        $new->frequency = $frequency;

        return $new;
    }

    /**
     * @return int
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * @param int $measure
     * @return RecurringSchedule
     */
    public function withMeasure($measure)
    {
        $new = clone $this;
        $new->measure = $measure;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return RecurringSchedule
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * @param \DateTimeInterface $stopDate
     * @return RecurringSchedule
     */
    public function withStopDate($stopDate)
    {
        $new = clone $this;
        $new->stopDate = $stopDate;

        return $new;
    }


}


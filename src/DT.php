<?php

namespace Chaos\DT;

class DT
{
    protected int $timestamp;

    // ! MAGIC METHODS ! //
    public function __construct(int|string|\DateTimeInterface|null $value = null)
    {
        if ($value === null) {
            $this->timestamp = time();
        } elseif ($value instanceof \DateTimeInterface) {
            $this->timestamp = (float) $value->getTimestamp();
        } elseif (is_numeric($value)) {
            $this->timestamp = (float) $value;
        } else {
            $this->timestamp = strtotime($value);
        }
    }

    public function __toString(): string
    {
        return (string) $this->timestamp;
    }

    // ! STSTIC METHODS ! //
    public static function now()
    {
        return new static();
    }

    // ! INSTANCE METHODS ! //
    /**
     * Returns formatted datetime per the pattern provided
     * @param string $pattern defaults "Y-m-d H:i:s"
     * @return string formatted response based on valid input
     */
    public function format(string $pattern = 'Y-m-d H:i:s'): string
    {
        return date($pattern, $this->timestamp);
    }

    /**
     * Clone the variable without overwriting the first
     * @return DT
     */
    public function copy(): DT
    {
        return new static($this->timestamp);
    }

    // * TIME ADJUSTMENTS * //
    /**
     * Adjust the timestamp +/- the input number of seconds
     * @param int $adj how many seconds you want to adjust by
     * @return static for chainable methods
     */
    public function adjSec(int $adj = 0): static
    {
        $this->timestamp += $adj;
        return $this;
    }

    /**
     * Adjust the timestamp +/- the input number of minutes
     * @param int $adj how many minutes you want to adjust by
     * @return static for chainable methods
     */
    public function adjMin(int $adj = 0): static
    {
        $this->timestamp += $adj * 60;
        return $this;
    }

    /**
     * Adjust the timestamp +/- the input number of hours
     * @param int $adj how many hours you want to adjust by
     * @return static for chainable methods
     */
    public function adjHour(int $adj = 0): static
    {
        $this->timestamp += $adj * 3600;
        return $this;
    }

    /**
     * Adjust the timestamp +/- the input number of days
     * @param int $adj how many days you want to adjust by
     * @return static for chainable methods
     */
    public function adjDay(int $adj = 0): static
    {
        $this->timestamp += $adj * 86400;
        return $this;
    }

    /**
     * Adjust the timestamp +/- the input number of weeks
     * @param int $adj how many weeks you want to adjust by
     * @return static for chainable methods
     */
    public function adjWeek(int $adj = 0): static
    {
        $this->timestamp += $adj * 604800;
        return $this;
    }

}

<?php
namespace Hg\Greeter;

class ClosedTimeRange extends TimeRange
{
    /**
     * @param \DateTimeInterface $target
     * @return bool
     */
    public function contains(\DateTimeInterface $target): bool
    {
        return $this->first <= $target && $target < $this->second;
    }
}

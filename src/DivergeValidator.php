<?php

namespace Smysh\Validator;

class DivergeValidator implements Diverge
{
    private float $deviation;
    private float $passDeviation;

    const PERCENT = 100;

    public function __construct(float $deviation, float $passDeviation)
    {
        $this->deviation = $deviation;
        $this->passDeviation = $passDeviation;
    }

    public function diffPrice(float $new, float $out): bool
    {
        return $this->convertToPercent($new, $out) < $this->passDeviation;
    }

    public function getDeviation(): float
    {
        return $this->deviation;
    }

    private function convertToPercent(float $new, float $out): float
    {
        return ($new - $out) / $out * self::PERCENT;
    }
}
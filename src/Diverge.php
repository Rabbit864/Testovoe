<?php

namespace Smysh\Validator;

interface Diverge
{
    public function diffPrice(float $new, float $out): bool;

    public function getDeviation(): float;
}
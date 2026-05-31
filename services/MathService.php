<?php

namespace app\services;

use app\dto\NumbersDto;
use app\services\interfaces\MathServiceInterface;

class MathService implements MathServiceInterface
{
    public function execute(NumbersDto $dto)
    {
        $sum = 0;
        foreach ($dto->numbers as $number) {
            if ($number % 2 === 0) {
                $sum += $number;
            }
        }
        return $sum;
    }
}
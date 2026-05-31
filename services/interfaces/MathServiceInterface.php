<?php

namespace app\services\interfaces;

use app\dto\NumbersDto;

interface MathServiceInterface
{
    public function execute(NumbersDto $dto);
}

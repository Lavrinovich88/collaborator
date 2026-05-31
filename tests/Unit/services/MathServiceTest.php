<?php

namespace tests\unit\services;

use PHPUnit\Framework\TestCase; 
use app\services\MathService;
use app\services\interfaces\MathServiceInterface;
use app\dto\NumbersDto;

class MathServiceTest extends TestCase
{
    public $enableCsrfValidation = false;
    private MathServiceInterface $mathService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mathService = new MathService();
    }

    public function testSumWithMixedNumbers()
    {
        $dto = new NumbersDto();
        $dto->numbers = [1, 2, 3, 4, 5, 6];

        $result = $this->mathService->execute($dto);

        $this->assertEquals(12, $result);
    }

    public function testSumWithOnlyOddNumbers()
    {
        $dto = new NumbersDto();
        $dto->numbers = [1, 3, 5, 7];

        $result = $this->mathService->execute($dto);

        $this->assertEquals(0, $result);
    }

    public function testSumWithEmptyArray()
    {
        $dto = new NumbersDto();
        $dto->numbers = [];

        $result = $this->mathService->execute($dto);

        $this->assertEquals(0, $result);
    }
}
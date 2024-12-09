<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    #[Test]
    public function shouldAddTwoArguments()
    {
        $calculator = new Calculator();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    #[Test]
    public function shouldMultiplyTwoArguments()
    {
        $calculator = new Calculator();

        $result = $calculator->multiply(1, 2);

        $this->assertEquals(2, $result);
    }
}

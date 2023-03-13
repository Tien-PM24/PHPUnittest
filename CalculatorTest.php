<?php
use PHPUnit\Framework\TestCase;

require_once 'Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(6, 2);
        $this->assertEquals(3, $result);
    }

}
?>

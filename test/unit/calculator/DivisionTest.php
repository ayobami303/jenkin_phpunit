<?php
use PHPUNIT\Framework\TestCase;

class DivisionTest extends TestCase {
    /** @test */
    public function divides_given_operands(){
        $division = new App\calculator\Division;

        $division->setOperands([100, 10]);

        $this->assertEquals(10, $division->calculate());
    }

    /** @test */    
    public function removes_division_by_zero_operands(){
        $division = new App\calculator\Division;

        $division->setOperands([100, 0, 0, 10]);

        $this->assertEquals(10, $division->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating(){
        $this->expectException(\App\calculator\Exceptions\NoOperandsException::class);

        $division = new App\calculator\Addition;
        $division->calculate();
    }
}
?>
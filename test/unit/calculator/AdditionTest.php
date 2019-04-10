<?php
use PHPUNIT\Framework\TestCase;

class AdditionTest extends TestCase {
    /** @test */
    public function adds_given_operands(){
        $addition = new App\calculator\Addition;

        $addition->setOperands([5, 10]);

        $this->assertEquals(15, $addition->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating(){
        $this->expectException(\App\calculator\Exceptions\NoOperandsException::class);

        $addition = new App\calculator\Addition;
        $addition->calculate();
    }
}
?>
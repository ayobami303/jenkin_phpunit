<?php

class ValidatePasswordTest extends PHPUnit\Framework\TestCase{
    public function testValidLength(){
        $valPass = new App\ValidatePassword();
        $this->assertTrue($valPass->validLength('112234'));
    }
}
?>
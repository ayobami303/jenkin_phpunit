<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    protected $user;

    public function setUp() : void{
        $this->user = new App\models\User();
    }

    /** @test */
    public function SetFirstName(){
        $this->user->setFirstName('Billy');
        $this->assertEquals($this->user->getFirstName(), 'Billy');
    }

    public function testSetLastName(){
        $this->user->setLastName('Garret');
        $this->assertEquals($this->user->getLastName(), 'Garret');
    }

    public function testGetFullname(){
        $user = new App\models\User;

        $user->setFirstName('Billy');
        $user->setLastName('Garret');

        $this->assertEquals($user->getFullname(), 'Billy Garret');
    }

    public function testFirtnameLastnameTrimmed(){
        $user = new App\models\User;

        $user->setFirstName('Billy ');
        $user->setLastName(' Garret ');

        $this->assertEquals($user->getFirstName(), 'Billy');
        $this->assertEquals($user->getLastName(), 'Garret');
    }

    public function testEmailAddress(){
        $user = new App\models\User;

        $user->setEmailAddress('billy@gmail.com');
        $this->assertEquals($user->getEmailAddress(), 'billy@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues(){
        $user = new App\models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Garret');
        $user->setEmailAddress('billy@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertEquals($emailVariables['full_name'], 'Billy Garret');
        $this->assertEquals($emailVariables['email'], 'billy@gmail.com');
    }
}
?>
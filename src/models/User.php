<?php

namespace App\models;

class User {
    public $first_name;
    public $last_name;
    public $email;
    
    public function setFirstName($firstname){
        $this->first_name = trim($firstname);
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($lastname){
        $this->last_name = trim($lastname);
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getFullname(){
        return $this->getFirstName(). ' '. $this->getLastName();
    }

    public function setEmailAddress($email){
        $this->email = trim($email);
    }

    public function getEmailAddress(){
        return $this->email;
    }

    public function getEmailVariables(){
        return [
            'full_name' => $this->getFullname(),
            'email' => $this->getEmailAddress()
        ];
    }
}

?>
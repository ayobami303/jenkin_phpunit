<?php

namespace App\calculator;

use App\calculator\Exceptions\NoOperandsException;

class Addition extends OperationAbstract implements OperationInterface{
    
    public function calculate(){
        if(count($this->operands) === 0){
            throw new NoOperandsException;
        }
        return array_sum($this->operands);
    }
}
?>  
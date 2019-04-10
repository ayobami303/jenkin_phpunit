<?php 

namespace App\calculator;

Abstract class OperationAbstract {
    protected $operands = [];

    public function setOperands(array $operands){
        $this->operands = $operands;
    }
}
?>
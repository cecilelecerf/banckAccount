<?php
require_once("./class/peopleClass.php");

class BankAccount extends People {
    private $pay = 1000;

    public function __construct(int $pay, string $name, int $phone, string $email){
        parent::__construct($name, $phone, $email);
        $this->pay = $pay;
    }

    public function deposit($sum){
        $this->pay += $sum;
    }
    public function withdrawal($sum){
        $this->pay -= $sum;
    }

    public function toString(){
        return $this->name . "vous avez ". $this->pay . " sur votre compte en banque €.";
    }

}


?>
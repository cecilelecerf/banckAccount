<?php
require_once("./class/peopleClass.php");

class BankAccount extends People {
    private $pay;

    public function __construct(int $pay = 1000, string $name, string $phone, string $email){
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
        return "Mr/Mme ".$this->name . " vous avez ". $this->pay . " € sur votre compte en banque.";
    }

}


?>
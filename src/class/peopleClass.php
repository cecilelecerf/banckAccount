<?php
class People {
    protected $name;
    protected $phone;
    protected $email;

    public function __construct(string $name = "Dupont", string $phone, string $email){
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

}


?>
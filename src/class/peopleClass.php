<?php
class People {
    protected $name = "Dupont";
    protected $phone;
    protected $email;

    public function __construct(string $name, string $phone, string $email){
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

}


?>
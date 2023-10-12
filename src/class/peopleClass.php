<?php
class People {
    protected $name;
    protected $phone;
    protected $email;

    public function __constructor(string $name, int $phone, string $email){
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

}


?>
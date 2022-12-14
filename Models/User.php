<?php

class User
{
    public function __construct(protected String $name, protected String $email, protected String $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}

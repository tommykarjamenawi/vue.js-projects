<?php

namespace Models;

class User {
    public $id;
    public $username;
    public $password;
    public $email;

    public function __construct($id, $username, $password, $email) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
}
<?php

class Password {

    public $master;
    public $domain;
    public $email;
    public $confirm;
    protected $salt;

    function __construct($Data)
    {
        $this->master = $Data['password'];
        $this->domain = $Data['domain'];
        $this->email = $Data['email'];
        $this->confirm = $Data['confirm'];
        $this->salt = "$2u";
    }


    public function hsPassword(){

        $mail = substr($this->email,-2,4);
        $dom = substr($this->domain,-2,2);

        $result = crypt($mail.$dom.$this->master, $this->salt);

        return $result;

    }


}
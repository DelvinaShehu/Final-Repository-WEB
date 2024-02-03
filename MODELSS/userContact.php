<?php

class UserContact{
    private $id;
    private $username;
    private $password;
    private $message;


    function __construct($id,$username,$password,$message){
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->message = $message;
    }


    function getId(){
        return $this->id;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getMessage(){
        return $this->message;
    }
}

?>
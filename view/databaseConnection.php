<?php

class DatabaseConenction{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $database = "clearvue";


    function startConnection(){

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Database Conenction Failed".$e->getMessage();
            return null;
        }

        function insertUserToDatabase($user){
            global $conn;
        
            $name = $user['name'];
            $surname = $user['surname'];
            $email = $user['email'];
            $username = $user['username'];
            $password = $user['password'];
            $role = $user['role'];
        
            $sql = "INSERT INTO users (name, surname, email, username, password, role) VALUES ('$name', '$surname', '$email', '$username', '$password', '$role')";
        
            if ($conn->query($sql) === TRUE) {
                return true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                return false;
             }
           }  

    }
}

?>
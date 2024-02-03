<?php 
include_once '../Database Connection/databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertContact($user){

        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $message = $user->getMessage();

        $sql = "INSERT INTO contactus (id,username,password,message) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$username,$password,$message]);

        echo "<script> alert('Message has been sent successfuly!'); </script>";

    }

    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactus";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getContactById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactus WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateContact($id,$username,$password,$message){
         $conn = $this->connection;

         $sql = "UPDATE contactus SET username=?, password=? , message=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$username,$password,$message,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteContact($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contactus WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>
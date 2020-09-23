<?php
class User extends DB{
    function newUser($name,$password,$email,$age,$permits){
        $query="INSERT INTO Users (name,password,email,age,permits) Values ('".$name."','".$password."','".$email."',".$age.",".$permits.")";
        mysqli_query($this->con,$query);
    }
    function getByEmail($email){
        $sql="SELECT * FROM Users WHERE email='$email' ";
        return mysqli_query($this->con,$sql);
    }
    function getAll(){
        $sql="SELECT * FROM Users";
        return mysqli_query($this->con,$sql);
    }
    function getById($id){
        $sql="SELECT * FROM Users WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
    function update($name,$password,$email,$age){
        $sql=    
    }
}
?>

<?php 
    class Register extends Controller{
        function a() {
            $this->view("register");
        }
        function check(){
            $user=$this->model("User");
            $name=$_POST["name"];
            $password=$_POST["password"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $user->newUser($name,$password,$email,$age,1);
            $this->view("contact");
        }
    }
?>
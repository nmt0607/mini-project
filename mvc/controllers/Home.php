<?php
class Home extends Controller
{
    function SayHi()
    {
        echo "a";
    }
    function homea(){
        $check= $this->checkss();
        if($check){
            header("Location:http://localhost/mini-project/Home/profileuser");
        } else{
            $this->view("login");
        }
    }
    function login()
    {
        $this->view("login");
    }
    function profileuser(){
        $this->view("home");
    }
}

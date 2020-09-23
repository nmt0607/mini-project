<?php 
    class Login extends Controller{
        function a(){
            $this->view("login");
        }
        function check(){
            $email=$_POST["email"];
            echo $email;
            $password=$_POST["password"];
            $user=$this->model("User");
            $result=$user->getByEmail($email);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($password===$row["password"]){
                        echo "thanh cong";
                    } else{
                        echo "sai password";
                    }
                }
              } else {
                echo "login fail";
              }
    
        }
    }
?>
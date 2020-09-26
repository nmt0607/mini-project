<?php 
    class Login extends Controller{
        function a(){
            $this->view("login");
        }
        function check(){
            unset($_SESSION["emaillogin"]);
            unset($_SESSION["passwordlogin"]);
            unset($_SESSION["checkemail"]);
            unset($_SESSION["checkpassword"]);
            if(isset($_POST["login"])){
                
                $email=$_POST["email"];
                
                $password=$_POST["password"];
                $user=$this->model("User");
                $result=$user->getByEmail($email);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if($password===$row["password"]){
                            echo "thanh cong";
                        } else{
                            $_SESSION["checkpassword"]=1;
                            $_SESSION["emaillogin"]=$email;
                            $_SESSION["passwordlogin"]=$password;
                            header("Location: a");
                        }
                    }
                }else {
                    $_SESSION["checkemail"]=1;
                    $_SESSION["emaillogin"]=$email;
                    $_SESSION["passwordlogin"]=$password;
                    header("Location: a");
                }
            } else{
                header("Location: a");
            }


    
        }
    }
?>
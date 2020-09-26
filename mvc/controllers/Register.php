<?php
class Register extends Controller
{
    function a()
    {
        $this->view("register");
    }
    function check()
    {
        if (isset($_POST["signup"])) {
            $user = $this->model("User");
            $name = $_POST["name"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $age = $_POST["age"];
            $result = $user->getByEmail($email);
            if ($result->num_rows > 0) {
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                $_SESSION["age"] = $age;
                header("Location: a");
            } else {
                $user->newUser($name, $password, $email, $age, 1);
                unset($_SESSION["name"]);
                unset($_SESSION["email"]);
                unset($_SESSION["password"]);
                unset($_SESSION["age"]);
                echo "echo";
            }
        }
    }
}

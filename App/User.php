<?php

class User extends Model
{

    public $currentUser = [];

    public function register(string $name, string $email, string $password)
    {
        $verified_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($verified_email) {
            $result = $this->db->query("SELECT * FROM `users` WHERE `email` = '{$email}';");
            if ($result->num_rows > 0) {
                echo "$email already exists";
            } else {
                $val = [
                    'name' => "'$name'",
                    'email' => "'$email'",
                    'password' => "'$password'"
                ];
                $this->write("users", ["`username`", "`email`", "`password`"], $val);
                echo "User Created Successfully";
            }
        } else {
            echo 'Please enter valid Email Address';
        }
    }

    public function login(string $email, string $password)
    {

        $verified_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($verified_email) {
            $result = $this->db->query("SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}';");
            if ($result->num_rows > 0) {
                $user = mysqli_fetch_assoc($result);
                $this->setAuth($user['id']);
                header("location:./index.php");
            } else {
                echo "User credentials not Matched";
            }
        } else {
            echo "Please Provide valid Email";
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:./login.php");
    }

    public function setAuth(int $id)
    {
        $_SESSION['user_id'] = $id;
    }

    public function getLoggedUser()
    {
        $user_id = $this->getAuth();
        return $this->currentUser = $this->getById($user_id);
    }

    public function getAuth()
    {
        if (isset($_SESSION['user_id'])) {
            return $_SESSION['user_id'];
        }
    }

    public function all()
    {
        return $this->read('users');
    }
}

<?php

class User
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }


    public function createUser($user_data)
    {
        try {

            $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);
            $query = "INSERT INTO users (user_email, user_pass, user_role, user_name) VALUES (?, ?, ?, ?)";
            $stmt = $this->Conn->prepare($query);

            $stmt->execute([
                $user_data['email'],
                $sec_password,
                $user_data['role'],
                $user_data['name']
            ]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    //     public function createuser(){
    //         $password = password_hash("Password123!", PASSWORD_DEFAULT);
    //         $sql = "INSERT INTO users (user_email, user_name, user_role, user_pass) VALUES (?, ?, ?, ?)";
    //         $stmt = $this->Conn->prepare($sql);
    //         $stmt->execute([
    // 's215097@uos.ac.uk', 'Patrick', 'Global Administrator' , $password
    //         ]);
    //     }

    public function loginUser($email, $password)
    {

        $query = "SELECT * FROM users WHERE user_email = :user_email";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            "user_email" => $email
        ));
        $attempt = $stmt->fetch();
        if ($attempt && password_verify($password, $attempt['user_pass'])) {
            return $attempt;
        } else {
            return false;
        }
    }

    public function getUser($user_id)
    {
        $query = "SELECT * FROM users WHERE user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            "user_id" => $user_id
        ));
        return $stmt->fetch();
    }

    public function changeUserPassword($current_pass, $new_pass){
        if (!password_verify($current_pass, $_SESSION['user_data']['user_pass'])) {
            // wrong password
            return false;
        }

        $new_sec_pass = password_hash($new_pass, PASSWORD_DEFAULT);
        $query = "UPDATE users SET user_pass = :user_pass WHERE user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            "user_pass" => $new_sec_pass,
            "user_id" => $_SESSION['user_data']['user_id']
        ));

        return true;
    }
}

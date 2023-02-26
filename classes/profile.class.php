<?php

//this needs to be edited to remove bio and add company name and logo

class Profile
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }
    public function addProfile($data)
    {
        $query = "UPDATE users SET user_name = :user_name, user_profile = :user_profile, user_bio = :user_bio WHERE user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $data['user_id'] = $_SESSION['user_data']['user_id'];
        return $stmt->execute($data);
    }
    
}

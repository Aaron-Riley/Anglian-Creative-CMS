<?php

class Blog {
    protected $Conn; 

    public function __construct($Conn) {
        $this->Conn = $Conn;
    }



    public function getAllBlogs() {
        $query = "SELECT * FROM blog ORDER BY created_on DESC";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
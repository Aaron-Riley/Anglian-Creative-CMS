<?php

class Blog {
    protected $Conn; 

    public function __construct($Conn) {
        $this->Conn = $Conn;
    }

    public function getBlogById($id){
        $query = "SELECT * FROM blog WHERE blog_id = ?";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllBlogs() {
        $query = "SELECT * FROM blog ORDER BY created_on DESC";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
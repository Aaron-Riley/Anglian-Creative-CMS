<?php

class Project {
    protected $Conn; 

    public function __construct($Conn) {
        $this->Conn = $Conn;
    }

    
    public function getProjectById($id){
        $query = "SELECT * FROM projects WHERE project_id = ?";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProjects() {
        $query = "SELECT * FROM projects ORDER BY created_on DESC";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
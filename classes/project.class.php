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

    public function getAllProjectsInOrder() {
        $query = "SELECT * FROM projects ORDER BY created_on DESC";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $projects = [];

        $firstSection = array_slice($results, 0, 4);
        $projects['firstSection'] = $firstSection;

        $secondSection = array_slice($results, 4, 1);
        $projects['secondSection'] = $secondSection;

        $thirdSection = array_slice($results, 5);
        $projects['thirdSection'] = $thirdSection;

        return $projects;
    }
}
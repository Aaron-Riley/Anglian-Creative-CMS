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

    public function getAllBlogsInOrder() {
        $query = "SELECT * FROM blog ORDER BY created_on DESC";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $blogs = [];

        // get first 4 blogs and add them to a firstSection array
        $firstSection = array_slice($results, 0, 4);
        $blogs['firstSection'] = $firstSection;

        // get the next 1 blogs and add them to a secondSection array
        $secondSection = array_slice($results, 4, 1);
        $blogs['secondSection'] = $secondSection;

        // get therest of the blogs and add them to a thirdSection array
        $thirdSection = array_slice($results, 5);
        $blogs['thirdSection'] = $thirdSection;

        return $blogs;
    }
}
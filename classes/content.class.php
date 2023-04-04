<?php

class Content 
{ 
    protected $Conn;

    public function __construct($Conn) 
    {
        $this->Conn = $Conn; 
    }

    public function getAllContent() 
    {
        $query = "SELECT * FROM content";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
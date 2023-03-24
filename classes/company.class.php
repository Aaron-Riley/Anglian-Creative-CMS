<?php

//this needs to be edited to remove bio and add company name and logo

class Company
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }
    public function addCompany($data)
    {
        $query = "UPDATE sys SET company_name = :company_name, company_url = :company_url WHERE company_id = :company_id";
        $stmt = $this->Conn->prepare($query);
        $data['company_id'] = $_SESSION['company_data']['company_id'];
        return $stmt->execute($data);
    }
    
     
    public function getCompanyById($id){
        $query = "SELECT * FROM company WHERE company_id = ?";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

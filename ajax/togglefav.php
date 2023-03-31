<?php
session_start();
require_once(__DIR__.'/../includes/config.include.php');
require_once(__DIR__.'/../includes/db.include.php');
require_once(__DIR__.'/../includes/autoloader.include.php');

if($_SESSION['user_data']){
    $facility_id = (int) $_POST['facility_id'];
    if($facility_id) {
        $Favourite = new Favourite($Conn);
$toggle = $Favourite->toggleFavourite($_POST['facility_id']);
if($toggle) {
    echo json_encode(array(
        "success" => true,
        "reason" => "Facility was added to users favourites."
    ));
}else{
    echo json_encode(array(
        "success" => true,
        "reason" => "Facility was removed from users favourites."
    ));
}
    }else{
        echo json_encode(array(
            "success" => false,
            "reason" => "Facility ID not provided."
        ));
    }
}else{
    echo json_encode(array(
        "success" => false,
        "reason" => "User not logged in."
    ));
}
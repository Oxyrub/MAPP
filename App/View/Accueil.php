<?php
include("../Model/DatabaseFacade.php");

$sql = "SELECT * FROM genres";
try
{
    $db = new DatabaseFacade();        
    $result = $db->connect()->query($sql);
        
    $city = $result->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    if (!empty($city)) echo json_encode($city);
    echo json_last_error_msg();

} catch (PDOException $e) {
    var_dump($e);
}   



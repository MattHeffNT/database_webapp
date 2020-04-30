<?php
function get_db(&$errors = array()){
    $db = null;

    try{
        //change the database table name, username and password to match your database
        $db = new PDO('mysql:host=localhost:3308;dbname=darwinart', 'root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch(PDOException $e){
        $errors[]="Database error is ". $e->getMessage(); 
        return $db;
    }
}
?>
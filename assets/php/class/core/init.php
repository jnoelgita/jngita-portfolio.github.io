<?php
function DB(){
    try{
        
        $db = new PDO('mysql:host=localhost;dbname=jng_db','root','');

        return $db;
        
    
    } catch (PDOException $e){
        return header("location: notfound.php");
        die();
        }
}
?>	
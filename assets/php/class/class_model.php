<?php
require $_SERVER['DOCUMENT_ROOT'] . '/portfolio/assets/php/class/core/init.php';


class class_model {

    public function addRecord($name, $company, $email, $concern) {
        try {
            $db = DB();
            $sql = "INSERT INTO `tbl_inquires` (`name`, `company`, `email`, `concern`) VALUE ('$name', '$company', '$email', '$concern')";
            $query = $db->prepare($sql);
            $query->execute();
            //     sendClientAcc($name, $company, $concern, $email);
            //     sendInquiry($name, $email);
            // }
            
        } catch (PDOException $e){
            echo $e->getMessage();
        }   
    }
}
?>
<?php
$s_message = "";
$message = "";



if (!empty($_POST['submitr'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $concern = $_POST['concern'];

    if (empty($name))  {
        $message = 'Name field is required!';
        echo '<script>window.onload = function() { document.getElementById("contactme").scrollIntoView({ behavior: "smooth" }); }</script>';
    } else if (empty($company)) {
        $message = 'Company field is required!';
        echo '<script>window.onload = function() { document.getElementById("contactme").scrollIntoView({ behavior: "smooth" }); }</script>';
    } else if (empty($email)) {
        $message = 'Email field is required!';
        echo '<script>window.onload = function() { document.getElementById("contactme").scrollIntoView({ behavior: "smooth" }); }</script>';
    } else if (empty($concern)) {
        $message = 'Please put your concern/message';
        echo '<script>window.onload = function() { document.getElementById("contactme").scrollIntoView({ behavior: "smooth" }); }</script>';
    }
     else {
        $s_message = 'Form Submitted';
        $conn = new class_model();
        $submit = $conn->addRecord($name,$company,$email,$concern);
                if(!$submit == TRUE)
                {        echo '<script> window.onload = function() {
                    document.getElementById("contactme").scrollIntoView({ behavior: "smooth" });
                    setTimeout(function() {
                        document.getElementById("error-message").style.display = "none";
                        document.getElementById("success-message").style.display = "none";
                    }, 5000);
                };</script>';

                }
                    else{
                        echo '<script>
                window.onload = function() {
                    document.getElementById("contactme").scrollIntoView({ behavior: "smooth" });
                    setTimeout(function() {
                        document.getElementById("error-message").style.display = "none";
                        document.getElementById("success-message").style.display = "none";
                    }, 5000);
                };
            </script>';

                    
                }
              
    }   

 
}

?>
<?php

    if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "okine.leslie.log@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from".$name.".\n\n".$message;

    mail($email, $txt, $headers);
    header("Location: index.html?mailsend")
}

?>
<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "inge@connectiehuys.be";
    $headers = "Je hebt een email ontvangen van ".$fname." ".$lname." met een vraag vanuit het contactformulier!\n\n";
    $txt = "Email: ".$mailFrom."\n
    \nPersoon heeft volgend bericht meegegeven: \n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../confirm.html?mailsent");
}
?>
<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $subject = "Inschrijving Back on Track";    

    $mailTo = "inge@connectiehuys.be";
    $headers = "Je hebt een inschrijving ontvangen van ".$fname." ".$lname." om zich in te schrijven voor een back on track workshop!\n\n";
    $txt = "Email: ".$mailFrom."\n";

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../confirm.html?mailsent");
}
?>
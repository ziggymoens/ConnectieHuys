<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = "Nieuwe inschrijving Back On Track";

    $mailTo = "inge@connectiehuys.be";
    $headers = "Je hebt een nieuwe inschrijving voor Back On Track!\n\n";
    $txt = "Gegevens van persoon: \n\nNaam: ".$fname." ".$lname."\n"."Email: ".$mailFrom."
    \n"."Telefoonnummer: ".$phone."\n";

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../confirmBOT.html?mailsent");
}
?>
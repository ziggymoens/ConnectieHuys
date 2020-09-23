<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@connectiehuys.be";
    $headers = "Je hebt een email ontvangen van ".$fname." ".$lname." vanuit het contactformulier!\n\n";
    $txt = "Email: ".$mailFrom."\n
    \nPersoon heeft volgend bericht meegegeven: \n\n".$message;

    $sent = mail($mailTo, $subject, $txt, $headers);
    // header("Location: ../contact.html?mailsent");
}
if ($sent) {

    ?><html>
    <head>
    <title>Thank You</title>
    </head>
    <body>
    <h1>Thank You</h1>
    <p>Thank you for your feedback.</p>
    </body>
    </html>
    
    <?php
    
    } else {
    ?><html>
    <head>
    <title>Something went wrong</title>
    </head>
    <body>
    <h1>Something went wrong</h1>
    <p>We could not send your feedback. Please try again.</p>
    </body>
    </html>
    <?php
    }
    ?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@connectiehuys.be";
    $headers = "Je hebt een email ontvangen van " . $fname . " " . $lname . " vanuit het contactformulier!\n\n";
    $txt = "Email: " . $mailFrom . "\n
    \nPersoon heeft volgend bericht meegegeven: \n\n" . $message;

    $sent = mail($mailTo, $subject, $txt, $headers);
    // header("Location: ../contact.html?mailsent");
}
if ($sent) {
    header("Location: ../confirm.html?mailsent");

} else {
    header("Location: ../fail.html?mailnotsent");
}
?>
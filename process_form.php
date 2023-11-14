<?php

if (isset($_POST['submit'])){
    $name = $_POST['Name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo =
    $headers = "from: ".$mailFrom;
    $txt = "You have receive an e-mail from ".$name.".\n\n".$message;
    mail($mailTo, $subject,$txt,$headers);
    header("Location: index.php?mailsend");
}
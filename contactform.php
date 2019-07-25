<?php

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];

    $mailTo = "dan@dankabakov.co.il";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name;

    mail($mailTo, $phone, $name, $mailFrom);
    header("Location: index.html?mailsend");
}

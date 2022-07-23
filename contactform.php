<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $comments = $_POST['comments'];

    $mailTo = "augustinehills@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You Have a Mail From ".$name.".\n\n".$comments;

    mail($mailTo, $txt, $headers);
    header("Location: home.html?mailsend");
}

?>
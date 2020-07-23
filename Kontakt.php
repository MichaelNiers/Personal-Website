<html>
    <head></head>
    <body>
        <?php

        if (isset($_POST['senden'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        $empfaenger = "michael.niers@ewetel.net";

        mail("$empfaenger", "$subject", "$message\n", "FROM: $email\n");
        header("Location: sent.html");

        }
        ?>
    </body>
</html>
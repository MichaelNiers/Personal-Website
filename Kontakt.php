<html>
    <head></head>
    <body>
        <?php
        $email = $_REQUEST['email'];
        $betreff = $_REQUEST['betreff'];
        $nachricht = $_REQUEST['nachricht'];
        $empfaenger = "michael.niers@ewetel.net";
        $absender = $email;

        mail("$empfaenger", "$betreff", "$nachricht\n", "FROM: $absender\n");

        ?>
    </body>
</html>
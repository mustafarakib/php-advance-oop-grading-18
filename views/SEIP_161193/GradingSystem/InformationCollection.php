<?php
require_once("../../../vendor/autoload.php");
use App\Message;

if(!isset($_SESSION)){
    session_start();
}
$msg = Message::getMessage();
echo "<div id='message'> $msg </div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Collection Form</title>
</head>
<body>

<form action="process.php" method="post">
    Enter Student's Name:
    <input type="text" name="name"><br>

    Enter Student's Roll:
    <input type="text" name="roll"><br>

    Bangla Mark:
    <input type="number" step="any" min="0" max="100" name="markBangla"><br>

    English Mark:
    <input type="number" step="any" min="0" max="100" name="markEnglish"><br>

    Math Mark:
    <input type="number" step="any" min="0" max="100" name="markMath"><br>

    <input type="submit">
</form>

<script src="../../../resource/bootstrap/js/jquery.js"></script>
<script>
    jQuery(
        function($) {
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
        }
    )
</script>

</body>
</html>

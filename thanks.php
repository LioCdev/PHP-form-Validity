<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you</title>
</head>
<body>

<?php

$nameErr = $phoneErr = $emailErr = $messageErr = $emailNotValid = "";

$name = $_POST["user_name"];
$email = $_POST["user_email"];
$phone = $_POST["user_phone"];
$message = $_POST["user_message"];
$sujet = $_POST['sujet'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($name)) {
            $nameErr = "name is required";
            echo $nameErr;  
        } elseif (empty($email)) {
            $emailErr = "email is required";
            echo $emailErr;
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailNotValid = "email is not valid";
            echo $emailNotValid;
        } elseif (empty($phone)) {
            $phoneErr = "phone is required";
            echo $phoneErr;          
        } elseif (empty($message)) {
            $messageErr = "message is required";
            echo $messageErr;
    } else {
        echo 'Merci '.$name.' de nous avoir contacté à propos de '.$sujet.'.'.'<br>';
        echo 'Un de nos conseiller vous contactera soit à l\'adresse '.$email.' ou par telephone au '.$phone.'.'.'<br>';
    }
}


?>

</body>

</html>
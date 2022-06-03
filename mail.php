<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "pioneer.pizza1@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolatfelvétel</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Kapcsolat.css">
</head>
<body>
    <div class="container">
        <h1>Köszönjük, hogy kapcsolatba lépett velünk. A lehető leghamarabb válaszolunk!</h1>
        <p class="back">Menj vissza a <a href="kapcsolat.html">kezdőlapra</a>.</p>
        
    </div>
</body>
</html>



';


?>

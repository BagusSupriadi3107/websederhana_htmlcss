<?php
$name = $_POST['name']
$emai_pengunjung = $_POST['email']
$addres = $_POST['addres']
$pesan = $_POST['message']

$email_form = 'genjiboss27@gmail.com'
$emai_subject = 'New Form Submission'
$emai_body = "User Name: $name.\n".
            "User Email: $email_pengunjung.\n".
            "User Addres: $addres.\n".
            "User Pesan: $pesan.\n".
$to = 'bagusspriadi25@gmail.com';
$headres = "From: $email_from \r\n";
$headres .= "Reply-To: $email_pengunjung \r\n";
mail($to,$emai_subject,$emai_body,$headres);
header("Location: contact.html");
?>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "misakocenda@seznam.cz";
  $subject = "Zpráva z webové stránky";
  $body = "Od: $name\nE-mail: $email\nZpráva:\n$message";
  mail($to, $subject, $body);
?>
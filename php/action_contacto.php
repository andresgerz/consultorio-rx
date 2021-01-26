<?php

$name = $_POST['input_name'];
$surname = $_POST['input_surname'];
$email = $_POST['input_email'];
$subject = $_POST['input_subject'];
$message = $_POST['input_message'];

echo '<h1>' . 'Contacto' . '</h1>';
echo '<br><br>';
echo '<b>' . 'Name: ' . '</b>' . $name;
echo '<br><br>';
echo '<b>' . 'Surname: ' . '</b>' . $surname;
echo '<br><br>';
echo '<b>' . 'Email: ' . '</b>' . $email;
echo '<br><br>';
echo '<b>' . 'Subject: ' . '</b>' . $subject;
echo '<br><br>';
echo '<b>' . 'Message: ' . '</b>' . $message;
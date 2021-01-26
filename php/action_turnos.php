<?php
  
$name = $_POST['input_name'];
$surname = $_POST['input_surname'];
$dni = $_POST['input_dni'];
$email = $_POST['input_email'];
$age = $_POST['input_age'];
$phone = $_POST['input_phone'];
$hour = $_POST['input_hour'];
$date = $_POST['input_date'];

echo '<h1>' . 'Contacto' . '</h1>';
echo '<br><br>';
echo '<b>' . 'Name: ' . '</b>' . $name;
echo '<br><br>';
echo '<b>' . 'Surname: ' . '</b>' . $surname;
echo '<br><br>';
echo '<b>' . 'Email: ' . '</b>' . $email;
echo '<br><br>';
echo '<b>' . 'Age: ' . '</b>' . $age;
echo '<br><br>';
echo '<b>' . 'DNI: ' . '</b>' . $dni;
echo '<br><br>';
echo '<b>' . 'Phone: ' . '</b>' . $phone;
echo '<br><br>';
echo '<b>' . 'Hour: ' . '</b>' . $hour;
echo '<br><br>';
echo '<b>' . 'Date: ' . '</b>' . $date;
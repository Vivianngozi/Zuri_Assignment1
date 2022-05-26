<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$country = $_POST['country'];



// save data in userdata.csv
$file = "./userdata.csv";
$file_open = fopen($file, "a");
$form_data = array('name' => $name, 'email' => $email, 'date' => $date, 'gender' => $gender, 'country' => $country);


fputcsv($file_open, $form_data);

//Data returned

print_r($form_data)
?>
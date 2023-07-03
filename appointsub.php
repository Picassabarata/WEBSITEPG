<?php
    $name = $_POST['Name'];
    $pronouns = $_POST['Pronouns'];
    $socialmedia = $_POST['SocialMediaHandle'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $postcode = $_POST['Postcode'];
    $allergies =$_POST['Allergies'];
    $ortho =$_POST['Ortho'];
    $metals =$_POST['metals']

if(empty($name)||empty($email));
{
    echo "Name and Email are necessary";
    exit;
}
if (isset($_POST['Send'])) {
    $selected_radio = $_POST['metals'];

    $Silver925_status = 'unchecked';
    $Gold9ct_status = 'unchecked' ;
    $Gold18ct_status = 'unchecked';
    $Unsure_status = 'unchecked';
}
if ($selected_radio == 'Silver925'); {
    $Silver925_status = 'checked';
}


if ($selected_radio == 'Gold9ct'); {
    $Gold9ct_status == 'checked';
}

if ($selected_radio == 'Gold18ct'); {
    $Gold18ct_status == 'checked';
}

if ($selected_radio == 'Unsure'); {
    $Unsure_status == 'checked';
}

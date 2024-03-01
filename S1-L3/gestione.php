<?php

session_start();



$users = isset($_SESSION["users"]) ? $_SESSION["users"] : [];

/* if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && !isset($_POST["mail"]) && !isset($_POST["password"])) */
$user = [
    'name' => $_POST['name'],
    'cognome' => $_POST['cognome'],
    'age' => $_POST['age'],
    'city' => $_POST['city'],
    'phone' => $_POST['phone'],
    'mail' => $_POST['mail'],
    'password' => $_POST['password'],
];



var_dump($users);
echo '<br/>';
var_dump($user);

if ($name) {
    if ($lastName) {
        if (filter_var($_POST['age'], FILTER_VALIDATE_INT)) {


            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                if (strlen($_POST['password']) > 5) {
                    $users = [...$users, $user];

                    header('Location: http://localhost/Back-End/S13-L3/mail.php');
                } else {
                    echo 'inserisci una password valida';
                }
            } else {
                echo 'inserisci una mail valido';
            }
        } else {
            echo 'inserisci un eta valida';
        }
    } else {
        echo 'inserisci un cognome valido';
    }
} else {
    echo 'inserisci un nome valido';
}



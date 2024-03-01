<?php 

$user= [
    'name' => $_POST['firstname'],
    'cognome' => $_POST['lastname'],
    'mail' => $_POST['mail'],
    'password' => $_POST['password'],
];

$name = htmlspecialchars($_POST['firstname']);
$lastName = htmlspecialchars($_POST['lastname']);

var_dump($users);
echo '<br/>';
var_dump($user);

if($name) {
    if($lastName) {
        if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            if(strlen($_POST['password']) > 5 ) {
                $users = [...$users, $user];
                $_SESSION['mailAddress'] = $user['mail'];
                header('Location: http://localhost/Back-End/S13-L3/mail.php');
            } else {
                echo 'inserisci una password valida';
            }
        }else {
            echo'inserisci una mail valido';
        }

    }else {
        echo'inserisci un cognome valido';
    }   
}else{
 echo'inserisci un nome valido';
}



<?php 

include_once('config.php');

$regexemail = '/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/m';
    preg_match_all($regexemail, htmlspecialchars($_REQUEST['email']), $matchesEmail, PREG_SET_ORDER, 0);
    $email = $matchesEmail ? htmlspecialchars($_REQUEST['email']) : exit('messaggio errore');
    
    // Verifico il formato di una password
    $regexPass = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/';
    preg_match_all($regexPass, htmlspecialchars($_REQUEST['password']), $matchesPass, PREG_SET_ORDER, 0);
    $pass = $matchesPass ? htmlspecialchars($_REQUEST['password']) : exit('passnonvalida');
    $password = password_hash($pass , PASSWORD_DEFAULT);
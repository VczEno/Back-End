<?php

include('config.php');

print_r($_REQUEST);


    // Verifico il formato di una email
    $regexemail = '/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/m';
    preg_match_all($regexemail, htmlspecialchars($_REQUEST['email']), $matchesEmail, PREG_SET_ORDER, 0);
    $email = $matchesEmail ? htmlspecialchars($_REQUEST['email']) : exit('messaggio errore');
    
    // Verifico il formato di una password
    $regexPass = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/';
    preg_match_all($regexPass, htmlspecialchars($_REQUEST['password']), $matchesPass, PREG_SET_ORDER, 0);
    $pass = $matchesPass ? htmlspecialchars($_REQUEST['password']) : exit('passnonvalida');
    $password = password_hash($pass , PASSWORD_DEFAULT);

    $sql="SELECT * FROM users WHERE email ='".$email."'";
    $res= $mysqli->query($sql);

    if($row = $res->fetch_assoc()) {
        if(password_verify($pass, $row['password'])) {
            $_SESSION['userLogin'] = $row;

            if(isset($_REQUEST['check'])) {
                setcookie('usermail', $row['email'], time()+24*60*60*1000);
                setcookie('userpassword', $row['password'], time()+24*60*60*1000);
            }
            
            header('location: http://localhost/Back-End/S5-L2/');
        } else {
            $_SESSION['error'] = 'password errata!';
            header('location: http://localhost/Back-End/S5-L2/login.php');
        }
    }else{ 
        $_SESSION['error'] = 'email e password errati!';
        header('location: http://localhost/Back-End/S5-L2/login.php');
    
    }
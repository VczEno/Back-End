<?php
    session_start();

    
    $users = [];
    if(isset($_SESSION['users'])){
        $users = $_SESSION['users'];
    }
    
    session_write_close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOMEPAGE</h1>


    <div>
        <button>
            <a href="register.php">Registrati</a>
        </button>
        <button>
            <a href="login.php">Login</a>
        </button>
    </div>
    <ul>
        <?php
        session_start();
        if($users){
            foreach($users as $key => $value) {
            echo '<li> Nome: '.$value['nome'].', cognome:'.$value['cognome'].', email:'.$value['mail'].';';
            };
        };
        ?>
    </ul>


</body>
</html>
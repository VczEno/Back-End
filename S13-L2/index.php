<?php






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="gestione.php" enctype="multipart/form-data">
            <input type="text" placeholder="FirstName..." name='firstname' >
            <input type="text" placeholder="Lastname..." name='lastname' >
            <input type="text" placeholder="City..." name="city" >
            <input type="file" placeholder="Inserisci file" name="miofile" >
            <button type="submit">Invia Dati</button>
        </form>
    </div>

    <ul>
        <?php
        /* foreach($contatti as $key => $value) {
        echo  $value ;
        } */
        
        session_start();
        if(!empty($_SESSION["contatti"])) {
            foreach($_SESSION['contatti'] as $key => $value) {
            echo '<h2>'.$value.'</h2>';
            };
        };
        ?>
    </ul>


</body>
</html>
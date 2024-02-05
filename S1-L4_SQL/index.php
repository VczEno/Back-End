<?php 
require_once("header.php"); 
require_once("config.php"); 

$mySqli= new mysqli ($config['mysql_host'], $config['mysql_user'], $config['mysql_password']);

if ($mySqli->connect_error) {
    echo''. $mySqli->connect_error .'';
    die($mySqli->connect_error);
}



?>

<div class="container my-3">
    <h1 class='text-center text-primary'>ES S1_L4 - Creazione DB con mySQL</h1>
</div>

<?php require_once("footer.php") ?>
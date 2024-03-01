<?php
require_once("head.php");
require_once("navbar.php");
require_once("config.php");

$mySqli = new mysqli($config['mysql_host'], $config['mysql_user'], $config['mysql_password']);

if ($mySqli->connect_error) {
    echo '' . $mySqli->connect_error . '';
    die($mySqli->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS rubricaDB;'; // creo DB, se lo trova va oltre
$mySqli->query($sql); //richiamo il metodo query dell'oggetto collegato con il webserver
if (!$mySqli->query($sql)) {
    die($mySqli->connect_error);
} // se l'operazione non va a buonfine interrompe l'esecuzione e stampa un messaggio di errore

$sql = 'USE rubricaDB'; // seleziona il DB da utilizzare
$mySqli->query($sql);
if (!$mySqli->query($sql)) {
    die($mySqli->connect_error);
}

$sql = 'CREATE TABLE IF NOT EXISTS rubricaTab (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    age INT UNSIGNED NOT NULL,
    city VARCHAR(50),
    phone INT UNSIGNED UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(59) NOT NULL
) '; // se non presente, crea la tabella 
$mySqli->query($sql);
if (!$mySqli->query($sql)) {
    die($mySqli->connect_error);
}


/*  $sql = "INSERT INTO rubricaTab (name, cognome, age, city, phone, email, password) VALUES ('Anna','Pannocchia', 45, 'Salerno', 3391234500, 'anna.pa@example.it', 'password00');"; //inserisco un record
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { echo 'Record aggiunto con successo!!!';}

$sql = "INSERT INTO rubricaTab (name, cognome, age, city, phone, email, password) VALUES ('Rupert','Sciamenna', 68, 'Imperia', 3391234999, 'sciamenna@micidial.it', 'password00');"; //inserisco un record
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { echo 'Record aggiunto con successo!!!';}  */

/* $sql="UPDATE rubricaTab SET city='Milazzo' WHERE id=7";
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { echo 'Record aggiornato con successo!!!';}
*/

$sql="SELECT * FROM rubricaTab";
$result=[];
$res=$mySqli->query($sql);
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { while ($row=$res->fetch_assoc()){
    $result[]=$row;
}}

function delete($id) {
    global $mySqli;
    $sql="DELETE FROM rubricaTab where id LIKE $id ";
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { echo 'Record eliminato con successo!!!';}
}


/* $sql='DELETE FROM rubricaTab where email like "h%" ';
if(!$mySqli->query($sql)) { echo($mySqli->connect_error); }
else { echo 'Record eliminato con successo!!!';}  */


?>


<div class="container my-3">
    <h1 class='text-center text-primary'>ES S1_L4 - Creazione DB con mySQL</h1>
    <a href="register.php">Aggiungi</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">City</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { 
                $id= $row['id'];
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['cognome']?></td>
                    <td><?=$row['age']?></td>
                    <td><?=$row['city']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['email']?></td>
                    <td><Button class='btn btn-outline-danger' onclick='<?php delete($id) ?>'>Elimina</Button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</div>

<?php require_once("footer.php") ?>
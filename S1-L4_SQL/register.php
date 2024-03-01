<?php
require_once("header.php");
require_once("config.php");
?>
<div class="container my-3 text-center">
<form method="POST" action="gestione.php" enctype="multipart/form-data">
            <input type="text" placeholder="FirstName..." name='name' required >
            <input type="text" placeholder="Lastname..." name='cognome' required>
            <input type="number" placeholder="Age..." name='age' >
            <br/>
            <input type="text" placeholder="City..." name='city' >
            <input type="mail" placeholder='Inserisci la tua mail...' name='mail' required>
            <input type="password" placeholder='inserisci la password' name='password' required>
            <br/>
            <button type="submit">Invia Dati</button>
        </form>
        </div>
<?php require_once("footer.php") ?>
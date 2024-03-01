<?php
include_once('namespace.php');
$form= new Pippo\FormTag('post', 'controller.php');
$firstname= new Pippo\InputTag('inserisci qui il tuo nome...', 'text', 'firstname', 'form-control');
$lastname= new Pippo\InputTag('inserisci qui il tuo cognome...', 'text', 'lastname', 'form-control');
$mail= new Pippo\InputTag('inserisci qui la tua mail...', 'email', 'email', 'form-control');
$password= new Pippo\InputTag('inserisci qui la tua password...', 'password', 'password', 'form-control'); 
$submit= new Pluto\Button('submit', 'btn btn-primary')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <?php
            $form->open_tag();   
            $firstname->open_tag();
            $lastname->open_tag();
            $mail->open_tag();
            $password->open_tag();
            $submit->open_tag('Invia');
            $form->close_tag();   
            ?>    
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
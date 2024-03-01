<?php 



if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['city'])) {
    var_dump($_POST);
    echo'<ul>';
    foreach($_POST as $key => $value) {
    echo '<li><span><b>'.$key.' </b></span>'.$value.'</li>';
    }
} 

var_dump($_FILES['miofile']);

$fileName=$_FILES['miofile']["name"];
$fileType=$_FILES['miofile']['type'];
$fileSize=$_FILES['miofile']['size'];
$target_dir = "uploads/";


$contatti= '<li><span><b>'.$_POST['firstname'].' </b></span>'.$_POST['lastname'].', vive a: '.$_POST['city'].'<img src="#"/></li>';
var_dump($contatti);

if($fileType== 'image/png') {

    if($fileSize < 10000000) {
        if(is_uploaded_file($_FILES['miofile']["tmp_name"]) && $_FILES['miofile']["error"] === UPLOAD_ERR_OK) {

            if (move_uploaded_file($_FILES['miofile']["tmp_name"], $target_dir.$fileName)) {
                echo 'Caricamento avvenuto con successo';
            } else {
                echo 'Errore!!!';
            }
        }
    } else {
        echo '<h1>L immagine caricata è troppo pesante</h1>';
    }

} else {
    echo '<h1>Il file caricato non è un immagine</h1>';
};


session_start();

$_SESSION['contatti'][] = $contatti;
var_dump($_SESSION);

header('Location: http://localhost/Back-End/S13-L2/');
 

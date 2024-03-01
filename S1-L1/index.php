<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>S13-L1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">

<?php // all'interno di questo tag scrivo la logica php


$data = date("l");
$today = getdate();




$Formazione = ['portiere', 'terzino sinistro', 'centrale sinistro', 'centrale destro', 'terzino destro', 'mezzala sinistra', 'centrocampista centrale', 'mezzala destra', 'ala sinistra', 'punta centrale', 'ala destra'];
$squadre = ['Atalanta' => $Formazione, 'Bologna'  => $Formazione, 'Cagliari' => $Formazione, 'Empoli' => $Formazione, 'Fiorentina' => $Formazione, 'Frosinone' => $Formazione, 'Genoa' => $Formazione, 'Inter' => $Formazione, 'Juventus' => $Formazione, 'Lazio' => $Formazione, 'Lecce' => $Formazione, 'Milan' => $Formazione, 'Monza' => $Formazione, 'Napoli' => $Formazione, 'Roma' => $Formazione, 'Salernitana' => $Formazione, 'Sassuolo' => $Formazione, 'Torino' => $Formazione, 'Udinese' => $Formazione, 'Verona' => $Formazione];




?>



<p>oggi è : <?=$data?></p>
<h2>oggi è <?=$today['weekday'].', '.$today['mday'].' '.$today['month'].' '.$today['year'] ?></h2>

<h2>Rose Serie A 23/24</h2>
<ul>    
    <?php
        foreach($squadre as $key => $value) {
        echo '<li><b>'.$key.'</b>, '.$value[0].', '.$value[1].', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5].', '.$value[6].', '.$value[7].', '.$value[8].', '.$value[9].', '.$value[10].'</li>';      
        };
   ?>
</ul>

<h2>Calendario</h2>
<h3>Prima giornata</h3>
<ul>
    
</ul>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
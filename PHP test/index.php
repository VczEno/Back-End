<?php


echo 'SONO UNA STRINGA';

const c = 1;
define('def', true);

var_dump(def);
var_dump(c);
echo'<br/>';
$arr= array(1,2,3,4,5,6,7) ;
$arr['pippo']= ['A','B','C'];
echo'<br/>';
echo'<br/>';
echo "stampo l'array associativo all'indice 'pippo': " .$arr['pippo'][0];
echo'<br/>';
echo'<br/>';
$arr[]='x';
$arr[8]='y';


var_dump($arr);
echo'<br/>';
echo'<br/>';
print isset($arr['pippo']); //torna 1 se è vero, niente se è falso (ovvero se la variabile non esiste o se ha valore null)
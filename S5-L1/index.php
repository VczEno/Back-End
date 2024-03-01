<?php


$name=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$city=$_REQUEST['city'];

echo "<h1>$name, $lastname, $city</h1>";

$dir='file/';
$file='users.csv';

if(!isset($users)) {
    $users = [];
} 

var_dump($users);

$user = [$name, $lastname, $city];
$users[] = $user;

if(!file_exists($dir)){
    mkdir($dir, 0777);
}

$resource = fopen($dir.$file, 'a');
if($resource) {
    foreach($users as $user){
        fputcsv($resource, $user, ':');
    }
    fclose($resource);
}
var_dump($users);

    


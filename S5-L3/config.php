<?php

$db='diobono';
$config =[
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => ''
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']
);

if($mysqli->connect_error) { die($mysqli->connect_error);}

$sql= 'CREATE DATABASE IF NOT EXISTS ' .$db;
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}

$sql= 'USE ' . $db;
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}

$sql= 'CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
    )';
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}

// Leggo dati da una tabella
$sql = 'SELECT * FROM users;';
$res = $mysqli->query($sql); // return un mysqli result
if($res->num_rows === 0) { 
    $password = password_hash('Pa$$w0rd!' , PASSWORD_DEFAULT); // cripto la password per inserirla nel DB
    // Inserisco dati in una tabella
    $sql = 'INSERT INTO users (name, lastname, email, password) 
        VALUES ("Mario", "Rossi", "m.rossi@example.com", "'.$password.'");';
    if(!$mysqli->query($sql)) { echo($mysqli->connect_error); }
    else { echo 'Record aggiunto con successo!!!';}
}



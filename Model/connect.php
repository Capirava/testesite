<?php
$host = "localhost";
$username = "id21634049_bombanethost"; 
$password = 'bnetdb67#A'; 
$database = "id21634049_bombanet"; 

$conn = new mysqli($host, $username, $password, $database);

if(!$conn) echo 'Conexão mal-sucedida!';

?>
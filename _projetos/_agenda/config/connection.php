<?php 

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "ma599152";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Ativar moodulo de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}


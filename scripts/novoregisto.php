<?php

session_start();

$db = new SQLite3('../base_dados.db');


$name = $_POST["firstname"];
$nif = $_POST["nif"]
$username = $_POST['User'];
$password = $_POST['Password'];
$email = $_POST["email"];
$contacto = $_POST["contacto"];
$morada = $_POST["morada"];


$db->exec("INSERT INTO LOGIN (name, nif, username, password, email, contacto, morada) VALUES ('$name', '$nif', '$username', '$password', '$email', '$contacto', '$morada');");

$sqlvar = "select * from LOGIN ;";
$result = $db->query($sqlvar);

echo "$username";
echo "$password";

echo "<table>\n<th> id </th>\n<th> username </th>\n<th> password </th><th> email </th><th> contacto </th><th> morada </th>\n";


?>

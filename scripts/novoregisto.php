<?php
echo 'teste';
session_start();

$db = new SQLite3('../base_dados.db');


$Name = $_POST['Nome'];
$Nif = $_POST['Nif'];
$Username = $_POST['User'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Contacto = $_POST['Contacto'];
$Morada = $_POST['Morada'];


$db->exec("INSERT INTO LOGIN (Nome, Nif, User, Password, Email, Contacto, Morada) VALUES ('$Name', '$Nif', '$Username', '$Password', '$Email', '$Contacto', '$Morada');");

$sqlvar = "select * from LOGIN ;";
$result = $db->query($sqlvar);

echo "$Username";
echo "$Password";

echo "<table>\n<th> id </th>\n<th> username </th>\n<th> password </th><th> email </th><th> contacto </th><th> morada </th>\n";
echo '<tr><td>' . $row['id'] . '</td><td>' . $row['username'] . '</td><td>' . $row['password'] . '</td><td>' . $row['email'] . '</td><td>' . $row['contacto'] . '</td><td>' . $row['morada'] . "</td></tr>\n";


?>

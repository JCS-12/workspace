<?php
session_start();


$db = new SQLite3('../base_dados.db');


$Username = $_POST['Username'] ?? '';
$Password = $_POST['Password'] ?? '';
$Email = $_POST['Email'] ?? '';
$Contacto = $_POST['Contacto'] ?? '';
$Morada = $_POST['Morada'] ?? '';


if (empty($Username) || empty($Password) || empty($Email) || empty($Contacto) || empty($Morada)) {
   die("Please fill in all required fields.");
}


$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);


$stmt = $db->prepare("INSERT INTO LOGIN (User, Password, Email, Contacto, Morada) VALUES (:User, :Password, :Email, :Contacto, :Morada)");
$stmt->bindValue(':user', $Username, SQLITE3_TEXT);
$stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);
$stmt->bindValue(':email', $Email, SQLITE3_TEXT);
$stmt->bindValue(':contacto', $Contacto, SQLITE3_TEXT);
$stmt->bindValue(':morada', $Morada, SQLITE3_TEXT);


if ($stmt->execute()) {
    echo "User registered successfully!";
    // header('Location: login');
    // exit();
} else {
    echo "Error registering user: " . $db->lastErrorMsg();
}
?>


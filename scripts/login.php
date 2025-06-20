<?php

session_start();


$db = new SQLite3('../base_dados.db');


$myUsername = $_POST['User'];
$myPassword = $_POST['Password'];


$stmt = $db->prepare("SELECT * FROM LOGIN WHERE username = :username");
$stmt->bindValue(':username', $myUsername, SQLITE3_TEXT);
$result = $stmt->execute();

$loginSuccess = false;

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {

    if ($myUsername == $row['username'] && $myPassword == $row['password']) {
        $loginSuccess = true;
        $_SESSION['username'] = $myUsername;
        break;
    }
};

if ($loginSuccess) {

    header('Location: ../index');
    exit();
} else {

    $message = "Wrong username or password";

    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>



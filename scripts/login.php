<?php

session_start();


$db = new SQLite3('basededados.db');


$sqlvar = "select * from LOGIN ;";
$result = $db->query($sqlvar);

echo “<table>\n<th> id </th>\n<th> username </th>\n<th> password </th><th> email </th><th> contacto </th><th> morada </th>\n”;
while ($row = $result->fetchArray(SQLITE3_ASSOC))
{

echo ‘<tr><td>’ . $row['id'] . ‘</td><td>’ . $row['username'] . '</td><td>' . $row['password'] . '</td><td>' . $row['email'] . '</td><td>' . $row['contacto'] . '</td><td>' . $row['morada']
. “</td></tr>\n”;

}
echo ‘</table>’;


/*$myUsername = $_POST['Name'];
$myPassword = $_POST['Password'];







    if ($username === $valid_username && $password === $valid_password) {
        
        $_SESSION['username'] = $username;

        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
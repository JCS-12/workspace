<?php

session_start();

$db = new SQLite3('../base_dados.db');

$myUsername = $_POST['User'];
$myPassword = $_POST['Password'];

$sqlvar = "select * from LOGIN ;";
$result = $db->query($sqlvar);

echo "$myUsername";
echo "$myPassword";

echo "<table>\n<th> id </th>\n<th> username </th>\n<th> password </th><th> email </th><th> contacto </th><th> morada </th>\n";

while ($row = $result->fetchArray(SQLITE3_ASSOC))
{
if ($myUsername == $row['username'] && $myPassword == $row['password'])
{
    echo "funciona";

    }
else{ echo "ERROR";}
echo '<tr><td>' . $row['id'] . '</td><td>' . $row['username'] . '</td><td>' . $row['password'] . '</td><td>' . $row['email'] . '</td><td>' . $row['contacto'] . '</td><td>' . $row['morada'] . "</td></tr>\n";

}
echo '</table>';

?>


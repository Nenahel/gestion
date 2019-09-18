<html>
<head></head>
<body>Ajout client<br>
<br>
<table>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_bancaire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn;

$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$dn= $_POST['dn'];

echo $_POST ['nom']. "<br>";
echo $_POST ['prenom']. "<br>";
echo $_POST ['dn']."<br>"."<br>";


$sql="insert into client values (0, \"$nom \" , \"$prenom \",  \"$dn\"  )";

echo $sql;


$conn->query($sql);

$conn->close();




?>

</table>
<a href="index.html"> <input type="button" value="retour Accueil"> </a>
</body>
</html>

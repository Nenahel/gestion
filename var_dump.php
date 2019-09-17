<html>
<head></head>
<body>Var_Dump<br>
<br>

<?php

if (isset ($_SERVER ['WINDIR'])); {
	//sous server windows
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_bancaire";	
} else {

$servername = "172.17.0.1";
$username = "root";
$password = "a";
$dbname = "gestion_bancaire";
	
}

?>

</table>
</body>
</html>
<? session_start();	if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit(); }


header("Content-Description: File Transfer"); 
header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=newsletter.xls");
header("Pragma: no-cache");
header("Expires: 0"); 


echo "<table>";

echo "<tr>";
echo "<th>Email</th>";
echo "<th>WhatsApp</th>";
echo "</tr>";

include('../../../conexion.php');
$newsletter=@mysql_query("SELECT * FROM clientes_marketing ORDER BY id ASC",$conecta); 
@mysql_close($conecta);


while ($registros=@mysql_fetch_array($newsletter)) {
 
	echo "<tr>";
	echo "<th>".strtolower($registros['email'])."</th>";
	echo "<th>".$registros['telefono']."</th>";
	echo "</tr>";

}

echo "</table>";

?> 

<?

include "config.php";

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM categoria WHERE id='$id'"); 


header("location:categoriaListar.php");

?>
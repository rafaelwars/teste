<?php

include "config.php";

$categoria = $_POST['categoria'];

$descricao = $_POST['descricao'];

$sql = mysql_query("INSERT INTO categoria(id, categoria,descricao) values (NULL, '$categoria','$descricao')");

if(!$sql){

	echo("<script type='text/javascript'> alert('Já existe esse item!'); location.href='categoriaListar.php';</script>");

}else{

	header("location:categoriaListar.php");

}
?>
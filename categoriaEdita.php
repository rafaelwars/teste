<?php

include "config.php";

$id = $_POST['id'];

$categoria = $_POST['categoria'];

$descricao = $_POST['descricao'];

$sql = mysql_query("UPDATE categoria SET categoria='$categoria', descricao='$descricao' where id ='$id' ");

if(!$sql){

	echo("<script type='text/javascript'> alert('Já existe esse item!'); location.href='categoriaListar.php';</script>");

}else{

	header("location:categoriaListar.php");

}
?>
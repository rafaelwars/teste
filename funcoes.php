<?php

function retornaCategoria($id,$coluna)
{
	global $con;
	$sql = mysql_query("SELECT * from categoria WHERE id='$id'");
	$linha = mysql_fetch_object($sql);
	
	return $linha->$coluna;
}

function retornaProduto($id,$coluna)
{
	global $con;
	$sql = mysql_query("SELECT * from produto WHERE id='$id'");
	$linha = mysql_fetch_object($sql);
	
	return $linha->$coluna;
}

?>
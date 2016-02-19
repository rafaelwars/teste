<?php

include "config.php";

$id = $_POST['id'];

$id_categoria = $_POST['id_categoria'];

$atual = $_POST['atual'];

$data = $_POST['data'];

$categoria = $_POST['categoria'];

$produto = $_POST['nome'];

$fornecedor = $_POST['fornecedor'];

$quantidade = $_POST['quantidade'];

$descricao = $_POST['descricao'];

$sql_entrada = mysql_query("INSERT INTO entradas (id,data,id_categoria,id_produto,fornecedor,quantidade,descricao) VALUES('NULL','$data','$id_categoria','$id','$fornecedor','$quantidade','$descricao')");

if($sql_entrada==true){

	$sql_update = mysql_query("UPDATE PRODUTO SET atual=(atual+$quantidade) WHERE id='$id' ");
	
	echo("<script type='text/javascript'> alert('Entrada realizada com sucesso!'); location.href='produtoListar.php';</script>");

}
else
{
	echo("<script type='text/javascript'> alert('erro no cadastro da entrada!'); location.href='produtoListar.php';</script>");
}

?>
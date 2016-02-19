<?php

include "config.php";

$nome = $_POST['nome'];

$categoria = $_POST['categoria'];

$data = $_POST['data'];

$minimo = $_POST['minimo'];

$descricao = $_POST['descricao'];

$userfile = $_FILES['userfile']['name'];

$temp = $_FILES['userfile']['tmp_name'];

$pasta = "upload/";

$userfile = $pasta.time()."_".$_FILES['userfile']['name'];

$nome_banco = time()."_".$_FILES['userfile']['name'];


if($_FILES['userfile']['size'] < 2000000)
{

	if($_FILES['userfile']['type']=='image/jpeg' || $_FILES['userfile']['type']=='image/png'|| $_FILES['userfile']['type']=='image/gif')
	{

		move_uploaded_file($temp,$userfile);
		
		$sql = "INSERT INTO produto(
			nome,
			categoria,
			data,
			minimo,
			imagem,
			descricao
			) VALUES (
			'$nome',
			'$categoria',
			'$data',
			'$minimo',
			'$nome_banco',
			'$descricao'
			)";
			
			if(!mysql_query($sql)){ die(mysql_error());}
			
			header("location:produtoListar.php");
	}
	else
	{
		echo("<script type='text/javascript'> alert('erro no tipo!'); location.href='produtoListar.php';</script>");
	}

}else
{
	echo("<script type='text/javascript'> alert('erro no tamanho!'); location.href='produtoListar.php';</script>");
}
?>
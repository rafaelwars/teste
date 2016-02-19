<?php

include "config.php";

$id = $_POST['id'];

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

if($temp == null)
{
	$sql = "UPDATE produto SET nome='$nome',categoria='$categoria',data='$data',minimo='$minimo',descricao='$descricao' WHERE id='$id'";
			
				mysql_query($sql);
				
				header("location:produtoListar.php");
				
				if(!mysql_query($sql)){ die(mysql_error());}
}
else
{
	if($_FILES['userfile']['size'] < 2000000)
	{
		if($_FILES['userfile']['type']=='image/jpeg' || $_FILES['userfile']['type']=='image/png'|| $_FILES['userfile']['type']=='image/gif')
		{

			move_uploaded_file($temp,$userfile);
			
			$sql = "UPDATE produto SET nome='$nome',categoria='$categoria',data='$data',minimo='$minimo',imagem='$nome_banco',descricao='$descricao' WHERE id='$id'";
			
				mysql_query($sql);
				
				header("location:produtoListar.php");
				
				if(!mysql_query($sql)){ die(mysql_error());}
		}
		else
		{
			echo("<script type='text/javascript'> alert('erro no tipo!'); location.href='produtoListar.php';</script>");
		}

	}else
	{
		echo("<script type='text/javascript'> alert('erro no tamanho!'); location.href='produtoListar.php';</script>");
	}
}

?>
<?php

// Arquivo de configura��o do projeto

$con = mysql_connect("localhost","root","123");

if(!$con){ die ("Erro ao conectar!");}

$db = mysql_select_db("estoque",$con);

if(!$db){ die ("Banco de dados n�o encontrado!"); }

// array de configura��o

$config = array(
	"URLSITE"=>"http://localhost/estoque/",
	"NOME"=>"Estoque"
);

function sitei($a)
{
		//Array de configura��o
		global $config;		
		return $config[$a];
}

?>
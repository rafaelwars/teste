<?php

// Arquivo de configuração do projeto

$con = mysql_connect("localhost","root","123");

if(!$con){ die ("Erro ao conectar!");}

$db = mysql_select_db("estoque",$con);

if(!$db){ die ("Banco de dados não encontrado!"); }

// array de configuração

$config = array(
	"URLSITE"=>"http://localhost/estoque/",
	"NOME"=>"Estoque"
);

function sitei($a)
{
		//Array de configuração
		global $config;		
		return $config[$a];
}

?>
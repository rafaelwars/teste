<?php

include "includes/topo.php";

$id = $_GET['id'];

$sql = mysql_query(" SELECT * FROM categoria WHERE id = '$id' ");

$linha = mysql_fetch_assoc($sql);

?>

		<ul class="breadcrumb">
			<li>
				<a href="<? echo sitei("URLSITE"); ?>" >Home</a> <span class="divider"></span>
			</li>
			<li>
				<a href="<? echo sitei("URLSITE"); ?>categoriaListar.php" >Categorias</a> <span class="divider"></span>
			</li>
			<li>Editar categoria</li>
		</ul>

		<form class="form-horizontal" action="categoriaEdita.php" method="post" >
			<fieldset>
				<input class="input-xlarge" type="hidden" name="id" value="<? echo $linha['id']; ?>" />
				<div class="control-group">
					<label>Categoria:</label>
					<input class="input-xlarge" style="height:30px;" type="text" name="categoria" value="<? echo $linha['categoria']; ?>" required x-moz-errormessage="Preencha este campo!"/>
				</div>
				<div class="control-group">
					<label>Descrição:</label>
					<textarea class="input-xxlarge" rows="10" name="descricao"><? echo $linha['descricao']; ?></textarea>
				</div>
				<div class="control-group">
					<button class="btn btn-primary" type="submit">Editar</button>
					<a href="categoriaListar.php" class="btn btn-warning">Voltar</a>
				</div>
			</fieldset>
		</form>

		<? include "includes/rodape.php"; ?>
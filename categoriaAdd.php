<?php

include "includes/topo.php";

?>

		<ul class="breadcrumb">
			<li>
				<a href="<? echo sitei("URLSITE"); ?>" >Home</a> <span class="divider"></span>
			</li>
			<li>
				<a href="<? echo sitei("URLSITE"); ?>categoriaListar.php" >Categorias</a> <span class="divider"></span>
			</li>
			<li>Adicionar categoria</li>
		</ul>

		<form  id="form" class="form-horizontal" action="categoriaCad.php" method="post" >
			<fieldset>
				<div class="control-group">
					<label>Categoria:</label>
					<input class="input-xlarge" style="height:30px;" type="text" name="categoria" required x-moz-errormessage="Preencha este campo!"/>
				</div>
				<div class="control-group">
					<label>Descrição:</label>
					<textarea class="input-xxlarge" rows="10" name="descricao"></textarea>
				</div>
				<div class="control-group">
					<button class="btn btn-primary" type="submit">Cadastrar</button>
					<a href="categoriaListar.php" class="btn btn-warning">Voltar</a>
				</div>
			</fieldset>
		</form>

		<? include "includes/rodape.php"; ?>
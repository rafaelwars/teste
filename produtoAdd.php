<?php

include "includes/topo.php";

$sql_categorias = mysql_query("SELECT * FROM categoria ORDER BY categoria ASC");

?>

		<ul class="breadcrumb">
			<li>
				<a href="<? echo sitei("URLSITE"); ?>" >Home</a> <span class="divider"></span>
			</li>
			<li>
				<a href="<? echo sitei("URLSITE"); ?>produtoListar.php" >Produtos</a> <span class="divider"></span>
			</li>
			<li>Adicionar produto</li>
		</ul>

		<form class="form-horizontal" action="produtoCad.php" method="post" enctype="multipart/form-data" >
			<fieldset>
				<div class="control-group">
					<label>Produto:</label>
					<input style="height:30px;" class="input-xlarge" type="text" name="nome" required x-moz-errormessage="Preencha este campo!" />
				</div>
				
				<div class="control-group">
					<label>Categoria:</label>
					
					<select name="categoria" required x-moz-errormessage="Preencha este campo!" >
						<option value="">Selecione</option>
						<?
							while($linha = mysql_fetch_object($sql_categorias)){
							
								echo "<option value=".$linha->id.">".$linha->categoria."</option>\n";
							
							}
						?>
					</select>
				</div>
				
				<div class="control-group">
					<label>Data:</label>
					<input id="datepicker" style="height:30px;" class="input-large" type="text" name="data" required x-moz-errormessage="Preencha este campo!" />
				</div>
				
				<div class="control-group">
					<label>Est. Mínimo:</label>
					<input style="height:30px;" class="input-large" type="text" name="minimo" required x-moz-errormessage="Preencha este campo!"/>
				</div>
				
				<div class="control-group">
					<label>Imagem:</label>
					<input  class="input-file" type="file" name="userfile" multiple required x-moz-errormessage="Preencha este campo!" />
				</div>
				
				<div class="control-group">
					<label>Descrição:</label>
					<textarea class="input-xxlarge" rows="10" name="descricao"></textarea>
				</div>
				<div class="control-group">
					<button class="btn btn-primary" type="submit">Cadastrar</button>
					<a href="produtoListar.php" class="btn btn-warning">Voltar</a>
				</div>
			</fieldset>
		</form>

		<? include "includes/rodape.php"; ?>
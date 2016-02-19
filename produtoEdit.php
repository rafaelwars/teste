<?php

include "includes/topo.php";

$id = $_GET['id'];

$sql_categorias = mysql_query("SELECT * FROM categoria ORDER BY categoria ASC");

$sql = mysql_query("SELECT * FROM produto WHERE id='$id' ");

$linha = mysql_fetch_assoc($sql);

$categoria = $linha['categoria'];

?>

		<ul class="breadcrumb">
			<li>
				<a href="<? echo sitei("URLSITE"); ?>" >Home</a> <span class="divider"></span>
			</li>
			<li>
				<a href="<? echo sitei("URLSITE"); ?>produtoListar.php" >Produtos</a> <span class="divider"></span>
			</li>
			<li>Editar produto</li>
		</ul>

		<form class="form-horizontal" action="produtoEdita.php" method="post" enctype="multipart/form-data" >
			<fieldset>
				<input class="input-xlarge" type="hidden" name="id" value="<? echo $linha['id']; ?>" />
				<div class="control-group">
					<label>Produto:</label>
					<input style="height:30px;" class="input-xlarge" type="text" name="nome" value="<? echo $linha['nome']; ?>" required x-moz-errormessage="Preencha este campo!" />
				</div>
				
				<div class="control-group">
					<label>Categoria:</label>
					
					<select name="categoria" required x-moz-errormessage="Preencha este campo!">
						<option value="">Selecione</option>
						<?
							while($linha2 = mysql_fetch_array($sql_categorias)) 
							{
								if($linha2['id'] == $categoria){
									$selected = 'selected';
								}else{
								$selected = '';
								}
								
								?>
								<option value="<?echo $linha2['id'];?>" <?php echo $selected; ?>><?echo $linha2['categoria'];?></option>
								<?
							}
						?>
					</select>
				</div>
				
				<div class="control-group">
					<label>Data:</label>
					<input ID="datepicker" style="height:30px;" class="input-large" type="text" name="data"value="<? echo $linha['data']; ?>"  required x-moz-errormessage="Preencha este campo!"/>
				</div>
				
				<div class="control-group">
					<label>Est. Mínimo:</label>
					<input style="height:30px;" class="input-large" type="text" name="minimo" value="<? echo $linha['minimo']; ?>" required x-moz-errormessage="Preencha este campo!"/>
				</div>
				
				<div class="control-group">
					<label>Imagem:</label>
					<input class="input-file" type="file" name="userfile" multiple />
				</div>
				
				<div class="control-group">
					<label>Descrição:</label>
					<textarea class="input-xxlarge" rows="10" name="descricao"><? echo $linha['descricao']; ?></textarea>
				</div>
				<div class="control-group">
					<button class="btn btn-primary" type="submit">Editar</button>
					<a href="produtoListar.php" class="btn btn-warning">Voltar</a>
				</div>
			</fieldset>
		</form>

		<? include "includes/rodape.php"; ?>
<?php

include "includes/topo.php";

$id_produto = $_GET['id_produto'];

$sql = mysql_query("SELECT * FROM produto WHERE id='$id_produto'");

$linha = mysql_fetch_assoc($sql);

?>

		<ul class="breadcrumb">
			<li>
				<a href="<? echo sitei("URLSITE"); ?>" >Home</a> <span class="divider"></span>
			</li>
			<li>
				<a href="<? echo sitei("URLSITE"); ?>produtoListar.php" >Produtos</a> <span class="divider"></span>
			</li>
			<li>Entrada de produto</li>
		</ul>

		<form class="form-horizontal" action="entradaCad.php" method="post" enctype="multipart/form-data" >
			<fieldset>
				<input type="hidden" name="id" value="<? echo $id_produto;?>">
				<input type="hidden" name="id_categoria" value="<? echo $linha['categoria'];?>">
				<div class="control-group">
					<label>Quantidade no estoque:</label>
					<input style="height:30px;" class="input-xlarge" type="text" name="atual" value="<? echo $linha['atual']; ?>" readonly="true" />
				</div>
				
				<div class="control-group">
					<label>Data do cadastro:</label>
					<input id="datepicker" style="height:30px;" class="input-large" type="date" name="data" required x-moz-errormessage="Preencha este campo!" />
				</div>
				
				<div class="control-group">
					<label>Categoria:</label>
					<input style="height:30px;" class="input-xlarge" type="text" name="categoria" value="<? echo retornaCategoria($linha['categoria'],"categoria"); ?>" readonly="true" />
				</div>
				
				<div class="control-group">
					<label>Fornecedor:</label>
					<input style="height:30px;" class="input-large" type="text" name="fornecedor" required x-moz-errormessage="Preencha este campo!"/>
				</div>
				
				<div class="control-group">
					<label>Produto:</label>
					<input style="height:30px;" class="input-xlarge" type="text" name="nome" value="<? echo retornaProduto($linha['id'],"nome"); ?>" readonly="true" />
				</div>
				
				<div class="control-group">
					<label>Quantidade:</label>
					<input style="height:30px;" class="input-large" type="text" name="quantidade" required x-moz-errormessage="Preencha este campo!"/>
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
<?php

include "includes/topo.php";

@$sql = mysql_query("SELECT * FROM produto ORDER BY id DESC");

@$row = mysql_num_rows($sql);

?>
	<script>
	
		function confirmacao(){ if (confirm("Deseja excluir esse item?")){ return true;} else { return false;}}
	
	</script>
	<body>
		
		<a href="produtoAdd.php" class="btn btn-success" > Adicionar produto <i class="icon-plus icon-white"></i></a></br></br>
	
		<table class="table table-bordered">
			<thead>
				<th>Imagem</th>
				<th>Produto</th>
				<th>Data</th>
				<th>Descrição</th>
				<th>Ação</th>
			</thead>
			<tbody>
				<?
					while($linha = mysql_fetch_assoc($sql)){
				?>
				<tr>
					<td><img src="upload/<? echo $linha['imagem'];?>" width="110" height="110" /></td>
					<td><? echo $linha['nome'];?></td>
					<td><? echo $linha['data'];?></td>
					<td><? echo $linha['descricao'];?></td>
					<td>
						<a href="entradaAdd.php?id_produto=<? echo $linha['id']; ?>" class="btn"><i class="icon-arrow-up"></i> Entrada</a>
						<a href="produtoDel.php?id=<? echo $linha['id']; ?>" onclick="return confirmacao()" class="btn"><i class="icon-trash"></i></a>
						<a href="produtoEdit.php?id=<? echo $linha['id']; ?>" class="btn"><i class="icon-pencil"></i></a>
					</td>
				</tr>
				<? 
				
				} 
				
				if($row == 0 ){echo "<tr><td> Nenhum registro encontrado.</td></tr>";}
				?>
			</tbody>
		</table>
	</body>
<? include "includes/rodape.php"; ?>
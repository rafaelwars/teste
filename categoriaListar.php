<?php

include "includes/topo.php";

@$sql = mysql_query("SELECT * FROM categoria ORDER BY id DESC");

@$row = mysql_num_rows($sql);

?>
	<script>
	
		function confirmacao(){ if (confirm("Deseja excluir esse item?")){ return true;} else { return false;}}
	
	</script>
	<body>
		
		<a href="categoriaAdd.php" class="btn btn-success" > Adicionar categoria <i class="icon-plus icon-white"></i></a></br></br>
	
		<table class="table table-bordered">
			<thead>
				<th>Id</th>
				<th>Categoria</th>
				<th>Descrição</th>
				<th>Ação</th>
			</thead>
			<tbody>
				<?
					while($linha = mysql_fetch_assoc($sql)){
				?>
				<tr>
					<td><? echo $linha['id'];?></td>
					<td><? echo $linha['categoria'];?></td>
					<td><? echo $linha['descricao'];?></td>
					<td>
						<a href="categoriaEdit.php?id=<? echo $linha['id']; ?>" class="btn"><i class="icon-pencil"></i></a>
						<a href="categoriaDel.php?id=<? echo $linha['id']; ?>" onclick="return confirmacao()" class="btn"><i class="icon-trash"></i></a>
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
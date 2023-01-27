<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente AS a
			INNER JOIN biblioteca AS b
			ON b.id_biblioteca = a.biblioteca_id_biblioteca";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da biblioteca</th>";
		print "<th>Nome do Atendente</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_atendente."</td>";
			print "<td>".$row->nome_biblioteca."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."';\">
					<i class=\"fas fa-edit\"></i>
					</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\">
					<i class=\"fas fa-trash-alt\"></i>
					</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não tem resultados</div>";
	}
?>
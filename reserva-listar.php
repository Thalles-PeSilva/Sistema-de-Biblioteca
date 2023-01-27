<h1>Listar Reserva</h1>
<?php
	$sql = "SELECT * FROM reserva AS a INNER JOIN aluno AS b ON b.id_aluno = a.aluno_id_aluno INNER JOIN livro AS t2 ON t2.id_livro = a.livro_id_livro INNER JOIN atendente AS t3 ON t3.id_atendente = a.atendente_id_atendente";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Titulo do Livro</th>";
		print "<th>Nome do Aluno</th>";
		print "<th>Data da Reserva</th>";
		print "<th>Data da Entrega</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_reserva."</td>";
			print "<td>".$row->id_aluno."</td>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row->data_reserva."</td>";
			print "<td>".$row->data_entrega."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."';\">
					<i class=\"fas fa-edit\"></i>
					</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."',\">
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
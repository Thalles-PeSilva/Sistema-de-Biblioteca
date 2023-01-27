<h1>Cadastrar Reserva</h1>
<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Alunos</label>
		<select name="aluno_id_aluno" class="form-control">
			<option>-= Selecione um aluno =-</option>
			<?php
				$sql = "SELECT * FROM aluno";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_aluno."'>";
						print $row->nome_aluno."</option>";
					}
				}else{
					print "<option>Não há Alunos cadastrados</option>";
				}
			?>
		</select>
		<label>Livros</label>
		<select name="livro_id_livro" class="form-control">
			<option>-= Selecione um Livro =-</option>
			<?php
				$sql = "SELECT * FROM livro";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_livro."'>";
						print $row->titulo_livro."</option>";
					}
				}else{
					print "<option>Não há Livros Cadastrados</option>";
				}
			?>
		</select>
		<label>Atendente</label>
		<select name="atendente_id_atendente" class="form-control">
			<option>-= Selecione um Atendente =-</option>
			<?php
				$sql = "SELECT * FROM atendente";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_atendente."'>";
						print $row->nome_atendente."</option>";
					}
				}else{
					print "<option>Não há Atedentes cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data da Reserva</label>
		<input type="date" name="data_reserva" class="form-control">
	</div>
		<div class="mb-3">
		<label>Data da Entrega</label>
		<input type="date" name="data_entrega" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
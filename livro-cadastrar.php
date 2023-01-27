<h1>Cadastrar Livro</h1>
<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Categoria</label>
		<select name="categoria_id_categoria" class="form-control">
			<option>-= Selecione uma categoria =-</option>
			<?php
				$sql = "SELECT * FROM categoria";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_categoria."'>";
						print $row->nome_categoria."</option>";
					}
				}else{
					print "<option>Não há categorias cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Titulo do Livro</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Autor do Livro</label>
		<input type="text" name="autor_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Editora do Livro</label>
		<input type="text" name="editora_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Edição do Livro</label>
		<input type="text" name="edicao_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Ano do Livro</label>
		<input type="year" name="ano_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Localidade do Livro</label>
		<input type="text" name="localidade_livro" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
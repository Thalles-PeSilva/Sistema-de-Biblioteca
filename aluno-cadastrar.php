<h1>Cadastrar Aluno</h1>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="end_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="fone_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero</label>
		<label>
			<input type="radio" name="genero_aluno" value="Masculino"> Masculino 
		</label>
		<label>
			<input type="radio" name="genero_aluno" value="Feminino"> Feminino 
		</label>
		<label>
			<input type="radio" name="genero_aluno" value="Outros"> Outros 
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
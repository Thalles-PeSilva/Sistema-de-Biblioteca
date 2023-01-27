<h1>Editar Aluno</h1>
<?php
	$sql = "SELECT * FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_aluno" value="<?php print $row->nome_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="end_aluno" value="<?php print $row->end_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email_aluno" value="<?php print $row->email_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="fone_aluno" value="<?php print $row->fone_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_aluno" value="<?php print $row->dt_nasc_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero</label>
		<label>
			<input type="radio" name="genero_aluno" value="Masculino" 
			<?php print($row->genero_aluno=="Masculino"?"checked":""); ?> > Masculino 
		</label>
		<label>
			<input type="radio" name="genero_aluno" value="Feminino" 
			<?php print($row->genero_aluno=="Feminino"?"checked":""); ?> > Feminino 
		</label>
		<label>
			<input type="radio" name="genero_aluno" value="Outros" 
			<?php print($row->genero_aluno=="Outros"?"checked":""); ?> > Outros 
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
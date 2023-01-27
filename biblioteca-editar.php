<h1>Editar Biblioteca</h1>
<?php
	$sql = "SELECT * FROM biblioteca WHERE id_biblioteca=".$_REQUEST["id_biblioteca"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=biblioteca-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_biblioteca" value="<?php print $row->id_biblioteca; ?>"> 
	<div class="mb-3">
		<label>Nome da Biblioteca</label>
		<input type="text" name="nome_biblioteca" class="form-control" value="<?php print $row->nome_biblioteca; ?>"> 
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="end_biblioteca" class="form-control"value="<?php print $row->end_biblioteca; ?>"> 
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
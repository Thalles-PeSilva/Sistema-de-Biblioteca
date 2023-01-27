<h1>Editar Atendente</h1>
<?php
	$sql_1 = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST["id_atendente"];

	$res_1 = $conn->query($sql_1) or die($conn->error);

	$row_1 = $res_1->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row_1->id_atendente; ?>">
	<div class="mb-3">
		<label>Biblioteca</label>
		<select name="biblioteca_id_biblioteca" class="form-control">
			<option>-= Selecione uma biblioteca =-</option>
			<?php
				$sql = "SELECT * FROM biblioteca";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row->id_biblioteca == $row_1->biblioteca_id_biblioteca){
							print "<option value='".$row->id_biblioteca."' selected>";
							print $row->nome_biblioteca."</option>";
						}else{
							print "<option value='".$row->id_biblioteca."'>";
							print $row->nome_biblioteca."</option>";
						}
					}
				}else{
					print "<option>Não há bibliotecas cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome do Atendente</label>
		<input type="text" name="nome_atendente" value="<?php print $row_1->nome_atendente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
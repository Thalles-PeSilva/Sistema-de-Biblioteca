<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$categoria 		= $_POST["categoria_id_categoria"];
			$titulo 		= $_POST["titulo_livro"];
			$autor 			= $_POST["autor_livro"];
			$editora 		= $_POST["editora_livro"];
			$edicao 		= $_POST["edicao_livro"];
			$ano 			= $_POST["ano_livro"];
			$localidade 	= $_POST["localidade_livro"];

			$sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro, ano_livro, localidade_livro) VALUES ({$categoria},'{$titulo}','{$autor}','{$editora}','{$edicao}','{$ano}','{$localidade}')";

			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
			break;
			
		
		case 'editar':
			$categoria 		= $_POST["categoria_id_categoria"];
			$titulo 		= $_POST["titulo_livro"];
			$autor 			= $_POST["autor_livro"];
			$editora 		= $_POST["editora_livro"];
			$edicao 		= $_POST["edicao_livro"];
			$ano 			= $_POST["ano_livro"];
			$localidade 	= $_POST["localidade_livro"];

			$sql = "UPDATE livro SET categoria_id_categoria={$categoria}, titulo_livro='{$titulo}', autor_livro='{$autor}', editora_livro='{$editora}', edicao_livro='{$edicao}', ano_livro='{$ano}', localidade_livro='{$localidade}' WHERE id_livro=".$_POST["id_livro"];

			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST["id_livro"];
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
			break;
	}
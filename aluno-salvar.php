<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome    = $_POST["nome_aluno"];
			$end     = $_POST["end_aluno"];
			$email   = $_POST["email_aluno"];
			$fone    = $_POST["fone_aluno"];
			$dt_nasc = $_POST["dt_nasc_aluno"];
			$genero  = $_POST["genero_aluno"];	

			$sql = "INSERT INTO aluno (nome_aluno, end_aluno, email_aluno, fone_aluno, dt_nasc_aluno, genero_aluno) VALUES ('{$nome}', '{$end}', '{$email}', '{$fone}', '{$dt_nasc}', '{$genero}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;
		
		case 'editar':
			$nome    = $_POST["nome_aluno"];
			$end     = $_POST["end_aluno"];
			$email   = $_POST["email_aluno"];
			$fone    = $_POST["fone_aluno"];
			$dt_nasc = $_POST["dt_nasc_aluno"];
			$genero  = $_POST["genero_aluno"];	

			$sql = "UPDATE aluno SET nome_aluno='{$nome}', end_aluno='{$end}', email_aluno='{$email}', fone_aluno='{$fone}', dt_nasc_aluno='{$dt_nasc}', genero_aluno='{$genero}' WHERE id_aluno=".$_POST["id_aluno"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;
	}
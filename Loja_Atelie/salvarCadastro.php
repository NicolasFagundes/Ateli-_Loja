<h1>Salvar usuario</h1>
<?php
	switch ($_REQUEST['acao']){

		case 'cadastrar':
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);
			
			$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}','{$email}','{$senha}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('O cadastro foi realizado com sucesso');</script>";
				print "<script>location.href='?page=mostrar';</script>";
			}else{
				print "<script>alert('Devido a um erro, não foi possível finalizar o cadastro, por favor, tente novamente');</script>";
			};
		break;

		case 'editar':
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);

			$sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}') WHERE id=".$_REQUEST["id"];"


			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('A edição foi realizada com sucesso');</script>";
				print "<script>location.href='?page=mostrar';</script>";
			}else{
				print "<script>alert('Devido a um erro, não foi possível finalizar a edição, por favor, tente novamente');</script>";
			};
		break;

		case 'excluir':
			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('A exclusão foi realizada com sucesso');</script>";
				print "<script>location.href='?page=mostrar';</script>";
			}else{
				print "<script>alert('Devido a um erro, não foi possível finalizar a exclusão, por favor, tente novamente');</script>";

		break;
	}


?>
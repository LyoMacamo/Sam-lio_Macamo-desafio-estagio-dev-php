<?php
session_start();
if(isset($_POST['submit']) /*&& !empty($_POST['Username']) && !empty($_POST['Senha'])*/){
	
	include_once('config.php');
	$user = $_POST['Username'];
	$senha = $_POST['Senha'];

	

	/*print_r('Username: ' . $user);
	print_r(' Senha: ' . $senha);*/

	$sql = "SELECT * FROM usuario WHERE username = '$user' and senha = '$senha'";
	$result = $conexao -> query($sql);

	if($result->num_rows > 0){
		echo "Bem vindo, $user";
		$_SESSION['user'] = $user;
		$_SESSION['senha'] = $senha;
		header('Location: formulario.php');
	}else{
		$echo = "Nome do usuario ou senha incorreto. Tente novamente.";
		unset($_SESSION['user']);
		unset($_SESSION['senha']);
		header('Location: login.php');
	}
	//header('Location: login.php');

	$conexao->close();
	

}
?>
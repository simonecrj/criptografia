<?php
include('conexao.php');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
    $senha = $_POST["senha"];
   
   
   $scodif = crypt($senha, '$RT');
    // criptografia hash
	
	$sql = "insert into usuario values(null,'".$nome."','".$email."','".$scodif."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "Gravado com sucesso!";
	}else{
		echo "Erro ao gravar!";
	}
	mysqli_close($conexao);
?>
<br>


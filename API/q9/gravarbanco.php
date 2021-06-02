<?php
include_once 'conexao.php';

$curso = $_POST['curso'];

$query = "INSERT INTO curso(curso) VALUES('$curso')";

$return = mysqli_query($conn, $query);

if($return){
	header("location: meuCadastro.php");
}else{
	echo "Erro";
}

?>
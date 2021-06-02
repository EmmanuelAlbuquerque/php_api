<?php
    include_once "connect.php";
    $nome = $_GET['utdsist2'];
    $status = $_GET['status'];
    $insert = "INSERT INTO curso (`nome`, `status`) VALUES('$nome', '$status')";
    $query = mysqli_query($conn, $insert);
    header("location: tabela.php")
?>


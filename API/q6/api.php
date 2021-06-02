<?php
    include_once "connect.php";
    $select = "SELECT * FROM curso";
    $query = mysqli_query($conn, $select);
    while($resultado=mysqli_fetch_array($query)){
        echo json_encode($resultado)."<br>";
    }
    
?>
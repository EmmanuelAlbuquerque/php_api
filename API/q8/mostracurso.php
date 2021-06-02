<?php

include_once 'Connect.class.php';
include_once 'Manager.class.php';

$manager = new Manager;

if(isset($_GET['curso'])){
 $curso = $manager->select_common("curso",null,['nome'],null);
     $objeto = (object)$curso;
     var_dump($objeto);
     print_r($objeto);

}

?>
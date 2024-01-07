<?php
require_once("../CONFIG/config.php");


$recordClient = new Clientes();

if(isset($_GET['idcliente'])  && isset($_GET['req'])){
    if($_GET['req'] == "delete"){
        $recordClient -> setIdCliente($_GET['idcliente']);
        $recordClient -> clienDelete();
         echo "<script> alert('Datos borrados');document.location='cliente.php'</script>";
 
    }
}




?>
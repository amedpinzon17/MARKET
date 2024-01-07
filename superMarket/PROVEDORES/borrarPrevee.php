<?php
require_once("../CONFIG/config.php");


$recordProve = new Provedores();

if(isset($_GET['provedorId']) && isset($_GET['req'])){
    if($_GET['req'] == "delete"){
        $recordProve -> setProvedorId($_GET['provedorId']);
        $recordProve -> deleteProvee();
        echo "<script> alert('Datos borrados'); document.location='provedores.php'</script>";

    }
}



?>
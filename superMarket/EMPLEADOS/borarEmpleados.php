<?php

require_once("../CONFIG/config.php");

$recodEmplea = new Empleados();

if(isset($_GET['empleadosId']) && isset($_GET['req'])){
    if($_GET['req'] == "delete"){
        $recodEmplea -> setEmpladosId($_GET['empleadosId']);
        $recodEmplea -> deleteEmplea();
         echo "<script> alert('Datos borrados');document.location='empleados.php'</script>";
    }
}


?>
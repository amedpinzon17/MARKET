<?php
if(isset($_POST['guardarCategorias'])){
    require_once("config.php");


    $category = new Categorias();

    $category ->setNombre($_POST['nombre']);
    $category ->setDescripcion($_POST['descripcion']);
    $category ->setImagen($_POST['imagen']);


    $category -> insertCateData();
    echo "<script> alert('los datos fueron guardados');document.location='../CATEGORIAS/categorias.php'</script>";

}


/* --------------------------------------------------- */
if(isset($_POST['guardarCliente'])){
    require_once("config.php");


    $client = new Clientes();
    

    $client -> setCelular($_POST['celular']);
    $client -> setCompañia($_POST['compañia']);

    $client ->insetClien();
    echo "<script> alert('los datos fueron guardados');document.location='../CLIENTES/cliente.php'</script>";

}

/* --------------------------------------------------------------------------- */


if(isset($_POST['guardarEmpleados'])){
    require_once("config.php");


    $empleas = new Empleados();

    $empleas ->  setNombre($_POST['nombre']);
    $empleas ->  setCelular($_POST['celular']);
    $empleas ->  setDireccion($_POST['direccion']);
    $empleas ->  setImagen($_POST['imagen']);

    $empleas -> insertEmplea();
    echo "<script> alert('los datos fueron guardados');document.location='../EMPLEADOS/empleados.php'</script>";

}
/* --------------------------------------------------------------------------- */
if(isset($_POST['guardarProve'])){
    require_once("config.php");


    $provedor = new Provedores();
    
    $provedor -> setNombre($_POST['nombre']);
    $provedor -> setTelefono($_POST['telefono']);
    $provedor -> setCiudad($_POST['ciudad']);
    
    $provedor -> insertProvee();
    echo "<script> alert('los datos fueron guardados');document.location='../PROVEDORES/provedores.php'</script>";

}




?>
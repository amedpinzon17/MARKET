<?php

ini_set("display_errors" , 1 );
ini_set("display_startup_errors" , 1 );

error_reporting(E_ALL);


require_once("db.php");
require_once("conectar.php");


class Categorias extends Conexion{


    private $categoriaId;
    private $nombre;
    private $descripcion;
    private $imagen;




public function __construct($categoriaId = 0, $nombre = "", $descripcion = "", $imagen="", $dbCnx= ""){
    $this -> categoriaId = $categoriaId;
    $this -> nombre = $nombre;
    $this -> descripcion = $descripcion;
    $this -> imagen = $imagen;
    parent::__construct($dbCnx);
}



public function setCategoriaid($categoriaId){
    $this -> categoriaId = $categoriaId;
}

public function getCategoriaid(){
    return $this -> categoriaId;
}

/* ------------------------------------------- */

public function setNombre($nombre){
    $this -> nombre = $nombre;
}

public function getNombre(){
    return $this -> nombre;
}

/* --------------------------------------------- */

public function setDescripcion($descripcion){
    $this -> descripcion = $descripcion;
}

public function getDescripcion(){
    return $this -> descripcion;
}

/* --------------------------------------------- */

public function setImagen($imagen){
    $this -> imagen = $imagen;
}

public function getImagen(){
    return $this -> imagen;
}

/* ---------------------------------------------*/


public function insertCateData(){
    try{
        $stm = $this -> dbCnx -> prepare("INSERT INTO categorias(nombre, descripcion, imagen) VALUE (?,?,?)");
        $stm -> execute([$this -> nombre, $this -> descripcion, $this -> imagen]);
    }catch(Exception $e){
        return $e -> getMessage();
    }
}

public function selectCateAll(){
    try{
        $stm = $this -> dbCnx -> prepare("SELECT * FROM categorias");
        $stm -> execute();
        return $stm-> fetchAll();
    }catch(Exception $e){
        return $e -> getMessage();
    }
}

public function cateDelete(){
    try{
        $stm = $this -> dbCnx -> prepare("DELETE FROM categorias WHERE categoriaId=?");
        $stm ->execute([$this -> categoriaId]);
        return $stm -> fetchAll();
        echo "<script>alert('borrado exitosamente');document.location='../CATEGORIAS/categorias.php'</script> ";
    }catch(Exception $e){
        return $e->getMesssage();
    }
}


public function selectOneCate(){
    try{
        $stm = $this -> dbCnx ->prepare('SELECT * FROM categorias WHERE categoriaId=?');
        $stm->execute([$this ->categoriaId]);
        return $stm -> fetchAll();
    }catch(Exception $e){
        return $e -> getMessage();
    }
}

public function updateCate(){
    try{
        $stm = $this -> dbCnx -> prepare('UPDATE categorias SET nombre = ?, descripcion = ? WHERE categoriaId=?');
        $stm -> execute ([$this -> nombre, $this -> descripcion, $this -> categoriaId]);
    }catch(Exception $e){
        return $e -> getMessage();
    }
}

}

/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */

class Clientes extends Conexion{

    private $idcliente;
    private $celular;
    private $compañia;


    public function __construct($idcliente = 0, $celular = 0, $compañia = "", $dbCnx =""){
        $this -> idcliente = $idcliente;
        $this -> celular = $celular;
        $this -> compañia = $compañia;
        parent::__construct($dbCnx);
    }



    public function setIdCliente($idcliente){
        $this -> idcliente = $idcliente;
    }

    public function getIdCliente($idcliente){
        return $this -> idcliente;
    }
/* ----------------------------------------------------- */

     public function setCelular($celular){
        $this -> celular = $celular;
    }

    public function getCelular($celular){
        return $this -> celular;
    }
/* ----------------------------------------------------- */

     public function setCompañia($compañia){
        $this -> compañia = $compañia;
    }

    public function getCompañia($compañia){
        return $this -> compañia;
    }




    public function insetClien(){
        try{
            $stm = $this -> dbCnx -> prepare('INSERT INTO clientes(celular, compañia) VALUES (?,?)');
            $stm -> execute([$this -> celular, $this -> compañia]);
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }


    public function selectClienAll(){
        try{
            $stm = $this -> dbCnx -> prepare('SELECT * FROM clientes');
            $stm -> execute();
            return $stm -> fetchAll();
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }

    public function clienDelete(){
        try{
            $stm =$this -> dbCnx -> prepare('DELETE FROM clientes WHERE idcliente = ?');
            $stm -> execute([$this -> idcliente]);
            return $stm -> fetchAll();
            echo "<script>alert('borrado exitosamente');document.location='../CLIENTES/cliente.php'</script> " ;
        }catch(Exception $e){
            return $e-> getMsssage();
        }
    }


    public function selectClient(){
        try{
            $stm = $this -> dbCnx -> prepare('SELECT * FROM clientes WHERE idcliente=?');
            $stm -> execute([$this -> idcliente]);
            return $stm-> fetchAll();
        }catch(Exceptionn $e){
            return $e->getMessage();
        }
    }



    public function  updateClient(){
        try{
            $stm = $this -> dbCnx -> prepare('UPDATE clientes SET celular = ?, compañia = ? WHERE idcliente=?');
            $stm -> execute([$this -> celular, $this -> compañia, $this -> idcliente]);
        }catch(Exception $e){
            return $e-> getMessage();
        }
    }

}
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */



class Empleados extends Conexion{

    private $empleadosId;
    private $nombre;
    private $celular;
    private $direccion;
    private $imagen;


    public function __construct($empleadosId = 0, $nombre = "", $celular = 0, $direccion ="", $imagen = "", $dbCnx = ""){
        $this -> empleadosId = $empleadosId;
        $this -> nombre = $nombre;
        $this -> celular = $celular;
        $this -> direccion = $direccion;
        $this -> imagen = $imagen;
        parent:: __construct($dbCnx);
    }



    public function setEmpleadosId($empleadosId) {
        $this->empleadosId = $empleadosId;
    }

    public function getEmpleadosId(){
        return $this->empleadosId;
    }

/* ----------------------------------------------------- */


    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    /* ----------------------------------------------------- */


    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getCelular(){
        return $this->celular;
    }

    /* ----------------------------------------------------- */


    public function setDireccion($direccion){
        $this -> direccion = $direccion;
    }

    public function getDireccion(){
        return $this -> direccion;
    }

/* ----------------------------------------------------- */

    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }

    public function getImagen(){
        return $this -> imagen;
    }




    public function insertEmplea(){
        try{
            $stm = $this -> dbCnx -> prepare('INSERT INTO empleados(nombre, celular, direccion, imagen) VALUES (?,?,?,?)');
            $stm -> execute([$this -> nombre, $this -> celular, $this -> direccion, $this -> imagen]);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }


    public function selectEmpleaAll(){
        try{
            $stm = $this -> dbCnx -> prepare('SELECT * FROM empleados');
            $stm -> execute();
            return $stm->fetchAll();
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }


    public function deleteEmplea(){
        try{ 
        $stm = $this -> dbCnx -> prepare('DELETE FROM empleados WHERE empleadosId=?');
        $stm ->execute([$this -> empleadosId]);
        return $stm->fetchAll();
        echo "<script>alert('borrado exitosamente');document.location='../EMPLEADOS/empleados.php'</script> " ;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

    public function selectEmpleaOne(){
        try{
            $stm = $this ->dbCnx -> prepare('SELECT * FROM empleados WHERE empleadosId=?');
            $stm ->execute([$this ->empleadosId]);
            return $stm -> fetchAll();
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }

    public function updateEmplae(){
        try{
            $stm = $this -> dbCnx -> prepare('UPDATE empleados SET nombre = ?, celular = ?, direccion = ?, imagen = ? WHERE empleadosId=?');
            $stm -> execute([$this -> nombre, $this -> celular, $this -> direccion,$this -> imagen, $this -> empleadosId]);
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }

}
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */


class Productos extends Conexion{





    }
    



/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */
/* --------------------------------------------------------------------------------------------- */


class Provedores extends Conexion{

    private $provedorId;
    private $nombre;
    private $telefono;
    private $ciudad;

    public function __construct($provedorId = 0, $nombre = "", $telefono = 0, $ciudad = "", $dbCnx=""){
        $this -> provedorId = $provedorId;
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> ciudad = $ciudad;
        parent:: __construct($dbCnx);
    }



    public function setProvedorId($provedorId) {
        $this->provedorId = $provedorId;
    }

    public function getProvedorId(){
        return $this->provedorId;
    }

    /* ----------------------------------------------- */
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    /* ----------------------------------------------- */

        public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    /* ----------------------------------------------- */

        public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    /* ----------------------------------------------- */



    public function insertProvee(){
        try{
            $stm = $this -> dbCnx -> prepare('INSERT INTO provedores(nombre,telefono, ciudad) VALUES (?,?,?)');
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> ciudad]);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function selectProveeAll(){
        try{
            $stm = $this -> dbCnx -> prepare('SELECT * FROM provedores');
            $stm -> execute();
            return $stm -> fetchAll();
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }


    public function deleteProvee(){
        try{
            $stm = $this -> dbCnx -> prepare('DELETE FROM provedores WHERE provedorId=?');
            $stm -> execute([$this -> provedorId]);
            return $stm -> fetchAll();
        }catch(EXception $e){
            return $e -> getMessage();
        }
    }

    public function selectProveOne(){
        try{
            $stm = $this -> dbCnx -> prepare('SELECT * FROM provedores WHERE provedorId=?');
            $stm -> execute([$this -> provedorId]);
            return $stm -> fetchAll();
        }catch(Exception $e){
            return $e -> getMessage();
        }
    }

    public function updatePove(){
        try{
            $stm = $this -> dbCnx -> prepare('UPDATE provedores  SET nombre = ?, telefono = ?, ciudad = ? WHERE provedorId =?');
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> ciudad, $this -> provedorId]);
        }catch(Exception $e){
            echo $e -> getMessage();
        }
    }

}


































?>
<?php
 require_once("../CONFIG/config.php");

 $recordCate = new Categorias();

 if(isset($_GET['categoriaId']) && isset ($_GET['req'])){
    if($_GET['req'] == "delete"){
        $recordCate->setCategoriaid($_GET['categoriaId']);
        $recordCate->cateDelete();
        echo "<script> alert('Datos borrados');document.location='categorias.php'</script>";

    }


} 

?>
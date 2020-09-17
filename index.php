<?php

include_once "./entidades/auto.php";
include_once "./persistenciaDeDatos/files.php";

//var_dump($_POST);

$method = $_SERVER['REQUEST_METHOD'];

//$path_info = $_SERVER['PATH_INFO'];

switch ($method) {
    case 'POST':
        $id = $_POST['id']??'';
        $marca = $_POST['marca']??'';
        $color = $_POST['color']??'';
        $precio = $_POST['precio']??0;
        $fecha = $_POST['fecha']??0;
        
        $auto = new auto($id,$marca,$color,$precio,$fecha);

        // if($auto->Save()){
        // echo "se guardo un auto";
        // echo "<br>";
        // }
        // var_dump($auto);
        
    //    $arrayAuto = auto::ReadArrayJson();
      // var_dump($arrayAuto);
       $auto->SaveAsJson();
      // clearstatcache();

      $arrayAuto = auto::ReadArrayJson();
       echo "En index : <br>";
    //  var_dump($arrayAuto);

 

        break;
    case 'GET':
        
        // $arrayAuto = array();
        // // $arrayAuto = Auto::ReadAll();

        // var_dump($arrayAuto);

        
        break;
    case 'PUT':
        # code...
        break;
    case 'DELETE':
        # code...
        break;
    default:
        # code...
        break;
}




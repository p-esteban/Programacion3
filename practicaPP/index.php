<?php
//require __DIR__.'/vendor/autoload.php';
use \Firebase\JWT\JWT; 

$a = JWT::decode();

$method = $_SERVER['REQUEST_METHOD'];

$path_info = $_SERVER['PATH_INFO'];

switch ($method) {
    case 'POST':

        switch ($path_info) {
            case 'usuario':
                # code...
                break;
            case 'login':
                # code...
                break;
            case 'materia':
                # code...
                break;
            case 'profesor':
                # code...
                break;
            case 'asignacion':
                # code...
                break;
            default:
                # code...
                break;
        }
        break;



    case 'GET':
        break;
    default:
        # code...
        break;
}

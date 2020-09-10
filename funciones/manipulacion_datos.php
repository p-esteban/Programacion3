<?php

class Datos{

    public  static function recibir(){

        $method = $_SERVER['REQUEST_METHOD'];
        $path_info = $_SERVER['PATH_INFO'];

        switch ($method) {
            case 'POST':
                # code...
                break;
            case 'GET':
                # code...
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


    }



}
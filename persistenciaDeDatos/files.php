<?php

class fileHandler
{



    ////////////// FUNCIONA JOYA //////////////////

    public function SaveLine()
    {
        $fileName = get_class($this) . ".txt";
        try {
            $savedLine = false;
            $fp = fopen($fileName, 'a+');
            if ($fp != null) {
                fwrite($fp, $this . PHP_EOL);

                $savedLine = ($this->ReadLastLineStr($fileName) == $this);
            } else {
                throw new Exception("Archivo no encontrado");
            }
        } catch (Exception $e) {
            throw $e;
        } finally {
            fclose($fp);
            return $savedLine;
        }
    }

    public static function ReadTxt()
    {
        $fileName = get_called_class() . ".txt";
        try {
            $readFile = array();
            $fp = fopen($fileName, 'a+'); // leer la clase
            if ($fp != null) {
                while (!feof($fp)) {
                    $data = explode('*', fgets($fp));
                    if (count($data) > 0) {
                        array_push($readFile, $data);
                    }
                }
            } else {
                throw new Exception("no se puede leer archivo");
            }
        } catch (Exception $e) {
            throw $e;
        } finally {
            fclose($fp);
            return $data;
        }
    }





    private function ReadLastLineStr($fileName)
    {
        try {
            $fp = fopen($fileName, 'r');
            $pos = -2;
            $t = " ";
            while ($t != "\n") {
                fseek($fp, $pos, SEEK_END);
                $t = fgetc($fp);
                $pos = $pos - 1;
            }
            $t = fgets($fp);
        } catch (Exception $e) {
            throw $e;
        } finally {
            fclose($fp);
            return trim($t);
        }
    }
    public function SaveJson()
    {
        $fileName = get_class($this) . ".json";
        if (file_exists($fileName)) {

            $arrayJson = fileHandler::ReadJson($fileName);
            clearstatcache();
        } else {
            $arrayJson = array();
        }

        array_push($arrayJson, $this);
        $fp = fopen($fileName, 'w');

        if ($fp != null) {
            fwrite($fp, json_encode($arrayJson));

            fclose($fp);
        }
    }

    public static function ReadJson($fileName = null)
    {
        $fileName ?? $fileName = get_called_class() . ".json";
        if (file_exists($fileName)) {

            $fp = fopen($fileName, 'r');
            $size = filesize($fileName);

            if ($size > 0) {

                $read = fread($fp, $size);
            } else {
                $read = "{}";
            }
            fclose($fp);
            $arrayJson = json_decode($read);
        } else {

            $arrayJson = array();
        }
        return $arrayJson;
    }

    ////////////////// ACA TERMINA /////////////////////


    public static function readSerialized($fileName = null)
    {

        $fileName ?? $fileName = get_called_class() . ".txt";
        if (file_exists($fileName)) {

            $fp = fopen($fileName, 'r');
            $size = filesize($fileName);

            if ($size > 0) {

                $read = fread($fp, $size);
            } else {
                // $read = "{}";
            }
            fclose($fp);
            $arrayJson = unserialize($read);
        } else {

            $arrayJson = array();
        }
        return $arrayJson;
    }


    public function saveSerialized()
    {
        $fileName = get_class($this) . ".txt";
        if (file_exists($fileName)) {

            $arrayJson = fileHandler::readSerialized($fileName);
            clearstatcache();
        } else {
            $arrayJson = array();
        }

        array_push($arrayJson, $this);
        $fp = fopen($fileName, 'w');

        if ($fp != null) {
            fwrite($fp, serialize($arrayJson));

            fclose($fp);
        }
    }
}

<?php

class fileHandler{

    private $_fileName;

    public function __construct($fileName)
    {
        $this->_fileName=$fileName;
    }

    public function SaveObject($obj){

        try{
            $savedLine = false;
            $fp = fopen($this->_fileName,'a+');
            if($fp != null){
               fwrite($fp, $obj . PHP_EOL);
            
                $savedLine = ($this->ReadLastLine()==$obj);

            }
            else{
                throw new Exception("Archivo no encontrado");
            }
        }
        catch(Exception $e){
            throw $e;
        }
        finally{
            fclose($fp);
            return $savedLine;
        }
    }

    public function Read(){
        try{
            $readFile = array();
            $fp = fopen($this->_fileName,'a+');
            if ($fp != null) {
                while(!feof($fp)){
                    $data = explode('*',fgets($fp));
                    if (count($data)>0) {
                        array_push($readFile,$data);
                    }
                }
            }else{
                throw new Exception("no se puede leer archivo");
            }

        }catch(Exception $e){
            throw $e;
        }finally{
            fclose($fp);
            return $data;
        }
        
    }

    function ReadLastLine() 
    { 
        try{
            $fp = fopen($this->_fileName, 'r'); 
            $pos = -2; 
            $t = " "; 
            while ($t != "\n") { 
             fseek($fp, $pos, SEEK_END); 
             $t = fgetc($fp); 
             $pos = $pos - 1; 
            } 
            $t = fgets($fp);

        }catch(Exception $e){
            throw $e;

        }finally{
            fclose($fp); 
            return trim($t); 
        }
       
       
    } 

}
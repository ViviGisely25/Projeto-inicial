<?php
class db{
    private $host='localhost';
    
    private $usuario='root';
    
    private $senha='';
    
    private $database='twitter_clone';
    
    public function conecta_mysql(){
        $con=mysql_connect($this->host,$this->usuario, $this->senha, $this->database);
        mysqli_set_charset($con,'utf8');
        
        if(mysqli_connect_errno()){
        echo 'Erro ao tentar se conectar com BD MySQL:'. mysqli_connect_error();}
            return $con;
        }

    }
    ?>


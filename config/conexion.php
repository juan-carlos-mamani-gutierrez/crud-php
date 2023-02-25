<?php 

class Conectar{
  protected $dbh;

  protected function Conexion(){

    try{

      $conectar = $this->dbh= new PDO ("mysql:local=localhost;dbname=crud2","root","");
      return $conectar;

    }catch(Exception $e){

      Print "!Error BD!: ". $e->getMessage()."<br/>";
     die();
    }
  }
   //funcion para no tener problemas con tildes y mayusculas
 public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }
}

?>
<?php

require_once 'Conexion.php';

class Cliente extends Conexion{
  
  private $pdo;

  public function __CONSTRUCT() { $this->pdo = parent::getConexion(); }

  public function getAllClients():array{
    try{
      $cmd = $this->pdo->prepare("SELECT * FROM clients LIMIT 500");
      $cmd->execute();

      return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      error_log($e->getMessage());
      return [];
    }
  }

}

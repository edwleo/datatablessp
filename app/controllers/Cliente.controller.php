<?php

require_once "../models/Cliente.php";
$cliente = new Cliente();

header("Content-type: application/json; charset=utf-8");

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  if ($_GET['operation'] == 'getAllClients'){
    $dataCliente = $cliente->getAllClients();
    echo json_encode($dataCliente);
  }
}
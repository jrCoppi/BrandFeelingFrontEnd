<?php
session_start();

include_once('../../'. $_SESSION['arrCaminhos']['dados'].'Resultado.php');

$id_categoria = $_GET['id_categoria'];

$objResultado = new Resultado();
$arrDados = $objResultado->getHistorico($id_categoria);

echo json_encode($arrDados);
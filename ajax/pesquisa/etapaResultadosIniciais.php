<?php
session_start();

include_once('../../'. $_SESSION['arrCaminhos']['dados'].'Resultado.php');
include_once('../../'. $_SESSION['arrCaminhos']['dados'].'Termo.php');

$objResultado = new Resultado();
$objTermo = new Termo();

echo json_encode($arrRetorno);
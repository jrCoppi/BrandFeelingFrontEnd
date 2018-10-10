<?php
session_start();

include_once('../../'. $_SESSION['arrCaminhos']['dados'].'Resultado.php');

$dadosPesquisa = $_SESSION['arrDadosPesquisa'];

echo json_encode($arrRetorno);
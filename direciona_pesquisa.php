<?php
session_start();
$ds_marca          = $_POST['ds_marca'];
$ds_marca_comparar = $_POST['ds_marca_comparar'];
$id_categoria      = $_POST['id_categoria'];

$id_pesquisa = $_GET['id_pesquisa'];
$id_marca = $_GET['id_marca'];

$arrDadosPesquisa = array(
   'ds_marca' => $ds_marca,          
   'ds_marca_comparar' => $ds_marca_comparar, 
   'id_categoria' => $id_categoria,   
   'id_pesquisa' => $id_pesquisa   
);

if (($id_pesquisa != '') && ($id_pesquisa != null)) {
   $arrDadosPesquisa['id_marca'] = $id_marca;
} 


$_SESSION['arrDadosPesquisa'] = null;
$_SESSION['arrDadosPesquisa'] = $arrDadosPesquisa;

$pagina = 'pesquisa.php';
if (($ds_marca_comparar != '') && ($ds_marca_comparar != null)) {
   $pagina = 'pesquisa_comparar.php';
}

//Vai para a listagem
header('Location: '. $_SESSION['arrCaminhos']['visual'] . $pagina);
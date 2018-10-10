<?php
date_default_timezone_set('America/Sao_Paulo');

// Incia as variaveis dos caminhos
// Visual
$arrCaminhos = array();
$arrCaminhos['visual']  = 'visual/';
$arrCaminhos['css']     = 'css/';
$arrCaminhos['js']      = 'js/';
$arrCaminhos['img']     = 'img/';
$arrCaminhos['angular'] = 'angular/';
$arrCaminhos['font']    = 'fonts/';

//Ajax
$arrCaminhos['ajax']    = 'ajax/';

//Classes
$arrCaminhos['class']   = 'classes/';
$arrCaminhos['dados']   = $arrCaminhos['class'] . 'dados/';

$arrDadosConexao = array();

//Joga ambos na Session
$_SESSION['arrCaminhos']     = $arrCaminhos;
$_SESSION['arrDadosConexao'] = $arrDadosConexao;

$_SESSION['titulo']  = 'Brand Feeling';
<?php
session_start();

include_once('../../'. $_SESSION['arrCaminhos']['class'].'WSProcessa.php');

$id_pesquisa = WSProcessa::getInstance()->efetuaLeitura($ds_marca_busca,$id_categoria);

echo 1;


<?php 
session_start();
include_once('../configuracoes.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            <?php echo $_SESSION['titulo']; ?>
        </title>

        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>jquery-1.11.3.min.js"></script>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo $_SESSION['arrCaminhos']['css']; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_SESSION['arrCaminhos']['css']; ?>bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $_SESSION['arrCaminhos']['css']; ?>estilo.css?3">

        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>bootstrap.min.js"></script>
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>jquery.min.js"></script>
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>angular.js"></script>

        <!-- componente de carregar -->
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>angular-animate.js"></script>
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>angular-sanitize.js"></script>
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>ui-bootstrap-tpls-2.5.0.js"></script>

        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>jquery.awesomeCloud-0.2.js"></script>

        <!-- componente de word cloud -->

        <!-- grafico de marca -->
        <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>loader.js"></script>
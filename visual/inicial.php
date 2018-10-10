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
      <link rel="stylesheet" href="<?php echo $_SESSION['arrCaminhos']['css']; ?>loading-bar.css">
      <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>bootstrap.min.js"></script>
      <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>angular.min.js"></script>
      <script src="<?php echo $_SESSION['arrCaminhos']['js']; ?>loading-bar.js"></script>

      <!-- pagina -->
      <link rel="stylesheet" href="<?php echo $_SESSION['arrCaminhos']['css']; ?>estilo.css?3">
      <script src="<?php echo $_SESSION['arrCaminhos']['angular']; ?>inicio.js"></script>
</head>
<body ng-app="AppInicio" ng-controller="InicioController">

   <!-- HEADER -->
   <?php include_once('header.php') ?>
   <!-- HEADER -->

   <div class="content tituloNovo" >
       <h2>Brand Feeling</h2>
       <h4>Sistema para analisar o sentimento dos usuários em relação a uma marca</h4>
   </div>

   <div class="container">

      <div class="center-block">

         <div class="row"><br></div>
         
         <div class="row">

            
            <div class="col-sm-12 col-md-12 col-xs-12">


               <!-- últimas -->
               <div class="col-sm-12 col-md-3 col-xs-3">
                  <div class="col-sm-12 col-md-12 col-xs-12 divTitulo bordaTabela">
                     ÚLTIMAS PESQUISAS <span style="color:red;">*</span>
                  </div>

                  <div class="col-md-12 col-xs-12 col-sm-12 bordaTabela">
                     <!-- -->
                  </div>

                  <div class="col-md-12 col-xs-12 col-sm-12 text-center" style="font-size: 11px; margin-top: 5px;">
                     <span style="color:red;">*</span> Correspondente as pesquisas anteriores realizadas pelos usuários<br>
                  </div>
               </div>

               <div class="col-sm-12 col-md-6 col-xs-6">
                  <form id="form" name="form" method="post"  action="../direciona_pesquisa.php" enctype="application/x-www-form-urlencoded" novalidate>
                  <label for="basic-url">Informe uma marca</label>
                  <div class="form-group">
                     <input type="text" class="form-control" id="ds_marca" name="ds_marca" ng-model="ds_marca" placeholder="marca" required>
                  </div>

                  

                  <div class="form-group" ng-show="sn_comparar == false"></div>

                  <label for="basic-url">Categoria de pesquisa</label>

                  <div class="form-inline text-center">
                    <button type="submmit" class="btn btn-primary" ng-click="realizarPesquisa()">Pesquisar <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    <button type="button" class="btn btn-danger" ng-click="limpaFiltros()">Limpar</button>
                  </div>
               </div>

               <div class="col-sm-12 col-md-3 col-xs-3">
                  <div class="col-sm-12 col-md-12 col-xs-12 divTitulo bordaTabela">
                     HISTÓRICO DAS MARCAS <span style="color:red;">*</span>
                  </div>

                  <div class="col-md-12 col-xs-12 col-sm-12 bordaTabela" >
                     <ul class="nav nav-tabs nav-justified" style="margin-top:5px;">
                       <li role="presentation" class="active"><a data-toggle="tab" href="#melhor">Positivo</a></li>
                       <li role="presentation"><a data-toggle="tab" href="#pior">Negativo</a></li>
                     </ul>

                     <div class="tab-content">
                       <div id="melhor" class="tab-pane fade in active">
                           <table class="table table-responsive text-center">
                             <thead>
                                <tr style="font-weight: bold;">
                                   <td width="10%">#</td>
                                   <td width="50%">Marca</td>
                                   <td width="40%">Positividade</td>
                                </tr>
                             </thead>
                             <tbody>
                              <tr  ng-repeat=" (key, historicoMelhor) in arrHistoricoMelhor">
                                 <td width="10%">{{key+1}}</td>
                                 <td width="50%">{{historicoMelhor.ds_marca}}</td>
                                 <td width="40%">{{historicoMelhor.nr_positivo}} %</td>
                              </tr>
                             </tbody>
                           </table>
                       </div>

                       <div id="pior" class="tab-pane fade">
                           <table class="table table-responsive text-center">
                             <thead>
                                <tr style="font-weight: bold;">
                                   <td width="10%">#</td>
                                   <td width="50%">Marca</td>
                                   <td width="40%">Positividade</td>
                                </tr>
                             </thead>
                             <tbody>
                              <tr  ng-repeat=" (key, historicoPior) in arrHistoricoPior">
                                 <td width="10%">{{key+1}}</td>
                                 <td width="50%">{{historicoPior.ds_marca}}</td>
                                 <td width="40%">{{historicoPior.nr_positivo}} %</td>
                              </tr>
                             </tbody>
                           </table>
                       </div>
                     </div>


                  </div>

                
               </div>
            </div>



         </div>
      </div>
   </div>
<?php include_once('rodape.php') ?>
<?php include_once('cabecalho_fim.php'); ?>
     <script src="<?php echo $_SESSION['arrCaminhos']['angular']; ?>pesquisa.js"></script>
</head>
<body ng-app="AppPesquisa" ng-controller="PesquisaController">

   <!-- HEADER -->
   <?php include_once('header.php') ?>
   <!-- HEADER -->

   <!-- PROGRESS BAR -->
   <div class="content text-center"  style="background-color: #d7e7fa; margin-top: 5px;">
      <b>Progresso</b>
      <uib-progressbar max="max" value="etapa">
         <span style="color:white; white-space:nowrap;">{{etapa}} / {{max}}</span>
      </uib-progressbar> 
   </div>
   <!-- PROGRESS BAR -->

   <!-- MARCA/RESULTADO -->
   <div id="loading-0" class="text-center" ng-show="etapa < 2">
         <img src="<?php echo $_SESSION['arrCaminhos']['img']?>loading_spinner.gif" style="width:100px;"></img>
         <h4>Verificando base de dados</h4>
   </div>


   <div id="loading-1" class="text-center" ng-show="etapa == 2">
         <img src="<?php echo $_SESSION['arrCaminhos']['img']?>loading_spinner.gif" style="width:100px;"></img>
         <h4>Efetuando busca</h4>
   </div>

   <div class="content marcaResultado" ng-show="etapa >= 3">
      <h5><b>Resultado da Análise de Sentimentos</b><span style="color:red;">* </span>:</h5>

      <div class="container text-center">
         <div class="progress" style="width: 60%; float: none;margin: 0 auto;">
            <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 70%">
               70% Positivo
            </div>
            <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 30%">
               30% Negativo
            </div>
         </div>
      </div>
   </div>
   <!-- MARCA/RESULTADO -->

   <div class="container">

      <div class="center-block">

         
         <div class="row">

            <div id="loading-2" class=" col-sm-12 col-md-12 col-xs-12 text-center" ng-show="etapa == 3">
                  <img src="<?php echo $_SESSION['arrCaminhos']['img']?>loading_spinner.gif" style="width:100px;"></img>
                  <h4>Processando Resultados</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-xs-12" ng-show="etapa >= 4" style="margin-top: -10px;">

               <!-- NUVEM DE PALAVRAS -->
               <div class="col-sm-12 col-md-7 col-xs-7">
                  <h4>Núvem de Palavras <span style="color:red;">*</span></h4>
                  <div id="wordcloud2" class="wordcloud" style="width: 400; height: 300px;"> 
                     <span ng-repeat="termo in arrMarcas[0].listaTermosNuvem" data-weight="45">{{termo.text}}</span>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12 text-center" style="font-size: 12px; margin-top: 5px;">
                     <span style="color:red;">*</span> A <b>Núvem de Palavras</b> representa os termos mais utilizados da busca.
                  </div>
               </div>

               <div class="col-sm-0 col-md-1 col-xs-1">
               </div>

               <!-- TABELA COM O NUMERO DE OCORRÊNCIAS E VALORES DOS 5 MAIS USADOS -->
               <div class="col-sm-12 col-md-4 col-xs-4">
                  <!-- ..... -->
               </div>

            </div>

            <div id="loading-3" class=" col-sm-12 col-md-12 col-xs-12 text-center" ng-show="etapa == 4">
                  <img src="<?php echo $_SESSION['arrCaminhos']['img']?>loading_spinner.gif" style="width:100px;"></img>
                  <h4>Atualizando histórico</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-xs-12"  ng-show="etapa >= 5" style="margin-top: 5px;">

               <!-- Historico da marca, podendo navegar por categorias, vindo a principal -->
               <div class="col-sm-12 col-md-8 col-xs-8">
                  <h4>Progressão Histórica da Marca <span style="color:red;">*</span></h4>
                  <div id="curve_chart" style="width: 800px; height: 300px; margin-top: -10px; margin-bottom: -10px;margin-left: -50px;"></div>
               </div>
            </div>

            <div class="col-md-12 col-xs-12 text-center" ng-show="etapa >= 5" style="margin-top: 5px;"/>
               <a href="../index.php"><button type="submmit" class="btn btn-primary">Voltar</button></a>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include_once('rodape.php') ?>
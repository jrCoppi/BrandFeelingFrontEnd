var AppInicio = angular.module('AppInicio', ['angular-loading-bar']);


AppInicio.controller(
    'InicioController',
    [ '$scope', '$http', 'filterFilter', createController ]
);


/**
 * Constroller da página
 */
function createController( $scope, $http, filterFilter ) {
   $scope.ds_marca = '';
   $scope.ds_marca_comparar = '';
   $scope.id_categoria = '0';
   $scope.sn_comparar = false;
   
   $scope.arrPequisas = [];
   $scope.arrHistoricoMelhor = [];
   $scope.arrHistoricoPior = [];


   $scope.limpaFiltros = function(){
      $scope.ds_marca = '';
      $scope.ds_marca_comparar = '';
      $scope.id_categoria = '0';
      $scope.sn_comparar = false;
      $scope.snHistoricoMelhor = true;
   }

   $scope.buscaPesquisas = function(){
      $http.post(
          '../ajax/inicio/getUltimasPesquisas.php?id_categoria=' + $scope.id_categoria
      )
      .success(
          function(data){
            $scope.arrPequisas = data;
          }
      );
   }


   $scope.buscaHistorico = function(){
      $http.post(
          '' + $scope.id_categoria
      )
      .success(
          function(data){
            //
          }
      );
   }

   $scope.efetuaBusca = function(){
      $scope.buscaPesquisas();
      $scope.buscaHistorico();
   }

   $scope.realizarPesquisa = function(){
      document.form.submit();
   }

   $scope.efetuaBusca();
}
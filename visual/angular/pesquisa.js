var AppPesquisa = angular.module('AppPesquisa', ['ngAnimate', 'ngSanitize', 'ui.bootstrap']);


AppPesquisa.controller(
    'PesquisaController',
    [ '$scope', '$http', 'filterFilter', createController ]
);

/* Etapas (usar > ou < para mostar na tela)
* *** Primeiro faz a busca, mostrando barra de progresso/passdos
* *** Depois carrega com callbacks, carregando os resultados gradativamente
* 1 - Busca do Banco
* 2 - Pesquisa do servidor
* 3 - Mostra resultados do começo , resultado e nuvem de palavras, Tabela com os termos, 5 mais usados
* 4 - Mostra Termos
* 5 - Histórico da marca
* Obs: ver duas marcas, no angular é igual
*/

/**
 * Constroller da página
 */
function createController( $scope, $http, filterFilter ) {
   $scope.max = 5;
   $scope.etapa = 1;

   //dados base
   $scope.arrMarcas = [
      {
         ds_marca : '',
         nr_positivo : 0,
         nr_negativo : 0,
         ds_categoria : '',
         arrTermos : [],
         listaTermosNuvem : [],
         arrTermos : [],
         arrHistorico : []
      }
   ];

   // Etapa 1 - Busca do banco
   function etapaBuscaBanco(){
      //...
   }

   // Etapa 2 - Pesquisa do servidor
   function etapaPesquisaServidor(){
      //..
   }

   // Etapa 3 - Mostra resultados do começo , resultado
   function etapaResultadosIniciais(){
      //..
   }


   // Etapa 4 - Mostra Termos - nuvem de palavras, Tabela com os termos, 5 mais usados
   function etapaPreparaTermos(){
      //...
   }

   // Etapa 5 - Histórico da marca
   function etapaHistorico(){
      //..
   }

   function drawChart() {
      var data = google.visualization.arrayToDataTable(
         $scope.arrMarcas[0].arrHistorico
      );

      var options = {
         title: '',
         curveType: 'function',
         legend: { position: 'top' },
         interpolateNulls: true,
         hAxis: {
           title: 'Dias'
         },
         vAxis: {
           title: 'Positividade',
           maxValue : 100,
           minValue : 0
         }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
   }
   
   etapaBuscaBanco();
}
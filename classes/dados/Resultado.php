<?php
include_once('Conexao.php');
/**
 * Clase com as consultas do usuário
 * @package dados
 */
class Resultado extends Conexao {

   public function __construct(){}

   /**
    * Retorna o histórico das pesquisas
    * @param type $id_categoria 
    * @return type
    */
   public function getHistorico($id_categoria){
      $arrMelhores = $this->getHistoricoConsulta($id_categoria);
      $arrPiores   = $this->getHistoricoConsulta($id_categoria, false);

      return array(
         'arrMelhores' => $arrMelhores,
         'arrPiores' =>  $arrPiores
      );
   }

   /**
    * Retorna as ultimas pesquisas realizadas
    * @param type $id_categoria 
    * @return type
    */
   public function getResultadoUltimasPesquisas($id_categoria){

      $sql = " ";

      $resultado = Conexao::getInstance()->realizaConsulta($sql);

      //se não tem cria um
      if($resultado == null){
         return null;
      }

      return $resultado;
   }

   /**
    * Busca a média histórica de pesquisas
    * @param type $id_categoria 
    * @param type|bool $sn_maior 
    * @return type
    */
   public function getHistoricoConsulta($id_categoria, $sn_maior = true){

      $sql = "";

      if($sn_maior == true){
         $sql .=  " desc";
      }

      $sql .=  " LIMIT 10";

      $resultado = Conexao::getInstance()->realizaConsulta($sql);

      //se não tem cria um
      if($resultado == null){
         return null;
      }

      return $resultado;
   }

   /**
    * Pontuação de uma pesquisa especifica
    * @param type $marcaPesquisa 
    * @param type $idPesquisa 
    * @return type
    */
   public function getPontuacaoPesquisa(
      $marcaPesquisa, 
      $idPesquisa
   ){
      //...
   }

   public function getExtremosPesquisa(
      $idCategoria
   ){
     //...
   }

   public function getMediaExtremosPesquisa(
      $idCategoria
   ){
      $sql = "";

      $resultado = Conexao::getInstance()->realizaConsulta($sql);

      //se não tem cria um
      if($resultado == null){
         return null;
      }

      return $resultado[0];
   }

   public function getHistoricoMarca(
      $id_categoria,
      $ds_marca
   ){

      $sql = "
         SELECT 
            TRUNCATE(avg(nr),0) as nr,
            nr_2,
            date_format(dt_1, '%d/%m/%Y') as dt_1
         FROM
             //...///
         WHERE
            ds = '".$ds_marca."'
         GROUP BY
            id, nr_2, date(dt_1)
         ORDER BY
            dt_1";

      $resultado = Conexao::getInstance()->realizaConsulta($sql);

      //se não tem cria um
      if($resultado == null){
         return null;
      }

      return $resultado;
   }
}
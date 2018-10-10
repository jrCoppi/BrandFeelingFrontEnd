<?php
include_once('WebService.php');

/**
 * Classe para comunicação com WS
 */
class WSProcessa extends WebService
{
   private static $instance = null;
   private $chave;

   /**
    * Construtor da classe
    * @param string $wsdl
    * @param string $chave
    * @param array $options
    */
   public function __construct($wsdl, array $options = array())
   {
      try{
         parent::__construct($wsdl, $options);
      }  catch(Exception $e) {
         die($e->getMessage());
      }
   }

   /**
    * Retorna instância da classe
    * @param String $url
    * @param String $encoding
    * @return type
    */
   public static function getInstance($encoding = 'UTF-8')
   {

      if (WSProcessa::$instance == null) {
         WSProcessa::$instance = new WSProcessa(
            '',
            array(
               'encoding' => $encoding
            )
         );
      }
      return WSProcessa::$instance;
   }

   //....

   /**
    * Aceitar chamadas genéricas de funções,
    * inserindo como padrão em todas as chamadas o campo "chave"
    * @param string $name
    * @param array $arguments
    */
   public function __call($name, $arguments)
   {
      return $this->callSoap($name, $arguments);
   }
}

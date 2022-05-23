<?php

namespace Model;

class Pedido
{
    //Atributos
    private $numPedido;
    public $dataHora;
    public $ingredientes;
    public $qtde;
    public $pgto;
    public $cardFlag;

    //Métodos
    public function __construct()
    {
        echo $this->criarNumero() . "<br>";
        echo $this->dataDoPedido();
    }

    private function dataDoPedido()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->dataHora = date('Y-m-d H:i:s');
        return "Data e hora do pedido: " . date("d/m/Y H:i:s");
    }

    //Essa função será chamada somente de dentro dessa classe
    private function criarNumero()
    {
        $this->numPedido = random_int(100, 1000);
        return $this->numPedido;
    }


    public function darDesconto()
    {
        if($this->qtde >= 5) {
            return "<h4 style='background-color: green;'> 10% OFF </h4>";
        }
    }
}
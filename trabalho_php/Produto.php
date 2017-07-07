<?php
//namespace Save;
class produto {

    use Save;

    public $codigo;
    public $nome;
    public $valor;

    function __construct($codigo, $nome) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        
        $this->Save(Produto);
    }


}

<?php

class usuario {

    use Save;

    public $codigo;
    public $nome;
    public $valor;

    function __construct($codigo, $nome) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salvar(usuario);
    }

}

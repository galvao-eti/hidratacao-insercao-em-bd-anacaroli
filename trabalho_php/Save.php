<?php


trait Save {
    
    public function salvar(Object $obj){
       $conn = new conexao();
       
       $conn->Conecta();
    }
}

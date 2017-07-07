<?php

class CONEXAO {

    function CONEXAO() {

        $this->Conecta();
    }

    function Conecta() {

        $db = new PDO("mysql:host=localhost;dbname=banco", "root", "");
        $db->beginTransaction();

        $db->exec("UPDATE produto SET idcodigo = {$codigo}, nome = {$nome}, valor = {$valor}");
        
        $db->commit();

        
        $db->rollback();
    }

}

?>
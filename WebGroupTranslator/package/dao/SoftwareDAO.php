<?php

$PATH_APP = (defined('PATH_APP')) ? $PATH_APP : './../../';

include_once($PATH_APP.'/package/dao/DAO.php');
include_once($PATH_APP.'/package/to/SoftwareTO.php');


class SoftwareDAO extends DAO {

    function inserir(TO $software)
    {
        //N�o implementado, funcionalidade n�o disponivel.  
    }

    function atualizar(TO $software)
    {
        //N�o implementado, funcionalidade n�o disponivel.  
    }

    function excluir(TO $software){
        //N�o implementado, funcionalidade n�o disponivel.  
    }

    function consultar(TO $software)
    {
        //N�o implementado, funcionalidade n�o disponivel.  
    }

    public function listar(TO $software)
    {
    	return $resultado = $this->db->GetAll('SELECT id_software,nome FROM software ORDER BY nome');	
    }
}
?>

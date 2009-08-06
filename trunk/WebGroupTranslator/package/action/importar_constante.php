<?php
$PATH_APP = (defined('PATH_APP')) ? PATH_APP : './../../';
include_once($PATH_APP.'/lib/set_path.php');
include_once(PATH_SAA.'/saa.php');
//Adicionando verificacao de Seguranca
SAA::check_page($_SERVER['PHP_SELF']);


	$id_software = $_POST['id_software'];
	$id_versao   = $_POST['id_versao'];
	$arquivo     = $_FILES['arquivo']['tmp_name'];
	
	$arquivo_enviado = is_uploaded_file($arquivo);
	
	if (($id_software<1)||($id_versao<1)||($arquivo_enviado==false)){
		header("Location: ".$PATH_APP."/package/page/importar_constante.php?id_software=".$id_software."&id_versao=".$id_versao);
		
	} else {
		include_once($PATH_APP.'/package/dao/ImportacaoDAO.php');
		include_once($PATH_APP.'/package/util/Arquivo.php');

		$constante = carregar($arquivo);
		
		echo "<h2>Importando constantes</h2>";
	
		//Inserir Constante
	    $importacao = new ImportacaoDAO();
	    $retorno = $importacao->inserirConstante($constante,$id_software);	
	
		if (sizeof($retorno)>1){
			echo "Foram encontrados ".sizeof($retorno)." erros, ao inserir as chaves:<br>";
	
			for ($i=0; $i<sizeof($retorno);$i++){
				echo $retorno[$i]['chave']."<br>";
			}	
		} else {
			echo "Sucesso, dados importados";
		}
	
	
		echo "<h2>Vinculando Constantes a vers�o do Software</h2>";
		
		//Inserir vinculo Constante e Versao
		$retorno = $importacao->inserirVinculoConstanteVersao($constante,$id_software,$id_versao);	
	
		if (sizeof($retorno)>1){
			echo "Foram encontrados ".sizeof($retorno)." erros, ao inserir as chaves:<br>";
	
			for ($i=0; $i<sizeof($retorno);$i++){
				echo $retorno[$i]['chave']."<br>";
			}	
		} else {
			echo "Sucesso, dados importados";
		}	
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 FINAL//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
<META NAME="Author" CONTENT="WebDesign by Arley Barros Leal da Silveira - arley@pobox.com">
<META NAME="Generator" CONTENT="NetObjects Fusion 4.0 Trial for Windows">
<TITLE>Ferramenta de Tradu��o</TITLE>
</HEAD>
<BODY>
<?php 

function desativarLink($pagina)
{
    //echo "sem_permissao.php";
    echo $pagina;
}

?>

<H3>Importa��o</H3>
<ul>
<li><a href="<?php desativarLink('package/page/importar_constante.php'); ?>" target="_AREA_">Importar Constantes</a></li>
<li><a href="<?php desativarLink('package/page/importar_texto_padrao.php'); ?>" target="_AREA_">Importar Texto Padr�o</a></li>
<li><a href="<?php desativarLink('package/page/importar_texto_traduzido.php'); ?>" target="_AREA_">Importar Texto Traduzido</a></li>
</ul>

<H3>Atualiza��o</H3>
<ul>
<li><a href="<?php desativarLink('package/page/atualizar_texto_traduzido.php'); ?>" target="_AREA_">Atualizar Texto Traduzido</a></li>
</ul>

<H3>Edi��o</H3>
<ul>
<li><a href="package/page/editar_texto_traduzido.php" target="_AREA_">Editar Texto Traduzido</a></li>
<li><a href="package/page/editar_texto_sem_traducao.php" target="_AREA_">Editar Texto Sem Tradu��o</a></li>
</ul>

<H3>Exporta��o</H3>
<ul>
<li><a href="package/page/exportar_texto_traduzido.php" target="_AREA_">Exportar Texto Traduzido</a></li>
</ul>
</BODY>
</HTML>
<?php
$atual     = (isset ($_GET['pg'])) ? $_GET['pg'] : '/';
$permissao = array('home', 'empresa', 'servicos', 'criacao-de-sites', 'desenvolvimento-front-end', 'wordpress', 'web-design', 'criacao-de-conteudo', 'otimizacao-de-sites', 'orcamento', 'faq', 'portfolio', 'termos-de-servico', 'contato');
if(substr_count($atual, '/') > 0){
	$atual  = explode('/', $atual);
	$pagina = (file_exists('/'.$atual[0].'php') && in_array($atual[0], $permissao)) ? $atual[0] : 'erro';
	}else{
		$pagina = (file_exists('/'.$atual.'php') && in_array($atual, $permissao)) ? $atual : 'erro';
		}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />

<title>HTML com CSS - Desenvolvimento Web</title>
<?php include "analytics.php"; ?>
</head>

<body>
	<?php require("{/}/{$pagina}") ?>

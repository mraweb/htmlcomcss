<?php
session_start();
 
if(!isset($_SESSION["referrer"])){
 
        //get the referrer
        if ($_SERVER["HTTP_REFERER"]){
                $referrer = $_SERVER["HTTP_REFERER"];
        } else {
                $referrer = "unknown";
        }
       
        //save it in a session
        $_SESSION["referrer"] = $referrer; // store session data
}
 
function curPageURL() {
 
        $pageURL = 'http';
       
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
                $pageURL .= "://";
                if ($_SERVER["SERVER_PORT"] != "80") {
                        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
                } else {
                        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                }
 
        return $pageURL;
}
 
$http = curPageURL();
?>
<?php
$url = explode('/', $_GET['pg']);
if($url[0] == ""){
	$pagina = "arquivos/home.php";
}elseif($url[0] != ""){
	$pagina = "arquivos/".$url[0].".php";
}
if($_GET["pg"] == "resposta-orca"){
if($_POST["nome"] !== ""){
	
$arquivo = $_FILES["arquivo"];

if($_POST["valida"] == ""){
require_once('phpmailer/class.phpmailer.php');
	$phpmail = new PHPMailer();
    $phpmail->IsSMTP(); // envia por SMTP
	$phpmail->Host = "localhost"; // SMTP servers
	$phpmail->SMTPAuth = false; // Caso o servidor SMTP precise de autenticação
	$phpmail->Username = "htmlcomc"; // SMTP username
	$phpmail->Password = "12x8x32x"; // SMTP password
	$phpmail->AddAttachment = $_POST["arquivo"];
	$phpmail->Port = 587;
		
    $phpmail->IsHTML(true);
    $phpmail->From = "contato@htmlcomcss.com.br";
    $phpmail->FromName = $_POST["nome"];
	
	$phpmail->AddAddress('marcelo@htmlcomcss.com.br', 'HTMLcomCSS');//destinario
	//$phpmail->AddBcc('pettrus.vaz@htmlcomcss.com.br', 'HTMLcomCSS');//destinario
	$phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);
	
	$phpmail->Subject = "Orçamento enviado pelo site HTMLcomCSS";
	
    $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
    $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
    $phpmail->Body .= "<strong>Telefone:</strong> ". $_POST["tel"]."<br />";
	$phpmail->Body .= "<strong>Número de Páginas:</strong> ". $_POST["order-pages"]. "<br />";
	$phpmail->Body .= "<strong>Valor total:</strong> R$".((($_POST["order-pages"]-1)*152)+380).",00<br />";
	$phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br /><br />";
	$phpmail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

	$phpmail->Body .=" <strong>Referer URL:</strong> ". $_SESSION["referrer"] . "<br />";
    $phpmail->Body .=" <strong>Referer GA:</strong> ". $_COOKIE["__utmz"] . "<br />";

    if ( !strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] !== ''){
    	$send = $phpmail->Send();
	}
}
}
}
if($_GET["pg"] == "resposta-contato"){
if($_POST["valida"] == ""){
require_once('phpmailer/class.phpmailer.php');
	$phpmail = new PHPMailer();
    $phpmail->IsSMTP(); // envia por SMTP
	$phpmail->Host = "localhost"; // SMTP servers
	$phpmail->SMTPAuth = false; // Caso o servidor SMTP precise de autenticação
	$phpmail->Username = "htmlcomc"; // SMTP username
	$phpmail->Password = "12x8x32x"; // SMTP password
	$phpmail->Port = 587;
		
    $phpmail->IsHTML(true);
    $phpmail->From = "contato@htmlcomcss.com.br";
    $phpmail->FromName = $_POST["nome"];
	
	$phpmail->AddAddress('marcelo@htmlcomcss.com.br', 'HTMLcomCSS');//destinario
	//$phpmail->AddBcc('pettrus.vaz@htmlcomcss.com.br', 'HTMLcomCSS');//destinario
	$phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);
	
	$phpmail->Subject = "Dados enviados pelo Contato do site HTMLcomCSS";
	
    $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
    $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
    $phpmail->Body .= "<strong>Telefone:</strong> ". $_POST["tel"]."<br />";
	$phpmail->Body .= "<strong>Assunto:</strong> ". $_POST["assunto"]."<br />";	
	$phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br /><br />";

	$phpmail->Body .=" <strong>Referer URL:</strong> ". $_SESSION["referrer"] . "<br />";
    $phpmail->Body .=" <strong>Referer GA:</strong> ". $_COOKIE["__utmz"] . "<br />";

    if ( !strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] !== ''){
    	$send = $phpmail->Send();
	}
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<?php if($_GET["pg"] == ""){ ?>
<title>HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS desenvolve seu site com o que há de mais moderno. Sites em HTML 5 e CSS3, JQUERY, PHP, Wordpress, Blog e muito mais." />
<link rel="canonical" href="http://www.htmlcomcss.com.br/" />

<?php }elseif($_GET["pg"] == "empresa"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/empresa" />
<title>Empresa | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS é uma empresa que faz a conversão do seu layout para html, e somos altamente preocupados com a qualidade, essa é nossa virtude." />

<?php }elseif($_GET["pg"] == "servicos"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/servicos" />
<title>Serviços | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS fornece serviços de Criação de Sites, Otimização de Sites, Wordpress, Criação de conteúdo, Web Design e Desenvolvimento Front-End, tudo com máxima qualidade." />

<?php }elseif($_GET["pg"] == "criacao-de-sites"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/criacao-de-sites" />
<title>Criação de Sites | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="Criação de Sites dentro dos padrões web, de acordo com as especificações da W3C. Acesse nosso site e veja nossas condições." />

<?php }elseif($_GET["pg"] == "desenvolvimento-front-end"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/desenvolvimento-front-end" />
<title>Desenvolvimento Front-End | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="O foco da HTMLcomCSS é atender agências sem equipe web e designers que precisem desenvolver seus jobs" />

<?php }elseif($_GET["pg"] == "wordpress"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/wordpress" />
<title>Wordpress | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS implementa seu projeto com a mais poderosa ferramenta CMS existente no mercado, wordpress." />

<?php }elseif($_GET["pg"] == "webdesign"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/webdesign" />
<title>Web Design | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS fornece a criação do layout do seu site, se quer impactar o mercado, faça seu layout conosco." />

<?php }elseif($_GET["pg"] == "criacao-de-conteudo"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/criacao-de-conteudo" />
<title>Criação de Conteúdo | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS faz a criação do seu conteúdo, nossos profissionais são treinados para otimizar o texto e aproveitar o máximo suas qualidades." />

<?php }elseif($_GET["pg"] == "otimizacao-de-sites"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/otimizacao-de-sites" />
<title>Otimização de Sites | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="Você quer se destacar na web, para isso precisa aparecer, e a Otimização do seu Site é essencial para isso." />

<?php }elseif($_GET["pg"] == "orcamento"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/orcamento" />
<title>Orçamento - Desenvolvimento Front-End | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>

<?php }elseif($_GET["pg"] == "resposta-orca"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/resposta-orca" />
<title>Orçamento Enviado - Desenvolvimento Front-End | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>

<?php }elseif($_GET["pg"] == "faq"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/faq" />
<title>FAQ | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>

<?php }elseif($_GET["pg"] == "portfolio"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/portfolio" />
<title>Portfolio | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<meta name="description" content="A HTMLcomCSS disponibiliza alguns dos nossos clientes para que você tenha uma idéia breve de como trabalhamos, acesse nosso site." />

<?php }elseif($_GET["pg"] == "termos-de-servico"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/servicos" />
<title>Termos de Serviço | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>

<?php }elseif($_GET["pg"] == "contato"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/contato" />
<title>Contato | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>

<?php }elseif($_GET["pg"] == "resposta-contato"){ ?>
<link rel="canonical" href="http://www.htmlcomcss.com.br/resposta-contato" />
<title>Contato Enviado | HTMLcomCSS - Criação de Sites e Otimização de Sites</title>
<?php } ?>

<link rel="stylesheet" type="text/css" href="css/screen.css">
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.13.custom.css" />
<script type="text/javascript" src="js/modernizr.2.5.3.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7329691-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<?php include_once("$pagina") ?>

<a href="http://www.dihitt.com.br?ref=449146" dihitt_check="41bb27321f580a31279bb266b15f243f" class="acessibilidade">diHITT - Notícias</a>
</body>
</html>
<div class="bgInt">
	<div id="main">
    	<?php include "header.php"; ?>
        
		<section id="content" role="main">
        	<h1>Contato</h1>
            
            <p>Caso você tenha dúvidas, sugestões ou comentários sobre a conversão do seu layout em HTML e CSS, entre em contato. Nós ficaremos felizes em ajudá-lo, preencha o formulário abaixo ou então envie um e-mail direto para <strong><a href="mailto:contato@htmlcomcss.com.br" title="E-mail" class="link">contato@htmlcomcss.com.br</a></strong></p>

            <section class="formulario left">
                <p><strong>Obrigado <?php echo $_POST["nome"]; ?>, sua mensagem foi enviada com sucesso.<br />
                Em breve entraremos em contato.</strong></p>
            </section><!-- FINAL FORMULARIO -->
            
            <section class="contatos right">
            	<p class="twitter"><a href="https://www.twitter.com/htmlcomcss" title="Twitter HTMLcomCSS" class="link" rel="external"><span>Siga</span><br /> @htmlcomcss</a></p>
                
                <p class="facebook"><a href="https://www.facebook.com/pages/HtmlcomCss/345118108915171?ref=hl" title="Facebook da HTMLcomCSS" class="link" rel="external">facebook</a></p>
                
                <p class="email"><a href="mailto:contato@htmlcomcss.com.br" title="E-mail" class="link">contato@htmlcomcss.com.br</a></p>
            </section><!-- FINAL CONTATOS -->
            
        </section><!-- FINAL CONTENT -->
    </div><!-- FINAL MAIN -->
</div>

<?php include "footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
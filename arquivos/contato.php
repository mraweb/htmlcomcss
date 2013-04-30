<div class="bgInt">
	<div id="main">
    	<?php include "header.php"; ?>
        
		<section id="content" role="main">
        	<h1>Contato</h1>
            
            <p>Caso você tenha dúvidas, sugestões ou comentários sobre a conversão do seu layout em HTML e CSS, entre em contato. Nós ficaremos felizes em ajudá-lo, preencha o formulário abaixo ou então envie um e-mail direto para <strong><a href="mailto:contato@htmlcomcss.com.br" title="E-mail" class="link">contato@htmlcomcss.com.br</a></strong></p>

            <section class="formulario left">
                <form action="resposta-contato" method="post" id="formID">
                    <ul>
                        <li>
                            <label for="nome">Nome*:</label>
                            <input type="text" name="nome" id="nome" class="validate[required]" />
                        </li>
                        
                        <li>
                            <label for="mail">E-mail*:</label>
                            <input type="text" name="mail" id="mail" class="validate[required,custom[email]]" />
                        </li>
                        
                        <li>
                            <label for="tel">Telefone*:</label>
                            <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                        </li>
                        
                        <li>
                            <label for="assunto">Assunto:</label>
                            <input type="text" name="assunto" id="assunto" />
                        </li>
                        
                        <li>
                            <label for="msg">Mensagem:</label>
                            <textarea name="msg" id="msg" cols="50" rows="5"></textarea>
                        </li>
                        
                        <li>
                            <span class="dados">*Campos de preenchimento Obrigatório</span>
                            <input type="image" src="img/btenviar.jpg" name="Enviar" alt="Enviar" class="bt-enviar right" />
                        </li>
                    </ul>
                </form>
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
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
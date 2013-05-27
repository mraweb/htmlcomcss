<div class="bgInt">
	<div id="main">
    	<?php include "header.php"; ?>
        
		<section id="content" role="main">
            <h1>Orçamento - Desenvolvimento Front-End</h1>
            
            <p>Preencha os campos com as informações solicitadas para que a equipe da <strong>HTMLcomCSS</strong> possa codificar seu layout com qualidade e pontualidade. Indique abaixo a quantidade de páginas que deseja contar com os serviços de Front-End e anexe seu(s) layout(s). Você será informado logo em seguida do valor do projeto.</p>
            
			<p>Em caso de custos adicionais devido a complexidade do projeto, a <strong>HTMLcomCSS</strong> irá entrar em contato o mais breve possível. Aqui o profissionalismo e a transparência são valores fundamentais do seu projeto.</p>
            
            <section class="formulario left">
                <form action="resposta-orca" method="post" id="formID" enctype="multipart/form-data">
                    <input type="hidden" name="valida" id="valida" />
                    <ul>
                        <li>
                            <label for="nome">Nome*:</label>
                            <input type="text" name="nome" id="nome" class="validate[required]" />
                        </li>
                        
                        <li>
                            <label for="mail">E-mail*:</label>
                            <input type="email" name="mail" id="mail" class="validate[required,custom[email]]" />
                        </li>
                        
                        <li>
                            <label for="tel">Telefone*:</label>
                            <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                        </li>
                        
                        <li>
                            <label for="order-pages">Quantidade de páginas*:</label>
                            <input type="text" name="order-pages" id="order-pages" value="1" placeholder="1" onkeyup="calcPrice();" />
                            <span class="left">=</span>
                            <span class="result-order" id="total-quant">R$ <strong>380</strong></span>
                            <div>
                                <p>60% de Desconto<br />
                                <span>nas páginas adicionais</span></p>
                            </div>
                        </li>
                        
                        <li>
                            <label for="arquivo">Anexe seu layout:</label>
                            <input type="file" name="arquivo" id="arquivo" />
                            <span class="obs">Envie os arquivos em jpg e zipados para simples visualização</span>
                        </li>
                        
                        <li class="msg">
                            <label for="msg">Mensagem:</label>
                            <textarea name="msg" id="msg" rows="5" cols="50"></textarea>
                        </li>
                        
                        <li>
                            <span class="left obs">*Dados Obrigatórios</span>
                            <input type="image" src="img/btenviar.jpg" name="Enviar" alt="Enviar" class="bt-enviar right" />
                        </li>
                    </ul>
                </form>
            </section>
            
            <?php include "aside.php"; ?>
        </section><!-- FINAL CONTENT -->
    </div><!-- FINAL MAIN -->
</div>

<?php include "footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
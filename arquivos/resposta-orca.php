<div class="bgInt">
	<div id="main">
    	<?php include "header.php"; ?>
        
		<section id="content" role="main">
            <h1>Orçamento - Desenvolvimento Front-End</h1>
            
            <p>Preencha algumas informações para que possamos montar seu layout exatamente como você deseja, assim como selecionar opções adicionais para melhorar o desempenho das suas páginas. Preenchendo o formulário você será direcionado para o carrinho de compras e após o pagamento você poderá efetuar o envio dos seus arquivos.</p>
            
            <section class="formulario left">
                <p><strong>Obrigado <?php echo $_POST["nome"]; ?>,</strong> seus orçamento foi enviado com sucesso.</p>
                <p>Em breve vamos retornar para o e-mail <strong><?php echo $_POST["mail"]; ?></strong></p>
            </section>
            
            <?php include "aside.php"; ?>
        </section><!-- FINAL CONTENT -->
    </div><!-- FINAL MAIN -->
</div>

<?php include "footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>


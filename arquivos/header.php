<header role="banner">
			<?php if($_GET["pg"] == ""){ ?>
        	<h1><a href="/" title="HTML com CSS - Desenvolvimento Web" class="hidetxt">HTML com CSS - Desenvolvimento Web</a></h1>
            <?php }else{ ?>
            <p class="logo"><a href="/" title="HTML com CSS - Desenvolvimento Web"><img src="../img/logo.png" alt="HTML com CSS - Desenvolvimento Web" width="356" height="96" /></a></p>
            <?php } ?>
            
            <nav role="navigation">
            	<ul>
                	<li><a href="/" title="Home" class="<?php if($_GET['pg'] == ""){echo "ativo";} ?>">Home</a></li>
                    <li><a href="empresa" title="Empresa" class="<?php if($_GET['pg'] == "empresa"){echo "ativo";} ?>">Empresa</a></li>
                    <li><a href="servicos" title="Serviços" class="<?php if($_GET['pg'] == "servicos" or $_GET['pg'] == "criacao-de-sites" or $_GET['pg'] == "desenvolvimento-front-end" or $_GET['pg'] == "wordpress" or $_GET['pg'] == "webdesign" or $_GET['pg'] == "criacao-de-conteudo" or $_GET['pg'] == "otimizacao-de-sites"){echo "ativo";} ?>">Serviços</a></li>
                    <li><a href="orcamento" title="Orçamento" class="<?php if($_GET['pg'] == "orcamento" or $_GET['pg'] == "resposta-orca"){echo "ativo";} ?>">Orçamento</a></li>
                    <li><a href="faq" title="FAQ" class="link-maior <?php if($_GET['pg'] == "faq"){echo "ativo";} ?>">FAQ</a></li>
                    <li><a href="portfolio" title="Portfolio" class="<?php if($_GET['pg'] == "portfolio"){echo "ativo";} ?>">Portfolio</a></li>
                    <li><a href="termos-de-servico" title="Termos de Serviço" class="<?php if($_GET['pg'] == "termos-de-servico"){echo "ativo";} ?>">Termos de Serviço</a></li>
                    <li class="semPdg"><a href="contato" title="Contato" class="<?php if($_GET['pg'] == "contato" or $_GET['pg'] == "resposta-contato"){echo "ativo";} ?>">Contato</a></li>
                </ul>
            </nav>
        </header><!-- FINAL HEADER -->
<nav id="navServ" class="<?php if($_GET['pg'] == "servicos" or $_GET['pg'] == "criacao-de-sites" or $_GET['pg'] == "desenvolvimento-front-end" or $_GET['pg'] == "wordpress" or $_GET['pg'] == "webdesign" or $_GET['pg'] == "criacao-de-conteudo" or $_GET['pg'] == "otimizacao-de-sites"){echo "left";}else{echo "right";} ?>">
				<?php if($_GET['pg'] == "orcamento" or $_GET['pg'] == "resposta-orca"){ ?>
                <h2 class="h2serv">Serviços</h2>
                <?php } ?>
            	<ul>
                	<li><a href="criacao-de-sites" title="Criação de Sites" class="<?php if($_GET['pg'] == "criacao-de-sites"){echo "ativo";} ?>">Criação de Sites</a></li>
                    <li><a href="desenvolvimento-front-end" title="Desenvolvimento Front-End" class="<?php if($_GET['pg'] == "desenvolvimento-front-end"){echo "ativo";} ?>">Desenv. Front-End</a></li>
                    <li><a href="wordpress" title="Wordpress" class="<?php if($_GET['pg'] == "wordpress"){echo "ativo";} ?>">Wordpress</a></li>
                    <li><a href="webdesign" title="Web Design" class="<?php if($_GET['pg'] == "webdesign"){echo "ativo";} ?>">Web Design</a></li>
                    <li><a href="criacao-de-conteudo" title="Criação de Conteúdo" class="<?php if($_GET['pg'] == "criacao-de-conteudo"){echo "ativo";} ?>">Criação de Conteúdo</a></li>
                    
                    <li class="altura"><a href="otimizacao-de-sites" title="Otimização de Sites" class="<?php if($_GET['pg'] == "otimizacao-de-sites"){echo "ativo";} ?>">Otimização de Sites</a></li>
                </ul>
            </nav>

<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php'; // load logic.php

?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php if ($pie==1) : ?>
      <style> 
        {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
      </style>
    <?php endif; ?>
  <![endif]-->

	<script src="<?php echo $tpath; ?>/assets/js/jquery.min.1.7.1.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<?php echo $tpath; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>assets/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>assets/css/estilos.css">

</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' '.$active->alias.' '.$pageclass; ?>">
  	<!-- Cabeçalho -->
	<div class="header">
	</div>
	
	<div class="menu_superior">
		<div class="logo">
			<img src="assets/images/logo.png"/>
		</div>
		<div class="menu">
			 <jdoc:include type="modules" name="menu_superior" />
			<ul>
				<li><a href="#">O palestrante</a></li>
				<li class="active"><a href="#">Oficinas</a></li>
				<li><a href="#">Coaching</a></li>
			</ul>
		</div>
	</div>
	<!-- Fim do cabeçalho -->
	<jdoc:include type="message" />
	<jdoc:include type="component" />
	
	<!-- Rodape -->
	<footer class="rodape_fundo"> 
		<div class="container" />
			<div class="row rodape">
				<div class="span3">
					 <jdoc:include type="modules" name="newsletter" />
					<h2>Receba a newsletter do Olhe mais uma vez!</h2>
				</div>
				<div class="span2">
					 <jdoc:include type="modules" name="menu_inferior1" />
					<ul>
						<li><a>Pagina inicial</a></li>
						<li>O Palestrante</li>
						<li>Oficinas</li>
						<li>Coaching</li>
						<li>Blogs</li>
						<li class="subitem">Facetas</li>
						<li class="subitem">Remar é preciso</li>							
					</ul>
				</div>
				<div class="span2">
					 <jdoc:include type="modules" name="menu_inferior2" />
					<ul>
						<li>Loja</li>
						<li class="subitem">Livros</li>
					</ul>
					
				</div>
				<div class="span2">
					 <jdoc:include type="modules" name="redes_sociais" />
					<h2>Nas redes sociais</h2>
				</div>
				<div class="span3">
					<p class="proiz">Desenvolvido por <a href="http://www.proiz.com.br" target="_blank">PROIZ</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Fim do rodape -->
	
  <jdoc:include type="modules" name="debug" />
</body>

</html>


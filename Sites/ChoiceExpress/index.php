<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<title>&bull; Choice Express &bull;</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<!-- Start menu css and js files here -->
<link rel="stylesheet" type="text/css" media="all" href="css/960.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/menu1.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>

<script type="text/javascript">
	$(function() {
	  if ($.browser.msie && $.browser.version.substr(0,1)<7)
	  {
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').show();
			}).mouseout(function(){
			$(this).children('ul').hide();
			})
	  }
	});        
</script>

<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->

</head>
<body>
<div class="topsite">
  <div class="img_top_slogan">
      <img src="imagens/img_topo.png" alt="Entre em Contato" class="pngfix logo"/> 
  </div>
<!--start:top -->
      <div class="container_16">
		  <!--start:logo -->
		  <div class="grid_5"> 
				<!--<img src="imagens/logo_choice.png" alt="Choice Express" class="pngfix logo"/>-->
                <a href="?pagina=home.php"><img src="imagens/logo_choice.png" alt="Choice Express" class="pngfix logo"/></a>
          </div>
          <!--end:logo -->
          <!--start:Slogan -->
          <div class="slogan">
             	<img src="imagens/slogan.png" alt="Slogan" class="pngfix logo"/>
                <!--<p>Excelência em entregas rápidas.</p> -->
          </div>
          <!--end:Slogan -->
       </div>
           <div class="container_16">
                  <!-- start:menu -->
                    <ul id="menu">
                        <li><a href="?pagina=home.php">Empresa</a></li>
                        <li>
                            <a href="?pagina=servicos.php">Serviços</a>
                            <ul>
                                <li><a href="#">Serviços 1</a></li>
                                <li><a href="#">Serviços 2</a></li>
                                <li><a href="#">Serviços 3</a></li>
                                <li><a href="#">Serviços 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Rastreie sua Carga</a></li>
                    </ul>
                  <!-- end:menu -->
           </div>
      </div>     
</div>       
       <!--    </div>
          <!--start:SiteMapa -->
          <!-- <div class="sitemapa">
          	<p>Você está aqui : </p>
          </div> -->
          <!--end:SiteMapa -->          
 <!-- </div>   
              <!--end:top container -->
       <!--       </div>
<!--end:top -->
<!--start:banner -->
<div class="container_16">
<div class="banner"></div>
</div>
<!--end:banner -->
<div class="container_16">
	<div class="content_left">
      <?php
	    if (isset($_GET['pagina'])) 
		 include($_GET['pagina']);
		 else
		   include("home.php");
	  ?>
    </div>
    <div class="content_right">
      <img src="imagens/noticias.png" alt="Notícias"/>
      <a href="?pagina=terceirizacao.php#terc01" title="Clique aqui e continue lendo"><p>O que não se deve terceirizar?</p></a>
      <p>A atividade-fim de uma empresa é a razão de existir dessa empresa...</p>
      <a href="?pagina=terceirizacao.php#terc02" title="Clique aqui e continue lendo"><p>O que são os Terceirizados ?</p></a>
      <p>Apesar das várias vantagens, a Terceirização deve ser praticada com cautela...</p>
      <a href="?pagina=terceirizacao.php#terc03" title="Clique aqui e continue lendo"><p>O que é o processo de terceirização em uma organização ?</p></a>
      <p>O processo de terceirização em uma organização deve levar em conta diversos fatores de interesse...</p>
    </div>
</div>
<div class="clear"></div>
<!--start:footer -->
<div class="footer_s">
   <div class="container_16">
     <div class="footer_left">
            <p>
              <br>&copy; Copyright 2013 todos os direitos reservados a Choice Express Entregas Rápidas Ltda.</br>
              <br>Estrada do Galeão, 2.879 - 2º Andar - Sala 208 - Ilha do Governador - Rio de Janeiro/RJ</br>
              <br>Telefones:(21)2462-1525 / (21)2462-1930</br>
            </p>
     </div>
      <div class="footer_right">
        <div class="twitter"> 
          <img src="imagens/img_footer.png" alt="Entregas Rápidas"/>
          <a href="http://www.fxh.com.br" target="_blank"><img src="imagens/logoflex.png" title="Desenvolvido por FLEXHITECH Soluções em Informática" alt="Empresa Desenvolvedora"/></a>
          <!--<a href="http://twitter.com/flexhitech" target="_blank"><img src="images/twitter.png" alt="Siga-nos"/></a>
          <a href="http://pt-br.facebook.com/pages/FLEXHITECH-Solu%C3%A7%C3%B5es-em-Inform%C3%A1tica/265824936800818" target="_blank"><img src="images/facebook.png" alt="Curtir"/></a>
          <a href="http://www.linkedin.com/company/flexhitech-solu-es-em-inform-tica-ltda-" target="_blank"><img src="images/linkedin.png" alt="FLEX Linkedin"/></a>
          <a href="https://plus.google.com/u/0/b/106033097207262345116/" target="_blank"><img src="images/google.png" alt="FLEXHITECH+"/></a> -->
        </div>
     </div>
   </div>  
</div>
<!--end:footer -->
</body>
</html>
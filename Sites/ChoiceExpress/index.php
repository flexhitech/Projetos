<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<title>&bull; Choice Express &bull;</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<!-- Start menu css and js files here -->
<link rel="stylesheet" type="text/css" media="all" href="css/960.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/menu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>

<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->

</head>
<body>
<div class="topsite">
<!--start:top -->
      <div class="container_16">
		  <!--start:logo -->
		  <div class="grid_5"> 
				<img src="imagens/logo_choice.png" alt="AV2 Service" class="pngfix logo"/>
          </div>
          <!--end:logo -->
          <!--start:Slogan -->
          <div class="slogan">
             	<p>"Nós cuidamos do seu ambiente, e sua tranquilidade é o nosso negócio."</p> 
          </div>
          <!--end:Slogan -->
          <!-- start:menu -->
              <ul class="nav">
                  <li><a href="#">Home</a></li>
                  <li class="dropdown"><a href="#">Link 2</a>
                  <ul>
                      <li><a href="#">Level 1</a></li>
                      <li><a href="#">Level 1</a></li>
                      <li class="dropdown"><a href="#">Level 1</a>
                      <ul>
                          <li><a href="#">Level 2</a></li>
                          <li><a href="#">Level 2</a></li>
                          <li><a href="#">Level 2</a></li>
                          <li class="dropdown"><a href="#">Level 2</a>
                          <ul>
                              <li><a href="#">Level 3</a></li>
                              <li><a href="#">Level 3</a></li>
                              <li><a href="#">Level 3</a></li>
                              <li><a href="#">Level 3</a></li>
                              <li><a href="#">Level 3</a></li>
                          </ul>
                          </li>
                          <li><a href="#">Level 2</a></li>
                      </ul>
                      </li>
                      <li><a href="#">Level 1</a></li>
                      <li><a href="#">Level 1</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                  <li><a href="#">Link 5</a></li>
              </ul>
          <!-- end:menu -->
          <!--start:SiteMapa -->
          <!-- <div class="sitemapa">
          	<p>Você está aqui : </p>
          </div> -->
          <!--end:SiteMapa -->          
  </div>   
              <!--end:top container -->
              </div>
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
            <p>&copy; Copyright 2012 todos os direitos reservados a AV2 Prestação de Serviços Ltda.</p>
            <p>Av. Rio Branco, 45 - 15º Sala 1.513 - Centro - Rio de Janeiro/RJ</p>
            <p>Telefone:(21)2223-1401</p>
     </div>
      <div class="footer_right">
        <div class="twitter"> 
          <img src="imagens/pessoal.png" alt="Nosso Pessoal"/>
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
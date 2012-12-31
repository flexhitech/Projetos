<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<title>&bull; AV2 &bull;</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<!-- Start menu css and js files here -->
<link rel="stylesheet" type="text/css" media="all" href="css/960.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/formcontato.css"/>

<script type="text/javascript" src="js/jquery.js"></script>

<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->
</head>
<body>
  <div class="home">
    <!--inicio:Formulário de Contato -->
    <form id="contactform" class="rounded" method="post" action="enviar_contato.php" enctype="multipart/form-data" accept-charset="utf-8">
     <fieldset>
        <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" class="input" name="nome" id="nome" required="required"/>
            <p class="hint">Digite seu Nome.</p>
        </div>
        
        <div class="field">
            <label for="email">E-mail:</label>
            <input type="email" class="input" name="email" id="email" required="required"/>
            <p class="hint">Digite seu e-mail.</p>
        </div>
        
        <div class="field">
            <label for="mensagem">Mensagem:</label>
            <textarea class="input textarea" name="mensagem" id="mensagem"></textarea>
            <p class="hint">Escreva sua mensagem.</p>
        </div>
        <input type="submit" name="submit"  class="button" value="Enviar" />
     </fieldset> 
    </form>
    <!--Inicio:Script de Validação de preenchimento dos Campos -->
    <script type="application/javascript">
      // Inicia o validador ao carregar a página
      $(function() {
          // valida o formulário
          $('#contactform').validate({
              // define regras para os campos
              rules: {
                  nome: {
                      required: true,
                      minlength: 2
                  },
                  email: {
                      required: true,
                      email: true
                  },
                  mensagem: {
                      required: true
                  }
              },
              // define messages para cada campo
              messages: {
                  nome: "Informar nome",
                  email: "Informar e-mail",
                  mensagem: "Informar mensagem"
              }
          });
      });
    </script>
   <!--Final:Script de Validação de preenchimento dos Campos -->
    <br />
    <!--final:Formulário de Contato -->
  </div>
</body>
</html>
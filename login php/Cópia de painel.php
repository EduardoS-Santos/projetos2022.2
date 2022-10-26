<?php
  include_once'autenticacao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="stylesheet" href="css/painell.css">
    <link rel="stylesheet" href="css/faleconosco1.css">
    <title>Document</title>
</head>


<body>
    <header class = "cabecalho">  
     <div class = "topo">
        <img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo">

      <nav class="menu">
        <ul>
             <li><a href="#">Bem-vindo ao menu <?php echo $_SESSION["perfil"]; ?></a></li>
             
        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
      
    <div id="painel">

      <h3>Base dos Vingadores</h3>
      <p>Sejam bem-vindos_a Vingador_a:<?php echo $_SESSION["nome"]?> </p>
      <h4>Menu</h4>

      

      <?php
        if($_SESSION["perfil"]=="administrador")
        {
            include_once'menus/menu-adm.php';
    
        }elseif($_SESSION["perfil"]=="usuario"){

            include_once'menus/menu-user.php';
        }

       ?>

    </div>




    </section>

    <footer class="rodape">
		
		<div class="rodapecentro">
		
			<div class="redesocial">
			<h4>Siga-nos</h4>
			
			<img src="img/logo-marvel.png" alt="" width="300">

			</div><!--Fim Rede Social-->
			
			<div class="menurodape">
			<h4>Conteudo</h4>
		
		<ul class="rodapelinks">
      <li><a href="#">Vingadores</a></li>
			<li><a href="#">Joias do Infinito</a></li>
			<li><a href="#">Lancamentos Futuros</a></li>
		</ul>
	
			</div><!--Fim Menu Rodapé-->
			
			<div class="contato">
			<h4>fale conosco</h4>
        
      <fieldset>
            <form name="formulario" action="falec">

                <div id="nome1">
                <p>Nome:<input type="text" name="nome" ></p>
                </div>
                
                <div id="nome2">
                <p>Telefone:<input type="text" name="telefone" ></p>
                </div>
                
                <div id="nome3">
                <p>E-mail:<input type="text" name="email" ></p>
                </div>
                
                <div id="mensagem">
                <textarea name="mensagem" placeholder="Escreva sua mensagem"></textarea>
                </div>
                
                <div id="enviar">
                <p><input type="submit" value="Enviar" id="id_enviar" ></p> 
                </div>
                
                </form> <!-- Fim do Formulário -->
            </fieldset>
			
			
			
			
			</div><!--Fim Contato-->
		
		</div><!--Fim Rodapé Centro-->
		

</body>
</html>

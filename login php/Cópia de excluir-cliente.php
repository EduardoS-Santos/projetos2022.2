<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="shortcut icon" href="css/Marvel-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/faleconosco1.css">
    <title>Document</title>
</head>
<body>
    <header class = "cabecalho">  
     <div class = "topo">
     <a href="index.php"><img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo"></a>

      <nav class="menu">
        <ul>
             <li><a href="#">Bem-VindoﾠaﾠZona-Marvel</a></li>

        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
   <?php
    $cod = $_GET["cod_cli"];
    $con = mysqli_connect("localhost","root","","cadastro");
    $sql = "delete from cliente where cod_cli = " .$cod;
    if(mysqli_query($con, $sql))
    {
        $msg = "cliente excluido com sucesso!!";
    }
    else
    {
        $msg = "Erro ao excluir!!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php  echo $msg; ?>');
    location.href = "consultar-cliente.php";
</script>

    </section>

    <footer class="rodape">
		
		<div class="rodapecentro">
		
			<div class="redesocial">
			<h4>Siga-nos</h4>
			
      <a href="https://www.instagram.com/marvel/"><img src="img/logo-marvel.png" alt="" width="300"></a>

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
		
		<div class="direitos">
		 <p>&copy;Todos os Direitos Reservados 2022.</p>
		</div> <!-- Fim Dieitos-->
	
		</footer> <!--Fim Rodapé-->
		

       

</body>
</html>

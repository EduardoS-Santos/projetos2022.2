<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="shortcut icon" href="css/Marvel-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/atualizar2.css">
    <link rel="stylesheet" href="css/faleconosco1.css">
    <title>Document</title>
</head>
<body>
    <header class = "cabecalho">  
     <div class = "topo">
     <a href="index.php"><img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo"></a>

      <nav class="menu">
        <ul>
             <li><a href="#">Editando Cliente</a></li>

        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
   <?php 
        
        $cod = $_GET["cod"]; //resgatando o valor que veio pelo link
    
        $con = mysqli_connect("localhost","root","","cadastro");
    
        $sql = "select * from usuar where cod_usuario = ".$cod;
        
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result);
                    
        
    ?>
    
    
    <div class="container">
        
        <h3>Alteração de Cliente</h3>
        
        <form action="atualizar-usuario.php" method="post">
            
            <input type="hidden" name="cod"  value="<?php echo base64_encode($row["cod_usuario"]); ?>">
            
            <div class="input-field">
            <label for="nome">Nome</label><input value="<?php echo $row["nome"]; ?>" type="text" name="nome" id="nome" pattern="[A-z À-ü]{3,50}" required autofocus minlength="3">
                
            </div>
            
                           
            <div class="input-field2">
            <label for="login">Usuario</label><input value="<?php echo $row["login"]; ?>" type="text" name="login" id="login">
                
            </div>
             
        
           
            <div id="botao">
            <input type="submit" value="Atualizar" class="btn">
</div>
            
        </form>
        
    </div>
    

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
                <textarea name="mensagem" placeholder="Mensagem"></textarea>
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
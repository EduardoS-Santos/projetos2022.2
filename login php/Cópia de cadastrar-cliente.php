<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="stylesheet" href="css/cadastro2.css">
    <link rel="stylesheet" href="css/faleconosco.css">

    <title>Document</title>
</head>

<body>
    <header class = "cabecalho">  
     <div class = "topo">
     <a href="index.php"><img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo"></a>

      <nav class="menu">
        <ul>
             <li><a href="#">Area de cadastramento do cliente</a></li>

        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
    
    <div class="formulario">
        <div id="caixa3">

           <h2>Cadastrar </h2>
           
           <form action="gravar-cliente.php" method="post">
    <p>
    <div id="nome">
         
         <label>Nome: </label><input type="text" name="nome" id="name" required ><br>
     </div>
    
    </p>
    <p>
    <div id="cpf">
           <label>CPF: </label><input type="text" name="cpf" id="cpf"  required ><br>
           </div>
    </p>
    <div id="email">
           <label>Email: </label><input type="text" name="email" id="email"  required ><br>
           </div>
           <p>
    <div id="telefone">
           <label>Telefone: </label><input type="text" name="telefone" id="telefone"  required ><br>
                </div>
            </p>
    <div id="datadata">
           <label>Data de Nascimento: </label><input type="text" name="dtnasc" id="dtnasc"  required ><br>
               </div>
    <div id="botao2">
              <input type="submit" value="Cadastrar" class="btn">
              </div>
    </form>
          
           </form>
     
    <div id="sair">
    <a href="painel.php" class="btn" padding="5px">Voltar</a>
    </div>
        </div>
         
        </div>
     

    </section>

    <footer class="rodape">
		
		<div class="rodapecentro">
		
			<div class="redesocial">
			<h4>Siga-nos</h4>
			
            <a href="https://www.instagram.com/marvel/"><img src="img/logo-marvel.png" alt="" width="300"></a>

			</div><!--Fim Rede Social-->
			
			<div class="menurodape">
			<h4>Menu</h4>
		
		<ul class="rodapelinks">
			<li><a href="cadastrar-cliente.php">  Cadastrar Cliente</li>
			<li><a href="#">  Cadastrar Usuario</li>
			<li><a href="consultar-cliente.php">  Consultar Cliente</a></li>
			<li><a href="#">Consultar Usuario</a></li>

		</ul>
	
			</div><!--Fim Menu Rodapé-->
			
			<div class="contato">
					
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

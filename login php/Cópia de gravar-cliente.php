<?php
include_once'funcoes.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <title>Document</title>
</head>
<body>
    <header class = "cabecalho">  
     <div class = "topo">
        <a href="index.php"></a><img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo">

      <nav class="menu">
        <ul>
             <li><a href="#">Entre</a></li>
             <li><a href="#"> Joias do Infinito</a></li>
             <li><a href="#">Vingadores</a> </li>
             <li><a href="cadastrar-cliente.php">Cadastra-se</a></li>
             <li><a href="consulta-cliente.html">Consultar </a></li>

        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
    
   <?php
      
      $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $dtnasc = dataBanco($_POST["dtnasc"]);

        $con = mysqli_connect("localhost", "root", "", "cadastro");

        $sql = "insert into cliente values(null, '".$nome."', '".$cpf."','".$email."', '".$telefone."', '".$dtnasc."')";

        if(mysqli_query($con, $sql))
        {
            $msg = "Dados gravados com sucesso!!!";
        }
        else
        {
            $msg = "Erro ao gravar os dados no banco!!";
        }
        //fechar a conexão
        mysqli_close($con);

      
    ?>
    <script>
    alert('<?php  echo $msg; ?>');
    location.href = "cadastrar-cliente.php";
     </script>


    </section>

    <footer class="rodape">
		
		<div class="rodapecentro">
		
			<div class="redesocial">
			<h3>Siga-nos</h3>
			
			<img src="img/logo-marvel.png" alt="" width="300">

			</div><!--Fim Rede Social-->
			
			<div class="menurodape">
			<h3>Mapa do Site</h3>
		
		<ul class="rodapelinks">
			<li><a href="index.html">Home</li>
			<li><a href="#">A Pousada</li>
			<li><a href="lazer.html">Lazer</a></li>
			<li><a href="dicas.html">Dicas de passeios</a></li>
			<li><a href="turisticos.html">Pontos turisticos</a></li>
		</ul>
	
			</div><!--Fim Menu Rodapé-->
			
			<div class="contato">
			<h3>Contato</h3>
			
			
			
			</div><!--Fim Contato-->
		
		</div><!--Fim Rodapé Centro-->
		
		<div class="direitos">
		 <p>&copy;Todos os Direitos Reservados 2022.</p>
		</div> <!-- Fim Dieitos-->
	
		</footer> <!--Fim Rodapé-->
		

       

</body>
</html>

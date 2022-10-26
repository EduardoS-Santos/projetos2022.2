<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="stylesheet" href="css/consulta.css">
    <link rel="shortcut icon" href="css/Marvel-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/faleconosco1.css">
    <title>Document</title>
    <script>
                function confirmaExclusao(cod_cli,nome){
                    if(confirm('deseja realmente excluir o(a) cliente '+nome+'?'))
                    { 
                        location.href="excluir-cliente.php?cod="+cod_cli;
                    }
                }
            </script>
</head>
<body>
    <header class = "cabecalho">  
     <div class = "topo">
     <a href="index.php"><img src="img/marvel.png" alt="Logo Marvel" width="200" class="logo"></a>

      <nav class="menu">
        <ul>
             <li><a href="#">Consulta ao Cliente</a></li>

        </ul>
        </nav>
    </div>
     </header>
   <section class="container">
   <div class="formu">
    <h3 class="pink-text">Consultar Cliente</h3>

    <form action="" method="get" autocomplet="off">
        <div id="pesquisa">
        <label>Digite seu nome: </label><input type="text" name="nome">
        </div>
        <div id="botao">
        <input type="submit" value="Pesquisar" class="btn">
        </div>
    </form>
</div>
<?php
    if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
        //echo "O cliente digitado foi: " . $nome;
        $con = mysqli_connect("localhost", "root", "", "cadastro");
        //instrução
        $sql = "select * from cliente where nome like '".$nome."%'" ;
        $result = mysqli_query($con, $sql);
        //se o número de linhas encontrado é maior que zero
        if(mysqli_num_rows($result) > 0)
        {
           // echo "ok!!!";
           ?>
           <table class= "indetificacoes" >
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>✏️</th>
                    <th>🗑️</th>
                </tr>
                <?php
                    //encanto/while
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <!-- Editar -->
                            <td> <a href="editar-cliente.php?cod=<?php echo $row["cod_cli"]; ?>"> <i>Editar</i></a></td>
                            <!-- excluir -->
                            <td> <a href="#" onclick="confirmaExclusao(<?php echo $row["cod_cli"]; ?>,'<?php echo $row["nome"]; ?>')"> <i class="material-icons">Excluir</i> </a></td>
                        </tr>
                        
                    <?php
                    } //fim do loop 
                    ?>
           </table>

<?php
        }

    }
    else
    {
        echo "Nenhum Cliente encontrado!!";
    }
    mysqli_close($con);


?>

    <div id="sair">
    <a href="painel.php" class="btn" padding="5px">Voltar</a>
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
			<li><a href="#">Lançamentos Futuros</a></li>
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
		
       

</body>
</html>

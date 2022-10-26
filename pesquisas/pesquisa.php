<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="./style/stiles.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" type="text/css" href="css/home.css">

    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
  <title>Loja</title>

    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
        $('#slider').nivoSlider();
        });
    </script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:#FFF;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/fashion.png" width="110" alt=""></a>
        <button class="navbar-toggler" style="background-color: white; color:black;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            <li class="nav-item dropdown" style="color: #fff; background-color: black;">
              <a class="nav-link dropdown-toggle" href="#" role="button" style="color: #fff; " data-bs-toggle="dropdown"
                aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" style="color: #fff; background-color: black;">
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Camisas</a></li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Tenis</a></li>
                <li style="color: #fff; background-color: black;" >
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Shorts</a></li>
              </ul>
              <!---->
            </li>
            <!---->

            <li class="nav-item">
            <form class="d-flex" method="post" action="pesquisa.php" role="search">
                <input class="form-control me-2" type="search" name="pesquisa" placeholder="O que você procura?" style="color: #fff; background-color: black;" aria-label="Search">
                <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
              </form>
             

              
              <!--fim da barra de pesquisa-->
            </li>
            <!---->
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color: #fff; background-color: black;">
                Usuário
              </a>
              <ul class="dropdown-menu" style="color: #fff; background-color: black;">
                <li><a class="dropdown-item" style="color: #fff; " href="#">Login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#" style="color: #fff; "><span>Carrinho</span> <span class="material-symbols-outlined">
                      shopping_cart
                    </span></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="painel-do-adm.php" style="color: #fff; ">Ações do Usuario</a></li>
              </ul>
              <!---->
            </li>
            <!---->
          </ul>
          <!--fim dos icons da nav bar-->

        </div>
        <!--final da nave bar-->

      </div>
      <!--final do container-->
    </nav>
  </header>
  <!--fim da cabeçalho-->

  <section class="banner">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <img src="img/banner.png" data-thumb="img/banner1.png" alt=""  />
        <img src="img/banner2.png" data-thumb="img/banner2.png" alt="" />
        <img src="img/banner3.png" data-thumb="img/banner3.png" alt="" data-transition="slideInLeft" />
      </div>
    </div>
	</section> <!--Fim Banner-->
	
	
<section class="container">	
	

	
	<div id="blocosuites">
	
    <h2  style="color:#FFF; text-align:center;">Resultados <strong>Encontrados</strong> </h2>
		
        <?php

include_once"conexao.php";

$pesquisar = $_POST['pesquisa'];
    $result_cursos = "SELECT * FROM produto WHERE nomeprod LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($con, $result_cursos);
?>

		<section id="produtos">
        <?php  
        if(mysqli_num_rows($resultado_cursos) > 0){
            while($row= mysqli_fetch_array($resultado_cursos)){
            ?>

<section class="produto">
			<form action="tela-produto.php" method="get" autocomplet="off" class="main-form">
      <input type="hidden" name="codigo" value="<?php echo $row["codprod"]; ?>">
       <img src="<?php echo $row["fotoproduto"]; ?>" width="250">
		 <p><?php echo $row["nomeprod"]; ?></p>
			<p>R$ <?php echo $row["valor"]; ?></p>
      <input type="submit" class="abacate" value="Comprar">
    </form>
		  </section>

<?php
}
}
else{
?>

 <p> <?php echo"Item não Encnotrado";?></p>
 <?php
}
?>
	
	
	</div> <!--Fim Bloco Suites-->
    </section> <!--Fim container-->
</head>
<body>
  
  
  <footer class="bg-dark text-light">
    <div class="container-fluid py-3">
    <div class="row">
      <div class="col-4">
        <ul class="nav flex-column">
          <li class="nav-link"><a href="#">Retornar à Loja</a></li>
          <li class="nav-link"><a href="#">Sobre</a></li>
          <li class="nav-link"><a href="#">Contato</a></li>
          <li class="nav-link"><a href="#">Suporte</a></li>
        </ul>
      </div>
      <div class="col-8">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed necessitatibus id asperiores iste fugiat,             praesentium obcaecati explicabo consequatur voluptatem eos earum blanditiis dolorem eaque veritatis libero?               Magni, nam fugiat.
        </p>
        <ul class="nav">
          <li class="nav-link" ><i class="fab fa-facebook fa-3x "></i></li>
          <li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li>
          <li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
          <li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;" >
      &copy 2022 Copyright: <a href="#">Sport Max</a>
    </div>
  </footer>
	
</section> <!--Fim Container-->
	
	
 <!--Fim Rodapé-->
</body>

</html>
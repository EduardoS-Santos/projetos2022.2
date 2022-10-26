<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php

      session_start();

      $login = $_POST["login"];
      $senha = md5($_POST["senha"]);

      $con = mysqli_connect("localhost","root","","cadastro");

      $sql = "select *  from usuar where login = '".$login."' and senha = '".$senha."'";

      $result = mysqli_query($con, $sql);

      if(mysqli_num_rows($result) == 1){
 
         $row = mysqli_fetch_array($result);


         $_SESSION["nome"] = $row["nome"];
         $_SESSION["perfil"] = $row["perfil"];
         $_SESSION["tempo"] = time();

         header("location:painel.php");

    
      }else{
          $msg = "Login/Senha inválidos" ;
          header("location:index.php?msg=".$msg);

      }

      mysqli_close($con)
      
    
    ?>




</body>
</html>
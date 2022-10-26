<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     session_start();

     if(!isset($_SESSION["nome"]))
     {
        session_destroy();
        $msg = "<span class='red-text'>Acesso Negado</span>";
        header("location:index.php?msg=".$msg);

     }elseif($_SESSION["tempo"]+ 5*60 < time()){

        $msg = "Sessão expirada";
        header("location:index.php?msg =".$msg);

     }else{
        
        $_SESSION["tempo"] = time();


     };

    ?>

    





</body>
</html>
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
    
    $data;

    function dataBanco($data){

       $data = explode("/", $data);
       $data = array_reverse($data);
       $data = implode("-", $data);

    
     return $data;


    };

    function dataTela($data){

        $data = explode("-", $data);
        $data = array_reverse($data);
        $data = implode("/", $data);

        
        return $data;
    };



    ?>



</body>
</html>
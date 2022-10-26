
<?php

session_start();
session_destroy();
$msg ="Logout efetivado";
header("Location:index.php?msg=$msg");


?>
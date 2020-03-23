<?php 
session_Start();

error_reporting(0)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
    <input placeholder="digite seu email" type="text" method="post" name="nome">
    <input type="text" method="post" placeholder="digite sua senha" name="senha">

     <button type="submit">logar</button>    
    
    
    
    </form>
<?php
$login = $_POST['nome'];
$senha = $_POST['senha'];
if(isset($_POST['nome'])&&isset($_POST['senha'])){
    $_SESSION['logado']=$_POST['nome'];
  header("location:welcome.php");


}else{
    $_SESSION['logado']==false;
echo "registre-se, por favor";
}
?>
</body>
</html>
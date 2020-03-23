<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
<form action="" method="POST">
    
    <h1>digite seu nome ai menor, quero usar "biscoito"</h1>

     <input type="text" method="POST" name="nome">  
     <button type="submit">
     gravar </button>
    
    
    </form>
    <?php
error_reporting(0);
  
  $nome = $_POST['nome'];
  
   if(isset($nome)){
       setcookie('reg',$_POST['nome'],time() + 3600);
       header("location:welcome.php");      
       
     
       
   }else{
     echo "registre-se";
   
   
 
   
?>
    
</body>
</html>
<?php  include "conn.php"; 

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$skill = $_POST['skill'];
$nome_ga = $_POST['nome_ga'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$obs = $_POST['obs'];


if ($nome_ga == 'ALISSON SQUINZANI')
{
  $mat_ga = 'TR176730';
}
if ($nome_ga == 'ANDERSON FERRI')
{
  $mat_ga = 'TR032796';
}
if ($nome_ga == 'CLEOMAR BISCHOFF')
{
  $mat_ga = 'TR096905';
}
if ($nome_ga == 'ENIR')
{
  $mat_ga = 'TR011176';
}   
if ($nome_ga == 'JOSE LUIS')
{
  $mat_ga = 'TR108332';
}
if ($nome_ga == 'JUNIOMAR ALEX MOCHNACZ')
{
  $mat_ga = 'TR011249';
} 
if ($nome_ga == 'MARLON CRISTIAN')
{
  $mat_ga = 'TR098662';
}




?>










<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='editar_tecnico.php?matricula=<?php echo $matricula ; ?>'",1000);
	
	
}
</script>


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Serede</title>


</head>



<body>








<?php













  


    $query = "update tecnico set  nome = '$nome', skill = '$skill', nome_ga = '$nome_ga', matricula_ga = '$mat_ga', obs = '$obs', contato = '$contato', email = '$email'  where matricula = '$matricula'" ;















$sql = mysql_query($query);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('EDITADO COM SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NA EDIÇÃO!');
   </script> " ;
  
}








?>

























</body>


</html>
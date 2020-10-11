<?php  include "conn.php";  ?>










<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cadastro_localidade.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Cadastro de localidade</title>


</head>



<body>








<?php



$localidade =$_POST['local'];
$estacao =$_POST['estacao']; 
$micro =$_POST['micro'];
$mat =$_POST['mat'];
$estado =$_POST['uf'];


$sql2 = mysql_query ("select * from tecnico where matricula = '$mat' " );
$row2 = mysql_num_rows($sql2);



if  ($row2 == 0)
{


    echo "
    <script language='JavaScript'>
    window.alert('TÉCNICO  NÃO CADASTRADO, VERIFIQUE!')
    
    </script>";

    echo "<script>saidasuccessfully()</script>";
  
    
    
  
   
   
  

  
}


else 
{

$query = "insert into localidade (uf,localidade,estacao,micro,matricula)";

$query.= "values ('$estado','$localidade','$estacao','$micro','$mat')";















$sql = mysql_query($query);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('CADASTRADO COM SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NO CADASTRO!');
   </script> " ;
  
}







}
?>

























</body>


</html>
<?php  include "conn.php"; 


$protocolo = $_POST['protocolo'];
$matricula = $_POST['matricula'];
$estacao = $_POST['estacao'];
$localidade = $_POST['localidade'];
$micro = $_POST['micro'];


?>










<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='editar_estacao.php?protocolo=<?php echo $protocolo ; ?>'",1000);
	
	
}
</script>


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Serede</title>


</head>



<body>








<?php




$sql2 = mysql_query ("select * from tecnico where matricula = '$matricula' " );
$row2 = mysql_num_rows($sql2);



if  ($row2 == 0)
{


    echo "
    <script language='JavaScript'>
    window.alert('TÉCNICO NÃP POSSUI CADASTRADO, VERIFIQUE!')
    
    </script>";

    echo "<script>saidasuccessfully()</script>";
  
    
    
  
   
   
  

  
}


else 
{

  


    $query = "update localidade set matricula = '$matricula', estacao = '$estacao', localidade = '$localidade', micro = '$micro' where protocolo = '$protocolo'" ;















$sql = mysql_query($query);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('EDITADA COM SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NA EDIÇÃO!');
   </script> " ;
  
}







}
?>

























</body>


</html>
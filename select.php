<?php

//select.php

$id2 = $_GET['id'];

include('database_connection.php');

$query = "SELECT * FROM colaborador where id_tec = '$id2'";

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>


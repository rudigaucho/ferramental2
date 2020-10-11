<?php

//multiple_update.php

include('database_connection.php');

if(isset($_POST['hidden_id']))
{
 $name = $_POST['name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $designation = $_POST['designation'];
 $qtd = $_POST['qtd'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   
   ':qtd'   => $qtd[$count],
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE colaborador
  SET qtd = :qtd
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
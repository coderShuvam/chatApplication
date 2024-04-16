<?php

//insert_chat.php

include('database_connection.php');

$conn= mysqli_connect("localhost","root","","chat");

$sql="select * from login";

$result1=mysqli_query($conn,$sql);

while($data=mysqli_fetch_assoc($result1))
{
	print_r($data);
	echo "<br>";
}



 $query = "select * from chat_message join login on chat_message.from_user_id=login.user_id";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 $r1=json_encode($result,JSON_PRETTY_PRINT);
 echo "<br><pre>";
 print_r($r1);
 echo "</pre><br>";
 echo "<br>";
 foreach($result as $row)
 {
  print_r($row);
  echo "<br>";
 }

?>
<?php

$con=mysqli_connect('localhost','root');

if($con){
   echo "connection successful";
}else{
 echo "no connection";
}

mysqli_select_db($con, 'feedback');

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Feedback=$_POST['Feedback'];

$query = " insert website1 (Name,Email,Feedback)
values ('$Name','$Email', '$Feedback') ";

echo "$query";

mysqli_query($con, $query);

?>

<?php
 
 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);

 if(!$con){
     die("connection to this database failed due to" .
     mysql_connect_error());

 }
//  echo "success connecting to the db;"
$name = $post['name'];
$email = $post['email'];
$number = $post['number'];
$subject = $post['subject'];
$message = $post['message'];
$sql = "INSERT INTO `contacts` (`name`, `email`, `number`, `subject`, `message`) VALUES ('$name', '$email', '$number', '$subject','$message');";
echo $sql;

?>
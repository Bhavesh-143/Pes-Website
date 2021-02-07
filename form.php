<?php


$con = new mysqli("localhost","root","","pes_mobile");

#checking connection

if(!$con){
    die("Sorry we failed to connect :". mysqli_connect_error());

}



#creating Insert query 

if(isset($_POST['submit'])){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $message = $_POST['msg'];
  $add = "INSERT INTO pes (Name , Email , Contact , Message ) VALUES('$name','$email','$contact','$message')";
  if($con->query($add)==True)
  {
     $insert = true;
     
  }
  else{
      echo "Error".$con->error;
  }
}

header('location:index.html');

mysqli_close($con);

?>
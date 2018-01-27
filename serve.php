<?php 
   session_start();

   $name="";
   $email="";
   $errors=array();
    $room="";
   $db=mysqli_connect('localhost','root','','registration');
   $hostel="";
   $ds="";
  $contact="";

   if(isset($_POST['register'])){
   	$name = ($_POST['name']);
   	$email = ($_POST['email']);
   	$hostel = ($_POST['hostel']);
   	$room =($_POST['room']);
   	$ds = ($_POST['description']);
$contact =($_POST['contact']);
   if(empty($name)){
   	array_push($errors,"name is required");
   }
   if(empty($email)){
   	array_push($errors,"Email is required");
   }
   if(empty($hostel)){
   	array_push($errors,"hostel is required");
   }
    if(empty($contact)){
   	array_push($errors,"contact is required");
   }
    if(empty($room)){
   	array_push($errors,"room is required");
   }
    if(empty($ds)){
   	array_push($errors,"description is required");
   }
   if(count($errors)==0){
   	
      $sql="INSERT INTO sale(name,email,hostel,contact,room,description) VALUES('$name','$email','$hostel','$contact','$room','$ds')";
      mysqli_query($db,$sql);
   	header('location:index.php');
   }
}


 

?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
    

//include('navbar.php');
include('config.php');
$_SESSION['error'] = [];

    $_SESSION['error']['fNameErr']= $_SESSION['error']['PhoneErr']= $_SESSION['error']['emailErr']= $_SESSION['error']['genderErr'] = $_SESSION['error']['institutionErr'] = $_SESSION['error']['addressErr'] = $_SESSION['error']['typeErr']= $_SESSION['error']['passwordErr'] = $_SESSION['error']['confirm_passwordErr'] ="";
    $fname = $phone = $email = $gender = $address = $institution = $type = $password =  $confirm_password ="";
    

if($_SERVER["REQUEST_METHOD"] == "POST")
{

if (empty($_POST["fname"]))
  {
    $_SESSION['error']['fNameErr'] = "Name is required";
  
    } 

  else 
  {
    $fname = validateInpute($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname))
  {
      $_SESSION['error']['fNameErr'] = "Only letters and white space allowed";
    
    }
  }

if (empty($_POST["phone"])) 
{
$_SESSION['error']['PhoneErr'] = "Phone Number required";

} 
else if(strlen($_POST["phone"]) < 11)
{
 $_SESSION['PhoneErr'] = "Phone Number Should bve 11 Digit"; 
 
}
else 
{
$phone = validateInpute($_POST["phone"]);



}


if (empty($_POST["email"])) 
{
    $_SESSION['error']['emailErr'] = "Email is required";
  
 } 
  else 
  {
    $email = validateInpute($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
      $_SESSION['error']['emailErr'] = "Invalid email format";
    
    }
  }

if (empty($_POST["password"])) 
{
    $_SESSION['error']['passwordErr'] = "Password is required";
  
 } 
  else 
  {
    $password = validateInpute($_POST["password"]);  
  }

  if (empty($_POST["confirm_password"])) 
  {
    $_SESSION['error']['confirm_passwordErr'] = "Password is required";
  
  } 
  elseif ($_POST["password"]!=$_POST["confirm_password"]) 
  {
    $_SESSION['error']['confirm_passwordErr'] = "Password is not match";
  
  }
  else 
  {
    $confirm_password = validateInpute($_POST["confirm_password"]);  
  }
  

  if (empty($_POST["address"])) 
  {
    $_SESSION['error']['addressErr'] = "Address is required";
  
  } 

  else 
  {
    $address = validateInpute($_POST["address"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) 
  {
      $_SESSION['error']['addressErr'] = "Only letters and white space allowed";
    
    }
  }


  if (empty($_POST["institution"])) 
  {
    $_SESSION['error']['institutionErr'] = "Institution is required";
  
  } 

  else 
  {
    $institution = validateInpute($_POST["institution"]);
    //check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) 
  {
      $_SESSION['error']['institutionErr'] = "Only letters and white space allowed";
    
    
   }
  }

    
  


  if (empty($_POST["gender"])) {
    $_SESSION['error']['genderErr'] = "Gender is required";
  
  } else { 
    $gender = validateInpute($_POST["gender"]);
  }
  if (empty($_POST["type"])) {
    $_SESSION['error']['typeErr'] = "Type is required";
  
  } else { 
    $type = validateInpute($_POST["type"]);
  }


  

}



function validateInpute($data)
{

$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;


}

/*
$n=$_POST['fname'];
$p=$_POST['password'];
$ph=$_POST['phone'];
$e=$_POST['email'];
$a=$_POST['address'];
*/


// $q = "select * from week11 where Phone = '$phone'";

// $result = mysqli_query($conn, $q );
// $num = mysqli_num_rows($result);
// if($num == 1){
//   echo "Phone number Already exist";
// }
// else{
//  $reg = "insert into week11(Phone,Name,Passcode,Email,Address) values ('$ph', '$n','$p','$e','$a')";
//   mysqli_query($conn, $reg);
//   echo "Successfully Account Created";
//   header('location:LogIn.php');
// }

if (!empty($_SESSION['error']['fNameErr']) && !empty($_SESSION['error']['PhoneErr']) && !empty($_SESSION['error']['emailErr']) && !empty($_SESSION['error']['genderErr']) && !empty($_SESSION['error']['institutionErr']) && !empty($_SESSION['error']['addressErr']) && !empty($_SESSION['error']['typeErr']) && !empty($_SESSION['error']['passwordErr']) && !empty($_SESSION['error']['confirm_passwordErr']) ) {
   header('location:CreateNew-copy.php');
}else{
  // $T=$_POST['type'];

if ($type=="customer") 
{
  $query = "select * from information where Phone = '$phone'";

  $result = mysqli_query($conn, $query );
  $num = mysqli_num_rows($result);
  if($num == 1){
    $_SESSION['error']['PhoneErr'] = "Phone no Already taken";
    header('location:CreateNew-copy.php');
  }
  else{
    $reg = "insert into information(Phone,Name,Passcode,Email,Address) values ('$phone', '$fname','$password','$email','$address')";
    mysqli_query($conn, $reg);
    $_SESSION['successMsg'] = "Successfully Account Created";
    header('location:LogIn.php');

  }
}
else if($type=="writer")
{
  
  $query = "select * from winformation where Phone = '$phone'";

  $result = mysqli_query($conn, $query );
  //var_dump($conn);
  $num = mysqli_num_rows($result);
  if($num == 1){
    $_SESSION['error']['PhoneErr'] = "Phone no Already taken";
    header('location:CreateNew-copy.php');
  }
  else{
    $reg = "insert into winformation(Phone,Name,Passcode,Email,Address) values ('$phone', '$fname','$password','$email','$address')";
    mysqli_query($conn, $reg);
    $_SESSION['successMsg'] = "Successfully Account Created";
    header('location:LogIn.php');

  }
}
else if($type=="publisher")
{
   $query = "select * from pinformation where Phone = '$phone'";

$result = mysqli_query($conn, $query );
$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['error']['PhoneErr'] = "Phone number Already taken";
  header('location:CreateNew-copy.php');
}
else{
  $reg = "insert into pinformation(Phone,Name,Passcode,Email,Address) values ('$phone', '$fname','$password','$email','$address')";
  mysqli_query($conn, $reg);
  $_SESSION['successMsg'] = "Successfully Account Created";
  header('location:LogIn.php');

}
}
else if($type=="admin")
{
   $query = "select * from admininfo where Phone = '$phone'";

$result = mysqli_query($conn, $query );
$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['error']['PhoneErr'] = "Phone number Already taken";
  header('location:CreateNew-copy.php');
}
else{
  $reg = "insert into admininfo(Phone,Name,Passcode,Email,Address) values ('$phone', '$fname','$password','$email','$address')";
  mysqli_query($conn, $reg);
  $_SESSION['successMsg'] = "Successfully Account Created";
  header('location:LogIn.php');

}
}
}



 ?>





 


<?php 
session_start();
include('navbar.php');
?>


<html>

    <head>
        <title>Create Account | Book Market</title>
        
    </head>

<body>
    <h2>Create New Account</h2>
 <form method="post" action="CreateNew.php"> 

<label>Full Name: <input type="text" name="fname" > <span class="error">* <?=isset($_SESSION['error']['fNameErr'])?$_SESSION['error']['fNameErr']:""?></span><br><br></label> 

<label>Phone: <input type="number" name="phone" ><span class="error">* <?=isset($_SESSION['error']['PhoneErr'])? $_SESSION['error']['PhoneErr']:""?></span><br><br></label>


<label >E-mail:<input type="email" name="email" ><span class="error">* <?=isset($_SESSION['error']['emailErr'])? $_SESSION['error']['emailErr']:""?></span><br><br></label>
<label >Password:<input type="password" name="password" ><span class="error">* <?=isset($_SESSION['error']['passwordErr'])? $_SESSION['error']['passwordErr']:""?></span><br><br></label>
<label >Confirm_password:<input type="password" name="confirm_password" ><span class="error">* <?=isset($_SESSION['error']['confirm_passwordErr'])? $_SESSION['error']['confirm_passwordErr']:""?></span><br><br></label>
<label >Address:<input type="text" name="address" ><span class="error">* <?=isset($_SESSION['error']['addressErr'])? $_SESSION['error']['addressErr']:""?></span><br><br></label>


<label >Institution:<input type="text" name="institution" ><span class="error">*<?=isset($_SESSION['error']['institutionErr'])? $_SESSION['error']['institutionErr']:""?></span><br><br></label>


<label for="name">
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?=isset($_SESSION['error']['genderErr'])?$_SESSION['error']['genderErr']:""?></span></label>
<br>
<label>

Type:
<input type="radio" name="type" value="customer">Customer
<input type="radio" name="type" value="writer">Writer
<input type="radio" name="type" value="publisher">Publisher
<input type="radio" name="type" value="admin">Admin

<span class="error">* <?=isset($_SESSION['error']['typeErr'])? $_SESSION['error']['typeErr']:""?></span></label>
<br>



<input type="submit" name="submit" value="Submit">

   <?php 
   //print_r($_SESSION);
   foreach ($_SESSION['error'] as $key => $value) {
       unset($_SESSION['error'][$key]);
   }
   ?>
</body>
</html>
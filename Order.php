<?php
    //session_start();

?>
<?php include('navbar.php');?>

<?php
	if(isset($_POST['addcart'])){
		$addcart = $_POST['orderBook'];
		

		session_start();
		$_SESSION['addcart'] = $addcart;
		
		header('location:Profile.php');

	}
?>


<html>
<head>
    

   <link rel="stylesheet" href="navbar.php">

</head>

<?php
$horror=$catagory= $availableBook=$orderBook=$addcart="";

?>
<body>
    <fieldset>
        <img src="Images/test.png" align="right"  width="100%" height="100%">
        <br><br>

</fieldset>
    
    <hr>
    <fieldset>
        <legend>Order Now</legend>
        <form method="post">
        <br><br>
        Select Catagory:
        <select name="catagory" >
                                <option selected disabled>---Please Select---</option>
                                <option>Scince Fiction</option>
                                <option>Comedy</option>
                                <option value="horror"><a href="Location:https://www.goodreads.com/list/show/123571.Best_Bengali_Horror_Fiction">Horror</option>
                                <option>Technical </option>
                                <option>Literature</option>
                                <option>Others</option>

      <br><br>
      


    </fieldset> 
     Order From:
    <input type="submit" name="availableBook" value="Go to Your Storage">
         
   Order:
   <input type="Text" name="orderBook">
   <input type="submit" name="addcart" value="Buy">

</form>
</fieldset>
</body>
</html>

<?php
if(isset($_POST['availableBook']))
{
    header("Location:https://docs.google.com/spreadsheets/d/1S7Hj5bNEK4nTmQA99sz9ZE3o-PHsgoGlL1XN1TC8QyM/edit#gid=0");
}

?> <br> <br>

<!-- Footer starts -->
      <footer> 
            <div class="row">
                        <div class="column side" align ="center">
                            <h2 style="color:black;">ADDRESS </h2> <hr>
                            <p style="color:black;"> Home: R:19/a, H:4241 Bonani , Dhaka. </p> 
                            <a href="#" style="color:black;">Gmail: contact.bookshelf@gmail.com</a></p>
                            <p style="color:black;"> Contact: 01700102361</p>
                        </div>
  
                <div class="column middle"> 
                    <new.ul>
                        <img src="Images/bookshelftop..gif"  style="width:70%" > <hr>
                        <li><a href="#">Latest News </a></li> 
                        <li><a href="#">Blog </a></li> 
                         <li><a href="#">New Arival </a></li> 
                         <li><a href="#">Feature </a></li>
                         <li><a href="#">Writer Choice </a></li>
                         <li><a href="#">Populer </a></li>
                         <li><a href="#">Recent </a></li>
                         
                       
                    </ul> 
                </div>

                <div class="column side" align ="center">
                      
                    <h1> Payment Method </h1>
                      <ul>
                       
                        <li><a href="#">bkash </a></li> 
                        <li><a href="#">Roket</a></li> 
                        
                    </ul><br>
                    <ul>
                        <li><a href="#">Nogod </a></li> 
                        <li><a href="#">Master Card</a></li>
                     
                     </ul>   
                   <p> We Offer COD for our Customers </p>
                        
                    </div>          
            </div><hr>


            <p align="center"> ©Copyright 2021 Book Shelf. - All Right's Reserved  </p>

            
                
        </footer>

       
    </body>
</html>
<!-- Footer ends -->
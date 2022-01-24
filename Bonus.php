<?php
    //session_start();

?>
<?php include('navbar.php');?>

<html>
<head>
    

   <link rel="stylesheet" href="navbar.php">

</head>
<body>
    
    <h1>Get Sale By Redeem Bonus Point</h1>
    <hr>
    <fieldset>
        <legend>You Have 1000 Bonus Point</legend>
        <form method="post">
        <p><input type="submit" name="100p" value="100"></p>
        <p><input type="submit" name="300p" value="300"></p>
        <input type="submit" name="500p" value="500">
        <br><br>
  
    </fieldset> 
   

</form>
</fieldset>
</body>
</html>
<?php
if(isset($_POST['100p']))
    {
    echo "you got 10% Discount in Certein catagory book";
    }
    elseif (isset($_POST["300p"])) 
    {
    echo "You got 25% Discount in Certain catagory book";
    }
    elseif(isset($_POST["500p"]))
    {
        echo "You got 40% discount in all type of book";
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
                        <li><a href="#">Nogod </a></li> 
                    </ul><br>
                    <ul>
                        <li><a href="#">Visa Card  </a></li>
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
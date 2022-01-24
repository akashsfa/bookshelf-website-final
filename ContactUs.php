<?php
    //session_start();

?>
<?php include('navbar.php');?>

<html>
    <head>
        <title>Contact Us | Book Market</title>
        <link rel="stylesheet" href="styles/myStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
<head>
    <script src="JS/ContactUsController.js"></script>
</head>

   

        <div class="main-content" align="center">
            <form action="" method="post" onsubmit="return validate()" class=>
                 <fieldset>
        <legend>Contact Us </legend>
                <table>
                    <tr>
                        <th><h3>Contact Form</h3></th>
                    </tr>
                    <tr>
                        <td><span>Your Name*</span></td>
                        <td><input type="text" name="name" id="name" placeholder="Your Name"><br>
                        <span class="err-msg"></span><span id="err_name"></span></td>
                    </tr>
                    <tr>
                        <td><span>Your Email*</span></td>
                        <td><input type="text" name="email" id="email" placeholder="Your Email"><br>
                        <span class="err-msg"></span><span id="err_email"></span></td>
                    </tr>
                    <tr>
                        <td><span>Topic</span></td>
                        <td>
                            <select name="topic" id="topic">
                                <option selected disabled>---Please Select---</option>
                                <option>General Inquiries</option>
                                <option>Pre-sale Inquiries</option>
                                <option>Billing Issues</option>
                                <option>Technical Support</option>
                                <option>Complains</option>
                                <option>Others</option>
                            </select><br> <span id="err_topic"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Message*</span></td>
                        <td><textarea name="message" id="message" placeholder="Message"></textarea><br>
                        <span class="err-msg"></span><span id="err_message"></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="contact_us" onclick="formSubmission()" value="Submit" ></td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>

<link rel="stylesheet" href="Styles/manager.css"> <br><br><br><br>


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

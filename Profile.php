<?php
    session_start();

include('config.php');
 include('navbar.php');
    if(isset($_POST['add']))
    {
        $sn=$_POST['storage'];
        $bn=$_POST['bname'];
        $ct=$_POST['catagory'];
        $pr=$_POST['price'];

    $reg = "insert into book_info(StorageNo,B_Name,Catagory,price) values ('$sn', '$bn','$ct','$pr',)";
    mysqli_query($conn, $reg);
    echo "Successfully Book Added";
    header('location:Profile.php');
    }

 
if(isset($_POST['Upload']))
{
    $file1name=$_FILES['file1']['name'];
    $file1type=$_FILES['file1']['type'];
    $file1size=$_FILES['file1']['size'];
    $file1tmpLoc=$_FILES['file1']['tmp_name'];
    $file1targetLoc="Picture/";

     echo $file1name;
     echo $file1size;
     echo $file1type;
     echo $file1tmpLoc;

     if(!empty($file1name))
     {
        if(($file1type=='image/jpeg' || $file1type== 'image/png') && $file1size<555)
        {
            move_uploaded_file($file1tmpLoc, $file1targetLoc.$file1name);
            echo "Successfully Uploaded";
        }
        else{echo "Select jpeg file";}
     }
     else{echo " Select a file";}

}
if(isset($_POST['availableBook']))
 {
        $query1 = "select * from book_info";
        $result = mysqli_query($conn, $query1);
         if ($result) {
    while($data = mysqli_fetch_array($result))
    {
        echo "Storage No = ".$data['StorageNo'].;
        echo "Name = ".$data['B_Name'].;
        echo "Password = ".$data['Catagory'].;
        echo "Email = ".$data['Price'].;
    }
}

     }



?>
<html>
<body>
    
    <h1>PROFILE</h1>
    <hr>
    <fieldset>
        <legend>Your Account</legend>
        <form method="post">
        <p> Purchase History: <textarea name="PurchaseHistory"rows="5" cols="40" ></textarea></p>
        <br><br>
        Select Favorit Catagory:
        <select name="catagory" >
                                <option selected disabled>---Please Select---</option>
                                <option>Scince Fiction</option>
                                <option>Comedy</option>
                                <option>Horror</option>
                                <option>Technical </option>
                                <option>Literature</option>
                                <option>Others</option>

      <br><br>
      Available To Your Publications:
      <input type="submit" name="availableBook" value="Go to Your Storage">
         
      Add New Book:
      Storage no:<input type="text" name="storage">
      BooK Name:<input type="text" name="bname">
      Catagory:<input type="text" name="catagory">
      Price:<input type="text" name="price">

      <input type="submit" name="add" value="ADD">

    </fieldset> 
   

</form>
</fieldset>
</body>
</html>

<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    <p><input type="file" name="file1"></p>
    <p><input type="submit" name="upload" value="Upload"></p>
    
</form>



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
                        <img src="bookshelftop..gif"  style="width:70%" > <hr>
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
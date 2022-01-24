<?php
session_start();

include('config.php');
include('navbar.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $phone = $_POST['phone'];
    $type = $_POST['type'];
     if(isset($_POST['submit1']))
     {
        $query1 = "select * from {$type} where Phone='$phone'";
        $result = mysqli_query($conn, $query1);
         if ($result) {
    while($data = mysqli_fetch_array($result))
    {
        echo "Phone = ".$data['Phone'].;
        echo "Name = ".$data['Name'].;
        echo "Password = ".$data['Passcode'].;
        echo "Email = ".$data['Email'].;
        echo "Address = ".$data['Address'].;
    }
}else{
    echo "Not Found";
}

     }
     else if(isset($_POST['submit2']))
     {
        $sql = "DELETE FROM {$type} WHERE Phone='" . $_GET["phone"] . "'";
 
    if (mysqli_query($conn, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($conn);
    }

     }
        
    }
    ?>
    
<html>
<head>

    <head>
        <title> Admin</title>
        
    </head> 

</head>
<body>
    
    <h1> Admin Page</h1>
    <hr>
    <fieldset>
        <legend>What do you want?</legend>
        <form method="post">
        Enter Account's Phone Number to Act <p><input type="text" name="phone" placeholder="Phone" required=""></p>
        <select name="type">
            <option value="information">Customer</option>
            <option value="winformation">Writer</option>
            <option value="pinformation">Publisher</option>
            <option value="admininfo">Admin</option>
        </select>

        <input type="submit" name="submit1" value="Show Details of an Acount ">
        <br><br>
        <input type="submit" name="submit2" value="Delete and Account">
        <br><br>
    </fieldset>      
</body>
</html>


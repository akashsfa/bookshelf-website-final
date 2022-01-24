<!DOCTYPE html>
<html>
<head>
<style>
ul {
  margin: 0;
  padding: 0;
  list-style: none;
  height: 55px;
  line-height: 55px;
  background-color: #274e13;
  font-family:Arial,Helvetica, sans-serif;
  font-size: 16px;
}



body

{
  background-image:url(Images/background2.jpg);
  background-size:cover;
  background-position: center;
}

.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 20%;
   background: linear-gradient(to bottom, #8cbf1c 0%, #00cc00 100%);
}

/* Middle column */
.column.middle {
  width: 55%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


            .categories{
              margin:70px 0;
            }
            .col-3{
              flex-basis:30%;
              min-width:250px;
              margin-bottom:30px;
            }
            .col-3 img {
              width:  100%;
            }

            .small-container{

              max-width:  1080px;
              margin:  auto;
              padding-left: 25px;
              padding-right: 25px;
            }





<!-- Cart Code Start -->
<!-- Cart Code Start -->
<!-- Cart Code Start -->

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
<!-- Cart Code Ends -->
<!-- Cart Code Ends -->
<!-- Cart Code Ends -->
<!-- Cart Code Ends -->

.dropbtn {
  background-color: #4CAF50;
 color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}


li 
{
  float: left;
  border-right:1px solid ##000000;
}

a
{
  display: block;
  padding: 0 28px;
  color: #fff;
  text-decoration: none;
}

a:hover{
  background-color: #156ee2;
}

.active a{
  background-color: #156ee2;
  float: left;
  display: green;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
}




footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
              .categories{
                margin:  30px 0;
              }
              .col-3{
                flex-basis:  15%;
                min-width:  250px;
                margin-bottom: 30px;
              }
              .col-3 img {
                width:  50%;
              }
              .small-container{

                  max-width:250px;
                  margin:  auto;
                  padding-left:  5px;
                  padding-right:  5px;
              }
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}

.success {color: green;}
.info {color: dodgerblue;}
.warning {color: orange;}
.danger {color: red;}
.default {color: black;}






</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  
<h2 align="center">
         <a href="home.php"><img alt="Book Shlef"  src="Images/logo.png"
         width="150" height="70"><a>
      </h2>
    <ul>
      <li class="active"><a href="home.php"> Home </a> </li>
      <li><a href="AboutUs.php"> ABOUT</a></li>
      <li><a href="Profile.php"> PROFILE </a></li>
      <li><a href="Review.php"> REVIEWS </a></li>
      <li><a href="Order.php"> ORDER </a></li>
      <li><a href="Bonus.php"> BONUS </a></li>
      <li><a href="ContactUs.php"> CONTACT US </a></li>
      <li><a href="LogIn.php"> LOG IN </a></li>
      <li><input type="text" placeholder="Search.."></li>     
       <li style="float:right"><a href="logout.php">Logout</a></li>
    </ul>

    <br><br>
    


  <script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
    $("#loadBtn").show();
  }
  xhttp.open("GET", "akash2.txt");
  xhttp.send();
}
</script>

<script type="text/javascript">
  $(document).ready(function(){
$("#loadBtn").hide();
    $("#hide").click(function(){
      $("#projectCont").remove();
      $("#loadBtn").hide();
    });

  });
</script>


</body>


</html>

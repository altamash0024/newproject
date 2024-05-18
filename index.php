
<?php
  if((isset($_POST['submit']))&&($_POST['submit']=="Login"))
{
$uname=$_POST['uname'];
$cpass=$_POST['cpass'];
if($uname=="RCP" && $cpass=="IMRD")
  {
              session_start();
      $_SESSION['cname']=$uname; 
      header("location:p.php");
  }
  else
     {
      echo "Invalid username password..!!!";
      //echo mysql_error();
     }
}
?>

<html> <head> <style> body { font-family: Arial, sans-serif; }
h1 { color: #FF4500; }

form { width: 700px; margin: 120 auto; float: center;}

table { width: 100%; height:100;  }

th { text-align: left; padding: 10px; background-color: #87CEEB; color: white; }

input[type="text"], input[type="password"] { width: 100%; padding: 5px; margin-bottom: 5px; }

input[type="submit"], input[type="reset"] { width: 100%; padding: 5px; background-color: white; color: black; border: none; } </style>

</head> <body> <center> 
  <br><br><br> 
   <h1> <font color="red"> Customer Login Form</font></h1>
  <form name="login" method="post" action="index.php"> 
    <table border="5"> 
      <tr> <th>Customer Username</th> <th>
        <input type="text" name="uname"></th> 
      </tr> <tr> <th>Customer Password</th> 
        <th><input type="password" name="cpass"></th> </tr>
         <tr> <th colspan="2"><input type="submit" name="submit" value="Login">
          &nbsp;&nbsp; <input type="reset" name="re" value="Clear"> </th> </tr> 
        </table> </form> </body> </html>
<?php // formtest2.php
  // if (isset($_POST['user']))
   $name = $_POST['user'];
  $pass = $_POST['pass'];
 
 



  
$servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="db_1";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){ die("connection failed:".mysqli_connect_error());}
 $sql="SELECT * from login WHERE username='$name' and pass ='$pass'";
 // if(mysqli_query($conn,$sql)) { echo "Data Saved";}
 // else { echo "ERROR:".$sql."<br>".mysqli_error($conn);}
 $result = mysqli_query($conn,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 //      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      

		
      if($count == 1) { echo "Login";}
      else
      	echo "fail";
 mysqli_close($conn);
 echo <<<_END
    
<html>

      <head>
  
      <title>Data Submission</title>
 
     </head>

      <body background="14.jpg" >
<br>
<font color = "grey" size = "8">
THANK YOU
</font>
<br> </br>
<font face ="Segoe Script" color="black" size="5">
Thank you for submitting your valuable feedback , we'll make sure to work for the betterment .
Will reply with changes if you have submitted any contact no. or email . :)
</font>
   
    
<br>
<br>
</font>  
<center>
<font color="grey" size="2">
<a href="cookie.php">Back To Home</a>
</font>
</center>
     
      </body>
 
   </html>
_END;
?>
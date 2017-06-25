<?php // formtest2.php
  // if (isset($_POST['user']))
  //  $name = $_POST['user'];
  // $pass = $_POST['pass'];
 
 



 $name=$_POST['name']; 
$servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="db_1";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){ die("connection failed:".mysqli_connect_error());}
 $sql="INSERT INTO `login`(username,pass,num) VALUES ('aaa',02,$name)";
 // if(mysqli_query($conn,$sql)) { echo "Data Saved";}
 // else { echo "ERROR:".$sql."<br>".mysqli_error($conn);}
 $result = mysqli_query($conn,$sql);

      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 //      $active = $row['active'];
      
      // $count = mysqli_num_rows($result);
      
 //      // If result matched $myusername and $mypassword, table row must be 1 row
		
      // if($count == 1) { echo "Login";}
      // else
      // 	echo "fail";
 mysqli_close($conn);
 ?>

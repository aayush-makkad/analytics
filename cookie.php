<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (8), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    $servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="db_1";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){ die("connection failed:".mysqli_connect_error());}

 $sql="UPDATE `login` SET num = num + 1 WHERE username = 'aayu'";
 $result = mysqli_query($conn,$sql);
 mysqli_close($conn);

}
 else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
<?php
$username="root";
$password="";
$hostname="localhost";
$name="username";
$name=$_POST['Username'];
$pass=$_POST['Password'];
$conn=mysqli_connect($hostname,$username,$password,"My_project")or die("error");
$result=mysqli_query($conn,"select login_id from tbl_login where username='$name' and password='$pass'");
$data=mysqli_fetch_array($result);
$no_of_rows=mysqli_num_rows($result);
if($no_of_rows==1){
	session_start();
	$_SESSION['id']=$data['login_id'];
	$id=$_SESSION['id'];
	if($id==1){
		header("location:../Ecommerce/web/adminnhome.php");
	}
     else
     header("location:../Ecommerce/web/custmerhome.php");
}
else
 echo "not in";

      ?>

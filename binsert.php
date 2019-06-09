<?php
$conn= mysqli_connect('localhost','root','','zzz') or die (mysqli_error($conn));
if(isset($_POST['submit']))
{

$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$father = $_POST['father'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $pincode = $_POST['pincode'];
 $email = $_POST['email'];
 $duplicate=mysqli_query($conn,"select * from z where email='$email'");
if (mysqli_num_rows($duplicate) > 0)
{
echo "Email id already exists.";
}
else{
 $dob = $_POST['year'].'_'.$_POST['mo'].'_'.$_POST['date'];
 $mobile = $_POST['mobile'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 if ($password === $cpassword) {
 $query = "INSERT INTO z (fname,lname,father,address,gender,pincode,email,dob,mobile,pass,cpass) 
 VALUES ('$fname','$lname','$father','$address','$gender','$pincode','$email','$dob','$mobile','$password','$cpassword')";
 $data = mysqli_query ($conn,$query)or die(mysqli_error($conn));
 if($data) {
 echo "YOUR REGISTRATION IS COMPLETED..."; 
 }
 else {
 echo "failed"; 
 }
}
 
 else {
   echo 'password not matech';
}
}
}
 ?>
 
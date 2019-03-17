<?php
include('connection.php');
session_start();
$email=$pass="";
if(isset($_POST['login']))
{
	$email=($_POST['email']);
	$pass=($_POST['pass']);
	if(empty($email))
	{
		echo "enter your email id";
	}
	else if(empty($pass))
	{
		echo "enter your pass";
	}
	else 
	{
		$sql=mysql_query("SELECT * FROM rohitp WHERE email='$email' AND pass='$pass'");
		if(mysql_num_rows($sql) == 1) 
		{
			$_SESSION['username'] = $email;
			$_SESSION['success'] = "You are login successfully ";
			header('location: welcome.php');
		}
		else
		{
			echo "enter vaild email & pass";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<?php $email=$pass="";?>



<body>
<div class="grid">
    <div id="login">
        <h2><span class="fontawesome-lock"></span>LogIn</h2>
        <form action="" method="POST">
            <fieldset>

                <p><label for="email">E-mail address</label></p>
                <p><input type="email" id="email" placeholder="mail@address.com" name="email" value="<?php echo $email; ?>"></p>
    

                <p><label for="password">Password</label></p>
                <p><input type="password" id="password" placeholder="Password" name="pass"></p>
    
                <p><input type="submit" value="login" class="logins1"name="login"></p>
                <p><a href="signup.php"> <input type="button" value="signup" class="logins" ></a></p>
            </fieldset>
        </form>
    </div> <!-- end login -->

</div>
</body>
</html>

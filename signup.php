<?php
include('connection.php');
session_start();
$name=$email=$pass=$selary="";
if(isset($_POST['submit']))
{
	$name=($_POST['name']);
	$email=($_POST['email']);
	$selary=($_POST['selary']);
	$pass=(md5($_POST['pass']));
	
		if(empty($name))
		{
			echo "name is required";
		}
		else if (empty($email))
		{
			echo "enter your email address ";
		}
		else if (empty($selary))
		{
			echo "enter your selary ";
		}
		else if(empty($pass))
		{
			echo "enter your password";
		}
		else
		{
			$sql=mysql_query("insert into rohitp(name,email,selary,pass) values('$name','$email','$selary','$pass')")or die (mysql_error());
			if($sql)
			{
				$_SESSION['username'] = $name;
				$_SESSION['success'] = "You are now logged in";
				header("location: welcome.php");
			}
			else 
			{
				echo "chack your problam";
			}
		}
}
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
</head>
<?php $uname=$email=$pass="";?>



<body>
<div class="grid">
    <div id="login">
        <h2><span class="fontawesome-lock"></span>signup</h2>
        <form action="" method="POST">
            <fieldset>

                <p><label for="name">UserName</label></p>
                <p><input type="username" id="username" placeholder="Enter User name" name="name" value="<?php echo $name; ?>"></p>

                <p><label for="email">E-mail address</label></p>
                <p><input type="email" id="email" placeholder="mail@address.com" name="email" value="<?php echo $email; ?>"></p>
    
	<p><label for="email">selary</label></p>
                <p><input type="selary" id="selary" placeholder="000000" name="selary" value="<?php echo $selary; ?>"></p>

                <p><label for="password">Password</label></p>
                <p><input type="password" id="password" placeholder="Password" name="pass"></p>
    
                <p><input type="submit" value="Sign Up" class="logins1"name="submit"></p>
                <p><a href="login.php"> <input type="button" value="LogIn" class="logins" ></a></p>
            </fieldset>
        </form>
    </div> <!-- end login -->

</div>
</body>
</html>

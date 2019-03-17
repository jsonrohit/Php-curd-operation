<?php 
include "connection.php";
if(isset($_GET['update']))
{
	$idd=($_GET['update']);
	$sqll=mysql_query("select * from rohitp where id='$idd'") or die(mysql_error());
	$row=mysql_fetch_array($sqll);
}
if(isset($_POST['submit']))
{	
	$id=($_GET['update']);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$selary = $_POST['selary'];
	$pass = $_POST['pass'];
	$sql=(mysql_query("UPDATE rohitp SET name='$name', email='$email', selary='$selary', pass='$pass' WHERE id='$id'")) or die (mysql_error());
	if($sql)
	{
		// echo "update successfully";
		header("location:display.php");
	}
	else
	{
		echo "update faild";
	}
}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
</head>

<body>
<div class="grid">
    <div id="login">
        <h2><span class="fontawesome-lock"></span>update</h2>
        <form action="" method="POST">
            <fieldset>

                <p><label for="name">UserName</label></p>
                <p><input type="username" id="username" placeholder="Enter User name" name="name" value="<?php echo $row['name'];?>"></p>

                <p><label for="email">E-mail address</label></p>
                <p><input type="email" id="email" placeholder="mail@address.com" name="email" value="<?php echo $row['email'];?>"></p>
    
	
                <p><label for="selary">selary</label></p>
                <p><input type="selary" id="selary" placeholder="0000000000" name="selary" value="<?php echo $row['selary'];?>"></p>

                <p><label for="password">Password</label></p>
                <p><input type="password" id="password" placeholder="Password" name="pass"value="<?php echo $row['email'];?>"></p>
    
                <p><input type="submit" value="update" name="submit"></p>
            </fieldset>
        </form>
    </div> <!-- end login -->

</div>
</body>
</html>
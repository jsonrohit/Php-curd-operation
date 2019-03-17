<table border='1' cellpadding="10">
<tr>
	<th>id</th>
	<th>name</th>
	<th>email</th>
	<th>selary</th>
	<th>Update</th>
	<th>delete</th>
</tr>
	
<?php 
$sql="";
include("connection.php");
include("delete.php");

// 	if(isset($_POST['submit']))
// {
	
	
	$sql=mysql_query("SELECT * FROM rohitp");
	while($row = mysql_fetch_array($sql))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['selary']."</td>";
		?>
		<td><a href="update.php?update=<?php echo $row['id'];?>"><input type="button" class="submit" value="update"></a></td>
		<td><a href="delete.php?del=<?php echo $row['id'];?>"><input type="button" class="submit" name="delete" value="Delete"></a></td>
		<!--<td><a href="delete.php?del=<?php echo $row['id'];?>"onclick ="return confirm('are you sure?')">del</a></td>--->
		<?php
		echo "</tr>";
	}
	echo "</table>";
// }
?>
<td><a href="signup.php"><input type="button" class="submit" value="add"></a></td>
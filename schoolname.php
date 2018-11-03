<?php
include 'connection.php';
$district=$_GET['d'];
$sql="select Name from school where District='$district' ";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res))
{
	?>
	<div><a style="color:#FF5733" href="<?php echo "schoolsite.php?schoolname=".urlencode($row['Name'])?>">
		<?php
		echo $row['Name'];
		?>
	</a>
	</div>
	<br>
	<?php
}


?>
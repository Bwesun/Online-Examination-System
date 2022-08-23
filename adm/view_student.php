
<?php
include('head.php');

?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6 col-md-8" >

		<fieldset>
			<legend>Admin Control Panel</legend>
			


<div align=""style="">

<?php
include('connect.php');
?>

<fieldset><legend>View Students</legend>

<div>
	<form method="post">
		<select name="class" class="form-control">
		<option value="">---- Select Class ----</option>
		<option value="all">all</option>
		<option value="js1">js1</option>
		<option value="js2">js2</option>
		<option value="js3">js3</option>
		<option value="ss1">ss1</option>
		<option value="ss2">ss2</option>
		<option value="ss3">ss3</option>
	</select>
	<div align="center"><input type="submit" name="sub_search" value="View" class="btn-primary btn"></div>
	</form>
<?php
if(isset($_POST['sub_search'])){

	$class=$_POST['class'];

	if($class=='all'){
		$sql="SELECT * FROM students  ";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		$i=1;

		if($count>0){
?>
<fieldset><legend><?php echo $class; ?> Students Record</legend>
<table class="table table-striped">
	<tr>
		<th>S/N</th>
		<th>Names</th>
		<th>Reg. Number</th>
		<th>Class</th>
		<th>Exam Pin</th>
		<th>Status</th>
	</tr>
<?php
while($rows=mysql_fetch_assoc($result)){

?>
	<tr>
		<td><?php echo $i++;  ?></td>
		<td><?php echo $rows['name'];  ?></td>
		<td><?php echo $rows['regnum'];  ?></td>
		<td><?php echo $rows['class'];  ?></td>
		<td><?php echo $rows['pin'];  ?></td>
		<td>
			<?php 
			$status=$rows['status'];  
				if($status=='Valid'){
					echo "<a class='btn btn-success btn-sm'>Valid</a>";
				}else{
					echo "<a class='btn btn-danger btn-sm'>Invalid</a>";
				}
			?>
				
			</td>
	</tr>
		<?php
}
?>
	<tr>
		<td colspan="4"><b>Total No. of Students: <?php echo $count; ?></b></td>
	</tr>
</table>
</fieldset>

<?php
}else{
	echo "<font color='red'><h3><span class='fas fa-exclamation-triangle'></span> No Record Found!</h3></font>";
}
}else{

	$sql2="SELECT * FROM students WHERE class='$class' ";
		$result2=mysql_query($sql2);
		$count2=mysql_num_rows($result2);
		$i=1;

		if($count2>0){
		?>
<fieldset><legend><?php echo $class; ?> Students Record</legend>
<table class="table table-striped">
	<tr>
		<th>S/N</th>
		<th>Names</th>
		<th>Reg. Number</th>
		<th>Exam Pin</th>
		<th>Status</th>
	</tr>
<?php
while($rows=mysql_fetch_assoc($result2)){

?>
	<tr>
		<td><?php echo $i++;  ?></td>
		<td><?php echo $rows['name'];  ?></td>
		<td><?php echo $rows['regnum'];  ?></td>
		<td><?php echo $rows['pin'];  ?></td>
		<td>
			<?php 
			$status=$rows['status'];  
				if($status=='Valid'){
					echo "<a class='btn btn-success btn-sm'>Valid</a>";
				}else{
					echo "<a class='btn btn-danger btn-sm'>Invalid</a>";
				}
			?>
				
			</td>
	</tr>
	<?php
}
?>
	<tr>
		<td colspan="5"><b>Total No. of Students: <?php echo $count2; ?></b></td>
	</tr>
</table>
</fieldset>

<?php

}else{
	echo "<font color='red'><h3><span class='fas fa-exclamation-triangle'></span> No Record Found!</h3></font>";
}

	}}


?>
</div>





</fieldset>

</div>
		</fieldset><br>
		<br>
	</div>
</div>





<?php
include('../footer.php');
?>
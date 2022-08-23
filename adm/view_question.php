
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

<fieldset><legend>View Questions</legend>

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
	</select><br>
	<select name="subject" class="form-control">
		<option value="">---- Select Subject ----</option>
		<?php
			$sql="SELECT * from subject order by id DESC ";
			$result=mysql_query($sql);

			while($rows=mysql_fetch_assoc($result)){
		?>
		<option value="<?php echo $rows['subject']; ?>"><?php echo $rows['subject']; ?></option>
		<?php
	}
	?>
	</select>
	<div align="center"><input type="submit" name="sub_search" value="View" class="btn-primary btn"></div>
	</form>
<?php
if(isset($_POST['sub_search'])){
	$subject=$_POST['subject'];
	$class=$_POST['class'];

	if($class=='all'){
		$sql="SELECT * FROM questions WHERE subject='$subject' ";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		$i=1;

		if($count>0){
?>
<fieldset><legend><?php echo $class." - ".$subject; ?> Questions</legend>
<table class="table table-striped">
	<tr>
		<th>S/N</th>
		<th>Questions</th>
		<th>Class</th>
		<th>Subject</th>
	</tr>
<?php
while($rows=mysql_fetch_assoc($result)){

?>
	<tr>
		<td><?php echo $i++;  ?></td>
		<td><?php echo $rows['question'];  ?></td>
		<td><?php echo $rows['class'];  ?></td>
		<td><?php echo $rows['subject'];  ?></td>
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

	$sql2="SELECT * FROM questions WHERE class='$class' AND subject='subject' ";
		$result2=mysql_query($sql2);
		$count2=mysql_num_rows($result2);
		$i=1;

		if($count2>0){
		?>
<fieldset><legend><?php echo $class." - ".$subject; ?> Questions</legend>
<table class="table table-striped">
	<tr>
		<th>S/N</th>
		<th>Questions</th>
		<th>Class</th>
		<th>Subject</th>
	</tr>
<?php
while($rows=mysql_fetch_assoc($result2)){

?>
	<tr>
		<td><?php echo $i++;  ?></td>
		<td><?php echo $rows['question'];  ?></td>
		<td><?php echo $rows['class'];  ?></td>
		<td><?php echo $rows['subject'];  ?></td>
	</tr>
	<?php
}
?>
	<tr>
		<td colspan="6"><b>Total No. of Students: <?php echo $count2; ?></b></td>
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
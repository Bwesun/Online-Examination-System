
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

<fieldset><legend>Add Questions</legend>


<form method="post" >
	Fullname of Student
	<input type="text" name="name" class="form-control" placeholder="Enter Student Fullname (Surname First)"><br>
	Student Reg. No
	<input type="text" name="regnum" class="form-control" placeholder="Enter Student Registration Number)"><br>
	Select Class
	<select name="class" class="form-control">
		<option value="">---- Select Class ----</option>
		<option value="js1">js1</option>
		<option value="js2">js2</option>
		<option value="js3">js3</option>
		<option value="ss1">ss1</option>
		<option value="ss2">ss2</option>
		<option value="ss3">ss3</option>
	</select><br>

	<input type="submit" name="sub_student" value="Add Student" class="btn btn-primary">
</form>

<?php
if(isset($_POST['sub_student'])){


	$name=$_POST['name'];
	$regnum=$_POST['regnum'];
	$class=$_POST['class'];
	$pin=mt_rand();
	$pin=substr($pin, 1, 6);
	$pin=$class.$pin;

	$sql="INSERT INTO students(name, regnum, class, pin)VALUES('$name', '$regnum', '$class', '$pin') ";
	$result=mysql_query($sql);

	if($result){
		echo "<script>alert('Student Added Successfully!');</script>";
		echo "<script>window.open('add_student.php','_self');</script>";
	}
}
?>



</fieldset>

</div>
		</fieldset><br>
		<br>
	</div>
</div>





<?php
include('../footer.php');
?>
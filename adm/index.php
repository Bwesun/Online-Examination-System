 <?php 
 session_start();

 	if(!isset($_SESSION['admin_user'])){
	echo "<script>window.open('../alogin.php','_self');</script>";
 }
 ?>
 <span></span>

<?php
include('head.php');

?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6 col-md-8" style="overflow-y: scroll; height: 80%;">
		<fieldset>
			<legend>Admin Control Panel</legend>
			
<?php
echo $_SESSION['class'];

?>

<div align="">

	<a href="add_question.php" class="btn btn-primary"><i class="fas fa-file"></i> Add Question</a>
	<a href="add_student.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Student</a>
	<a href="view_student.php" class="btn btn-primary"><i class="fas fa-users"></i> View Students</a>
<a href="view_question.php" class="btn btn-primary"><i class="fas fa-list"></i> View Questions</a><br><br>

<form method="post">
	<input type="submit" name="add_subject" class="btn btn-primary" value="Add Subject">
</form>

<?php
if(isset($_POST['add_subject'])){
	?>
<form method="post" action="add_subject.php">
	<input type="text" name="subject" placeholder="Enter Name of Subject" class="form-control">
	<input type="submit" class="btn" name="" value="Add">
</form>
<?php	
}

?>



</div>
		</fieldset>
	</div>
</div>





<?php
include('../footer.php');
?>
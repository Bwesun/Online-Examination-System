
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
	<select name="class" class="form-control">
		<option value="">---- Select Class ----</option>
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
	</select><br>

	Question:
	<textarea name="question" class="form-control" placeholder="Enter Question"></textarea><br>
	Option A
	<textarea name="optiona" class="form-control" placeholder="Enter Option A"></textarea><br>
	Option B
	<textarea name="optionb" class="form-control" placeholder="Enter Option B"></textarea><br>
	Option C
	<textarea name="optionc" class="form-control" placeholder="Enter Option C"></textarea><br>
	Option D
	<textarea name="optiond" class="form-control" placeholder="Enter Option D"></textarea><br>
Select Correct Option:<br>
	<input type="radio" name="correct" value="A">A  
	<input type="radio" name="correct" value="B">B  
	<input type="radio" name="correct" value="C">C  
	<input type="radio" name="correct" value="D">D  <br>

	<input type="submit" name="sub_question" value="Add Question" class="btn btn-primary">
</form>

<?php
if(isset($_POST['sub_question'])){


	$class=$_POST['class'];
	$subject=$_POST['subject'];
	$question=$_POST['question'];
	$optiona=$_POST['optiona'];
	$optionb=$_POST['optionb'];
	$optionc=$_POST['optionc'];
	$optiond=$_POST['optiond'];
	$correct=$_POST['correct'];

	$sql="INSERT INTO questions(question, optiona, optionb, optionc, optiond, correct, class, subject)VALUES('$question', '$optiona', '$optionb', '$optionc', '$optiond', '$correct', '$class', '$subject') ";
	$result=mysql_query($sql);

	if($result){
		echo "<script>alert('Question Added Successfully!');</script>";
		echo "<script>window.open('add_question.php','_self');</script>";
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
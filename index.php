 <?php 
 	if(!isset($_SESSION['user_id'])){
	echo "<script>window.open('login.php','_self');</script>";
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
			<legend>Welcome To Social Studies Exams!</legend>
			<h3>Exam Rules</h3>
			<p>This color value is specified using the rgb( ) property. This property takes three values,
one each for red, green, and blue. The value can be an integer between 0 and 255 or a
percentage.This color value is specified using the rgb( ) property. This property takes three values,
one each for red, green, and blue. The value can be an integer between 0 and 255 or a
percentage.</p>
<p>This color value is specified using the rgb( ) property. This property takes three values,
one each for red, green, and blue. The value can be an integer between 0 and 255 or a
percentage.This color value is specified using the rgb( ) property. This property takes three values,
one each for red, green, and blue.  The value can be an integer between 0 and 255 or a
percentage.</p>

<div align="center">
	<a href="" class="btn btn-bg btn-lg btn-success">Start Exam</a>
</div>
		</fieldset>
	</div>
</div>





<?php
include('footer.php');
?>
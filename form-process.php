<?php
include 'core/core.db.inc.php';

$submitted = false;
if(isset($_POST['submit'])){
	$submitted = true;
	if(isset($_POST['title']) && isset($_POST['company']) && isset($_POST['location']) && isset($_POST['logo']) && isset($_POST['document']) && isset($_POST['short_desc']) && isset($_POST['long_desc'])){
		//initialize and clean all post input variables
		$title = $_POST['title'];
		$company = $_POST['company'];
		$location = $_POST['location'];
		$logo = $_POST['logo'];
		$document = $_POST['document'];
		$short_desc = $_POST['short_desc'];
		$long_desc = $_POST['long_desc'];

		//Build Query....
		$query = " INSERT INTO 'job'( 'title', 'company', 'location', 'logo', 'document', 'short_desc', 'full_desc', 'price') VALUES ($title,$company,$location,$logo,$document,$short_desc,$long_desc)";
		$result = mysli_query($mysli, $query);
		if(mysqli_num_rows($result)>0)
			echo 'Form Submitted Successfully with values';

		}else{
		echo 'Please Complete the Form...<br>Don\'t leave it blank';
	}
}else{
	$submitted = false;
	echo 'Kindly Submit the Form...';
}
?>
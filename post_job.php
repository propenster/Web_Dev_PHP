<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-post-job</title>

<script src="js/4n2NXumNjtg5LPp6VXLlDicTUfA.js"></script><link rel="apple-touch-icon" href="images/apple-touch-icon.php">
<link rel="shortcut icon" type="image/ico" href="images/favicon.php" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/matrialize.css" rel="stylesheet">

<link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body class="background-color-white">
<?php include('includes/header.inc.php');?>

<?php
include('core/core.db.inc.php');
// $submitted = false;
 if($_POST)
// ['submit']) && (isset($_POST['title']) && isset($_POST['company']) && isset($_POST['location']) && isset($_POST['logo']) && isset($_POST['document']) && isset($_POST['short_desc']) && isset($_POST['long_desc'])))
{
// 	$submitted = true;
// 	if){
		//initialize and clean all post input variables
		$title = $_POST['title'];
		$company = $_POST['company'];
		$location = $_POST['location'];
		$logo = $_POST['logo'];
		$document = $_POST['document'];
		$short_desc = $_POST['short_desc'];
		$long_desc = $_POST['long_desc'];

		//Build Query....
		$query = "INSERT INTO 'job'( 'title', 'company', 'location', 'logo', 'document', 'short_desc', 'full_desc', 'price') VALUES ('$title','$company','$location','$logo','$document','$short_desc','$long_desc')";
		$result = mysqli_query($mysqli, $query);
		echo 'Job Created Successfully...';
// }else{
// 	$submitted = false;
// 	echo 'Kindly Submit the Form...';
}
?>


<section id="post_job">
<div class="vertical-space-100"></div>
<div class="vertical-space-101"></div>
<div class="container">
<div class="list-box">
<a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Post job</a>
</div>
<a href="#" class="Save">Save</a>
<div class="vertical-space-60"></div>
<div class="job-post-box">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="form-group">
<label for="exampleInputJobtitle">Job title</label>
<input type="text" class="form-control" id="exampleInputJobtitle" name="title" placeholder="Enter your job title" required />
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputCompany">Company</label>
<input type="text" class="form-control" id="exampleInputCompany" name="company" placeholder="Full name of company" required />
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputLoction">Loction</label>
<input type="text" class="form-control" id="exampleInputLoction" name="location" placeholder="Company Address" required />
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group ">
<label>Company Logo</label>
<div class="box text-center">
<input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
<label for="file-5">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Document</label>
<div class="box text-center">
<input type="file" name="file-7[]" id="file-7" class="inputfile1 inputfile-4" data-multiple-caption="{count} files selected" multiple />
<label for="file-7">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="exampleInputShortDescription">Short Description</label>
<textarea class="form-control small" id="exampleInputShortDescription" name="short_desc" placeholder="Write short description" rows="3" required></textarea>
</div>
<div class="form-group">
<label for="exampleInputLongDescription">Write full description</label>
<textarea class="form-control large" id="exampleInputLongDescription" name="long_desc" placeholder="Write short description" rows="3" required></textarea>
 </div>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group mybtn" id="Job-Nature">
<label>Job Nature</label>
<div class="row">
<div class="col-lg-4 col-md-4">
<a class="Job-Nature active1">Full Time</a>
</div>
<div class="col-lg-4 col-md-4">
<a class="Job-Nature">Part Time</a>
</div>
<div class="col-lg-4 col-md-4">
<a class="Job-Nature">Freelancer</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<label for="sel1">Salary Range:</label>
<select class="form-control" id="sel1" name="sellist1">
<option>5,000 - 10,000</option>
<option>3,000 - 5,000</option>
<option>2,000 - 1,000</option>
<option>7,000 - 10,000</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label>Agree with term and conditions</label>
<div class="form-check">
<input type="checkbox" class="form-check-input " id="exampleCheck1" required />
<label class="form-check-label text-left" for="exampleCheck1">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla</label>
</div>
</div>
<button type="submit" class="btn Post-Job-Offer" name="submit">Post Job Offer</button>
</form>
</div>
</div>
</section>

<?php include('includes/footer.inc.php');?>

<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script src="js/custom.js"></script>
<script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2");
        })(document, window, 0);
    </script>
</body>

</html>
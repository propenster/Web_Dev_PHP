<!doctype html>
<html lang="zxx">
<?php require_once('core/core.db.inc.php');?>

<head>
<meta charset="utf-8">
<meta name="author" content="John Doe">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-Job_Category</title>

<script src="js/4n2NXumNjtg5LPp6VXLlDicTUfA.js"></script><link rel="apple-touch-icon" href="images/apple-touch-icon.php">
<link rel="shortcut icon" type="image/ico" href="images/favicon.php" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/matrialize.css" rel="stylesheet">

<link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('includes/header.inc.php');?>

<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
<h2 class="font-color-white">Find Jobs Now more Easy Way</h2>
<p class="font-color-white">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla, magna duis nostra sodales luctus nulla praesent fermentum a elit mollis purus aenean curabitur eleifend </p>
<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
</div>
</div>
</div>
</section>


<div id="search-box" class="margin-none">
<div class="container search-box">
<form action="#" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<span class="large material-icons search">search</span>
<input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search">
<select class="dropdown_item_select search-box_search_input">
<option>Category</option>
<option>Category1</option>
<option>Category2</option>
</select>
<span class="large material-icons margin-top search">place</span>
<input class="search-box_search_input " placeholder="Location" required="required" type="search">
</div>
<button type="submit" class="search-box_search_button">Search Jobs</button>
</form>
</div>
</div>


<section id="resent-job-post" class="background-color-white-drak">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h4 class="text-left">Filter Jobs Result</h4>
<div class="vertical-space-30"></div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="Job-Category-box">
<p class="title">Job Category</p>
<ul>
<li class="list-item1 "><a href="#" class="font-color-black">Web Developer (54)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Branding and promotion (54)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
</ul>
</div>
<div class="Job-Nature-box">
<p class="title">Job Nature</p>
<ul>
<li class="list-item1 "><a href="#" class="font-color-black">Full Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
</ul>
</div>
<div class="Salary-Range-box">
<p class="title">Salary Range</p>
<p>
 <input type="text" id="amount1" class="salery-range"> <i class="fa fa-minus minus"></i>
<input type="text" id="amount2" class="salery-range">
</p>
<div id="slider-range"></div>
<p class="small-title">Experience Level</p>
<form action="#" class="search-box_search_form">
<select class="dropdown_item_select search-box_search_input">
<option>Select experience level</option>
<option>Select experience level1</option>
<option>Select experience level2</option>
</select>
<p class="small-title">Location</p>
<input class="search-box_search_input Location " placeholder="Location" required="required" type="search">
<span class="fa fa-map-marker location-icone"></span>
</form>
</div>
<div class="Industry-box">
<p class="title">Industry</p>
<ul>
<li class="deactivate"><a href="#" class="font-color-black">Full Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
</ul>
</div>
</div>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'job_portal') or die(mysqli_error($mysqli));

$query = "SELECT * FROM job";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
while($row=$result->fetch_assoc()):
?>

<div class="col-lg-8 col-md-12">
<div class="detail width-100 ">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-1.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6><a href="#" class="font-color-black"><?echo $row['title'];?></a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Jopitar inc.<?echo $row['name']; ?></span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Tiatton</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-2.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Rokital needs Marketing Experts</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Rokitar ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-3.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Mshape looking for a senior UX Designer</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-4.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Marketing Directer needed </a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Scalegoss ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-5.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">We need a senior Brand Designer</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Freelance</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-1.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6><a href="#" class="font-color-black">Jopitar looking for a senior UX Designer</a></h6>
<i class="large material-icons">account_balance</i>
 <span class="text">Jopitar inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-2.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Rokital needs Marketing Experts</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Rokitar ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-3.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Mshape looking for a senior UX Designer</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-4.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">Marketing Directer needed</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Scalegoss ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail width-100">
<div class="media display-inline text-align-center">
<img src="imags/job-post-icone-5.png" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6><a href="#" class="font-color-black">We need a senior Brand Designer</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Freelance</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="vertical-space-20"></div>
<div class="vertical-space-25"></div>
<div class="job-list width-100">
<ul class="pagination justify-content-end margin-auto">
<li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
<li class="page-item">
<a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="vertical-space-60"></div>
</section>

<?php include('includes/footer.inc.php');?>

<div class="modal" id="myModal">
<div class="container">
<div class="vertical-space-85"></div>
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-body">
<button class="button button-rounded  close" data-dismiss="modal">&times;</button>
<video class="" controls>
<source src="video/Pexels_Videos_2706.mp4" type="video/mp4">
</video>
</div>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
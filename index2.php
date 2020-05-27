<?php include 'core/core.db.inc.php'; ?>

<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="John Doe">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-index2</title>

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


<div id="search-box">
<div class="container search-box rounded">
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
<button type="submit" class="search-box_search_button rounded">Search Jobs</button>
</form>
</div>
</div>


<section id="top-Job-Category">
<div class="container">
<h3 class="text-center">Choose Job Category</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"> </div>
<div class="row">
<?php 
$query = "SELECT title, icon FROM category ";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result)){
echo '<div class="col-lg-3 col-md-6 max-width-50">';
echo '<div class="box background-color-white-light">';
echo '<div class="circle">
<img src="'; 
echo $row['icon'];

echo '">';
echo '</div>';
echo '<h6 class="font-color-black">';
echo $row['title'];
echo '</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I"M ACTIVE"><span>72 Job Posts</span></a>
</div>
</div>';
}

?>


<a href="#" class="Brows-All-Category">Brows All Category</a>
</div>
<div class="vertical-space-85"></div>
</section>


<section id="v2-Jobtend">
<div class="container">
<div class="vertical-space-100"></div>
<div class="row">
<div class="col-lg-9 col-md-12 ">
<h3 class="title-jobted title font-color-white">Why Choose Jobtend</h3>
<div class="vertical-space-20"></div>
<p class="max-width font-color-white">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis
</p>
<div class="vertical-space-40"></div>
<ul class="max-width font-color-white">
<li class="list-item1 ">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis
</li>
<li class="list-item1 ">Rivastic stique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus </li>
<li class="list-item1 ">Lovistiq pue velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet dolorhabitant purus velit aliquet donecurna ut in turpis donecurna ut in turpis</li>
<li class="list-item1 ">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis</li>
</ul>
</div>
<div class="col-lg-3 col-md-12 align-self-center">
<a href="#" data-toggle="modal" data-target="#myModal" class="display-flex">
<span class="fa fa-play-circle font-color-white font-size-48"></span>
<h4 class="font-color-white title align-self-center">Watch Video</h4>
</a>
</div>
<div class="vertical-space-80"></div>
</div>
</div>
</section>


<section id="v2-resent-job-post">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Recent Job Post</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"></div>
<?php
$query = "SELECT * FROM job";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result)){
?>
<?php echo '<div class="detail">';
echo '<div class="media display-inline text-align-center">';
echo '<img src="imags/job-post-icone-1.png" alt="John Doe" class="mr-3 ">';
echo '<div class="media-body text-left  text-align-center">';
echo '<h6> <a href="#" class="font-color-black">';
echo $row['title']; 
echo '</a></h6>
<i class="large material-icons">account_balance</i>';
echo '<span class="text">Jopitar inc.</span>
<br />';
echo '<i class="large material-icons">place</i>';
echo '<span class="text font-size">'; 
echo $row['location'];
echo '</span>';
echo '<div class="float-right margin-top text-align-center">';
echo '<a href="#" class="part-full-time">Part Time</a>';
echo '<p class="date-time">Deadline: May 23, 2018</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
}
?>

<div class="vertical-space-20"></div>
<div class="vertical-space-25"></div>
<div class="job-list">
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
<div class="vertical-space-60"></div>
</section>


<section id="v2-Featuread-Company" class="background-color-white">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Featuread Company</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Featuread-Company-carousel">
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center ">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
 <span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-4.png" alt="John Doe" class="margin-auto Featuread-Company-img">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="imags/job-post-icone-1.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media   text-align-center media1">
<img src="imags/job-post-icone-5.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-4.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-4.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-1.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-5.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="imags/job-post-icone-3.png" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section>


<section id="Trusted-by-Experts">
<div class="vertical-space-85"></div>
<div class="container">
<h3 class="text-center">Trusted by Experts</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Trusted-by-Experts-carousel">
<div class="Trusted-by-Experts-item">
<div class="testimonial">
<div class="pic">
<img src="imags/Clients-Testimonial1.jpg" alt="">
</div>
<h4 class="title">Farhana Istifa</h4>
<blockquote>
<p>
Ye on properly handsome returned throwing am no whatever. In without wishing he of pictureno exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage.
</p>
</blockquote>
</div>
</div>
<div class="Trusted-by-Experts-item">
<div class="testimonial">
<div class="pic">
<img src="imags/Clients-Testimonial2.jpg" alt="">
</div>
<h4 class="title">Farhana Islam</h4>
<blockquote>
<p>
Ye on properly handsome returned throwing am no whatever. In without wishing he of pictureno exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage.
</p>
</blockquote>
</div>
</div>
<div class="Trusted-by-Experts-item">
<div class="testimonial">
<div class="pic">
<img src="imags/Clients-Testimonial3.jpg" alt="">
</div>
<h4 class="title">Farhana Istifa</h4>
<blockquote>
<p>
Ye on properly handsome returned throwing am no whatever. In without wishing he of pictureno exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage.
</p>
</blockquote>
</div>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section>

<?php include('includes/footer.inc.php'); ?>

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


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script src="js/custom.js"></script>
</body>

</html>
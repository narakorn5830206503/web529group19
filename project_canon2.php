<!doctype html>
<?php
$appid = "web592group19.appspot.com";

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>	camera lens shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>
<body role="document">
<header class="page-header text-center">
<?php
readfile("gs://$appid/projectheader.html");
?>
<div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
    	
        <!-- Gallery Thumbnails
        ================================================== -->
		<!-- Gallery Item 1 -->
            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
				<?php use google\appengine\api\users\User;
				use google\appengine\api\users\UserService;
				global $user;
				global $appid,$page,$title;
				$menufile="gs://$appid/projectcanon2.txt";
				if(!file_exists($menufile)){
				file_put_contents($menufile,"home=555=home");
				}
				$data = file($menufile);
				$title = $page;
				foreach($data as $line){
				$s = trim($line);
				if($s!=''){
				list($model,$picurl,$link,$price) = explode("=",$s);
                echo   "<li  class='span3 gallery-item' data-id='id-1' data-type='illustration'>";
                echo   "     <span class='gallery-hover-4col hidden-phone hidden-tablet'>";
                echo    "        <span class='gallery-icons'>";
                echo    "           <a href='$picurl' class='item-zoom-link lightbox' title='$model' data-rel='prettyPhoto'></a>";
                echo    "           <a href='$link' class='item-details-link'></a>";
                echo     "       </span>";
                echo    "    </span>";
                echo    "    <a href='gallery-single1.htm'><img src='$picurl' alt='Gallery'></a>";
                echo   "     <span class='project-details'><a href='$link'>$model</a>$price</span>";
                echo   " </li>";
				}
				}
				if (UserService::isCurrentUserAdmin()){
				}
				?>
			</ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
</ul>
</header>
<footer class="text-center page-footer">
<?php
readfile("gs://$appid/projectfooter.html");
?>
</footer>
</body>
</html>
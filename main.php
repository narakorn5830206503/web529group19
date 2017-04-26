<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="main.php"><img src="pic/logo.png" alt=""/></a>
            <!--<h4>เลนส์กล้องถ่ายรูป</h4>-->
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown active">
               <li><a href="main.php">Home</a></li>
                
            </li>
           <li><a href="index-Nikon.html">lens Nikon</a></li>
		    <li><a href="index-Canon.html">lens Canon </a></li>
			<li><a href="admin.php">Admin</a></li>
            <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">lens Canon <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.htm">Full Width</a></li>
                    <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                    <li><a href="blog-single.htm">Blog Single</a></li>
                </ul>
             </li> -->
             <li><a href="page-contact.htm">Contact</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="main.php">Home</option>
                        <option value="main.php">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="pic/DSLR.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="pic/111110085325680.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="pic/NIKON.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="pic/Nikon-Df.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="pic/Nikkor_lens_gp_zoomed_in.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>ยินดีต้อนรับ <br />
            camera lens shop</h3>
            <p class="lead">เป็นร้านจำหน่ายเลนส์กล้องดิจิตอลคุณภาพ รวมถึงการรับประกันคุณภาพพร้อมกับราคาที่ไม่แพง จนทำให้เป็นที่รู้จักกันดีสำหรับท่านที่ต้องการเลือกหา เลนส์ ในราคาที่เป็นกันเอง
<br><br>สินค้าและบริการของ camera lens shop
<br>1.lens Nikon  
<br>2.lens Canon</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">Best seller:
                <small>The most popular items on Carera Lens Shop</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="pic/Cannon/41.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="pic/Cannon/41.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international ad campaign.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="pic/Cannon/34.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="pic/Cannon/34.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">3 Color Poster Design</a>For a regional festival event.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="pic/Nikon/18.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="#" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="pic/Nikon/18.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="pic/Cannon/25.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="pic/Cannon/25.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Nikon AB-500</a>For an international add campaign.</span>
                    </li>

                   
 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    
    	<!-- Blog Preview
        ================================================== -->
    	<div class="span6">

            <h5 class="title-bg">Web Administrator
                
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.htm"><img src="pic/s4.jpg" alt="" class="align-left blog-thumb-preview" /width=200 hight=100></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">KHON KAEN UNIVERSITY</a></h4>
                        <h6> Onpreeya Sompaht </h6>
                    </div>
                    <p class="blog-summary">Cream </br>onpreeyasomp@gmail.com <p>
                </div>

                <!-- Blog Item 2 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="pic/s1.jpg" alt="" class="align-left blog-thumb-preview" /width=200 hight=100></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">KHON KAEN UNIVERSITY</a></h4>
                       <h6>Jirawan Pengnamkham</h6>
                    </div>
                    <p class="blog-summary">boombim<br>boombim.kku@gmail.com<p>
                </div>

                 <!-- Blog Item 3 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="pic/s2.jpg" alt="" class="align-left blog-thumb-preview" /width=200 hight=100></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">KHON KAEN UNIVERSITY</a></h4>
                       <h6>Monticha Duangwiang</h6>
                    </div>
                    <p class="blog-summary">Sol<br>solticha37@gmail.com <p>
                </div>
				<div class="item">
                    <a href="blog-single.htm"><img src="pic/s3.jpg" alt="" class="align-left blog-thumb-preview" /width=200 hight=100></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">KHON KAEN UNIVERSITY</a></h4>
                       <h6>Siripong Kongnitimutarameta</h6>
                    </div>
                    <p class="blog-summary">Best<br>Siripong2.01.2540@gmail.com<p>
                </div>
            </div>
            </div> 	
        </div>
        
        <!-- Client Area
        ================================================== -->
        <div class="span6">

            <h5 class="title-bg">Vision
                
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <!-- Client Testimonial Slider-->
            <div id="clientCarousel" class="carousel slide no-margin">
            <!-- Carousel items -->
            <div class="carousel-inner">

                <div class="active item">
                    <p class="quote-text">"Any idea can turn to dust or magic,depending on the talent that rubs agains it."<cite>- William Bernbach</cite></p>
                </div>

                
                
            </div>
            </div>

            <!-- Client Logo Thumbs-->
            <ul class="client-logos">
                <li><a href="#" class="client-link"><img src="pic/c1.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="pic/c2.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="pic/c3.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="pic/c4.png" alt="Client"></a></li>
            </ul>

        </div>
        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="pic/logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Faculty of Science Khonkaen University</strong><br />
                     <br />
                      
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Member</h5>
                    <ul>
                        <li> Onpreeya Sompaht<br>583021402-7</li>
                        <li> Jirawan Pengnamkham<br>583020650-3</li>
                        <li> Monticha Duangwiang<br>5830206757</li>
						<li> Siripong Kongnitimutarameta<br>583020682-0</li>
                    </ul>
						
                </div>
                <div class="span3 footer-col">
                    <h5>Something to know "Lens"</h5>
                     <ul class="post-list">
                        <li><a href="Len1.html">Learn the Lens Basics</a></li>
                        <li><a href="Len2.html">Zoom Lenses vs. Prime Lenses</a></li>
						<li><a href="Len3.html">Aperture</a></li>
						<li><a href="Len4.html">Put it All Together</a></li>
                        <li><a href="Len5.html">Types of Lenses</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Sample Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/a1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a2.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a3.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a4.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a5.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a6.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a7.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a8.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a9.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a10.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a11.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/a12.jpg" alt="Image Feed"></a></li>
						<li><a href="#"><img src="img/gallery/a13.jpg" alt="Image Feed"></a></li>
						<li><a href="#"><img src="img/gallery/a14.jpg" alt="Image Feed"></a></li>
						<li><a href="#"><img src="img/gallery/a15.jpg" alt="Image Feed"></a></li>
						<li><a href="#"><img src="img/gallery/a16.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Camera Lens Shop. All rights reserved.</span></div>
                        <!--  <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div> -->
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
</body>
</html>

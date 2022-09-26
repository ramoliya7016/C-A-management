
<?php

$con = mysqli_connect("localhost","root","","NCR");

?>

<!DOCTYPE html>
<html lang="zxx">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>interior &amp; furniture</title>
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
<!--css-->
<link href="assets/css/all-css.css" rel="stylesheet" type="text/css">
<link href="assets/css/set1.css" rel="stylesheet" type="text/css">
<!--css-->
</head>
<body id="page-top">
<div id="preloader"></div>
<!--navbar-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="assets/img/logo.png" alt="logo" title="" /></a> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about">ABOUT US</a></li>
        <li><a class="page-scroll" href="#Projects">Projects</a></li>
        <li> <a class="page-scroll" href="#services">Services</a></li>
        <li><a class="page-scroll" href="#blog" >BLOG</a></li>
        <li><a class="page-scroll" style="background:none" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->
<!--SLIDER-->
<header id="myCarousel" class="carousel slide ">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading" class="wow slideInDown"><span>NCR & Associates</span> </h1>
      <br>
      <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">"May your walls know joy , may each room hold laughter, and may every window open to great possibility"</p>
      <a href="#about" class="btn btn-primary btn-xl page-scroll wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">Find Out More</a> </div>
  </div>
  <div class="carousel-inner carousel-fade">
    <div class="item active">
      <!-- Set the first background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design.jpg');"></div>
    </div>
    <div class="item">
      <!-- Set the second background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design-2.jpg');"></div>
    </div>
    <div class="item">
      <!-- Set the third background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design-3.jpg');"></div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </header>
<!--SLIDER-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Residential Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Residential design has always been a field which has seen changes come and go with change in time and place. A much researched and much debated about topic, good residential design does not only impart functional advantage to buildings, but also makes them look and feel good from the outside and inside. In the old days, residential design was a by-product of those times, the tastes of the people of those times and the quality and variety of materials and technology available. As a result, in many places we see old buildings that have rough, square edges and look boxy and dull.</p>
            <p>In the modern day and age, residential design and its ideas have come a long way and designers now use their building designs to create an identity for themselves and make something which has personality and panache.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Office Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Your office should be a place of inspiration and motivation.  It should support innovation, conversation, collaboration. A place where you feel comfortable enough to be creative.</p>
            <p>Office design is about more than creating an environment that provides all the furniture and equipment to support the various types of work tasks.  Great office design goes beyond the physical, practical concerns and takes into account the psychological and emotional well-being of the people who will be using the space.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Commercial Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img3.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>An office is generally a room or other area where an organization’s employees perform administrative work in order to support and realize objects and goals of The main purpose of an office environment is to support its occupants in performing their jobs.<br>
            Workspaces in an office are typically used for conventional office activities such as reading, writing, and computer work. There are nine generic types of workspace each supporting different activities. In addition to individual cubicles, one can find meeting rooms, lounges, and spaces for support activities, such as photocopying and filing. Some offices also have a kitchen area where workers can make their lunches. There are many different ways of arranging the space in an office and whilst these vary according to function, managerial fashions and the culture of specific companies can be even more important.  </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal4" class="modal fade">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SURAT</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7   text-center"><img src="assets/img/portfolio/fullsize/12.jpeg"  alt="" title="" class="img-responsive"></div>

          <div class="col-md-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
   
<!-- Modal -->
<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SURAT</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7   text-center"><img src="assets/img/portfolio/fullsize/32.jpeg"  alt="" title="" class="img-responsive"></div>
          <div class="col-md-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SURAT</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7   text-center"><img src= "assets/img/portfolio/fullsize/44.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
   
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hospitaly Design </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<main>
  <!--about-us-->
  <section class="what-we" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" >
          <h2 class="wow fadeInDown"> What We Do</h2>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay=".5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-1.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Residential Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Residential Design</h6>
                  <p>Residential design has always been a field which has seen changes come and go with change in time and place. A much researched and much debated about topic, good residential design does not only impart functional advantage to buildings, but also makes them look and feel good from the outside and inside.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-2.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Office Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Office Design</h6>
                  <p>Your office should be a place of inspiration and motivation.  It should support innovation, conversation, collaboration. A place where you feel comfortable enough to be creative.Office design is about more than creating an environment that provides all the furniture and equipment to support the various types of work tasks. </p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft div-n2"  data-wow-delay="1.5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-3.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Commercial Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Commercial Design</h6>
                  <p>An office is generally a room or other area where an organization’s employees perform administrative work in order to support and realize objects and goals of The main purpose of an office environment is to support its occupants in performing their jobs.Workspaces in an office are typically used for conventional office activities such as reading, writing, and computer work.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal3">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about-us-->
  <!--Projects-->
  <section class="no-padding" id="Projects">
    <div class="container-fluid">
      <div class="row no-gutter popup-gallery">
        <div class="col-lg-4 col-sm-6 wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/11.jpeg" alt="" title="" />
              <figcaption>
                <h2>SURAT</h2>
                <p>RAJHANS ELITA</p>
                <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/2.jpg" alt="" title="" />
              <figcaption>
                <h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                <a data-toggle="modal" data-target="#myModal4"> View more</a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/33.jpeg" alt="" title="" />
              <figcaption>
                <h2>SURAT</h2>
                <p>VASTU LUXURIA </p>
                <a data-toggle="modal" data-target="#myModal6"> View more </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/44.jpeg" alt="" title="" />
              <figcaption>
                <h2>SURAT</h2>
                <p>B.R. PARK SOCIETY JAHANGIRPURA</p>
                <a data-toggle="modal" data-target="#myModal7"> View more </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/5.jpg" alt="" title="" />
              <figcaption>
                <h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/6.jpg" alt="" title="" />
              <figcaption>
                <h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Projects-->
  <!--services-->
  <section id="services">
    <div class="container">
      <div class="heading ">
        <div class="row">
          <div class="text-center col-sm-10 services1 col-center">
            <h3 class="wow fadeInDown">Services</h3>
            <p class="wow fadeInDown"></p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="service-info">
              <div class="grid">
                <figure class="effect-milo"> <img src="assets/img/pic_2.jpg" class="img-responsive" alt="" title="" />
                  <figcaption>
                    <h2>Architecture</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/const.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Construction</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/int.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Interior</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
              </figure>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--services-->
  <!--blog-->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-10 col-center">
          <h2 class="wow fadeInDown"> Blog Posts </h2>
          <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><a href="blog-in.html"><img class="img-responsive" src="assets/img/1.jpg" alt="" title="" /></a>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-pencil"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb">
              <div id="post-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class=""></li>
                  <li data-target="#post-carousel" data-slide-to="1" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item"><a href="blog-in.html"><img class="img-responsive" src="assets/img/1.jpg" alt="" title="" /></a></div>
                  <div class="item active"><a href="blog-in.html"><img class="img-responsive" src="assets/img/2.jpg" alt="" title="" /></a></div>
                  <div class="item"><a href="blog-in.html"><img class="img-responsive" src="assets/img/3.jpg" alt=""></a></div>
                </div>
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></div>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-picture-o"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="blog-in.html">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et .</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><a href="blog-in.html"><img class="img-responsive" src="assets/img/3.jpg" alt="" title=""  /></a>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-video-camera"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="blog-in.html">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et .</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <!--blog-->
  <!--contact-->
  <section id="contact" class="contact-us">
    <div class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-10 col-center">
            <h2 class="wow fadeInDown"> Contact Us</h2>
          </div>
        </div>
        <div class="contact-form" >
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <form id="main-contact-form" name="contact-form" method="post" >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="fname" class="form-control" placeholder="Name"  type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="femail" class="form-control" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input name="fsubject" class="form-control" placeholder="Subject" required  type="text">
                </div>
                <div class="form-group">
                  <textarea name="fmessage" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                  <input type="submit" name="fsubmit" class="submit-bt2" value="Send Now" >
                </div>
              </form>
            </div>
            <div class="col-sm-6 wow fadeIn">
              <div class="contact-info">
                <p>Surat,
                  
                  Mobile: +919978885868 ,
                          +917567756655</p>
                <br>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i><span>Address : </span> Surat</li>
                  <li><i class="fa fa-phone"></i><span>Phone :</span> +917016380954 ,
                                                                      +917016380952</li>
                  <li><i class="fa fa-envelope"></i><span>Email : </span><a href="mailto:contact@StudioUX.com">nikramoliya@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i><span>Website : </span><a href="#">interior &amp; furniture</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact-->
</main>
<!--main-->
<footer>
  <!--footer-div-->
  <div class="footer">
    <div class="container">
      <div class="col-md-8 col-sm-8 footer-c"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
      <div class="col-md-4  col-sm-4 footer-c text-right">
        <div class="social-icons"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-Whatsapp fa-lg"></i></a><a href="#"><i class="fa fa-instagram fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href="#"><i class="fa fa-skype fa-lg"></i></a></div>
      </div>
    </div>
  </div>
  <!--footer-div-->
</footer>
<!-- jQuery -->
<script  src="assets/js/jquery-2.2.4.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/creative.min.js"></script>
<!-- jQuery -->
</body>


</html>



<?php
	if(isset($_POST['fsubmit'])){
		$fname = $_POST['fname'];
		$femail = $_POST['femail'];
		$fsubject = $_POST['fsubject'];
		$fmessage = $_POST['fmessage'];
		
		if($fname=='' OR $femail=='' OR $fsubject=='' OR $fmessage==''){
			
			echo "<script>alert('Please Fill all the fields')</script>";
			exit();	
		}
		else{
			
			$insert_c = "insert into contect_us (Name,email,subject,Message) values ('$fname','$femail','$fsubject','$fmessage')";
			
			$run_c = mysqli_query($con,$insert_c);
			
			if($run_c){
			
			echo "<script>alert('Message Send Successfully')</script>";
			
		}
			
		}
	}
?>















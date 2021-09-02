<!doctype html>
<html class="no-js" lang="en">
	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us | Magic Array Technology Solutions</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico">
    
	<!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!-- Awesome Fonts -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!-- Template Styles -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/colors.css">    
	<!-- Layer Slider -->
	<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
    
	<!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->
	<script>
		document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
	</script>
  
	<!-- Support for HTML5 -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Enable media queries on older browsers -->
	<!--[if lt IE 9]>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
  
	<script src="js/modernizr.js"></script>
  </head>
<body>
    <?php
    
    include 'header.php' ;
    
    ?>
    
	<section class="post-wrapper-top">
    	<div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>About us</li>
                </ul>
                <h2>About us</h2>
          </div>
            
        </div>
	</section><!-- end post-wrapper-top -->
    
    <section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
				<div class="general-title text-center">
                    <h3>About our company</h3>
                    <hr>
                </div>
                <div class="divider"></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="he-wrap tpl2">
                        <img src="demos/office.png" alt="" class="img-responsive">
                        <div class="he-view">
                            <div class="bg a0"  data-animate="fadeIn">
                                <div class="center-bar">
                                    
                                    <a target="_blank" href="https://www.facebook.com/magicarray" class="facebook a1" data-animate="elasticInDown"></a>
                                    
                                    <a target="_blank" href="http://www.linkedin.com/company/magic-array" class="in a3" data-animate="elasticInDown"></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- he wrap -->
				</div><!-- end col-4 -->

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p>Magic Array Technology Solutions offers the best solution for all your needs and dreams. Let it be a small business firm or a multi-national company, we are here to help you. The prime focus of our company is “Customer Satisfaction”. Give us your ideas and you could see the magic of having wings for your thoughts. Your ideas take off from 100% safe and responsible team willing to serve you under all the circumstances by providing quality IT products and Services that simply boost your lifestyle.We can also work with you to carry your enhanced profile through to your offline presence, with eye-catching company branding, brochures and exhibition materials designed and written by our in-house team of experienced and inventive graphic designers and copywriters. We are packed with an efficient team of energetic designers and developers offering services to clients across the continents.We combine business domain knowledge with technology competence and proven methodologies to deliver high-quality, cost-effective results to maximize clients' competitive advantage and productivity.</p>
                </div>
               
                <div class="clearfix"></div>
                <div class="divider"></div>
                  
                       
  			</div><!-- end content -->
		</div><!-- end container -->
	</section><!-- end section -->
   
    <?php
   
   include 'footer.php' ;
   
   ?>
   
    <div class="dmtop">Scroll to Top</div>

      <!-- Main Scripts-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/jquery.hoverex.min.js"></script>
    <script src="js/jetmenu.js"></script>	
	<script src="js/jquery.jigowatt.js"></script>
	<script src="js/jquery.animate-enhanced.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
	// Chart Effects;
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
			size : 200,
			animate : 2000,
			lineWidth : 10,
			lineCap : 'square',
			lineWidth : 19,
			barColor : '#2ACDC9',
			trackColor : '#f9f9f9',
			scaleColor : false,
			onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent)+'%');
			}
		});
	</script>
	</body>
</html>
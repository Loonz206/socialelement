<!DOCTYPE html>
<html>
<head>
<title><?php include('includes/title.php'); ?>| Social Element</title>
<meta charset="utf-8">
<meta name="robots" content="index, follow" />
<?php include('includes/meta.php'); ?>
<meta name="viewport" content="initial-scale = 1,user-scalable=no,maximum-scale=1.0">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<!--FAVICON AREA-->
<!-- For non-Retina iPhone, iPod Touch, and Android 2.2+ devices: -->
<link rel="apple-touch-icon" href="images/seLogo57.jpg">
<!-- For first-generation iPad: -->
<link rel="apple-touch-icon" sizes="72x72" href="images/seLogo72.jpg">
<!-- For iPhone 4 with high-resolution Retina display: -->
<link rel="apple-touch-icon" sizes="114x114" href="images/seLogo114.jpg">
<!--Including Responsive Layout Grid-->
<link href="css/978.css" rel="stylesheet" />
<!--Including Style Guide-->
<link href="css/style.css" rel="stylesheet" />

<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
<!--Including Mediaqueries Javascript-->
<script src="js/css3-mediaqueries.js" type="text/javascript"></script>
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include ResponsiveSlides Javascript libary -->
<script type="text/javascript" src="js/responsiveslides.js"></script>
<script>// Create the dropdown base
$("<select />").appendTo("nav");

// Create default option "Go to..."
$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Go to..."
}).appendTo("nav select");

// Populate dropdown with menu items
$("nav a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("nav select");
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26050136-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- include Select Wheel under 480px-->

<!-- Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<header> <a id="Top"></a>
  <div class="container">
    <div class="row">
      <div class="fourcol">
        <h1  class="imgcontainer"><span>Social Element | Social Media Marketing. Web Design. Website Design. Reputation Management.</span> <a href="index.php" title="Social Element | Social Media Marketing.  Website Design.  Reputation Management."><img src="images/sociallogo220x81.png" alt=""></a> </h1>
      </div>
      <div class="threecol"> </div>
      <div class="fivecol last" id="social">
        <div class="floatright"> <a href="https://www.facebook.com/SocialElementMarketing"><img src="images/facebook.png" alt="" title="Facebook"></a> <a href="https://twitter.com/socialelementNW/"><img src="images/twitter-2.png" alt="" title="Twitter"></a> <a href="http://www.linkedin.com/company/social-element-llc"><img src="images/linkedin.png" alt="" title="LinkedIn"></a> <a href="http://pinterest.com/SocialElementNW/"><img src="images/pinterest.png" alt="" title="Pinterest"></a> <a href="http://instagram.com/socialelement/"><img src="images/instagram32x32.jpg" alt="" title="Instagram"></a> <a href="https://plus.google.com/u/0/102681247554317636647/posts "><img src="images/gplus.png" alt="" title="Google+"></a> </div>
      </div>
    </div>
  </div>
</header>
<!--/END HEADER-->

<nav>
  <div class="container">
    <div class="row">
      <div class="twelvecol last">
        <ul id="meangreen">
          <li<?php if ($page == 'about.php') { print ' class="current"'; } ?>><a href="about.php">about</a></li>
          <li<?php if ($page == 'socialaudit.php') { print ' class="current"'; } ?>><a href="socialaudit.php">social audit</a></li>
          <li<?php if ($page == 'services.php' || $page == 'socialmedia.php' || $page == 'copywriting.php' || $page == 'webdesign.php' || $page == 'consultation.php' || $page == 'restaurant.php' || $page == 'salon.php' || $page == 'fitness.php' || $page == 'nonprofit.php' ) { print ' class="current"'; } ?>><a href="services.php">services &amp; packages</a></li>
          <li<?php if ($page == 'process.php') { print ' class="current"'; } ?>><a href="process.php">process</a></li>
          <li><a href="http://www.socialelementgroup.com/blog/">blog</a></li>
          <li<?php if ($page == 'contact.php') { print ' class="current"'; } ?>><a href="contact.php">contact</a></li>
        </ul>
        <!--/END MEANGREEN-->
        
        <select>
          <option value="" selected="selected">Menu</option>
          <option value="index.php">home</option>
          <option value="about.php">about</option>
          <option value="socialaudit.php">social audit</option>
          <option value="services.php">services &amp; packages</option>
          <option value="process.php">process</option>
          <option value="http://www.socialelementgroup.com/blog/">blog</option>
          <option value="contact.php">contact</option>
        </select>
      </div>
    </div>
  </div>
</nav>
<!--END NAV-->

<!--HEADER CUT STARTS HERE-->
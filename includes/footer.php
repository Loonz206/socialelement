<!--FOOTER CUT HERE-->

<footer>
  <div class="container">
    <div class="row" id="meanorange">
      <div class="threecol">
        <h3>menu</h3>
        <ul>
          <li<?php if ($page == 'socialaudit.php') { print ' class="current"'; } ?>><a href="socialaudit.php">social audit</a></li>
          <li<?php if ($page == 'services.php') { print ' class="current"'; } ?>><a href="services.php">services &amp; packages</a></li>
          <li<?php if ($page == 'process.php') { print ' class="current"'; } ?>><a href="process.php">process</a></li>
          <li<?php if ($page == 'about.php') { print ' class="current"'; } ?>><a href="about.php">about</a></li>
          <li><a href="http://www.socialelementgroup.com/blog/">blog</a></li>
          <li<?php if ($page == 'contact.php') { print ' class="current"'; } ?>><a href="contact.php">contact</a></li>
        </ul>
      </div>
      <div class="threecol">
        <h3>services</h3>
        <ul>
          <li<?php if ($page == 'socialmedia.php') { print ' class="current"'; } ?>><a href="socialmedia.php">social media packages</a></li>
          <li<?php if ($page == 'copywriting.php') { print ' class="current"'; } ?>><a href="copywriting.php">copywriting</a></li>
          <li<?php if ($page == 'webdesign.php') { print ' class="current"'; } ?>><a href="webdesign.php">web design</a></li>
          <li<?php if ($page == 'consultation.php') { print ' class="current"'; } ?>><a href="consultation.php">consultation</a></li>
        </ul>
      </div>
      <div class="threecol">
        <h3>packages</h3>
        <ul>
          <li<?php if ($page == 'restaurant.php') { print ' class="current"'; } ?>><a href="restaurant.php">restaurant &amp; bar</a></li>
          <li<?php if ($page == 'salon.php') { print ' class="current"'; } ?>><a href="salon.php">salon &amp; spa</a></li>
          <li<?php if ($page == 'fitness.php') { print ' class="current"'; } ?>><a href="fitness.php">health &amp; fitness</a></li>
          <li<?php if ($page == 'nonprofit.php') { print ' class="current"'; } ?>><a href="nonprofit.php">non-profit</a></li>
        </ul>
      </div>
      <div class="threecol last" id="bumper">
        <div class="imgcontainer meanimage"> <a href="mailto:">info@socialelementgroup.com</a><a href="tel:+12064866584">206-486-6584</a> <a href="#Top"><img src="images/lowerlogo.png" class="center meanimage" alt="Social Element"/></a></div>
      </div>
    </div>
  </div>
</footer>
<!--END FOOTER-->



<script>
$("a[href='#Top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script> 

<script>
$("nav select").change(function() {
  window.location = $(this).find("option:selected").val();
});
</script>

<script>
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>
</body>
</html>
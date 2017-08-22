<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("meta.php"); ?>
</head>

<body>
<img src="images/bg.png" alt="" id="background" />
<div id="maincontent"  class="typeface-js">
	<?php include("header.php"); ?>
    <div id="sidebar">
        <div id="side-menu">
            <div class="nav-about-active">
              <h2><a href="about.php" class="about"><span>&nbsp;</span></a></h2>
              <div class="side-submenu">
                <a href="prize.php" class="active">Prizes</a>
                <a href="how-to-play.php">How to Play</a>
                <a href="terms.php">Terms and Conditions</a>
              </div>
            </div>
            <div class="nav-whats">
              <h2><a href="news.php" class="whats"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-code">
              <h2><a href="input-code.php" class="code"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-badge">
                  <h2><a href="#" class="badge"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-reedem">
                  <h2><a href="reedem-badge.php" class="reedem"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-game">
                 <h2><a href="#" class="game"><span>&nbsp;</span></a></h2>
            </div>
        </div>
    </div><!-- #sidebar -->
    <div id="content">
    	<div id="prize">
        	<div class="content">
            	<div class="prize">  
               	  <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
                    <li>
                        <div class="row">
                            <div class="entry">
                            	<img src="images/content/prize-berlin.png" height="600" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row" >
                            <div class="entry">
                             <p><img src="images/content/prize-istanbul.png" height="467" /></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="entry">
                            	<img src="images/content/prize-newyork.png" height="600" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="entry">
                            	<img src="images/content/prize-t-shirt.png" height="466" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="entry">
                            	<img src="images/content/prize-lamp.png" height="467" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="entry">
                            	<img src="images/content/prize-samsung.png" height="467" />
                            </div>
                        </div>
                    </li>
                  </ul>
                </div><!-- .newsfeed -->
            </div><!-- .content -->
        </div><!-- #news -->
    </div><!-- #content -->
	<?php include("footer.php"); ?>
</div><!-- #main-content -->
<script type="text/javascript">
$(window).load(function() {
	$("#background").fullBg();
});
</script>
</body>
</html>

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
            <div class="nav-about">
              <h2><a href="about.php" class="about"><span>&nbsp;</span></a></h2>
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
            <div class="nav-reedem-active">
                  <h2><a href="reedem-badge.php" class="reedem"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-game">
                 <h2><a href="#" class="game"><span>&nbsp;</span></a></h2>
            </div>
        </div>
    </div><!-- #sidebar -->
    <div id="content">
    	<div id="reedem-success">
        	<div class="content">
            	<div class="reedem-success"> 
                	<div class="head-text">
                     <span>Your prize has been queued for shipping!
If you have any questions questions regarding 
this transaction, please contact <a href="mailto:info@marlboro.co.id">info@marlboro.co.id</a></span>
					</div>
                    <div class="redeemsuccess">
                        <div class="require-badges">
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge1.png" /></a>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge2.png" /></a>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge3.png" /></a>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge4.png" /></a>
                            </div>
                        </div>
                        <div class="reedem-prize">
                            	<a href="#"><img src="images/t-shirt.png" /></a>
                        </div>
                    </div>
                    <div class="foot-text">
                    	<span>The above badges have been removed 
from your profile</span>
                    </div>
                </div><!-- .reedem-form -->
            </div><!-- .content -->
        </div><!-- #reedem-form -->
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

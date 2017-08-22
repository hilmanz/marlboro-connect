<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("meta.php"); ?>
</head>

<body>
<img src="images/bg.png" alt="" id="background" />
<div class="page-welcome">
<div id="maincontent"  class="typeface-js">
	<?php include("header.php"); ?>
    <div id="content">
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
            <div class="nav-reedem">
                  <h2><a href="reedem-badge.php" class="reedem"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-game">
                 <h2><a href="#" class="game"><span>&nbsp;</span></a></h2>
            </div>
        </div>
    </div><!-- #sidebar -->
    	<div id="welcome">
        	<div class="content">
                <h1>Hi, Erwin ! Welcome to Connections.</h1>
                <p>This is a promotion site about a VIP TRIP to</p>
                <span class="title">BERLIN-ISTANBUL-NEW YORK</span>
                <p>For a start, you can click on <a href="#">About</a> and see<br />
                the <a href="#">Prizes</a> or learn more in <a href="#">How to Play.</a><br />
                Or you might like to fill in your profile page<br />
                first. Simply go to <a href="#">My Profile</a> and <a href="#">Edit Profile.</a><br />
                Enjoy!</p>
            </div>
            <div class="welcome-menu">
           		<a href="prize.php">Prizes</a>
           		<a href="#">How to Play</a>
           		<a href="terms.php">Terms and Conditions</a>
            </div>
        </div><!-- #welcome -->
    </div><!-- #content -->
	<?php include("footer.php"); ?>
</div><!-- #main-content -->
</div>
<script type="text/javascript">
$(window).load(function() {
	$("#background").fullBg();
});
</script>
</body>
</html>

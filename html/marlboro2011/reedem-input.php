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
    	<div id="reedem-form">
        	<div class="content">
            	<div class="reedem-form"> 
                	<h1>you have chosen the marlboro lights connections t-shirt.<br /> 
					below is the address we have in our system. please confirm or update</h1>
                    <div class="redeemform">
                        <form class="reedem-confirm" action="reedom-success.php">
                            <div class="row">
                                <label>Street</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <label>Complex</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <label>Province</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <label>City</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <label>Phone</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <label>Mobile</label>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label class="checkbox">Agree to the <a href="terms.php">terms and conditions</a></label>
                                <input type="submit" class="btnreedem" value="&nbsp;" />
                            </div>
                        </form>
                        <div class="require-badges">
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge1.png" /></a>
                                <span class="checklist">&nbsp;</span>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge2.png" /></a>
                                <span class="checklist">&nbsp;</span>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge3.png" /></a>
                                <span class="checklist">&nbsp;</span>
                            </div>
                        	<div class="box">
                            	<a href="#"><img src="images/badge/badge4.png" /></a>
                                <span class="checklist">&nbsp;</span>
                            </div>
                        </div>
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

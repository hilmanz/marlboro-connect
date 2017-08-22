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
            <div class="nav-reedem">
                  <h2><a href="reedem-badge.php" class="reedem"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-game">
                 <h2><a href="#" class="game"><span>&nbsp;</span></a></h2>
            </div>
        </div>
    </div><!-- #sidebar -->
    <div id="content">
    	<div id="messages">
        	<div class="content">
            	<div class="messages">  
                	<h1><img src="images/messages.png" /></h1>
                    <div class="messagebox">
                        <div class="row">
                            <div class="entry">
                                <p><span class="title-message">Lorem Ipsum</span>
                                <a href="#">Read</a> <a href="#">Delete</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="entry">
                                <p><span class="title-message">Lorem Ipsum</span>
                                <a href="#">Read</a> <a href="#">Delete</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="entry">
                                <p><span class="title-message">Lorem Ipsum</span>
                                <a href="#">Read</a> <a href="#">Delete</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="entry">
                                <p><span class="title-message">Lorem Ipsum</span>
                                <a href="#">Read</a> <a href="#">Delete</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="entry">
                                <p><span class="title-message">Lorem Ipsum</span>
                                <a href="#">Read</a> <a href="#">Delete</a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- .messages -->
            </div><!-- .content -->
        </div><!-- #messages -->
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

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
            <div class="nav-code-active">
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
    	<div id="code">
        	<div class="content">
            	<div id="code-unlock" class="message-box">
                	<div class="message-text">
                    	<div class="message-entry">
                    		<img src="images/message-text.png" />
                        </div>
                    </div>
                    <div class="message-menu">
                    	<a href="#">See My Badges</a>
                    </div>
                    <a href="#" class="close-box">&nbsp;</a>
                </div>
            	<div class="input-code">
                	<form class="code" action="code-unlock.php">
                    	<label>Input your connection code in the below box</label>
                        <div class="row">
                        	<div class="code1">
                            	<input type="text" name="code1" />
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="code2">
                            	<img src="images/chapcha.jpg" />
                            </div>
                            <div class="submit-code">
                            	<input type="text" name="code" />
                                <input class="btn-submit" type="submit" value="&nbsp;" />
                            </div>
                        </div>
                        <div class="row">
                        	<a href="#">learn how to play</a> | <a href="#">see your badges</a>
                        </div>
                    </form>
                </div>
            </div><!-- .content -->
        </div><!-- #code -->
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

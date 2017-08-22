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
    	<div id="profile">
        	<div class="content">
            	<div class="profile">  
               		<div class="profile-card">
                    	<div class="profile-entry">
                            <div class="photo">
                                <img src="images/pp.jpg" />
                            </div>
                            <div class="profile-info">
                                <span>Name</span>
                                <h2>Jared Leto</h2>
                                <span>City</span>
                                <h2>Medan</h2>
                                <span>Sex</span>
                                <h2>Male</h2>
                                <span>Age</span>
                                <h2>27</h2>
                                <span>Connections Date</span>
                                <h2>09 OCT 2011</h2>
                            </div>
                            <div class="profile-menu">
                                <a id="btn-popup" href="#">Change Photo</a>
                                <a href="#">Edit Profile</a>
                            </div>
                            <div class="entry-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempor adipiscing nunc</p>
                            </div>
                            <div id="popup">
                                <a class="popup-close">&nbsp;</a>
                                <div class="entry-popup">
                                    <div class="last-photo">
                                        <div class="photo">
                                            <img src="images/pp.jpg" />
                                        </div>
                                        <h1>Change Photo</h1>
                                	</div>
                                    <form class="upload-photo">
                                    	<input type="file" />
                                    </form>
                                </div>
                            </div>
                            <div id="backgroundPopup"></div>
                       </div>
                    </div><!-- .profile-card -->
                    <div class="gift">
                    	<img src="images/badge/kado.png" />
                        <a href="reedem-badge.php">Reedem Badge</a>
                    </div>
                    <div class="badge-row">
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge1.png" />
                            </div>
                            <div class="badge-count">
                            	<span>1</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge2.png" />
                            </div>
                            <div class="badge-count">
                            	<span>5</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge3_grey.png" />
                            </div>
                            <div class="badge-count">
                            	<span>0</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge4.png" />
                            </div>
                            <div class="badge-count">
                            	<span>3</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge5_grey.png" />
                            </div>
                            <div class="badge-count">
                            	<span>0</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge6.png" />
                            </div>
                            <div class="badge-count">
                            	<span>2</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge7_grey.png" />
                            </div>
                            <div class="badge-count">
                            	<span>0</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge8.png" />
                            </div>
                            <div class="badge-count">
                            	<span>4</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge9.png" />
                            </div>
                            <div class="badge-count">
                            	<span>2</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge10.png" />
                            </div>
                            <div class="badge-count">
                            	<span>5</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge11.png" />
                            </div>
                            <div class="badge-count">
                            	<span>3</span>
                            </div>
                        </div>
                    	<div class="badge-box">
                        	<div class="badge-img">
                            	<img src="images/badge/badge12.png" />
                            </div>
                            <div class="badge-count">
                            	<span>3</span>
                            </div>
                        </div>
                    </div><!-- .badge-row -->
                </div><!-- .profile -->
            </div><!-- .content -->
        </div><!-- #profile -->
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

<?php /* Smarty version 2.6.13, created on 2011-12-09 09:06:28
         compiled from marlboro/master.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->_tpl_vars['meta']; ?>

</head>

<body>
<img src="images/bg.png" id="bg" />

<div id="maincontent"  class="typeface-js">
	<?php echo $this->_tpl_vars['header']; ?>

    <div id="content">
    <?php echo $this->_tpl_vars['mainContent']; ?>

    </div><!-- #content -->
 
		
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'marlboro/popup-game.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
		
		<div style="position: relative; margin: 0pt auto; width: 800px; z-index: 700;">
		<div id="closeEvent" class="popupcontent" style="z-index:760; padding: 33px 45px;top: 50px; height:270px;width: 505px;left:250px;font-size: 22px; text-align:center; display:none;">
		    			<a class="popup-close closeEvent" style="right: -9px;top: -25px;">&nbsp;</a>
		    			<p>Marlboro Light Connections has officially drawn to a close.</p>
		    			<p>Thank you so much for participating in this challenge. This competition has now closed and the winning will be announced in due course.</p>
						<p>Check out the complete winner list exclusively at marlboro.co.id</p>
						<p>For info please send your email to <a href="mailto:info@marlboro.co.id">info@marlboro.co.id</a></p>
		</div>
    </div>
    <script>
    <?php echo '
	    $(".closeEvent").click(function(){
			//$("#bgGame").fadeOut("slow");
			$("#closeEvent").fadeOut("slow");
		});
    	$("img#closeWall").click(function(){
			$("#bgGame").fadeOut("slow");
			$("#berlin1").fadeOut("slow");
		});
    	$("img#closeDJ").click(function(){
			$("#bgGame").fadeOut("slow");
			$("#berlinDJ").fadeOut("slow");
			$("#berlinWall").fadeOut("slow");
			//$("#linkGameDJ").attr("value","");
			//$("#linkGameDJ2").attr("data","");
			$("#gameframe").attr("src","");
			$("#gameframeWall").attr("src","");
			});
    	$("img#closeWall").click(function(){
    		$("#bgGame").fadeOut("slow");
			$("#berlinWall").fadeOut("slow");
			$("#gameframeWall").attr("src","");
			});
		
    	
    '; ?>

    </script>
        <script>
	<?php echo '
    	$(".noprice").click(function(){
    		var no = $(this).attr(\'no\');
			$(".no-price").fadeIn("slow");
			$("#bgGame").fadeIn("slow");
			$(".no-price"+no).fadeIn("slow");
        	});
    	$(".badge-lock-close").click(function(){
			$(".no-price").fadeOut("slow");
			$("#bgGame").fadeOut("slow");
			for(i=1;i<5;i++){
				$(".no-price"+i).fadeOut("slow");
				}
        	});
   	'; ?>

	</script>
	<script>
	<?php echo '
    	$(".universalClose").click(function(){
			$("#popupUniversalMSG").fadeOut("slow");
			$("#unluckyBadgeUniversal").fadeOut("slow");
			$("#listBadgeRequest").fadeOut("slow");
        	});
			
		$(\'.unluckyClose\').click(function(){
			$("#unluckyBadgeUniversal").fadeOut("slow");
		});
   	'; ?>

	</script>
	<?php echo $this->_tpl_vars['footer']; ?>

</div><!-- #main-content -->
<?php echo '
<iframe src="refresh.php" style="height:1px;"></iframe>
<script type="text/javascript">

	'; ?>

	<?php echo $this->_tpl_vars['MOP_EMBED']; ?>

	
	var berlin_wall_track = '<?php echo $this->_tpl_vars['berlin_wall_track']; ?>
';
	var dj_track = '<?php echo $this->_tpl_vars['dj_track']; ?>
';
	var yacht_track = '<?php echo $this->_tpl_vars['yacht_track']; ?>
';
	var art_museum_track = '<?php echo $this->_tpl_vars['art_museum_track']; ?>
';
	var universalmsg = '<?php echo $this->_tpl_vars['universalmsg']; ?>
';
	<?php echo '
	
	universalmsg = 0;
	
	if(universalmsg == \'1\'){
		$(\'#popupUniversalMSG\').show();
	}else{
		$(\'#popupUniversalMSG\').hide();
	}
</script>

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push([\'_setAccount\', \'UA-867847-31\']);
	_gaq.push([\'_trackPageview\']);
	(function() {
		var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
		ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
		var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

'; ?>

</body>
</html>
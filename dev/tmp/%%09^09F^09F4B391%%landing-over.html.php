<?php /* Smarty version 2.6.13, created on 2011-12-22 05:44:42
         compiled from marlboro/page/landing-over.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MARLBORO LIGHTS CONNECTIONS</title>
<link type="text/css" rel="stylesheet" href="css/marlboro.css" />
<script type='text/javascript' src='js/jquery.min.js'></script>
<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
<script type='text/javascript' src='js/queryLoader.js'></script>
<link type="text/css" rel="stylesheet" href="css/closed.css" />
<script type="text/javascript" src="js/landing/fullscreen.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script> 
<script type="text/javascript" src="js/jquery.pngFix.js"></script> 
<script type="text/javascript" src="js/marlboro.js"></script> 
<script type="text/javascript" src="js/scrollcApp.js"></script> 
<script type="text/javascript" src="js/flowplayer-3.2.6.min.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>

<script type="text/javascript">
<?php echo '
/*
when HTTP_REQUEST {
  if {[string tolower [HTTP::header "User-Agent"]] contains "msie"} {
    set foundmatch 1
  }
}
when HTTP_RESPONSE {
  if {$foundmatch == 1} {
    HTTP::header replace Cache-Control no-cache
    HTTP::header replace Pragma no-cache
    HTTP::header replace Expires -1
  }
}
*/
	$(document).ready ( 
		  function() {
			  
		    if ( $.browser.mozilla == true && $.browser.version == \'1.6\' ) {
		    	var fileref=document.createElement("link")
		    	  fileref.setAttribute("rel", "stylesheet")
		    	  fileref.setAttribute("type", "text/css")
		    	  fileref.setAttribute("href", "css/firefox30.css");
		    	if (typeof fileref!="undefined")
		    		  document.getElementsByTagName("head")[0].appendChild(fileref)
		    }
		  }
		);
			
'; ?>

</script>
<script type="text/javascript">
<?php echo '
	$(document).ready(function(){
		$(\'div\').pngFix( );	
		});
'; ?>

</script>
</head>

<body>
<img src="images/bg.png" id="bg" />

<div id="maincontent"  class="typeface-js">
        <div id="content-closed">
        </div><!-- #content -->
	<div id="town-closed">
    </div>
    <div id="footer">
    	<div id="site-info">
        	<span>Informasi dalam website ini di tujukan untuk perokok berusia 18 tahun atau lebih dan tinggal di wilayah Indonesia </span>
        </div>
        <div class="menu-footer">
        	<?php if ($this->_tpl_vars['LOCAL_DEVELOPMENT']): ?>
			<a href="index.php">Halaman Utama</a>
			<a href="https://staging-marlboro-id.es-dm.com/Templates/Termsandconditions.aspx" target="_blank">Syarat dan Ketentuan</a>
			<a href="https://staging-marlboro-id.es-dm.com/Templates/RemoveMe.aspx" target="_blank">Hapus Saya</a>
			<a href="https://staging-marlboro-id.es-dm.com/Templates/FAQ.aspx" target="_blank">Daftar Pertanyaan</a>
			<a href="https://staging-marlboro-id.es-dm.com/Templates/Contactus.aspx" target="_blank">Kontak KamI</a>
			<a href="http://www.pmi.com/id/smokingandhealth" target="_blank">Perihal Merokok</a>
        	<?php else: ?>
        	<a href="index.php">Halaman Utama</a>
			<a href="https://login.marlboro.co.id/Templates/Termsandconditions.aspx" target="_blank">Syarat dan Ketentuan</a>
			<a href="https://login.marlboro.co.id/Templates/RemoveMe.aspx" target="_blank">Hapus Saya</a>
			<a href="https://login.marlboro.co.id/Templates/FAQ.aspx" target="_blank">Daftar Pertanyaan</a>
			<a href="https://login.marlboro.co.id/Templates/Contactus.aspx" target="_blank">Kontak KamI</a>
			<a href="http://www.pmi.com/id/smokingandhealth" target="_blank">Perihal Merokok</a>
			<?php endif; ?>
        </div>
        <div id="hw">
        </div>
        
	</div><!-- #footer -->
    <script type='text/javascript'>
	QueryLoader.init();
	</script>

</div><!-- #main-content -->
<?php echo '
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
<?php /* Smarty version 2.6.13, created on 2011-12-09 09:06:28
         compiled from marlboro/meta.html */ ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MARLBORO LIGHTS CONNECTIONS</title>
<link type="text/css" rel="stylesheet" href="css/marlboro.css" />
<script type='text/javascript' src='js/jquery.min.js'></script>
<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
<script type='text/javascript' src='js/queryLoader.js'></script>

<script type="text/javascript" src="js/landing/fullscreen.js"></script>
<script type="text/javascript" src="js/acit_jquery.js"></script>

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



<?php /* Smarty version 2.6.13, created on 2011-12-02 11:52:04
         compiled from marlboro/code.html */ ?>
<div id="sidebar">
        <div id="side-menu">
            <div class="nav-about">
              <h2><a href="index.php?page=about-marlboro-connections" class="about"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-whats">
              <h2><a href="index.php?page=news" class="whats"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-code-active">
              <h2><a href="index.php?page=code" class="code"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-badge">
                  <h2><a href="index.php?page=code&act=trade" class="badge"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-reedem">
                  <h2><a href="index.php?page=code&act=prize" class="reedem"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-game">
                 <h2><a href="index.php?page=games" class="game"><span>&nbsp;</span></a></h2>
            </div>
        </div>
    </div><!-- #sidebar -->
    <div id="content">
    	<div id="code">
        	<div class="content" style="position: relative;">
            	<div class="input-code">
                	<form id="formInputCode" class="code" action="index.php?page=code&act=submit" method="POST">
                    	<label>Input your Connection Code here to unlock a badge</label>
						<div id="err" style="border:1px solid #f00;background:#fff;padding:5px;width:285px;display:none;"></div>
                        <div class="row">
                        	<div class="code1">
                            	<input type="text" name="code" maxlength="8" />
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="code2">
                            	<img id="captcha" src="captcha.php" />
                            </div>
                            <div class="submit-code">
                            	<input type="text" name="captcha" />
                                <!--<input id="btn-popup" class="btn-submit" type="button" value="&nbsp;" />-->
								<input class="btn-submit" id="inputCodeSubmit" type="button" value="&nbsp;" />
                            </div>
                        </div>
                        <div class="row">
                        	<a href="index.php?page=howtoplay">learn how to play</a> | <a href="index.php?page=profile">see your badges</a>
                        </div>
                    </form>
                </div>
                            <div id="popup">
                                <a class="popup-close">&nbsp;</a>
                                <div class="entry-popup">
                                    <div class="message-text">
                                        <div class="message-entry">
                                            <div style="border: 0 none;margin: 2px 0 0;" class="head">
    											<h1>You just unlocked a badge</h1>  
    											<img width="250" id="imgSuccess" style="position: absolute;right: 215px;top: 80px;" src="images/badge/badge12-super.png" alt="badge"> 									
    										</div>
                                        </div>
                                    </div>
                                    <div class="message-menu">
                                        <a href="index.php?page=profile">See My Badges</a>
                                    </div>
                                </div>
                            </div>
                            <script>
    							<?php echo '
								    $(".popup-close").click( function() {
								          $("#popup").fadeOut("slow");
								  		});
								'; ?>

        					</script>
            </div><!-- .content -->
        </div><!-- #code -->
    </div><!-- #content -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'marlboro/popup-unlock-universal.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'marlboro/popup-badge-universal-list.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php if ($this->_tpl_vars['uni']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'marlboro/popup-success-universal.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
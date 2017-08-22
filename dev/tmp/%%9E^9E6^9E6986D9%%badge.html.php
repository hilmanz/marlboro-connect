<?php /* Smarty version 2.6.13, created on 2011-12-02 12:39:48
         compiled from marlboro/badge.html */ ?>
<?php echo '
<style type="text/css">
#tiptip_holder {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 99999;
}

#tiptip_holder.tip_top {
	padding-bottom: 5px;
}

#tiptip_holder.tip_bottom {
	padding-top: 5px;
}

#tiptip_holder.tip_right {
	padding-left: 5px;
}

#tiptip_holder.tip_left {
	padding-right: 5px;
}

#tiptip_content {
	font-size: 11px;
	color: #fff;
	text-shadow: 0 0 2px #000;
	padding: 4px 8px;
	border: 1px solid rgba(255,255,255,0.25);
	background-color: rgb(25,25,25);
	background-color: rgba(25,25,25,0.92);
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(transparent), to(#000));
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	box-shadow: 0 0 3px #555;
	-webkit-box-shadow: 0 0 3px #555;
	-moz-box-shadow: 0 0 3px #555;
}

#tiptip_arrow, #tiptip_arrow_inner {
	position: absolute;
	border-color: transparent;
	border-style: solid;
	border-width: 6px;
	height: 0;
	width: 0;
}

#tiptip_holder.tip_top #tiptip_arrow {
	border-top-color: #fff;
	border-top-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_bottom #tiptip_arrow {
	border-bottom-color: #fff;
	border-bottom-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_right #tiptip_arrow {
	border-right-color: #fff;
	border-right-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_left #tiptip_arrow {
	border-left-color: #fff;
	border-left-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_top #tiptip_arrow_inner {
	margin-top: -7px;
	margin-left: -6px;
	border-top-color: rgb(25,25,25);
	border-top-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_bottom #tiptip_arrow_inner {
	margin-top: -5px;
	margin-left: -6px;
	border-bottom-color: rgb(25,25,25);
	border-bottom-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_right #tiptip_arrow_inner {
	margin-top: -6px;
	margin-left: -5px;
	border-right-color: rgb(25,25,25);
	border-right-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_left #tiptip_arrow_inner {
	margin-top: -6px;
	margin-left: -7px;
	border-left-color: rgb(25,25,25);
	border-left-color: rgba(25,25,25,0.92);
}

/* Webkit Hacks  */
@media screen and (-webkit-min-device-pixel-ratio:0) {	
	#tiptip_content {
		padding: 4px 8px 5px 8px;
		background-color: rgba(45,45,45,0.88);
	}
	#tiptip_holder.tip_bottom #tiptip_arrow_inner { 
		border-bottom-color: rgba(45,45,45,0.88);
	}
	#tiptip_holder.tip_top #tiptip_arrow_inner { 
		border-top-color: rgba(20,20,20,0.92);
	}
}
</style>
'; ?>


<div id="sidebar">
        <div id="side-menu">
            <div class="nav-about">
              <h2><a href="index.php?page=about-marlboro-connections" class="about"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-whats">
              <h2><a href="index.php?page=news" class="whats"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-code">
              <h2><a href="index.php?page=code" class="code"><span>&nbsp;</span></a></h2>
            </div>
            <div class="nav-badge-active">
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
    	<div id="badge">
    		<div class="content">
    			<div class="badge-trade">
    				 <a href="#listBadgeRequest" class="btn-badgetrade toggleBox" id="openListBadge"></a>
    			</div>
    <!-- POPUP 1  -->			
    			<div id="listBadgeRequest" class="requestBadge listBadgeTrade">
    				<div class="contentBadge">
    					<a class="popup-close toggleBox mainList"></a>
    					<div class="head">
    						<h3>BADGE TRADE</h3>
    						<p>Select one of your badges and select the badge you would like to trade it for</p>
    					</div>
    					<form id="formRequestTrade">
    					<div class="badgeKiri">
    					<p>My Badges</p>
							<?php $this->assign('num', 1); ?>
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['have']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
							<?php if ($this->_tpl_vars['num'] == 7): ?>
							
    						<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge<?php if ($this->_tpl_vars['have'][8]['total'] == 0): ?>9_grey<?php else:  echo $this->_tpl_vars['have'][8]['id'];  endif; ?>.png" <?php if ($this->_tpl_vars['have'][8]['total'] != 0): ?>class="toolTip" title="<?php echo $this->_tpl_vars['have'][8]['total']; ?>
"<?php endif; ?> />
                            	</div>
                            	<div class="badge-cek">
									<?php if ($this->_tpl_vars['have'][8]['total'] > 0): ?>
                            		 <input type="checkbox" name="have_<?php echo $this->_tpl_vars['have'][8]['id']; ?>
" id="checkbox" onclick="javascript:trade.haveSelect(9);" />
									<?php endif; ?>
								</div>
                        	</div>
                        	<?php elseif ($this->_tpl_vars['num'] == 9): ?>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge<?php if ($this->_tpl_vars['have'][6]['total'] == 0): ?>7_grey<?php else:  echo $this->_tpl_vars['have'][6]['id'];  endif; ?>.png" <?php if ($this->_tpl_vars['have'][6]['total'] != 0): ?>class="toolTip" title="<?php echo $this->_tpl_vars['have'][6]['total']; ?>
"<?php endif; ?> />
                            	</div>
                            	<div class="badge-cek">
									<?php if ($this->_tpl_vars['have'][6]['total'] > 0): ?>
                            		 <input type="checkbox" name="have_<?php echo $this->_tpl_vars['have'][6]['id']; ?>
" id="checkbox" onclick="javascript:trade.haveSelect(7);" />
									<?php endif; ?>
								</div>
                        	</div>
                        	<?php else: ?>
                        		<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge<?php if ($this->_tpl_vars['have'][$this->_sections['i']['index']]['total'] == 0):  echo $this->_tpl_vars['num']; ?>
_grey<?php else:  echo $this->_tpl_vars['have'][$this->_sections['i']['index']]['id'];  endif; ?>.png" <?php if ($this->_tpl_vars['have'][$this->_sections['i']['index']]['total'] != 0): ?>class="toolTip" title="<?php echo $this->_tpl_vars['have'][$this->_sections['i']['index']]['total']; ?>
"<?php endif; ?> />
                            	</div>
                            	<div class="badge-cek">
									<?php if ($this->_tpl_vars['have'][$this->_sections['i']['index']]['total'] > 0): ?>
                            		 <input type="checkbox" name="have_<?php echo $this->_tpl_vars['have'][$this->_sections['i']['index']]['id']; ?>
" id="checkbox" onclick="javascript:trade.haveSelect(<?php echo $this->_tpl_vars['num']; ?>
);" />
									<?php endif; ?>
								</div>
                        	</div>
                        	<?php endif; ?>
							<?php $this->assign('num', $this->_tpl_vars['num']+1); ?>
							<?php endfor; endif; ?>
                        	
    					</div>
    					
    					<div class="badgeKanan">
    					<p>What I Need</p>
    						<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge1.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_1" id="checkbox" onclick="javascript:trade.reqSelect(1);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge2.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_2" id="checkbox" onclick="javascript:trade.reqSelect(2);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge3.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_3" id="checkbox" onclick="javascript:trade.reqSelect(3);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge4.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_4" id="checkbox" onclick="javascript:trade.reqSelect(4);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge5.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_5" id="checkbox" onclick="javascript:trade.reqSelect(5);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge6.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_6" id="checkbox" onclick="javascript:trade.reqSelect(6);" />
                            	</div>
                        	</div>
                        	
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge9.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_9" id="checkbox" onclick="javascript:trade.reqSelect(9);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge8.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_8" id="checkbox" onclick="javascript:trade.reqSelect(8);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge7.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_7" id="checkbox" onclick="javascript:trade.reqSelect(7);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge10.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_10" id="checkbox" onclick="javascript:trade.reqSelect(10);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge11.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_11" id="checkbox" onclick="javascript:trade.reqSelect(11);" />
                            	</div>
                        	</div>
                        	<div class="badge-box">
                        		<div class="badge-img">
                            		<img src="images/badge/badge12.png" />
                            	</div>
                            	<div class="badge-cek">
                            		 <input type="checkbox" name="req_12" id="checkbox" onclick="javascript:trade.reqSelect(12);" />
                            	</div>
                        	</div>
    					</div>
    					<div class="controlTrade">
    						<img alt="Trade" src="images/content/arrow.png">
    						<input class="request" type="submit" value="">
    					</div>
    					</form>
    				</div>
    			</div>
    			
   <!-- POPUP 2  -->
    			<div id="badgeRequest" class="badge-box-medium">
    				<div class="contentBadge">
    					<a class="popup-close toggleBox2"></a>
    					<div class="head" style="border: 0 none;">
    						<h1>confirm badge request</h1>
    					</div>
    					<form id="formRequestTradeConfirm" action="#">
    					<img id="confirmMineImg" class="kiri" alt="mine" src="images/badge/badge9-big.png">
    					<img id="confirmYourImg" class="kanan" alt="yours" src="images/badge/badge12-big.png">
    					<div class="controlTrade">
    						<img alt="Trade" src="images/content/arrow.png">
    						<input class="submitted btn-setup" type="submit" value="">
    					</div>
    					</form>
    				</div>
    			</div>
    <!-- POPUP 3  -->
    			<div id="badgeSubmitted" class="badge-box-medium">
    				<div class="contentBadge">
    					<a class="popup-close toggleBox3"></a>
    					<div class="head" style="border: 0 none;">
    						<h1>your request has been submitted!</h1>
    						<p>It has also been posted on the site</p>
    					</div>
    					<form id="formSubmitted" action="index.php?page=code&act=traderequestmatch">
    					<div class="controlTrade">
    						<input type="hidden" name="page" value="code">
    						<input type="hidden" name="act" value="traderequestmatch">
							<input type="hidden" name="want" value="">
							<input type="hidden" name="badge" value="">
    						<input type="submit" value="">
    					</div>
    					</form>
    				</div>
    			</div>
    			
    		</div>
    	</div>
    </div><!-- #content -->
    <script>
    <?php echo '
    $("a#openListBadge").click( function() {
          $(".listBadgeTrade").fadeIn("slow");
  		});
    $("a.mainList").click( function() {
        $(".listBadgeTrade").fadeOut("slow");
		});
	
	/*	
    $(".request").click( function() {
        $(".requestBadge").fadeOut("slow");
        $("#badgeRequest").fadeIn("slow");
		});
	*/
	
    $(".toggleBox2").click( function() {
        $("#badgeRequest").fadeOut("slow");
		});
/*		
    $(".submitted").click( function() {
        $("#badgeRequest").fadeOut("slow");
        $("#badgeSubmitted").fadeIn("slow");
		});
*/
    $(".toggleBox3").click( function() {
        $("#badgeSubmitted").fadeOut("slow");
		});
    '; ?>

    </script>
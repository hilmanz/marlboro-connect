<?php /* Smarty version 2.6.13, created on 2011-12-05 04:17:44
         compiled from marlboro/admin/dashboard.html */ ?>
<script src="js/charts/highcharts.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/dynDateTime/jquery.dynDateTime.js"></script>
<script type="text/javascript" src="../js/dynDateTime/lang/calendar-en.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="../js/dynDateTime/css/calendar-win2k-cold-1.css"  />
<?php echo '
<script type="text/javascript">

var charthitpage;
var chartredeem;
var chartredeemsba;
var chartloginkota;

jQuery(document).ready(function() {
	jQuery("#date").dynDateTime();
	jQuery("#date2").dynDateTime(); //defaults
	
			
			function loadDataXML(param){
				
				var options = null;
				options = {
					chart: {
						renderTo: \'chart-container-1\',
						type: \'line\'
					},
					credits: {
				        enabled: false
				    },
					title: {
						text: \' \'
					},
					xAxis: {
						categories: []
					},
					yAxis: {
						title: {
							text: \'Units\'
						}
					},
					series: []
				};
				
				// Load the data from the XML file 
				$.get(\'index.php?s=reporting&xml=1\'+param, function(xml) {
					
					// Split the lines
					var $xml = $(xml);
					
					// push categories
					$xml.find(\'categories item\').each(function(i, category) {
						options.xAxis.categories.push($(category).text());
					});
					
					// push series
					$xml.find(\'series\').each(function(i, series) {
						var seriesOptions = {
							name: $(series).find(\'name\').text(),
							data: []
						};
						
						// push data points
						$(series).find(\'data point\').each(function(i, point) {
							seriesOptions.data.push(
								parseInt($(point).text())
							);
						});
						
						// add it to the options
						options.series.push(seriesOptions);
					});
					var chart = null;
					chart = new Highcharts.Chart(options);
				});
			}
			
			loadDataXML(\'&sort[]=1&sort[]=3&sort[]=4\');
			
			//form
			$(\'#dataFilter\').submit(function(){
				var param = \'\';
				var logins = $(\'#logins\').is(\':checked\');
				var active = $(\'#active\').is(\':checked\');
				var badges = $(\'#badges\').is(\':checked\');
				var trades = $(\'#trades\').is(\':checked\');
				var start = $(\'#date\').val();
				var end = $(\'#date2\').val();
				
				if(start != \'\' && start != \'StartDate\'){
					param += \'&start=\'+start;
				}
				if(end != \'\' && end != \'EndDate\'){
					param += \'&end=\'+end;
				}
				
				if(logins){
					param += \'&sort[]=1\';
				}
				if(active){
					param += \'&sort[]=2\';
				}
				if(badges){
					param += \'&sort[]=3\';
				}
				if(trades){
					param += \'&sort[]=4\';
				}
				
				loadDataXML(param);
				return false;
			});
					
					//chart hit page
					/*
					var optionHitpage = {
						chart: {
							renderTo: \'chart-hitpage\',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						credits: {
					        enabled: false
					    },
						title: {
							text: \'HIT PAGE\'
						},
						tooltip: {
							formatter: function() {
								return \'<b>\'+ this.point.name +\'</b>: \'+ this.y +\' %\';
							}
						},
						plotOptions: {
							pie: {
								allowPointSelect: true,
								cursor: \'pointer\',
								dataLabels: {
									enabled: false
								},
								showInLegend: false
							}
						},
						series: [{
							type: \'pie\',
							name: \'Browser share\'
						}]
					};
				var optionHitpageData={type: \'pie\',name: \'Browser share\',data:[]};
				optionHitpageData.data.push( ';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['hitpage']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_sections['i']['index'] > 0): ?>,<?php endif; ?>['<?php echo $this->_tpl_vars['hitpage'][$this->_sections['i']['index']]['page']; ?>
', <?php echo $this->_tpl_vars['hitpage'][$this->_sections['i']['index']]['persen']; ?>
]<?php endfor; endif;  echo ' );
				optionHitpage.series.push(optionHitpageData);
				charthitpage = new Highcharts.Chart(optionHitpage);
				*/
				
				//chart redeem
				var optionRedeem = {
					chart: {
						renderTo: \'chart-redeem\',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					credits: {
				        enabled: false
				    },
					title: {
						text: \'REDEEM CHANNEL\'
					},
					tooltip: {
						formatter: function() {
							return \'<b>\'+ this.point.name +\'</b>: \'+ this.y +\' %\';
						}
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: \'pointer\',
							
							dataLabels: {
								enabled: false
								/*
								  color: \'#333333\',
								   connectorColor: \'#333333\',
								   formatter: function() {
									  return \'<b>\'+ this.point.name +\'</b>: \'+ this.y +\' %\';
								   }
								   */
							},
							
							showInLegend: false
						}
					},
				    series: [{
						type: \'pie\',
						name: \'Browser share\',
						data: []
					}]
				};
				var optionRedeemData={type: \'pie\',name: \'Browser share\',data:[]};
				optionRedeemData.data.push( ';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['redeemchannel']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_sections['i']['index'] > 0): ?>,<?php endif; ?>['<?php echo $this->_tpl_vars['redeemchannel'][$this->_sections['i']['index']]['channel_name']; ?>
 (<?php echo $this->_tpl_vars['redeemchannel'][$this->_sections['i']['index']]['total_redeem']; ?>
)', <?php echo $this->_tpl_vars['redeemchannel'][$this->_sections['i']['index']]['persen']; ?>
]<?php endfor; endif;  echo ' );
				optionRedeem.series.push(optionRedeemData);
				chartredeem = new Highcharts.Chart(optionRedeem);
				
			
				//chart redeem sba
				/*
				chartredeemsba = new Highcharts.Chart({
					chart: {
						renderTo: \'chart-redeem-sba\',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: \'REDEEM SBA & DST\'
					},
					tooltip: {
						formatter: function() {
							return \'<b>\'+ this.point.name +\'</b>: \'+ this.y +\' %\';
						}
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: \'pointer\',
							dataLabels: {
								enabled: false
							},
							showInLegend: false
						}
					},
				    series: [{
						type: \'pie\',
						name: \'Browser share\',
						data: []
					}]
				});
				*/
				
				//chart login kota
				var optionLoginKota = {
					chart: {
						renderTo: \'chart-login-kota\',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					credits: {
				        enabled: false
				    },
					title: {
						text: \'CITY LOGIN\'
					},
					tooltip: {
						formatter: function() {
							return \'<b>\'+ this.point.name +\'</b>: \'+ this.y +\' %\';
						}
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: \'pointer\',
							dataLabels: {
								enabled: false
							},
							showInLegend: false
						}
					},
				    series: [{
						type: \'pie\',
						name: \'Browser share\'
					}]
				};
				var optionLoginKotaData={type: \'pie\',name: \'Browser share\',data:[]};
				optionLoginKotaData.data.push( ';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['logincity']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_sections['i']['index'] > 0): ?>,<?php endif; ?>['<?php echo $this->_tpl_vars['logincity'][$this->_sections['i']['index']]['city']; ?>
', <?php echo $this->_tpl_vars['logincity'][$this->_sections['i']['index']]['persen']; ?>
]<?php endfor; endif;  echo ' );
				optionLoginKota.series.push(optionLoginKotaData);
				chartloginkota = new Highcharts.Chart(optionLoginKota);
				
				
			function loadDST(city)
			{
				//DTS
				var optionDTS = {
					chart: {
						renderTo: \'chart-container-2\',
						defaultSeriesType: \'column\'
						/*type:\'line\'*/
					},
					credits: {
				        enabled: false
				    },
				    
					title: {
						text: \'REDEEM SBA & DST\'
					},
					subtitle: {
						text: \'\'
					},
					
					xAxis: {
						categories: []
					},
					/*
					xAxis: {
						categories: [';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dtscat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_sections['i']['index'] > 0): ?>,<?php endif; ?>'<?php echo $this->_tpl_vars['dtscat'][$this->_sections['i']['index']]['tgl']; ?>
'<?php endfor; endif;  echo ']
					},
					*/
					yAxis: {
						/*min: 0,*/
						title: {
							text: \'Total\'
						}
					},
					/*
					legend: {
						layout: \'vertical\',
						backgroundColor: \'#FFFFFF\',
						align: \'left\',
						verticalAlign: \'top\',
						x: 100,
						y: 70,
						floating: true,
						shadow: true
					},
					*/
					tooltip: {
						formatter: function() {
							return \'\'+
								\'<b>\'+this.x +\'</b>: \'+ this.y;
						}
					},
					
					/*
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
					*/
					series: []
					/*
				        series: [{
						name: \'Tokyo\',
						data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
				
					}, {
						name: \'New York\',
						data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
				
					}, {
						name: \'London\',
						data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
				
					}, {
						name: \'Berlin\',
						data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
				
					}]
					*/
				};
				
				//var chartDTS = new Highcharts.Chart(optionDTS);
				
				// Load the data from the XML file 
				$.get(\'index.php?s=reporting&act=xmlDSTData&city=\'+city, function(xml) {
					
					// Split the lines
					var $xml = $(xml);
					
					// push categories
					$xml.find(\'categories item\').each(function(i, category) {
						optionDTS.xAxis.categories.push($(category).text());
					});
					
					// push series
					$xml.find(\'series\').each(function(i, series) {
						var seriesOptions = {
							name: $(series).find(\'name\').text(),
							data: []
						};
						
						// push data points
						$(series).find(\'data point\').each(function(i, point) {
							seriesOptions.data.push(
								parseInt($(point).text())
							);
						});
						
						// add it to the options
						optionDTS.series.push(seriesOptions);
					});
					var chartDTS = new Highcharts.Chart(optionDTS);
				});
			}
			
	
	function loadDataChart(param,id,judul){
				
				var options = null;
				options = {
					chart: {
						renderTo: id,
						type: \'column\'
					},
					credits: {
				        enabled: false
				    },
					title: {
						text: judul
					},
					tooltip: {
						formatter: function() {
							return \'<b>\'+ this.series.name +\'</b>: \'+ this.y;
						}
					},
					xAxis: {
						categories: []
					},
					yAxis: {
						title: {
							text: \'Units\'
						}
					},
					series: []
				};
				
				// Load the data from the XML file 
				$.get(param, function(xml) {
					
					// Split the lines
					var $xml = $(xml);
					
					// push categories
					$xml.find(\'categories item\').each(function(i, category) {
						options.xAxis.categories.push($(category).text());
					});
					
					// push series
					$xml.find(\'series\').each(function(i, series) {
						var seriesOptions = {
							name: $(series).find(\'name\').text(),
							data: []
						};
						
						// push data points
						$(series).find(\'data point\').each(function(i, point) {
							seriesOptions.data.push(
								parseInt($(point).text())
							);
						});
						
						// add it to the options
						options.series.push(seriesOptions);
					});
					var chart = null;
					chart = new Highcharts.Chart(options);
				});
			}
			
			loadDataChart(\'index.php?s=reporting&act=dataxmlhitpage\',\'chart-hitpage\',\'HIT PAGE\');
			loadDataChart(\'index.php?s=reporting&act=dataxmlcitylogin\',\'chart-login-kota\',\'CITY LOGIN\');
			
			loadDST(\'mdn\');
			
			$(\'#s-dst\').change(function(){
				if($(this).val() != \'\'){
					loadDST($(this).val());
				}
			});
	
			
});
</script>
'; ?>

<div id="contents">

  <div id="title-bar">
    <h2>Campaign Central</h2>
    <hr>
	
			<div class="box">
				<div class="box-title"><strong>Total Code Generated</strong></div>
				<div class="box-value orange"><?php echo $this->_tpl_vars['total_code_generated']; ?>
</div>
			</div>
			<div class="box">
				<div class="box-title"><strong>Total Code Redeemed</strong></div>
				<div class="box-value darkblue"><?php echo $this->_tpl_vars['total_code_redeemed']; ?>
</div>
			</div>
			
			<div style="clear:both;margin-bottom:50px;"></div>
	
    Last Update : 11 - October - 2011 
    <form id="dataFilter">   
    <table border="0" align="right">
      <tr>
        <td><input type="checkbox" name="logins" id="logins" checked="checked" />Logins</td>
        <!--<td><input type="checkbox" name="active" id="active" checked="checked" />Active User</td>-->
        <td><input type="checkbox" name="badges" id="badges" checked="checked" />Badges Disbursed</td>
        <td><input type="checkbox" name="trades" id="trades" checked="checked" />Trades Complete</td>
        <td>        
        <input id="date" type="text" name="sd" class="select-date" readonly="readonly" value="StartDate" />
        <input id="date2" type="text" name="ed" class="select-date"  readonly="readonly" value="EndDate" />
        <input class="go" type="submit" name="go" id="go" value="GO" /></td>
        <td>
        </td>
      </tr>
    </table>
    </form>
  </div>

    <div id="contents" style="margin-top:50px">
    	         <div class="content">
                	<div id="grafik-list">
                        <div id="" class="grafik box2">
							<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_chart'" />
							<div id="chart-container-1"></div>
						</div>
						
						<div class="info-bar-overall" style="display:inline-block;margin-top:30px;">
							<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_badge'" />
							<?php $this->assign('num', 4); ?>
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['badge']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<?php if ($this->_tpl_vars['num'] == 4): ?>
								<?php $this->assign('warna', 'red'); ?>
							<?php elseif ($this->_tpl_vars['num'] == 3): ?>
								<?php $this->assign('warna', 'green'); ?>
							<?php elseif ($this->_tpl_vars['num'] == 2): ?>
								<?php $this->assign('warna', 'orange'); ?>
							<?php elseif ($this->_tpl_vars['num'] == 1): ?>
								<?php $this->assign('warna', 'darkblue'); ?>
							<?php elseif ($this->_tpl_vars['num'] == 0): ?>
								<?php $this->assign('warna', 'red'); ?>
								<?php $this->assign('num', 4); ?>
							<?php endif; ?>
								<div class="info-list box">
									<div class="box-title"><strong><?php echo $this->_tpl_vars['badge'][$this->_sections['i']['index']]['badgeName']; ?>
</strong></div>
									<div><img src="../images/badge/badge<?php echo $this->_tpl_vars['badge'][$this->_sections['i']['index']]['badge_id']; ?>
.png" /></div>
									<div class="box-value2 <?php echo $this->_tpl_vars['warna']; ?>
"><?php echo $this->_tpl_vars['badge'][$this->_sections['i']['index']]['total']; ?>
/<?php echo $this->_tpl_vars['badge'][$this->_sections['i']['index']]['persen']; ?>
%</div>
								</div>
							<?php $this->assign('num', $this->_tpl_vars['num']-1); ?>
							<?php endfor; endif; ?>
						</div> 
						
						<div id="" class="grafik box2" style="margin-top:30px">
							<select id="s-dst">
								<option value="mdn">Medan</option>
								<option value="jog">Yogyakarta</option>
								<option value="bdg">Bandung</option>
								<option value="jkt">Jakarta</option>
								<option value="dps">Denpasar</option>
							</select>
							<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_sba_dst'" />
							<div id="chart-container-2"></div>
						</div>
					</div>
                    
					<div id="" class="grafik box2" style="margin-top:30px">
						<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_hitpage'" />
						<div id="chart-hitpage"></div>
					</div>
					
					<div id="" class="grafik box2" style="margin-top:30px">
						<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_login_kota'" />
						<div id="chart-login-kota"></div>
					</div>
					
                	<div style="display:inline-block; margin-top:30px; margin-bottom:30px;">
						<input type="button" value=" Export To Excel" style="clear:both;display:block;" onclick="javascript:document.location.href='index.php?s=reporting&act=getCSV&data=dashboard_redeem'" />
						<div id="chart-redeem" class="gtab" style="width: 300px; height: 300px; margin: 0 auto;display:inline-block; margin-right:20px;"></div>
						<!--<div id="chart-redeem-sba" class="gtab" style="width: 285px; height: 285px; margin: 0 auto"></div>--> 
						<!--<div id="chart-login-kota" class="gtab" style="width: 285px; height: 285px; margin: 0 auto;display:inline-block; margin-right:20px;"></div>-->
				</div>
	</div>
	
</div></div>
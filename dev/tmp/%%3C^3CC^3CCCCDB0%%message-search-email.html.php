<?php /* Smarty version 2.6.13, created on 2011-12-05 04:17:44
         compiled from marlboro/admin/message-search-email.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'marlboro/admin/message-search-email.html', 1, false),)), $this); ?>
<div style="padding:10px;"><h2>Message Management</h2><hr><table width="100%" border="0" cellspacing="0" cellpadding="0" class="addlist zebra">  <tr class="head">    <td><strong>Search Email</strong></td>  </tr>  <tr>    <td>		<form>			<input type="hidden" name="s" value="message" />			<input type="text" name="email" />			<input type="submit" value="search" />		</form>	</td>	</tr>	<?php if ($this->_tpl_vars['rs']): ?>	<tr>		<td>			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="addlist zebra">				<tr class="head">					<td>Name</td>					<td>Email</td>					<td>Action</td>				</tr>				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>					<tr>						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['rs'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['rs'][$this->_sections['i']['index']]['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>						<td><a href="index.php?s=message&act=send&id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['id']; ?>
">Send Message</a></td>					</tr>				<?php endfor; endif; ?>			</table>		</td>	</tr>	<?php endif; ?></table></div>
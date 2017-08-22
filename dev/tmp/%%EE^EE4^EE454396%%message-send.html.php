<?php /* Smarty version 2.6.13, created on 2011-12-05 04:17:31
         compiled from marlboro/admin/message-send.html */ ?>
<div style="padding:10px;">
<h2>Send Message</h2>
<hr>
<form>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="addlist zebra">
  <tr>
    <td>Subject</td>
	<td><input type="text" name="subject" maxlength="50" /></td>
  </tr>
  <tr>
    <td valign="top">Message</td>
	<td><textarea name="text" cols="10" rows="6" style="width:400px; height:200px;"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
		<input type="hidden" name="s" value="message" />
		<input type="hidden" name="act" value="send" />
		<input type="hidden" name="send" value="1" />
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
		<input type="submit" value=" Send " />
	</td>
  </tr>
</table>
</form>
</div>
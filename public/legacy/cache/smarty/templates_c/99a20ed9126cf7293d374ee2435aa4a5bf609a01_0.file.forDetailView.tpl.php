<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:01:20
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\include\SugarEmailAddress\templates\forDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f64570cda583_30327722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a20ed9126cf7293d374ee2435aa4a5bf609a01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\SugarEmailAddress\\templates\\forDetailView.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f64570cda583_30327722 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailAddresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
				<tr>
					<td style="border:none;">
						<?php if ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out' || $_smarty_tpl->tpl_vars['address']->value['key'] === 'invalid' || $_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out_invalid') {?>
							<span style="text-decoration: line-through;">
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'primary') {?>
							<b>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'reply_to' && ((isset($_smarty_tpl->tpl_vars['item']->value['key'])) && $_smarty_tpl->tpl_vars['item']->value['key'] != 0)) {?>
							<i>
						<?php }?>

						<?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>


						<?php if ($_smarty_tpl->tpl_vars['address']->value['key'] === 'primary') {?>
							</b>&nbsp;<i>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_PRIMARY'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'reply_to') {?>
							&nbsp;<i>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_REPLY_TO'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out') {?>
							</span>&nbsp;<i class='error'>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'invalid') {?>
							</span>&nbsp;<i>(<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_INVALID'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out_invalid') {?>
						    </span>&nbsp;<i class='error'>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT_AND_INVALID'];?>
&#x29;&#x200E;</i>
						<?php }?>
					</td>
				</tr>
				<?php
}
if ($_smarty_tpl->tpl_vars['address']->do_else) {
?>
				<tr>
					<td>
						<i><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_NONE'];?>
</i>
					</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
<?php }
}

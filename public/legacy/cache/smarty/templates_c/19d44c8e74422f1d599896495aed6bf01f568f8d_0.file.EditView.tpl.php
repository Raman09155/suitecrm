<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:18:14
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\modules\ACLRoles\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f64966c78d83_94081412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d44c8e74422f1d599896495aed6bf01f568f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\modules\\ACLRoles\\EditView.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f64966c78d83_94081412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>


<?php echo '<script'; ?>
>

function set_focus(){
	document.getElementById('name').focus();
}

<?php echo '</script'; ?>
>
<div class="role-manager-create">
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

<form method='POST' name='EditView' action='index.php'>
<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0 class="actionsContainer">
<tbody>
<tr>
<td>
<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='<?php echo $_smarty_tpl->tpl_vars['ISDUPLICATE']->value;?>
'>
<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'> &nbsp;	
<?php echo smarty_function_sugar_action_menu(array('id'=>"roleEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_MENU']->value,'flat'=>true),$_smarty_tpl);?>

</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="edit view"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
:<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td><td >
<input id='name' name='name' type='text' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['name'];?>
'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCRIPTION'];?>
:</td>
<td ><textarea name='description' cols="80" rows="8"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value['description'];?>
</textarea></td>
</tr>
</table>

</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
');
<?php echo '</script'; ?>
><?php }
}

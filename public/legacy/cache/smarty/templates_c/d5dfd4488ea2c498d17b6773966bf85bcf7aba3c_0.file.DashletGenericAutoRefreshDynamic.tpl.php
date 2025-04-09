<?php
/* Smarty version 4.5.3, created on 2025-04-09 13:05:41
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\include\Dashlets\DashletGenericAutoRefreshDynamic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f6548548b8d4_93227954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5dfd4488ea2c498d17b6773966bf85bcf7aba3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Dashlets\\DashletGenericAutoRefreshDynamic.tpl',
      1 => 1738223968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f6548548b8d4_93227954 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset" name="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset" value="0">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval" name="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval" value="<?php echo $_smarty_tpl->tpl_vars['dashletRefreshInterval']->value;?>
">
<?php echo '<script'; ?>
 type='text/javascript'>
<!--
document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset").value = "<?php echo $_smarty_tpl->tpl_vars['dashletOffset']->value;?>
";
document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval").value = "<?php echo $_smarty_tpl->tpl_vars['dashletRefreshInterval']->value;?>
";
if (typeof autoRefreshProcId<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
 != 'undefined') {
    clearInterval(autoRefreshProcId<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
);
}
if(document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval").value > 0) {
    if (typeof refreshDashlet<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
 == 'undefined') {
        function refreshDashlet<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
() 
        {
            //refresh only if offset is 0
            if (SUGAR.mySugar && document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset") !== null && document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset").value == '0' ) {
                SUGAR.mySugar.retrieveDashlet("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
");
            }
        }
    }
    autoRefreshProcId<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
 = setInterval('refreshDashlet<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
()', document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval").value);
}
-->
<?php echo '</script'; ?>
><?php }
}

<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:22:48
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\modules\Import\tpls\wizardWrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f64a78ca9696_18042849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b1dc03d459b540a926c6f9081736a985e5cdc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\modules\\Import\\tpls\\wizardWrapper.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f64a78ca9696_18042849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>

<style>

.moduleTitle h2
{
    font-size: 18px;
}

</style>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<div class="dashletPanelMenu wizard">
    <div class="bd">
            <div class="screen">
                <?php echo $_smarty_tpl->tpl_vars['MODULE_TITLE']->value;?>

                <br>
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
    </div>
</div>

<?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

<?php echo '</script'; ?>
><?php }
}

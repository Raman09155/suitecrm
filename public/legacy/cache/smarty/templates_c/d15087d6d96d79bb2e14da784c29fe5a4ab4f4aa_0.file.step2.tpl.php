<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:22:48
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\modules\Import\tpls\step2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f64a787265b3_48807451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15087d6d96d79bb2e14da784c29fe5a4ab4f4aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\modules\\Import\\tpls\\step2.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f64a787265b3_48807451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>


<style>

.link {
    text-decoration:underline
}
</style>



<?php echo $_smarty_tpl->tpl_vars['INSTRUCTION']->value;?>


<div class="hr"></div>

<form enctype="multipart/form-data" name="importstep2" method="POST" action="index.php" id="importstep2">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="custom_delimiter" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_DELIMITER']->value;?>
">
<input type="hidden" name="custom_enclosure" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_ENCLOSURE']->value;?>
">
<input type="hidden" name="source" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
">
<input type="hidden" name="source_id" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_ID']->value;?>
">
<input type="hidden" name="action" value="Confirm">
<input type="hidden" name="current_step" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_STEP']->value;?>
">
<input type="hidden" name="import_module" value="<?php echo $_smarty_tpl->tpl_vars['IMPORT_MODULE']->value;?>
">
<input type="hidden" name="from_admin_wizard" value="<?php echo $_REQUEST['from_admin_wizard'];?>
">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" scope="row" colspan="4" style="padding-top: 0.5em;"><?php echo $_smarty_tpl->tpl_vars['SAMPLE_URL']->value;?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_SAMPLE_URL_HELP']),$_smarty_tpl);?>
</td>
        </tr>        
        <tr>
            <td scope="row" colspan="4">&nbsp;</td>
        </tr>
        <tr>
            <td align="left" scope="row" colspan="3">
                <div>
                    <label for="userfile"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SELECT_FILE'];?>
</label>
                </div> 
                <div>
                    <input type="hidden" /><input size="20" id="userfile" name="userfile" type="file"/><?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_FILE_UPLOAD_WIDGET_HELP']),$_smarty_tpl);?>

                </div> 
                <div style="margin-bottom: 0.5em;">
                    <span class="small"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOGGER_VALID_FILENAME_CHARACTERS'];?>
</span>
                </div>
            </td>
        </tr>
        <tr>
            <td scope="row" colspan="4"><div class="hr">&nbsp;</div></td>
        </tr>
        <tr>
            <td scope="row" colspan="4">&nbsp;</td>
        </tr>
        <tr>
            <td scope="row" colspan="3">
                <h3><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_IMPORT_TYPE'];?>
&nbsp;</h3></td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input id="import_create" class="radio" type="radio" name="type" value="import" checked="checked" />
                &nbsp;<label for="type"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_IMPORT_BUTTON'];?>
</label> &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_BUTTON_HELP']),$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input id="import_update" class="radio" type="radio" name="type" id="type" value="update" />
                &nbsp;<label for="type"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_UPDATE_BUTTON'];?>
</label> &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_UPDATE_BUTTON_HELP']),$_smarty_tpl);?>

            </td>
          </tr>
	</table>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_mappings']->value, 'item', false, NULL, 'custommappings', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'mapping_label', null);
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CUSTOM_MAPPING_'];
echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['item']->value ?? '', 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" id="source" name="source" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
              &nbsp;<label for="source"><?php echo $_smarty_tpl->tpl_vars['mapping_label']->value;?>
</label></td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <?php if (!empty($_smarty_tpl->tpl_vars['custom_imports']->value) || !empty($_smarty_tpl->tpl_vars['published_imports']->value)) {?>
          <tr>
            <td scope="row" colspan="3">
                <h3><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISHED_SOURCES'];?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['savedMappingHelpText']->value),$_smarty_tpl);?>
</h3></td>
          </tr>
          
          <tr id="custom_import_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index'] : null);?>
">
            <td scope="row" colspan="4">
                <input class="radio" type="radio" name="source" value=""/>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NONE'];?>

            </td>

          </tr>
          <?php }?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_imports']->value, 'item', false, 'key', 'saved', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index']++;
?>
          <tr id="custom_import_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index'] : null);?>
">
            <td scope="row" colspan="2" style="padding-right: 10px;">
                <input class="radio" type="radio" name="source" value="custom:<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
"/>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_NAME'];?>

                <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                <input type="button" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISH'];?>
" class="button" publish="yes"
                    onclick="publishMapping(this, 'yes','<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
', '<?php echo $_smarty_tpl->tpl_vars['IMPORT_MODULE']->value;?>
');">
                <?php }?>
                <input type="button" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DELETE'];?>
" class="button"
					onclick="if(confirm('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DELETE_MAP_CONFIRMATION'];?>
')){ deleteMapping('custom_import_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_saved']->value['index'] : null);?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
', '<?php echo $_smarty_tpl->tpl_vars['IMPORT_MODULE']->value;?>
' );}">
            </td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['published_imports']->value, 'item', false, 'key', 'published', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_published']->value['index']++;
?>
          <tr id="published_import_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_published']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_published']->value['index'] : null);?>
">
            <td scope="row" colspan="2">
                <input class="radio" type="radio" name="source" value="custom:<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
"/>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_NAME'];?>

            </td>
            <td scope="row">
                <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                <input type="button" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_UNPUBLISH'];?>
" class="button" publish="no"
                    onclick="publishMapping(this, 'no','<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
', '<?php echo $_smarty_tpl->tpl_vars['IMPORT_MODULE']->value;?>
');">
                <input type="button" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DELETE'];?>
" class="button"
                    onclick="if(confirm('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DELETE_MAP_CONFIRMATION'];?>
')){deleteMapping('published_import_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_published']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_published']->value['index'] : null);?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['IMPORT_ID'];?>
' );}">
                <?php }?>
            </td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</td>
</tr>
</table>

<br>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td align="left">
        <?php if ($_smarty_tpl->tpl_vars['displayBackBttn']->value) {?>
            <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BACK'];?>
"  class="button" type="submit" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BACK'];?>
  " id="goback">&nbsp;
        <?php }?>
      <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
"  class="button" type="submit" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
  " id="gonext">
    </td>
</tr>
</table>
<?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

<?php echo '</script'; ?>
>
</form>
<?php }
}

<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:00:28
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\cache\themes\suite8\modules\Calls\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f6453c73adc2_74160776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2fcd1d4da268e4120b8ca6450a9e0b6f0a9ae6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\cache\\themes\\suite8\\modules\\Calls\\DetailView.tpl',
      1 => 1744192828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f6453c73adc2_74160776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),3=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),5=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.convert_link.php','function'=>'smarty_function_convert_link',),6=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>

<div class="detail-border-bottom"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value)) && (isset($_smarty_tpl->tpl_vars['fields']->value['recurring_source'])) && $_smarty_tpl->tpl_vars['fields']->value['recurring_source']['value'] != '' && $_smarty_tpl->tpl_vars['fields']->value['recurring_source']['value'] != 'Sugar') {?>
<div class="clear"></div>
<div class="error"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SYNCED_RECURRING_MSG'];?>
</div>
<?php }?>

<?php echo '<script'; ?>
 language="javascript">
    
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<input type="hidden" name="isSaveAndNew">
<input type="hidden" name="status">
<input type="hidden" name="isSaveFromDetailView">
<input type="hidden" name="isSave">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['enable_action_menu']) {?>
<br />
<b>Deprecated</b>:  Using unregistered function "count" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\SuiteCRM\vendor\smarty\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php</b> on line <b>663</b><br />
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=Calls&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=Calls&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"/>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=Calls&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=Calls&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&isDuplicate=true'"/>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Calls'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held" && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_AND_CREATE_BUTTON_TITLE'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.isSaveFromDetailView.value=true; _form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isDuplicate.value=true;_form.isSaveAndNew.value=true;_form.return_action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
';window.location.href='index.php?' + (new URLSearchParams(new FormData(_form)).toString());" name="button" id="close_create_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_AND_CREATE_BUTTON_TITLE'];?>
"/><?php }
if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held" && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_TITLE'];?>
" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isSave.value=true;_form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
';_form.isSaveFromDetailView.value=true;window.location.href='index.php?' + (new URLSearchParams(new FormData(_form)).toString());" name="button1" id="close_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_TITLE'];?>
"/><?php }
if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held") {?><input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESCHEDULE'];?>
" class="button" onclick="get_form();" name="Reschedule" id="reschedule_button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESCHEDULE'];?>
" type="button"/><?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Calls", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
<?php }?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>

<ul class="nav nav-tabs">


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CALL_INFORMATION','module'=>'Calls'),$_smarty_tpl);?>

</a>


<a id="xstab0" href="#" class="visible-xs first-tab-xs dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CALL_INFORMATION','module'=>'Calls'),$_smarty_tpl);?>

</a>
<ul id="first-tab-menu-xs" class="dropdown-menu">
<li role="presentation">
<a id="tab1" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-1');">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CALL_INFORMATION','module'=>'Calls'),$_smarty_tpl);?>

</a>
</li>
<li role="presentation">
<a id="tab2" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-2');">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RESCHEDULE_PANEL','module'=>'Calls'),$_smarty_tpl);?>

</a>
</li>
<li role="presentation">
<a id="tab3" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-3');">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ASSIGNMENT','module'=>'Calls'),$_smarty_tpl);?>

</a>
</li>
</ul>
</li>


<li role="presentation" class="hidden-xs">
<a id="tab1" data-toggle="tab">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RESCHEDULE_PANEL','module'=>'Calls'),$_smarty_tpl);?>

</a>
</li>


<li role="presentation" class="hidden-xs">
<a id="tab2" data-toggle="tab">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ASSIGNMENT','module'=>'Calls'),$_smarty_tpl);?>

</a>
</li>
<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<br />
<b>Deprecated</b>:  Using unregistered function "count" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\SuiteCRM\vendor\smarty\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php</b> on line <b>663</b><br />
<ul class="dropdown-menu">
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=Calls&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=Calls&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"/>
<?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=Calls&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=Calls&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&isDuplicate=true'"/>
<?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Calls'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held" && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_AND_CREATE_BUTTON_TITLE'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.isSaveFromDetailView.value=true; _form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isDuplicate.value=true;_form.isSaveAndNew.value=true;_form.return_action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
';window.location.href='index.php?' + (new URLSearchParams(new FormData(_form)).toString());" name="button" id="close_create_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_AND_CREATE_BUTTON_TITLE'];?>
"/><?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held" && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_TITLE'];?>
" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.status.value='Held'; _form.action.value='Save';_form.return_module.value='Calls';_form.isSave.value=true;_form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
';_form.isSaveFromDetailView.value=true;window.location.href='index.php?' + (new URLSearchParams(new FormData(_form)).toString());" name="button1" id="close_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLOSE_BUTTON_TITLE'];?>
"/><?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['value'] != "Held") {?><input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESCHEDULE'];?>
" class="button" onclick="get_form();" name="Reschedule" id="reschedule_button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESCHEDULE'];?>
" type="button"/><?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Calls", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?></li>
</ul>
</li>
<li class="tab-inline-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</li>
<?php }?>
</ul>
<div class="clearfix"></div>

<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>
<br />
<b>Deprecated</b>:  Using unregistered function "strpos" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\SuiteCRM\vendor\smarty\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php</b> on line <b>663</b><br />





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="name" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['name']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="direction">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="direction" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['direction']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="direction" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['direction']['options'][$_smarty_tpl->tpl_vars['fields']->value['direction']['value']];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'][$_smarty_tpl->tpl_vars['fields']->value['status']['value']];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_start">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="datetimecombo" field="date_start" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_start']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_start" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_start']['value'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="parent_name">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODULE_NAME','module'=>$_smarty_tpl->tpl_vars['fields']->value['parent_type']['value']),$_smarty_tpl);?>

</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="parent" field="parent_name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['parent_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'url', null);?>index.php?module=<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_type']['value'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_id']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_name']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_name']['value'];?>
">
<input type="hidden" class="sugar_field" id="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_id']['value'];?>
">
<a class="tabDetailViewDFLink" href='<?php echo smarty_function_convert_link(array('link'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>
'><?php echo $_smarty_tpl->tpl_vars['fields']->value['parent_name']['value'];?>
</a>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="duration_hours">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DURATION','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="int" field="duration_hours" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['duration_hours']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="duration_hours" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['duration_hours']['value'];
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOURS_ABBREV'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['duration_minutes']['value'];
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MINSS_ABBREV'];?>
&nbsp;</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="reminders">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_REMINDERS','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="function" field="reminders" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reminders']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='reminders_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['reminders']['value'];?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="description" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="sugar_field" id="<?php echo nl2br((string) url2html(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['name'],'html')), (bool) 1);?>
"><?php echo nl2br((string) url2html(smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'],'html'),'html_entity_decode')), (bool) 1);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="relate" field="assigned_user_name" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="assigned_user_name" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
<div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-1'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="reschedule_history">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_RESCHEDULE_HISTORY','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="varchar" field="reschedule_history" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reschedule_history']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='reschedule_history_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['reschedule_history']['value'];?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<?php echo smarty_function_sugar_getimage(array('name'=>"pencil"),$_smarty_tpl);?>

</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="">
</div>

</div>

</div>
<div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-2'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_entered" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
&nbsp;</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Calls'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_modified" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
&nbsp;</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
</div>

<div class="panel-content">






</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>            <?php echo '<script'; ?>
 type="text/javascript" src="include/InlineEditing/inlineEditing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/Favorites/favorites.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                <?php echo '</script'; ?>
>
<?php }
}

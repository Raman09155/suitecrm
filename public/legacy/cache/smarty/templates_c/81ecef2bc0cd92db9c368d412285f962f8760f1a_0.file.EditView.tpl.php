<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:11:16
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\cache\themes\suite8\modules\AOS_Invoices\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f647c49ecb97_51999524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ecef2bc0cd92db9c368d412285f962f8760f1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\cache\\themes\\suite8\\modules\\AOS_Invoices\\EditView.tpl',
      1 => 1744193476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f647c49ecb97_51999524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_number_format.php','function'=>'smarty_function_sugar_number_format',),7=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),8=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),9=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>

<div class="edit-border-bottom"></div>

<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons action-buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=AOS_Invoices'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=AOS_Invoices", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_OVERVIEW','module'=>'AOS_Invoices'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_PANEL_OVERVIEW">
<div class="tab-content">
<br />
<b>Deprecated</b>:  Using unregistered function "intval" in a template is deprecated and will be removed in a future release. Use Smarty::registerPlugin to explicitly register a custom modifier. in <b>C:\xampp\htdocs\SuiteCRM\vendor\smarty\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php</b> on line <b>663</b><br />
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['name']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="number">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_INVOICE_NUMBER">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INVOICE_NUMBER','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="number"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['fields']->value['number']['value'];?>

</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="quote_number">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_QUOTE_NUMBER">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTE_NUMBER','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="quote_number"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['quote_number']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['quote_number']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['quote_number']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_number']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_number']['name'];?>
' size='30' maxlength='11' value='<?php echo smarty_function_sugar_number_format(array('precision'=>0,'var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'    >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="quote_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_QUOTE_DATE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTE_DATE','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="quote_date"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['quote_date']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_date']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_date']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<span class="datetimeicon" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_date']['name'];?>
_trigger" onclick="return false;">
<?php echo smarty_function_sugar_getimage(array('name'=>"calendar",'attr'=>'border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'])),$_smarty_tpl);?>

</span>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_date']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['quote_date']['name'];?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="due_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DUE_DATE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DUE_DATE','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="due_date"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['due_date']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['due_date']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['due_date']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<span class="datetimeicon" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['due_date']['name'];?>
_trigger" onclick="return false;">
<?php echo smarty_function_sugar_getimage(array('name'=>"calendar",'attr'=>'border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'])),$_smarty_tpl);?>

</span>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['due_date']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['due_date']['name'];?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="invoice_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_INVOICE_DATE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INVOICE_DATE','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="invoice_date"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<span class="datetimeicon" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['name'];?>
_trigger" onclick="return false;">
<?php echo smarty_function_sugar_getimage(array('name'=>"calendar",'attr'=>'border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'])),$_smarty_tpl);?>

</span>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['invoice_date']['name'];?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_id']['value'];?>
">
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}, 
"single", 
true
);' >
<?php echo smarty_function_sugar_getimage(array('name'=>"cursor",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
<button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_TITLE"),$_smarty_tpl);?>
"  class="lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_LABEL"),$_smarty_tpl);?>
" >
<?php echo smarty_function_sugar_getimage(array('name'=>"cross",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['description']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['value']);
}?>
<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVOICE_TO','module'=>'AOS_Invoices'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_INVOICE_TO">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="billing_account">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BILLING_ACCOUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ACCOUNT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="billing_account"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account_id']['value'];?>
">
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"billing_account_id","name":"billing_account","billing_address_street":"billing_address_street","billing_address_city":"billing_address_city","billing_address_state":"billing_address_state","billing_address_postalcode":"billing_address_postalcode","billing_address_country":"billing_address_country","shipping_address_street":"shipping_address_street","shipping_address_city":"shipping_address_city","shipping_address_state":"shipping_address_state","shipping_address_postalcode":"shipping_address_postalcode","shipping_address_country":"shipping_address_country","phone_office":"phone_work"}}, 
"single", 
true
);' >
<?php echo smarty_function_sugar_getimage(array('name'=>"cursor",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
<button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"),$_smarty_tpl);?>
"  class="lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"),$_smarty_tpl);?>
" >
<?php echo smarty_function_sugar_getimage(array('name'=>"cross",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="billing_contact">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BILLING_CONTACT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_CONTACT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="billing_contact"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact_id']['value'];?>
">
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['module'];?>
", 
600, 
400, 
"&account_name="+this.form.<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
.value+"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"billing_contact_id","name":"billing_contact"}}, 
"single", 
true
);' >
<?php echo smarty_function_sugar_getimage(array('name'=>"cursor",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
<button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"),$_smarty_tpl);?>
"  class="lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"),$_smarty_tpl);?>
" >
<?php echo smarty_function_sugar_getimage(array('name'=>"cross",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_contact']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="billing_address_street">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="billing_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Address/SugarFieldAddress.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<fieldset id='BILLING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS','module'=>''),$_smarty_tpl);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="billing_address_street_label" width='25%' scope='row'>
<label for="billing_address_street"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_STREET','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_street']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td width="*">
<textarea id="billing_address_street" name="billing_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_street']['value'];?>
</textarea>
</td>
</tr>
<tr>
<td id="billing_address_city_label" width='10%'
scope='row'>
<label for="billing_address_city"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CITY','module'=>''),$_smarty_tpl);?>
:
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_city" id="billing_address_city" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_state_label" width='10%'
scope='row'>
<label for="billing_address_state"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_state" id="billing_address_state" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_postalcode_label"
width='10%' scope='row'>
<label for="billing_address_postalcode"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_POSTAL_CODE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['help'];?>
' size="30"
maxlength='150'                       value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['value'];?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_country_label" width='10%'
scope='row'>
<label for="billing_address_country"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COUNTRY','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_country" id="billing_address_country" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
</table>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      billing_address = new SUGAR.AddressField("billing_checkbox", '', 'billing');
      });
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="shipping_address_street">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="shipping_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Address/SugarFieldAddress.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<fieldset id='SHIPPING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS','module'=>''),$_smarty_tpl);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="shipping_address_street_label" width='25%' scope='row'>
<label for="shipping_address_street"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_STREET','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_street']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td width="*">
<textarea id="shipping_address_street" name="shipping_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_street']['value'];?>
</textarea>
</td>
</tr>
<tr>
<td id="shipping_address_city_label" width='10%'
scope='row'>
<label for="shipping_address_city"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CITY','module'=>''),$_smarty_tpl);?>
:
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_city" id="shipping_address_city" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_state_label" width='10%'
scope='row'>
<label for="shipping_address_state"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_state" id="shipping_address_state" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_postalcode_label"
width='10%' scope='row'>
<label for="shipping_address_postalcode"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_POSTAL_CODE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_postalcode" id="shipping_address_postalcode" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['help'];?>
' size="30"
maxlength='150'                       value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['value'];?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_country_label" width='10%'
scope='row'>
<label for="shipping_address_country"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COUNTRY','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_country" id="shipping_address_country" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td scope='row' NOWRAP>
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COPY_ADDRESS_FROM_LEFT','module'=>''),$_smarty_tpl);?>
:
</td>
<td>
<input id="shipping_checkbox" name="shipping_checkbox" type="checkbox"
onclick="shipping_address.syncFields();">
</td>
</tr>
</table>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      shipping_address = new SUGAR.AddressField("shipping_checkbox", 'billing', 'shipping');
      });
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LINE_ITEMS','module'=>'AOS_Invoices'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_LINE_ITEMS">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="currency_id">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CURRENCY">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENCY','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="id" field="currency_id" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='currency_id_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['currency_id']['value'];?>

</span>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="line_items">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_LINE_ITEMS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LINE_ITEMS','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="line_items" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='line_items_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['line_items']['value'];?>

</span>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="">
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="total_amt">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TOTAL_AMT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TOTAL_AMT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amt" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['total_amt']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['total_amt']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['total_amt']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['total_amt']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['total_amt']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="discount_amount">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DISCOUNT_AMOUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DISCOUNT_AMOUNT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="discount_amount" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['discount_amount']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['discount_amount']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['discount_amount']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['discount_amount']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['discount_amount']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="subtotal_amount">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SUBTOTAL_AMOUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SUBTOTAL_AMOUNT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="subtotal_amount" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['subtotal_amount']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subtotal_amount']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subtotal_amount']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['subtotal_amount']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['subtotal_amount']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="shipping_amount">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SHIPPING_AMOUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_AMOUNT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="shipping_amount" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['shipping_amount']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['shipping_amount']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['shipping_amount']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_amount']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_amount']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
onblur="calculateTotal('lineItems');">
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="shipping_tax_amt">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SHIPPING_TAX_AMT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_TAX_AMT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="shipping_tax_amt" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='shipping_tax_amt_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_tax_amt']['value'];?>

</span>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="tax_amount">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TAX_AMOUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TAX_AMOUNT','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="tax_amount" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['tax_amount']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tax_amount']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tax_amount']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['tax_amount']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['tax_amount']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="total_amount">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_GRAND_TOTAL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_GRAND_TOTAL','module'=>'AOS_Invoices'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amount" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['total_amount']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['total_amount']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['total_amount']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['total_amount']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['total_amount']['name'];?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_account_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_account', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ACCOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_contact_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_contact', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_CONTACT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_CITY','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STATE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_POSTALCODE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_COUNTRY','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_CITY','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STATE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_POSTALCODE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_COUNTRY','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'number', 'int', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVOICE_NUMBER','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'line_items', 'function', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LINE_ITEMS','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'total_amt', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TOTAL_AMT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'total_amt_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TOTAL_AMT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'subtotal_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBTOTAL_AMOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'subtotal_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBTOTAL_AMOUNT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'discount_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DISCOUNT_AMOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'discount_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DISCOUNT_AMOUNT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tax_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TAX_AMOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tax_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TAX_AMOUNT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_AMOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_AMOUNT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_tax', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_TAX','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_tax_amt', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_TAX_AMT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_tax_amt_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_TAX_AMT_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'total_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GRAND_TOTAL','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'total_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GRAND_TOTAL_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'currency_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENCY','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'quote_number', 'int', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTE_NUMBER','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'quote_date', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTE_DATE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'invoice_date', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVOICE_DATE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'due_date', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DUE_DATE','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'template_ddown_c[]', 'multienum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEMPLATE_DDOWN_C','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'subtotal_tax_amount', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBTOTAL_TAX_AMOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'subtotal_tax_amount_usdollar', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GRAND_TOTAL_USDOLLAR','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'billing_account', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ACCOUNT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
', 'billing_account_id' );
addToValidateBinaryDependency('EditView', 'billing_contact', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_CONTACT','module'=>'AOS_Invoices','for_js'=>true),$_smarty_tpl);?>
', 'billing_contact_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_billing_account']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"populate_list":["EditView_billing_account","billing_account_id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["billing_account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_billing_contact']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["billing_contact","billing_contact_id","billing_contact_id","billing_contact_id"],"required_list":["billing_contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
>
<?php }
}

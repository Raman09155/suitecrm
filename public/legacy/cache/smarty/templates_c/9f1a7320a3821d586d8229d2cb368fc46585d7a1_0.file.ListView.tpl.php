<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:01:05
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\include\SugarFields\Fields\Phone\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f645617046d8_08314254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1a7320a3821d586d8229d2cb368fc46585d7a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\SugarFields\\Fields\\Phone\\ListView.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f645617046d8_08314254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}

<?php
/* Smarty version 4.5.3, created on 2025-04-09 12:18:49
  from 'C:\xampp\htdocs\SuiteCRM\public\legacy\modules\Emails\templates\emailSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67f649895c2647_44767185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8beec79d0c901fde3709aab9d5eb03ba85ea724b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM\\public\\legacy\\modules\\Emails\\templates\\emailSettings.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsGeneral.tpl' => 1,
    'file:modules/Emails/templates/emailSettingsAccounts.tpl' => 1,
  ),
),false)) {
function content_67f649895c2647_44767185 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ydlg-bd">
    <div id="tab_general" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsGeneral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="tab_accounts" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


</div><?php }
}

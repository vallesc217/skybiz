<?php /* Smarty version Smarty-3.1.7, created on 2021-07-14 03:40:35
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/InstalledModules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188372603260ee5cb3b5e484-40225139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25da09598b15d6331eef2f937e5144617f6ae469' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouInstaller/InstalledModules.tpl',
      1 => 1626234006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188372603260ee5cb3b5e484-40225139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'ERROR_MESSAGE' => 0,
    'QUALIFIED_MODULE' => 0,
    'IS_AUTH' => 0,
    'LICENSES_LIST' => 0,
    'LICENSE' => 0,
    'EMPTY_LICENSES' => 0,
    'EMPTY_LICENSE' => 0,
    'MODULE' => 0,
    'EXTENSIONS_LIST' => 0,
    'EXTENSION' => 0,
    'LANGUAGES_LIST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee5cb3bd736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee5cb3bd736')) {function content_60ee5cb3bd736($_smarty_tpl) {?>
<div class="tab-pane active" id="installedModules"><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value){?><div class="col-md-12"><?php  $_smarty_tpl->tpl_vars['ERROR_MESSAGE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->key => $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value){
$_smarty_tpl->tpl_vars['ERROR_MESSAGE']->_loop = true;
?><div><div class="displayInlineBlock alert alert-danger"><?php echo vtranslate($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php } ?></div><?php }elseif(!$_smarty_tpl->tpl_vars['IS_AUTH']->value){?><div style="text-align: center;"><div class="alert alert-danger displayInlineBlock logintoInstaller extensionLoginAlert"><?php echo vtranslate('LBL_LOGIN_TO_INSTALLER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br></div><?php }else{ ?><div class="col-md-12"><h4><?php echo vtranslate('LBL_ACTIVATED_LICENSES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><hr><div><button class="btn btn-primary activateButton" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;<div class="displayInlineBlock"><?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></button>&nbsp;&nbsp;<button class="btn btn-default updateButton" type="button"><i class="fa fa-refresh"></i>&nbsp;&nbsp;<div class="displayInlineBlock"><?php echo vtranslate('LBL_UPDATE_LICENSES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></button></div><br><table class="table table-bordered"><thead><tr><th><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_LICENSE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_LICENSE_DUE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_LICENSE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['LICENSE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LICENSE']->_loop = false;
 $_smarty_tpl->tpl_vars['LICENSE_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LICENSES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LICENSE']->key => $_smarty_tpl->tpl_vars['LICENSE']->value){
$_smarty_tpl->tpl_vars['LICENSE']->_loop = true;
 $_smarty_tpl->tpl_vars['LICENSE_KEY']->value = $_smarty_tpl->tpl_vars['LICENSE']->key;
?><?php if (!$_smarty_tpl->tpl_vars['LICENSE']->value){?><?php continue 1?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("rows/License.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['EMPTY_LICENSES']->value)){?><tr><td style="border-left:none;border-right:none;" colspan="4"><?php  $_smarty_tpl->tpl_vars['EMPTY_LICENSE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMPTY_LICENSE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EMPTY_LICENSES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMPTY_LICENSE']->key => $_smarty_tpl->tpl_vars['EMPTY_LICENSE']->value){
$_smarty_tpl->tpl_vars['EMPTY_LICENSE']->_loop = true;
?><div><?php echo $_smarty_tpl->tpl_vars['EMPTY_LICENSE']->value;?>
</div><br><?php } ?></td><td style="border-left:none;border-right:none;" title="<?php echo vtranslate('LBL_EMPTY_LICENSES_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><form action="index.php" method="post"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><input type="hidden" name="parent" value="Settings"><input type="hidden" name="action" value="Basic"><input type="hidden" name="mode" value="clearEmptyLicenses"><button class="btn btn-warning"><?php echo vtranslate('LBL_EMPTY_LICENSES_BUTTON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</></form></td></tr><?php }?></tbody></table></div><?php }?><div class="col-md-12"><div><h4><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><table class="table table-bordered"><thead><tr><th style="width: 30%;"><?php echo vtranslate('Name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="width: 15%;"><?php echo vtranslate('LBL_INSTALLED_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="width: 15%;"><?php echo vtranslate('LBL_NEWEST_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['EXTENSION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EXTENSION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EXTENSIONS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EXTENSION']->key => $_smarty_tpl->tpl_vars['EXTENSION']->value){
$_smarty_tpl->tpl_vars['EXTENSION']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['EXTENSION']->value->isVisible()){?><?php continue 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isMultiPackage()){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("rows/Package.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("rows/Extension.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php } ?></tbody></table></div><div><h4><?php echo vtranslate('LBL_AVAILABLE_LANGUAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><table class="table table-bordered"><thead><tr><th style="width: 30%;"><?php echo vtranslate('LBL_LANGUAGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="width: 30%;" colspan="2"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['LANGUAGE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANGUAGE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANGUAGE']->key => $_smarty_tpl->tpl_vars['LANGUAGE']->value){
$_smarty_tpl->tpl_vars['LANGUAGE']->_loop = true;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("rows/Language.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?></tbody></table></div></div></div><?php }} ?>
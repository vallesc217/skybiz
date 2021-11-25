<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 03:38:22
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/dashboards/SalesFunnelBigWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154966480460e9162e80ae34-84483482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32499d8297c09dd9606c85415abf6e1de1ed4be' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/dashboards/SalesFunnelBigWidget.tpl',
      1 => 1625021677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154966480460e9162e80ae34-84483482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'DEFAULT_ASSIGNED_USER_FILTER' => 0,
    'CURRENTUSER' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'OWNER_ID' => 0,
    'OWNER_NAME' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e9162e8c341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e9162e8c341')) {function content_60e9162e8c341($_smarty_tpl) {?>
<div class="row alignCenter" style="margin: 10px 0px 0px 20px;"><table cellspacing="0" cellpadding="0" width="100%"><tbody><tr><td width="30%"><a href="javascript:void(0);" name="drefresh" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getURL();?>
&content=data"><button type="button" class="btn pull-left"><i class="icon-refresh" hspace="2" border="0" align="absmiddle"></i>&nbsp;<strong><?php echo vtranslate('LBL_REFRESH_FUNNEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></a></td><td width="70%"><b><?php echo vtranslate('LBL_ASSIGNED_USER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>&nbsp;<select class="widgetFilter select2" id="assigned_user_id" name="assigned_user_id" style="width:170px; margin-bottom:0px"><option value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_ASSIGNED_USER_FILTER']->value;?>
" selected=""><?php echo vtranslate('LBL_ALL');?>
</option><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
"><?php echo vtranslate('LBL_MINE');?>
</option><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getAccessibleUsers(), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value)>1){?><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['OWNER_ID']->value!=$_tmp1){?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php }?><?php } ?></optgroup><?php }?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getAccessibleGroups(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value)){?><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup><?php }?></select></td></tr><tr><td class="refresh" colspan="4" style="position: absolute; margin-top: 300px; z-index: 1; text-align: center; width: 100%;"></td></tr></tbody></table></div><div class="dashboardWidgetContent"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/SalesFunnelBigWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2021-06-30 02:56:44
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75271362360dbdd6c4f2b01-99930177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d28e15d5439b794c159d9574de976b8c318e89a' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/Edit.tpl',
      1 => 1625021677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75271362360dbdd6c4f2b01-99930177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODEL' => 0,
    'IS_DUPLICATE' => 0,
    'MODULE' => 0,
    'LEFTPANELHIDE' => 0,
    'RECORD_ID' => 0,
    'SELECTED_REPORTS' => 0,
    'SELECTED_REPORT_IDS' => 0,
    'DETAIL_REPORT_MODEL' => 0,
    'ALL_REPORTS' => 0,
    'CURRENT_REPORT_ID' => 0,
    'REPORTS_PLOT_DEPENDENCIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60dbdd6c5a984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dbdd6c5a984')) {function content_60dbdd6c5a984($_smarty_tpl) {?>

     
    <div class="container-fluid main-container">  
     <div class="row">
        <div class="editContainer" style="padding-left: 2%;padding-right: 2%">
        <br>
        <div class="col-md-offset-1">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->getId()==''||$_smarty_tpl->tpl_vars['IS_DUPLICATE']->value){?>
                <?php echo vtranslate('LBL_CREATE_FUNNEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

            <?php }else{ ?>
                <?php echo vtranslate('LBL_EDIT_FUNNEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : «<?php echo vtranslate($_smarty_tpl->tpl_vars['MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
»
            <?php }?>
        </h3>
        </div>>
        <hr>
        <div class="clearfix"></div>
        </div>
        <div id="modnavigator" class="module-nav editViewModNavigator">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
       <div class="editViewPageDiv viewContent">
        <div class="col-sm-12 col-xs-12 content-area <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> full-width <?php }?>">
        <div id="spWidgetReport" class="reportContents">    
        <form class="form-horizontal recordEditView" method="post" action="index.php">
            <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
            <input type="hidden" name="action" value="Save" >
            <input type="hidden" name="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['IS_DUPLICATE']->value;?>
" />
            <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
            
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <div class="well contentsBackground">
                    <div class="col-md-offset-1">
                          <div class="row padding1per">
                          <div class="fieldLabel  col-md-3"> <?php echo vtranslate('LBL_FUNNEL_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span> </div>
                          <input class="inputElement col-md-1 "  type="text" style="max-width: 450px;" name="name" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('name');?>
"/> 
                          </div> 
                          
                          <div class="row padding1per">
            
                                <div class="fieldLabel col-md-3" ><?php echo vtranslate('LBL_FUNNEL_REPORTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span> </div> 
                                <?php $_smarty_tpl->tpl_vars['SELECTED_REPORT_IDS'] = new Smarty_variable(array(), null, 0);?>
                                     <select data-placeholder="<?php echo vtranslate('LBL_SELECT_REPORTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="reportsListSelectElement"  class="select2 col-md-1" multiple="" >
                                         <?php  $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['REPORT_SEQUENCE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_REPORTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->key => $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->value){
$_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['REPORT_SEQUENCE']->value = $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->key;
?>
                                             <?php echo array_push($_smarty_tpl->tpl_vars['SELECTED_REPORT_IDS']->value,$_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->value->getId());?>

                                         <?php } ?>

                                         <?php  $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_REPORTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->key => $_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->value){
$_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->_loop = true;
?>
                                             <?php $_smarty_tpl->tpl_vars['CURRENT_REPORT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->value->getId(), null, 0);?>
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_REPORT_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['CURRENT_REPORT_ID']->value,$_smarty_tpl->tpl_vars['SELECTED_REPORT_IDS']->value)){?> selected <?php }?>>
                                             <?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_REPORT_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                             </option>
                                         <?php } ?>
                                      </select>
     
                           </div>

                        <div class="row padding1per">
                        <div class="fieldLabel col-md-3"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div>
                        <textarea class="col-md-5" type="text" name="description"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('description');?>
</textarea>
                        </div>
                        </p> 
                    </div>
                </div>
              <div class="col-md-1"></div>
             <div class="clearfix"></div> 
            <div class="modal-overlay-footer">
            <div class="col-md-12"> 
                        <div class="row clearfix">
                            <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
                                <button id="saveSpWidgetReport" class="btn btn-success saveButton" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp; 
                                <a class="cancelLink" href="javascript:history.back()" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                            </div>
                        </div>
                </div>
             </div>
            <input type="hidden" name="report_ids" value='' />
            <input type="hidden" name="topReportsIdsList" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_REPORT_IDS']->value);?>
' />
            <input type="hidden" id="reportsPlotDependencies" name="reportsPlotDependencies" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['REPORTS_PLOT_DEPENDENCIES']->value);?>
' />
            </div>
       
        </form>
            </div>
        </div>
        </div>

         </div>
    </div>        <?php }} ?>
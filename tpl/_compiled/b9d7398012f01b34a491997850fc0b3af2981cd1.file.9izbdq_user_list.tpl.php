<?php /* Smarty version Smarty-3.1.14, created on 2017-10-25 21:01:00
         compiled from "D:\wamp\www\upload\tpl\templets\default\9izbdq_user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1471159f08b0cb87293-01001836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d7398012f01b34a491997850fc0b3af2981cd1' => 
    array (
      0 => 'D:\\wamp\\www\\upload\\tpl\\templets\\default\\9izbdq_user_list.tpl',
      1 => 1465952428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471159f08b0cb87293-01001836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'total' => 0,
    'appfile' => 0,
    'page' => 0,
    'urlitem' => 0,
    'user' => 0,
    'volist' => 0,
    'time' => 0,
    'login' => 0,
    'showpage' => 0,
    'likeuser' => 0,
    'diary' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f08b0d3f29a4_06728752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f08b0d3f29a4_06728752')) {function content_59f08b0d3f29a4_06728752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\wamp\\www\\upload\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('user', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="page-index" class="page">
  <div class="search_max w960 online_page">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div class="online_list">
    <div class="search_sort">
      <div class="search_tips"> 共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>人符合您的搜索条件 </div>
      <div class="search_sort_sle" id="rank"> 
	    <strong>显示方式：</strong> 		
	    <a class="btnc btn_c3" href="<?php echo $_smarty_tpl->tpl_vars['appfile']->value;?>
?c=user&a=list<?php if ($_smarty_tpl->tpl_vars['page']->value>1){?>&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['urlitem']->value)){?>&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
<?php }?>"> <span class='h'><b>头像模式</b></span> </a>&nbsp;
		<a class="btnc3 btn_c3" href="<?php echo $_smarty_tpl->tpl_vars['appfile']->value;?>
?c=user&a=list<?php if ($_smarty_tpl->tpl_vars['page']->value>1){?>&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }?>&type=more<?php if (!empty($_smarty_tpl->tpl_vars['urlitem']->value)){?>&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
<?php }?>"> <span><b>独白模式</b></span> </a> 
	  </div>
    </div>
	  <?php if (empty($_smarty_tpl->tpl_vars['user']->value)){?>
      <h6>没有符合条件的信息</h6>
	  <?php }else{ ?>
      <ul class="search_pic_list clearfix">
	    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <li>
          <div class="search_user_bg"> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
"><?php echo cmd_avatar(array('width'=>'112','height'=>'135','css'=>'img100','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a> </div>
          <div class="search_user_inform">
            <p class="search_user_t1">
			  <?php if ($_smarty_tpl->tpl_vars['volist']->value['groupid']>1&&$_smarty_tpl->tpl_vars['volist']->value['vipenddate']>$_smarty_tpl->tpl_vars['time']->value){?>
			  <?php echo $_smarty_tpl->tpl_vars['volist']->value['levelimg'];?>

			  <?php }?>
			  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a>
			</p>
            <p class="search_user_add"><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
</p>
            <p class="search_vt"> 
			  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
			  <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_loginbox();">打招呼</a> 
			  <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_loginbox();">写信件</a>
			  <?php }else{ ?>
			  <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_hi(<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
);">打招呼</a> 
			  <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_writemsg(<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
);">写信件</a>
			  <?php }?>
			</p>
          </div>
        </li>
	    <?php } ?>
        <div style="clear:both;"></div>
      </ul>
	  <?php }?>

	  <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
      <div class="page1">
        <div class="pagecode"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        <div style="clear:both;"></div>
      </div>
	  <?php }?>

    </div>
    <div class="onright"> 

      
      <div class="oe_like">
      <h2>猜你喜欢</h2>
	    <?php $_smarty_tpl->tpl_vars['likeuser'] = new Smarty_variable(vo_list("mod={spuser} num={6}"), null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['likeuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo cmd_avatar(array('width'=>'70','height'=>'86','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a></dt>
        <dd>
          <h4><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h4>
          <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
 cm</p>
          <p><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['monolog'],18);?>
</p>
        </dd>
        <div class="clear"></div>
		</dl>
		<?php } ?>
        <div style="clear:both;"></div>
      </div>

      <div class="divtitle" style="margin-top:5px;">最新日记</div>
      <ul class="list_so">
	    <?php $_smarty_tpl->tpl_vars['diary'] = new Smarty_variable(vo_list("mod={diary} orderby={v.hits DESC} num={15}"), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <li><i <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']<=3){?> class="current" <?php }?>><?php echo $_smarty_tpl->tpl_vars['volist']->value['i'];?>
</i><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
"><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['title'],20);?>
</a> </li>
		<?php } ?>
      </ul>

	  <?php $_smarty_tpl->tpl_vars['ads'] = new Smarty_variable(get_ads('channel_smbanner_2'), null, 0);?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['ads']->value)){?>
	  <div class="onrightad"><a <?php if (!empty($_smarty_tpl->tpl_vars['ads']->value['url'])&&$_smarty_tpl->tpl_vars['ads']->value['url']!='#'){?>href="<?php echo $_smarty_tpl->tpl_vars['ads']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['ads']->value['target'];?>
"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['ads']->value['uploadfiles'];?>
" width='<?php echo $_smarty_tpl->tpl_vars['ads']->value['width'];?>
' height='<?php echo $_smarty_tpl->tpl_vars['ads']->value['height'];?>
' border='0' title="<?php echo $_smarty_tpl->tpl_vars['ads']->value['title'];?>
" /></a></div>
	  <?php }?>
	  
	  </div>
    <div style="clear:both;"></div>
  </div>
  <div style="clear:both;"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>
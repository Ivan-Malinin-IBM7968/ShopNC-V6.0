<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="clear">&nbsp;</div>
<div id="tbox">
<a id="gotop" href="JavaScript:void(0);" title="<?php echo $lang['go_top'];?>" style="display:none;"></a>
</div>
<div id="footer">
  <p><a href="<?php echo SHOP_SITE_URL;?>"><?php echo $lang['nc_index'];?></a>
    <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
    <?php foreach($output['nav_list'] as $nav){?>
    <?php if($nav['nav_location'] == '2'){?>
    | <a  <?php if($nav['nav_new_open']){?>target="_blank" <?php }?>href="<?php switch($nav['nav_type']){
    	case '0':echo $nav['nav_url'];break;
    	case '1':echo urlShop('search', 'index',array('cate_id'=>$nav['item_id']));break;
    	case '2':echo urlShop('article', 'article',array('ac_id'=>$nav['item_id']));break;
    	case '3':echo urlShop('activity', 'index',array('activity_id'=>$nav['item_id']));break;
    }?>"><?php echo $nav['nav_title'];?></a>
    <?php }?>
    <?php }?>
    <?php }?>
  </p>
<center><div style=line-height:21px>资源提供：<a href=http://www.souho.net target=_blank><font color=red>搜虎精品社区</font></a>
<br>&nbsp;
<a href=http://www.souho.net target=_blank>搜虎精品社区</a> | <a href=http://vip.souho.net target=_blank>极品商业源码</a> | <a href=http://idc.souho.net target=_blank>搜虎精品社区空间、域名</a> | <a href=http://vip.souho.net/templates/Korea/ target=_blank>90G韩国豪华商业模版</a> | <a href=http://tool.souho.net/ target=_blank>站长工具箱</a>
<br>
更多精品商业资源，就在<a href=http://www.souho.net target=_blank>搜虎精品社区</a></font>
</div></center>
  <?php echo html_entity_decode($GLOBALS['setting_config']['statistics_code'],ENT_QUOTES); ?> </div>
<?php if (C('debug') == 1){?>
<div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div>
      <?php print_r(Tpl::showTrace());?>
    </div>
  </fieldset>
</div>
<?php }?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.cookie.js"></script>
</body>
</html>

<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>留言板_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/psd1703/day_09/京东商城/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
	//<![CDATA[
	
	window.onload = function()
	{
	  //fixpng();
	}
	function checkSearchForm()
	{
	    if(document.getElementById('keyword').value)
	    {
	        return true;
	    }
	    else
	    {
			   alert("请输入搜索关键词！");
	        return false;
	    }
	}
	function selectPage(sel)
	{
	  sel.form.submit();
	}
	var msg_empty_email = "请输入您的电子邮件地址";
    var msg_error_email = "电子邮件地址格式不正确";
    var msg_title_empty = "留言标题为空";
    var msg_content_empty = "留言内容为空";
    var msg_captcha_empty = "验证码为空";
    var msg_title_limit = "留言标题不能超过200个字";
    
	/**
	* 提交评论信息
	*/
	function submitMsgBoard(frm)
	{
	var frm         = document.forms['formMsg'];
	var msg_title   = frm.elements['msg_title'].value;
	var msg_content = frm.elements['msg_content'].value;
	var msg = '';
	
	if (msg_title.length == 0)
	{
	    msg += msg_title_empty + '\n';
	}
	if (frm.elements['captcha'] && frm.elements['captcha'].value.length==0)
	{
	    msg += msg_captcha_empty + '\n'
	}
	if (msg_content.length == 0)
	{
	    msg += msg_content_empty + '\n'
	}
	if (msg_title.length > 200)
	{
	    msg += msg_title_limit + '\n';
	}
	
	if (msg.length > 0)
	{
	    alert(msg);
	    return false;
	}
	else
	{
	    return true;
	}
	}
	//]]>
	</script>
  </head>
  <body>
    <div id="container">
      
      <Script language="JavaScript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
}
     	
function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
}
window.onload = function()
{
  //fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
</Script>
      <div id="globalHeader">
        <ul id="top_nav_ul">
          <div id=navigation1_03 style=" float:right;">
          <dl>
            <dt style="POSITION: relative; z-index:999999999">
              <a style="float:right; background:url(/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="/psd1703/day_09/京东商城/360buy/index.php/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="/psd1703/day_09/京东商城/360buy/index.php/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="/psd1703/day_09/京东商城/360buy/index.php/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="/psd1703/day_09/京东商城/360buy/index.php/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/psd1703/day_09/京东商城/360buy/index.php/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/psd1703/day_09/京东商城/360buy/index.php/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="/psd1703/day_09/京东商城/360buy/public/js/transport.js"></script>
            <script type="text/javascript" src="/psd1703/day_09/京东商城/360buy/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="/psd1703/day_09/京东商城/360buy/index.php/Login/index">[请登录]</a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="/psd1703/day_09/京东商城/360buy/index.php/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="/psd1703/day_09/京东商城/360buy/index.php/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="/psd1703/day_09/京东商城/360buy/index.php/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="/psd1703/day_09/京东商城/360buy/index.php/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="/psd1703/day_09/京东商城/360buy/index.php/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="/psd1703/day_09/京东商城/360buy/index.php/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="/psd1703/day_09/京东商城/360buy/index.php/Cart/flow"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="urHere" class="globalModule">
        <h3><a href=".">首页</a> <code>&gt;</code> 留言板</h3>
      </div>
      <div class="blank"></div>
      <div id="globalLeft">
        <div class="globalModule1">
          <h3 class="h32"><b>商品分类</b> <a target="_blank" href="/psd1703/day_09/京东商城/360buy/index.php/Search/index">全部分类>></a></h3>
          <div class="my_left_category">
            <div class="blank" style="height:0; _display:none"></div>
            <h2> <a target="_blank" href="category.php?id=355"> 展销会专栏</a></h2>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <h2> <a target="_blank" href="category.php?id=17"> 手机数码</a></h2>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="blank"></div>
          </div>
        </div>
        <div class="blank"></div>
        <div class="blank"></div>
        <div class="box" id='history_div'>
          <div id="globalHistory" class="globalModule" >
            <h3 class="h3_3" style="border-bottom:1px dotted #efefef"><div id="list_t_l"><div id="list_t_r"><b style="color:#333">最近浏览过的商品</b></div></div></h3>
            <div id="global_box" >
              <ul id="history_list" class="boxCenterList"></ul>
            </div>
          </div>
        </div>
		<script type="text/javascript">
		if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
		{
		    document.getElementById('history_div').style.display='none';
		}
		else
		{
		    document.getElementById('history_div').style.display='block';
		}
		function clear_history()
		{
		Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
		}
		function clear_history_Response(res)
		{
		document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
		}
		</script>
		<div class="blank"></div>
	  </div>
	  <div id="globalBigRight">
	    <div id="globalGroupList" class="globalModule">
	      <div class="tab_box">
	        <div class="tab_title"><h3>留言板</h3></div></div>
	        <div class="boxCenterList" style="padding:20px;">
	          <div class="f_l" style="width:100%; position:relative;">
	            [<b>评论</b>]&nbsp;连天宇：评论了
	            <b><a class="f3" href="/psd1703/day_09/京东商城/360buy/index.php/Goods/index" target="_blank" title="">AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）</a></b>
	            <font class="f4"></font> (2010-01-29 07:02:59)<img style="position:absolute; right:0px;" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/stars5.gif" alt="5" />
	          </div>
	          <div class="msgBottomBorder word">我现在的电脑就用这个，这里比我买的便宜。<br></div>
	          <br/>
	          <div class="f_l" style="width:100%; position:relative;">
	            [<b>评论</b>]&nbsp;连天宇：评论了
	            <b><a class="f3" href="/psd1703/day_09/京东商城/360buy/index.php/Goods/index" target="_blank" title="">AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）</a></b>
	            <font class="f4"></font> (2010-01-29 07:02:59)<img style="position:absolute; right:0px;" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/stars5.gif" alt="5" />
	          </div>
	          <div class="msgBottomBorder word">我现在的电脑就用这个，这里比我买的便宜。<br></div>
	          <br/>
	          <div class="f_l" style="width:100%; position:relative;">
	            [<b>评论</b>]&nbsp;连天宇：评论了
	            <b><a class="f3" href="/psd1703/day_09/京东商城/360buy/index.php/Goods/index" target="_blank" title="">AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）</a></b>
	            <font class="f4"></font> (2010-01-29 07:02:59)<img style="position:absolute; right:0px;" src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/stars5.gif" alt="5" />
	          </div>
	          <div class="msgBottomBorder word">我现在的电脑就用这个，这里比我买的便宜。<br></div>
	          <br/>
	        </div>
	      </div>
	      <div class="blank"></div>
	      <form name="selectPageForm" action="/shop/message.php" method="get">
	        <div id="pager">
	          <a class="next" href="message.php?page=1">上一页</a>
	          <span class="page_now">1</span>
	          <a href="message.php?page=2">2</a>
	          <a class="next" href="message.php?page=2">下一页</a>
	        </div>
	      </form>
	      <div id="globalGroupList" class="globalModule">
	        <div class="tab_box">
	          <div class="tab_title"><h3>我要留言</h3></div>
	        </div>
	        <div class="v_m">
	          <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard()">
	            <table width="100%" border="0" cellpadding="3"  class="tableList ">
	              <tr>
	                <td align="right">用户名</td>
	                <td><input name="user_name"  class="textInput" type="text" size="15" value="匿名用户" /></td>
	              </tr>
	              <tr>
	                <td align="right">电子邮件地址</td>
	                <td><input name="user_email" type="text"  class="textInput" size="20" value="" /></td>
	              </tr>
	              <tr>
	                <td align="right">留言类型</td>
	                <td>
	                  <input name="msg_type" type="radio" value="0" checked="checked" />留言
	                  <input type="radio" name="msg_type" value="1" />投诉
	                  <input type="radio" name="msg_type" value="2" />询问
	                  <input type="radio" name="msg_type" value="3" />售后
	                  <input type="radio" name="msg_type" value="4" />求购 
	                </td>
	              </tr>
	              <tr>
	                <td align="right">主题</td>
	                <td><input name="msg_title" type="text"  class="textInput" size="30" /></td>
	              </tr>
	              <tr>
	                <td align="right">验证码</td>
	                <td>
	                  <input type="text" size="8" name="captcha" class="textInput" />
	                  <img src="" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" />
	                </td>
	              </tr>
	              <tr>
	                <td align="right" valign="top">留言内容</td>
	                <td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" style="border:1px solid #ccc;"></textarea></td>
	              </tr>
	              <tr>
	                <td>&nbsp;</td>
	                <td>
	                  <input type="hidden" name="act" value="act_add_message" />
	                  <input type="submit" value="" class="bnt_blue_1" />
	                </td>
	              </tr>
	            </table>
	          </form>
	        </div>
	      </div>
	    </div>
	    <div class="blank"></div>
	    
	        <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/help_3.gif" />
           <a href='article_cat.php?id=10' title="支付方式">支付方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
         <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
         <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
         <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/help_4.gif" />
           <a href='article_cat.php?id=8' title="售后服务">售后服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
         <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
         <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
         <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/help_5.gif" />
           <a href='article_cat.php?id=9' title="特色服务">特色服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
         <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
         <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
         <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
         <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
       </dl>
     </div>
     <div class="blank"></div>
     <div class="blank"></div>
     <div class="serve clearfix">
       <ul  class="line"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/serve_4.gif"></ul>
     </div>
   </div>
   <div class="blank"></div>
   <div id="globalFooter">
     <p id="footerNav">
       <a href="article.php?id=1" >关于我们</a>
       |
       <a href="article.php?id=2" >联系我们</a>
       |
       <a href="article.php?id=3" >广告服务</a>
       |
       <a href="http://jetli.taobao.com/" >品牌加盟</a>
       |
       <a href="wholesale.php" >批发方案</a>
       |
       <a href="myship.php" >配送方式</a>
       |
       <script type="text/javascript" src="/psd1703/day_09/京东商城/360buy/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="/psd1703/day_09/京东商城/360buy/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="/psd1703/day_09/京东商城/360buy/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="/psd1703/day_09/京东商城/360buy/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>
	    
	  </div>
	</body>
</html>
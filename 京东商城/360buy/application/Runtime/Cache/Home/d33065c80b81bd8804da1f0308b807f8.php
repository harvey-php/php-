<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>用户中心_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/360buy/public/js/transport.js"></script>
    <script type="text/javascript" src="/360buy/public/js/common.js"></script>
    <script type="text/javascript" src="/360buy/public/js/user.js"></script>
    <link href="/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      function selectPage(sel)
      {
        sel.form.submit();
      }
      var msg_title_empty = "留言标题为空";
      var msg_content_empty = "留言内容为空";
      var msg_title_limit = "留言标题不能超过200个字";
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
              <a style="float:right; background:url(/360buy/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(/360buy/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="/360buy/index.php/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="/360buy/public/js/transport.js"></script>
            <script type="text/javascript" src="/360buy/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="/360buy/index.php/Login/index">[请登录]</a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="/360buy/index.php/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="/360buy/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="/360buy/index.php/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="/360buy/index.php/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="/360buy/index.php/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="/360buy/index.php/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="/360buy/index.php/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="/360buy/index.php/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="/360buy/index.php/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="/360buy/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="/360buy/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="/360buy/index.php/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="/360buy/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="/360buy/index.php/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="/360buy/index.php/Cart/flow"><img src="/360buy/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="urHere" class="globalModule">
        <h3><a href=".">首页</a> <code>&gt;</code> 用户中心</h3>
      </div>
      <div class="blank"></div>
      <div id="globalLeft">
        <div class="globalModule">
          <h3><div id="list_t_l"><div id="list_t_r"><b>用户中心</b></div></div></h3>
          <div id="global_box" class="userMenu">
            <a href="/360buy/index.php/User/index" class="curs"><img src="/360buy/public/themes/jindong/images/u1.gif"> 欢迎页</a>
			<a href="/360buy/index.php/User/profile"><img src="/360buy/public/themes/jindong/images/u2.gif"> 用户信息</a>
			<a href="/360buy/index.php/User/order"><img src="/360buy/public/themes/jindong/images/u3.gif"> 我的订单</a>
			<a href="/360buy/index.php/User/address"><img src="/360buy/public/themes/jindong/images/u4.gif"> 收货地址</a>
			<a href="/360buy/index.php/User/collection"><img src="/360buy/public/themes/jindong/images/u5.gif"> 我的收藏</a>
			<a href="/360buy/index.php/User/message"><img src="/360buy/public/themes/jindong/images/u6.gif"> 我的留言</a>
			<a href="/360buy/index.php/User/tag"><img src="/360buy/public/themes/jindong/images/u7.gif"> 我的标签</a>
			<a href="/360buy/index.php/User/booking"><img src="/360buy/public/themes/jindong/images/u8.gif"> 缺货登记</a>
			<a href="/360buy/index.php/User/bonus"><img src="/360buy/public/themes/jindong/images/u9.gif"> 我的红包</a>
			<a href="/360buy/index.php/User/affiliate" class="curs"><img src="/360buy/public/themes/jindong/images/u10.gif"> 我的推荐</a>
			<a href="/360buy/index.php/User/comment"><img src="/360buy/public/themes/jindong/images/u11.gif"> 我的评论</a>
			<!--<a href="/360buy/index.php/User/groupbuy">我的团购</a>-->
			<a href="/360buy/index.php/User/trackpackages"><img src="/360buy/public/themes/jindong/images/u12.gif"> 跟踪包裹</a>
			<a href="/360buy/index.php/User/accountlog"><img src="/360buy/public/themes/jindong/images/u13.gif"> 资金管理</a>
			<a href="/360buy/index.php/User/logout" style="background:none; text-align:right; margin-right:10px;"><img src="/360buy/public/themes/jindong/images/bnt_sign.gif"></a>
		  </div>
		</div>
      </div>
      <div id="globalBigRight">
        <div class="tab_box">
          <div class="globalModule">
            <div class="tab_title"><h3>分成规则</h3></div>
            <div class="globalModuleContent">
              &nbsp;美智商城为鼓励推荐新用户注册，现开展<b>推荐注册分成</b>活动，活动流程如下：<br />
              <br />
              &nbsp;１、将本站提供给您的推荐代码，发送到论坛、博客上。<br />
              &nbsp;２、访问者点击链接，访问网店。<br />
              &nbsp;３、在访问者点击链接的 <b>24小时</b> 内，若该访问者在本站注册，即认定该用户是您推荐的，您将获得等级积分 <b>2</b> 的奖励 (当您的等级积分超过 <b>60</b> 时，不再获得奖励)。<br />
              &nbsp;４、该用户今后在本站的一切消费，您均能获得一定比例的提成。目前实行的提成总额为订单金额的 <b>1%</b> 、积分的 <b>5%</b> ，分配给您、推荐您的人等，具体分配规则请参阅 <b><a href="#myrecommend">我推荐的会员</a></b>。<br />
              &nbsp;５、提成由管理员人工审核发放，请您耐心等待。<br />
              &nbsp;６、您可以通过分成明细来查看您的介绍、分成情况。
            </div>
          </div>
          <div class="globalModule">
            <div class="tab_title"><h3><a name="myrecommend">我推荐的会员</a></h3></div>
            <div class="globalModuleContent">
              <table cellspacing="0" class="tableList">
                <tr>
                  <th>等级</th>
                  <th>人数</th>
                  <th>积分分成百分比</th>
                  <th>现金分成百分比</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>0</td>
                  <td>60%</td>
                  <td>60%</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>0</td>
                  <td>60%</td>
                  <td>60%</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>0</td>
                  <td>60%</td>
                  <td>60%</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="globalModule">
            <div class="tab_title"><h3>分成明细</h3></div>
            <div class="globalModuleContent">
              <table cellspacing="0" class="tableList">
                <tr>
                  <th>订单号</th>
                  <th>现金分成</th>
                  <th>积分分成</th>
                  <th>分成模式</th>
                  <th>分成状态</th>
                </tr>
                <tr>
                  <td colspan="5" class="textStrong">没有记录</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="globalModule">
            <div class="tab_title"><h3>推荐代码</h3></div>
            <div class="globalModuleContent">
              <table cellspacing="0" class="tableList">
                <tr>
                  <td width="30%"><a href="#" target="_blank">京东网上商城</a></td>
                  <td><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;http://localhost/shop/?u=615&quot; target=&quot;_blank&quot;&gt;京东网上商城&lt;/a&gt;" class="textInput" /> 网页签名代码</td>
                </tr>
                <tr>
                  <td><a href="#" target="_blank" title="京东网上商城"><img src="/360buy/public/themes/jindong/images/logo.gif" alt="" /></a></td>
                  <td><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;http://localhost/shop/?u=615&quot; target=&quot;_blank&quot; title=&quot;京东网上商城&quot;&gt;&lt;img src=&quot;http://localhost/shop/themes/jindong/images/logo.gif&quot; /&gt;&lt;/a&gt;" class="textInput" /> 网页签名代码</td>
                </tr>
                <tr>
                  <td width="30%"><a href="#" target="_blank">京东网上商城</a></td>
                  <td><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;http://localhost/shop/?u=615&quot; target=&quot;_blank&quot;&gt;京东网上商城&lt;/a&gt;" class="textInput" /> 网页签名代码</td>
                </tr>
                <tr>
                  <td><a href="#" target="_blank" title="京东网上商城"><img src="/360buy/public/themes/jindong/images/logo.gif" alt="" /></a></td>
                  <td><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;http://localhost/shop/?u=615&quot; target=&quot;_blank&quot; title=&quot;京东网上商城&quot;&gt;&lt;img src=&quot;http://localhost/shop/themes/jindong/images/logo.gif&quot; /&gt;&lt;/a&gt;" class="textInput" /> 网页签名代码</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="blank"></div>
      
          <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_3.gif" />
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
           <img src="/360buy/public/themes/jindong/images/help_4.gif" />
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
           <img src="/360buy/public/themes/jindong/images/help_5.gif" />
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
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="/360buy/public/themes/jindong/images/serve_4.gif"></ul>
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
       <script type="text/javascript" src="/360buy/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="/360buy/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="/360buy/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>
    
    </div>
  </body>
</html>
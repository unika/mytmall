<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<title>今日特价 | 拍拍网</title>
		<meta charset="uft8" />					
	</head>
	<body>
	
	
		<div class="pp-tb" role="navigation">
			<div class="pp-tb-bd">
				<ul class="pp-tb-l">
					<li>
						<a href="http://buy.qq.com/?WGTAG=1000.4.1.1" target="_blank" >QQ网购<span class="pp-tb-desp">（原QQ商城）</span></a>
					</li>
					<li class="current">
						<a href="http://www.paipai.com/?PTAG=20084.1.1" accesskey="1">拍拍</a>
					</li>
					<li>
						<a href="http://www.51buy.com?YTAG=0.280400001300000&PTAG=20084.1.41" target="_blank">易迅</a>
					</li>
					<li class="pp-gap"></li>
					<li>
						<a href="http://act.m.buy.qq.com/pc/pcSpread.xhtml?gcfa=2810176&_lp=1" target="_blank"><s class="pp-icon-mb"></s></a>
					</li>
					<li class="pp-tb-wx">
						<a href="javascript:void(0)" title="拍拍网官方微信"><s class="pp-icon-wx"></s><span class="pp-tb-wx-code"></span></a>
					</li>
					<li>
						<a href="http://e.t.qq.com/paipai" target="_blank" title="拍拍网官方腾讯微博" ptag="20084.1.51"><s class="pp-icon-tx"></s></a>
					</li>
					<li>
						<a href="http://weibo.com/paipaiweibo" target="_blank" title="拍拍网官方新浪微博" ptag="20084.1.52"><s class="pp-icon-sina"></s></a>
					</li>
				</ul>
				<ul class="pp-tb-r group">
					<li id="headLogin" class="pp-tb-login">
						<span class="pp-tb-i"><a href="http://www.paipai.com/fresher/?PTAG=20084.1.31">新手专享礼包</a></span>
						<a href="http://member.paipai.com/cgi-bin/login_entry?PTAG=20084.1.3" class="pp-tb-loglink" >登录</a>
					</li>
					<li class="hide" id="saleLi">
						<a href="http://my.paipai.com/cgi-bin/sell?PTAG=20084.1.7" >我要卖</a>
					</li>
					<li style=" width:80px;" class="pp-w-seller pp-ls hide" id="centerLi" onmouseover="this.className='pp-w-seller pp-ls hover'" onmouseout="this.className='pp-w-seller pp-ls'">
						<div class="pp-ls-hd">
							<a href="http://my.paipai.com/cgi-bin/myppindex/seller?PTAG=20084.1.43" onfocus="this.parentNode.parentNode.className='pp-w-seller pp-ls hover'">我是卖家</a><span class="angle"></span>
						</div>
						<ul class="pp-ls-bd">
							<li>
								<a href="http://my.paipai.com/cgi-bin/trade_deal_list/soldentry?isSellLink=03?PTAG=20084.1.44">卖出的商品</a>
							</li>
							<!--<li><a href="#?PTAG=20084.1.45">营销活动中心</a></li>-->
							<li>
								<a href="http://seller.paipai.com?PTAG=20084.1.46">卖家经营中心</a>
							</li>
							<li>
								<a href="http://my.paipai.com/crm/index.xhtml?PTAG=20084.1.47">客户营销中心</a>
							</li>
							<li>
								<a href="http://fuwu.paipai.com?PTAG=20084.1.48">卖家服务市场</a>
							</li>
							<li>
								<a href="http://guize.paipai.com?PTAG=20084.1.49">规则平台</a>
							</li>
						</ul>
					</li>
					<li id="buyLi">
						<s class="pp-gap"></s><a href="http://search.paipai.com/?PTAG=20084.1.6" >我要买</a>
					</li>
					<li class="pp-w-buyer pp-ls" id="myPPLi" onmouseover="this.className='pp-w-buyer pp-ls hover'" onmouseout="this.className='pp-w-buyer pp-ls'">
						<div class="pp-ls-hd">
							<a href="http://my.paipai.com/cgi-bin/myppindex/entry?ptag=20084.1.22" onfocus="this.parentNode.parentNode.className='pp-w-buyer pp-ls hover'" >我的拍拍</a><span class="angle"></span>
						</div>
						<ul class="pp-ls-bd" id="myPPList">
							<li>
								<a href="http://my.paipai.com/cgi-bin/trade_deal_list/boughtentry?isBuyLink=01&PTAG=20084.1.10">购买的商品</a>
							</li>

							<li>
								<a href="http://my.paipai.com/cgi-bin/favorite_new/Entry?type=item&PTAG=20084.1.29" onblur="this.parentNode.parentNode.parentNode.className='pp-w-buyer pp-ls'">收藏的商品</a>
							</li>
							<li>
								<a href="http://my.paipai.com/cgi-bin/favorite_new/Entry?type=shop&PTAG=20084.1.30" onblur="this.parentNode.parentNode.parentNode.className='pp-w-buyer pp-ls'">收藏的店铺</a>
							</li>

						</ul>
					</li>
					<li class="pp-w-cart">
						<a href="http://auction.paipai.com/cgi-bin/shopcart/detail?PTAG=20084.1.12" >购物车</a><span class="pp-tb-i hide" id="comdyNum"></span>
					</li>
				
					<li >
						<s class="pp-gap"></s><a href="http://service.paipai.com/cgi-bin/go?pageId=20084&domainId=1&linkId=13&url=http://pay.paipai.com/cgi-bin/tenpay/Jump2tenpay" target="_blank">财付通</a>
					</li>
					<li class="pp-w-service pp-ls" id="helpLi" onmouseover="this.className='pp-w-service pp-ls hover'" onmouseout="this.className='pp-w-service pp-ls'">
						<div class="pp-ls-hd">
							<a onfocus="this.parentNode.parentNode.className='pp-w-service pp-ls hover'" href="http://help.paipai.com/index.shtml?PTAG=20084.1.15">帮助</a><span class="angle"></span>
						</div>
						<ul class="pp-ls-bd">
							<li>
								<a href="http://guize.paipai.com/" target="_blank">规则平台</a>
							</li>
							<li>
								<a href="http://help.paipai.com/index.shtml?PTAG=20084.1.15">帮助中心</a>
							</li>
							<li>
								<a href="http://service.qq.com/category/paipai.html?PTAG=20084.1.20" >客服专区</a>
							</li>
							<li>
								<a href="http://www.paipai.com/trust/plan/index.shtml?tab=6&PTAG=30072.4.8">交易安全</a>
							</li>
							<li>
								<a href="http://qgo.qq.com/index.html?PTAG=20084.1.21">手机拍拍</a>
							</li>
							<li>
								<a href="http://www.paipai.com/college/?PTAG=20084.1.17">拍拍大讲堂</a>
							</li>
							<li>
								<a href="http://help.paipai.com/mutually/index.shtml?PTAG=20084.1.18">拍友互助</a>
							</li>
							<li>
								<a href="http://my.paipai.com/cgi-bin/right_defence_entry?PTAG=20084.1.16" onblur="this.parentNode.parentNode.parentNode.className='pp-w-service pp-ls'">维权中心</a>
							</li>
						</ul>
					</li>
					<li class="pp-w-info pp-ls" id="infoLi" onmouseover="this.className='pp-w-info pp-ls hover'" onmouseout="this.className='pp-w-info pp-ls'">
						<div class="pp-ls-hd">
							<a href="http://bbs.paipai.com/portal.php?PTAG=20084.1.14" onfocus="this.parentNode.parentNode.className='pp-w-info pp-ls hover'">社区</a><span class="angle"></span>
						</div>
						<ul class="pp-ls-bd">
							<li>
								<a href="http://tu.paipai.com/?PTAG=20084.1.32">看图购</a>
							</li>
						</ul>
					</li>
					<li class="pp-w-zhaoshang">
						<a href="http://shop.qq.com/zhaoshang/?PTAG=20084.1.26" >招商</a>
					</li>
				</ul>
			</div>
		</div>
	
		<div class="pp-header">
			<div class="pp-header-bd group">
				<div class="pp-header-logo group">
					<a href="http://www.paipai.com?ptag=20084.2.1" title="拍拍网：腾讯旗下网站 - 拍拍购物更放心" target="_top"></a><!--[if !IE]>|xGv00|3dc271414534b757173f5d0e2eb52fe5<![endif]-->
					<a class="pp-header-title" href="http://tuan.paipai.com/">团购</a>
				</div>
				<div class="pp-search">
					<form method="get" id="searchForm" name="searchForm" action="http://search1.paipai.com/cgi-bin/comm_search1" target="_self" role="search">
						<fieldset>
							<legend class="hide">
								拍拍购物搜索
							</legend>
							<div class="pp-search-box">
								<div class="pp-search-box-bd empty">
									<div class="pp-search-category">
										<div class="pp-search-category-bd" id="categoryType">
											<div class="pp-search-category-current">
												<a href="#h" id="typeItem">商品</a><span class="angle"></span>
											</div>
											<ul class="pp-search-category-list hide" id="drawTypeList">
												<li>
													<a href="#h" attr="0">商品</a>
												</li>
												<li>
													<a href="#h" attr="1">店铺</a>
												</li>
											</ul>
										</div>
									</div>
									<input type="search" id="KeyWord" name="KeyWord" autofocus x-webkit-speech speech class="pp-search-input" value="" autocomplete="off" accesskey="/">
									<!--WEBPAGEBEGIN@1902--><label class="pp-search-label" for="KeyWord">真维斯《致青春》同款</label>
									<input type="hidden" id="sDefKeyword" name="sDefKeyword" value="真维斯"/>
									<!--WEBPAGEEND@1902--><!--[if !IE]>|xGv00|b26e376ae19a953db779db7da3d71702<![endif]-->
									<input type="hidden" id="sClassid" name="sClassid" value="0" />
									<input type="hidden" id="shoptype" name="shoptype" value="" />
									<input type="hidden" id="searchType" name="searchType" value="0" />
									<input type="hidden" name="PTAG" value="20084.2.2" />
									<input type="hidden" value="1" name="as" />
									<span class="pp-search-button" >
										<button type="submit" id="headSubmitBtn"  name="headSubmitBtn">
											搜 索
										</button></span>
								</div>

								<div class="pp-search-autosuggest" id="searchDrawList"></div>
								<iframe frameborder="0" scrolling="no" class="pp-search-autosuggest-mask" id="maskSearchDrawList"></iframe>
							</div>
							<div class="pp-search-help">
								<a href="http://search.paipai.com/search_goods.shtml?ptag=20084.2.4">高级搜索</a>
								<a href="http://help.paipai.com/content/index_class_290.shtml?PTAG=1098.1.1">搜索帮助</a>
							</div>
						</fieldset>
					</form>
				</div>
			
				
			</div>
		</div>
		<!--S 一级类目导航 -->
		<div class="pp-mn">
			<div class="pp-mn-bd">
				<ul class="pp-mn-ul" role="navigation">
					<li>
						<a class="pp-mn-ul-a" href="http://www.paipai.com/">首页</a>
					</li>
					<li class="pp-mn-w0"></li>
					<li id="ppMainNavAll" class="pp-mn-ul-all pp-ls ">

						<div class="pp-ls-hd pp-mn-ul-all-hd">
							<a href="###" class="pp-mn-ul-a">所有商品分类</a><span class="angle"></span>
						</div>
						<div class="pp-ls-bd">
							<div class="pp-mn-ul-all-panel">
								<dl class="pp-nl-dl chong">
									<dt>
										<s class="pp-mn-ul-icon"></s>充话费 网游 Q币 买彩票
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://www.paipai.com/chong/index.shtml?PTAG=20084.111.1">话费</a>
											</li>
											<li>
												<a target="_blank" href="http://game.paipai.com/?PTAG=20084.111.1">网游</a>
											</li>
											<li>
												<a target="_blank" href="http://www.paipai.com/chong/charge_index_qb.shtml?PTAG=20084.111.1">腾讯业务</a>
											</li>
											<li>
												<a target="_blank" href="http://www.paipai.com/chong/charge_index_500w.shtml?PTAG=20084.111.1">彩票</a>
											</li>
											<li>
												<a target="_blank" href="http://baoxian.paipai.com/charge_index_baoxian.shtml?vb2ctag=1_2_2_6_34&PTAG=20084.111.1">保险</a>
											</li>
											<li>
												<a target="_blank" href="http://chong.paipai.com/portal_charge_index_card.shtml?PTAG=20084.111.1">便民服务</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl digi">
									<dt>
										<s class="pp-mn-ul-icon"></s>数码家电
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,204260/l---1-40-80-204260--1-4-3----2-2--128-1-0-sf,21.html?PTAG=20084.111.2">手机</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,4001/l---1-48-24-4001--1-4-3----2-2--384-1-0-sf,21-cl,4001-mtag,0.html?PTAG=20084.111.2">相机</a>
											</li>
											<li>
												<a target="_blank" href="http://sse1.paipai.com/s-z1w6myjy9r79x--1--80---3-4-3----2-2--128-0-0-PTAG,20084.2.2-as,1.html?PTAG=20084.111.2">电脑整机</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,1/l---1-40-21-1--1-4-3----2-2--128-1-0.html?PTAG=20084.111.2">电脑周边</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,28009/l---1-40-13-28009--1-4-1----2-2--128-0.html?PTAG=20084.111.2">小数码</a>
											</li>
											<li>
												<a target="_blank" href="http://3c.paipai.com/jd/?PTAG=20084.111.2">家用电器</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl bag">
									<dt>
										<s class="pp-mn-ul-icon"></s>鞋包配饰
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://watch.paipai.com/?PTAG=20084.111.3">手表</a>
											</li>
											<li>
												<a target="_blank" href="http://shine.paipai.com/?PTAG=20084.111.3">时尚饰品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,21036/l---1-48-24-21036--1-4-1----2-2-512-384-1-0-cl,21036.html?PTAG=20084.111.3">女鞋</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,34167/l---1-40-24-34167--1-4-1----2-2-512-131200-1-0.html?PTAG=20084.111.3">男鞋</a>
											</li>
											<li>
												<a target="_blank" href="http://bag.paipai.com/?PTAG=20084.111.3">皮具箱包</a>
											</li>
											<li>
												<a target="_blank" href="http://shine.paipai.com/?PTAG=20084.111.3">珠宝黄金</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl fun">
									<dt>
										<s class="pp-mn-ul-icon"></s>文化娱乐
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://auto.paipai.com/?PTAG=20084.111.4">汽车用品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,24001/l---1-40-13-24001--1-4-1----2-2--128-0.html?PTAG=20084.111.4">鲜花礼品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,23501/l---1-40-80-23501--1-4-1----2-2-512-128-1-0-cl,23501.html&ts&?PTAG=20084.111.4">图书/音像</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,230001/l---1-40-80-230001--1-4-3----2-2-512-128-1-0-sf,21.html?PTAG=20084.111.4">宠物用品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,226060/l---1-48-77-226060--1-4-3----2-2-512-128-1-0-sf,21-cl,226066-mtag,1.html?PTAG=20084.111.4">成人用品</a>
											</li>
											<li>
												<a target="_blank" href=" http://list1.paipai.com/0,240274/l---1-48-77-240274--1-4-3----2-2-512-128-1-0-cl,240274.html&ts&?PTAG=20084.111.4">乐器</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl furn">
									<dt>
										<s class="pp-mn-ul-icon"></s>家居日用
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,35737/l---1-48-77-35737--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.5">家纺布艺</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,28055/l---1-48-77-28055--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.5">居家日用</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,242414/l---1-48-77-242414--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.5">家居饰品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,28054/l---1-48-77-28054--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.5">家具家装</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,217920/l---1-40-80-217920--1-4-3----2-2-512-128-1-0-sf,21.html#PTAG=20084.111.5">玩具模型</a>
											</li>
											<li>
												<a target="_blank" href="http://baoxian.paipai.com/charge_index_baoxian.shtml?index=0&vb2ctag=1_2_2_6_34&PTAG=20084.111.5">家庭保险</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl sports">
									<dt>
										<s class="pp-mn-ul-icon"></s>运动户外
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,6017/l---1-40-13-6017--1-4-1----2-2--128-0.html?PTAG=20084.111.6">运动鞋</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,34527/l---1-40-13-34527--1-4-1----2-2--128-0.html?PTAG=20084.111.6">运动服包</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,6070/l---1-40-80-6070--1-4-1----2-2-512-128-1-0-cl,6070.html?PTAG=20084.111.6">户外装备</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,6001/l---1-40-15-6001--3-4-3----2-2-512-128-1-0-cl,6001.html#PTAG=20084.111.6">健身器材</a>
											</li>
											<li>
												<a target="_blank" href="http://baoxian.paipai.com/charge_index_baoxian.shtml?vb2ctag=1_2_2_6_34&PTAG=20084.111.6">户外保险</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,6001-0,26897/l---1-48-77-26897--3-4-3----2-2-512-128-1-0-cl,6001-mtag,1.html?PTAG=20084.111.6">游泳相关</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl clothes">
									<dt>
										<s class="pp-mn-ul-icon"></s>男女服装
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,20501/l---1-48-77-20501--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.7">女士服装</a>
											</li>
											<li>
												<a target="_blank" href="http://man.paipai.com/?PTAG=20084.111.7">男士服装</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,27158/l---1-48-77-27158--3-4-3----2-2-512-128-1-0.html?PTAG=20084.111.7">女士内衣</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,22001/l---1-48-77-22001--3-4-3----2-2-512-128-1-0.html?ptag=20084.111.7">男士内衣</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,21001/l---1-48-77-21001--1-4-1----2-2-512-128-1-0-cl,216113.html?PTAG=20084.111.7">女士配件</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,242154/l---1-48-77-242154--3-4-3----2-2-512-128-1-0-cl,242154.html?PTAG=20084.111.7">男士配件</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl cosmetic">
									<dt>
										<s class="pp-mn-ul-icon"></s>美容美妆
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=20001&searchtype=2#PTAG=20084.111.8">护肤</a>
											</li>
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=242866&searchtype=2#PTAG=20084.111.8">彩妆/工具</a>
											</li>
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=242890&searchtype=2#PTAG=20084.111.8">香水</a>
											</li>
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=20174&searchtype=2#PTAG=20084.111.8">男士</a>
											</li>
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=20001&searchtype=2#PTAG=20084.111.8">美体</a>
											</li>
											<li>
												<a target="_blank" href="http://beauty.paipai.com/search_list.shtml?type=242867&searchtype=2#PTAG=20084.111.8">美发/假发</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl baby">
									<dt>
										<s class="pp-mn-ul-icon"></s>母婴用品
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224840-0,224841/l---1-48-77-224841--3-4-3----2-2-512-128-1-0-sf,21-cl,224840.html#PTAG=20084.111.9">婴幼食品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224848/l---1-40-13-224848--3-4-3----2-2--128-0-0-sf,77.html&ts&#PTAG=20084.111.9">婴幼用品</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224914/l---1-48-77-224914--3-4-3----2-2--128-1-0-sf,77-cl,224914.html?PTAG=20084.111.9">婴幼童装</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224914-0,224923/l---1-48-77-224923--3-4-3----2-2-512-128-0-0-sf,77-cl,224914.html?PTAG=20084.111.9">婴幼童鞋</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224968/l---1-40-13-224968--3-4-3----2-2--128-0-0-sf,77.html&ts&#PTAG=20084.111.9">玩具/车床</a>
											</li>
											<li>
												<a target="_blank" href="http://list1.paipai.com/0,224898/l---1-40-13-224898--3-4-3----2-2--128-0-0-sf,77.html&ts&#PTAG=20084.111.9">妈妈用品</a>
											</li>
										</ul>
									</dd>
								</dl>
								<dl class="pp-nl-dl food">
									<dt>
										<s class="pp-mn-ul-icon"></s>食品保健
									</dt>
									<dd>
										<ul class="pp-nl-ul">
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=200540&os=21&searchtype=1&PTAG=20084.111.10">休闲零食</a>
											</li>
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=242217&searchtype=1&PTAG=20084.111.10">进口零食</a>
											</li>
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=200643&os=21&searchtype=1&PTAG=20084.111.10">蜜饯果脯</a>
											</li>
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=203440&os=21&searchtype=1&PTAG=20084.111.10">坚果炒货</a>
											</li>
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=34526&os=21&searchtype=1&PTAG=20084.111.10">滋补保健</a>
											</li>
											<li>
												<a target="_blank" href="http://food.paipai.com/search_list.shtml?type=200640&os=21&searchtype=1&PTAG=20084.111.10">茶饮酒水</a>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>

					</li>
					<li class="pp-mn-w0"></li>
					<li class="pp-mn-lady">
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://lady.paipai.com/?PTAG=20084.3.2">女装<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://man.paipai.com/?PTAG=20084.3.8">男装<s></s></a><span class="pp-mn-hot"></span>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://3c.paipai.com/?PTAG=20084.3.3">数码<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://sports.paipai.com/?PTAG=20084.3.9">运动<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://beauty.paipai.com/?PTAG=20084.3.6">美妆<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://life.paipai.com/?PTAG=20084.3.4">家居<s></s></a><span class="pp-mn-new"></span>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://food.paipai.com/?PTAG=20084.3.5">美食<s></s></a>
					</li>
					<li class="pp-mn-w0"></li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://chong.qq.com/home/mobile_v2.shtml?vb2ctag=1_22_3_1027">充值<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" href="http://888.qq.com/?bc_tag=10004.1.1" target="_blank">彩票<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" href="http://go.qq.com/#attach=qqlvyou_1_13_1" target="_blank">旅游<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" href="http://service.paipai.com/cgi-bin/go?pageId=20084&domainId=3&linkId=15&url=http://buy.piao.qq.com/" target="_blank">票务<s></s></a>
					</li>
					<li class="pp-mn-w0"></li>
					<li class="pp-mn-w4">
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://www.paipai.com/sale/?PTAG=20084.3.10">今日特价<s></s></a>
					</li>
					<li>
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://tuan.paipai.com/?PTAG=20084.3.12">团购<s></s></a>
					</li>
					<li class="pp-mn-w3">
						<a class="pp-mn-ul-a" name="ppMainNav1" href="http://www.paipai.com/temai/?PTAG=20084.3.11">特卖会<s></s></a>
					</li>
					<li class="pp-mn-w0"></li>
					<li id="ppMainNavMore" class="pp-mn-ul-more pp-ls">
						<div class="pp-ls-hd pp-mn-ul-more-hd">
							<a href="###" class="pp-mn-ul-a" onfocus="this.parentNode.parentNode.className='pp-mn-ul-more pp-ls hover'"  >更多</a><span class="angle"></span>
						</div>
						<div class="pp-ls-bd">
							<dl class="pp-nl-dl pp-nl-dl-first">
								<dt>
									更多购物频道
								</dt>
								<dd>
									<ul class="pp-nl-ul">
										<li>
											<s></s><a href="http://baby.paipai.com/?PTAG=20084.112.1">母婴</a>
										</li>
										<li>
											<s></s><a href="http://bag.paipai.com/?PTAG=20084.112.21">箱包</a>
										</li>
										<li>
											<s></s><a href="http://watch.paipai.com/?PTAG=20084.112.22">手表</a>
										</li>
										<li>
											<s></s><a href="http://shine.paipai.com/?PTAG=20084.112.23">饰品</a>
										</li>
										<li>
											<s></s><a href="http://book.paipai.com/?PTAG=20084.112.25">图书音像</a>
										</li>
										<li>
											<s></s><a href="http://beauty.paipai.com/liwu/?PTAG=20084.112.2">礼物</a>
										</li>
										<li>
											<s></s><a href="http://auto.paipai.com/?PTAG=20084.112.3">汽车用品</a>
										</li>
										<li>
											<s></s><a href="http://chong.paipai.com/charge_index_baoxian_cx.shtml?PTAG=20084.112.4">保险</a>
										</li>
										<li>
											<s></s><a href="http://service.paipai.com/cgi-bin/go?pageId=20084&domainId=112&linkId=5&url=http://piao.qq.com/yanchu/" target="_blank">演唱会</a>
										</li>
										<li>
											<s></s><a href="http://service.paipai.com/cgi-bin/go?pageId=20084&domainId=112&linkId=6&url=http://meishi.qq.com/" target="_blank">QQ美食</a>
										</li>
										<li>
											<s></s><a href="http://man.paipai.com/man_shoes.shtml?PTAG=20084.112.26" target="_blank">男鞋</a>
										</li>
										<li>
											<s></s><a href="http://lady.paipai.com/shoes/?PTAG=20084.112.27" target="_blank">女鞋</a>
										</li>
									</ul>
								</dd>
							</dl>
							<dl class="pp-nl-dl">
								<dt>
									更多优惠频道
								</dt>
								<dd>
									<ul class="pp-nl-ul">
										<li>
											<s></s><a href="http://www.paipai.com/tiao/?PTAG=20084.112.7">帮你挑</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/hongbao/?PTAG=20084.112.8">红包</a>
										</li>
										<li>
											<s></s><a href="http://act.shop.qq.com/baoyou/?PTAG=20084.112.9">包邮</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/promote/2012/index_183.shtml?PTAG=20084.112.10">广货网上行</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/coupon/?PTAG=20084.112.11">送优惠券</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/rank/index.shtml?PTAG=20084.112.12">排行榜</a>
										</li>
										<li>
											<s></s><a href="http://vip.paipai.com/?PTAG=20084.112.13">彩钻特权</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/fresher/?PTAG=20084.112.14">新人礼</a>
										</li>
										<li>
											<s></s><a href="http://www.paipai.com/COD/index.shtml?PTAG=20084.112.24">货到付款</a>
										</li>
									</ul>
								</dd>
							</dl>
							<dl class="pp-nl-dl">
								<dt>
									更多导购频道
								</dt>
								<dd>
									<ul class="pp-nl-ul">
										<li>
											<s></s><a href="http://bbs.paipai.com/portal.php?PTAG=20084.112.17">社区</a>
										</li>
										<li>
											<s></s><a href="http://tu.paipai.com/?PTAG=20084.112.18">看图购</a>
										</li>
									</ul>
								</dd>
							</dl>
							<a href="http://www.paipai.com/trust/plan/index.shtml?tab=2&PTAG=20084.112.20" onblur="this.parentNode.parentNode.className='pp-mn-ul-more pp-ls'"><img src="http://pics0.paipaiimg.com/update/20120517/index_093128919.png" alt="拍拍购物更放心"/></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" id="legos:20168" ver="20168:20120408:20120417202714" name="PP.head.menu.v2012" charset="gbk">
            function $id(id) {
                return typeof (id) == "string" ? document.getElementById(id) : id;
            };
            function $mouseout(obj, func) {
                obj.onmouseout = function(e) {
                    var e = window.event || e, target = e.toElement || e.relatedTarget, parent = target;
                    while (parent && parent !== this) {
                        parent = parent.parentNode;
                    }
                    if (parent !== this) {
                        func(this);
                    }
                }
            };
            function $mouseover(obj, func) {
                obj.onmouseover = function(e) {
                    var e = window.event || e, target = e.fromElement || e.relatedTarget, parent = target;
                    while (parent && parent !== this) {
                        parent = parent.parentNode;
                    }
                    if (parent !== this) {
                        func(this);
                    }
                }
            };
            function $namespace(str) {
                var arr = str.split(',');
                for (var i = 0, len = arr.length; i < len; i++) {
                    var arrJ = arr[i].split("."), parent = {};
                    for (var j = 0, jLen = arrJ.length; j < jLen; j++) {
                        var name = arrJ[j], child = parent[name];
                        j === 0 ? eval('(typeof ' + name + ')==="undefined"?(' + name + '={}):"";parent=' + name) : ( parent = parent[name] = ( typeof child) === 'undefined' ? {} : child);
                    };
                }
            };$namespace("PP.head.menu.v2012");
            PP.head.menu.v2012 = {};
            PP.head.menu.v2012.init = function() {
                var navList = document.getElementsByName('ppMainNav1'), host = window.location.host, abspath = host == 'www.paipai.com' ? host + window.location.pathname : host;
                if (abspath != 'www.paipai.com/') {
                    for (var i = 0, len = navList.length; i < len; i++) {
                        if (navList[i].href.indexOf(abspath) > -1) {
                            navList[i].className = navList[i].className + ' pp-mn-cur';
                            break;
                        }
                    }
                }
                function showMenu(el, delay) {
                    $mouseover(el, function() {
                        if (el.hideTimer) {
                            clearTimeout(el.hideTimer);
                            el.hideTimer = null;
                        }
                        el.showTimer = setTimeout(function() {
                            el.className = el.className + ' hover';
                        }, delay);
                    });
                    $mouseout(el, function() {
                        if (el.showTimer) {
                            clearTimeout(el.showTimer);
                            el.showTimer = null;
                        }
                        el.hideTimer = setTimeout(function() {
                            el.className = el.className.replace(/\shover/ig, '');
                        }, delay);
                    });
                }

                showMenu($id('ppMainNavAll'), 200);
                showMenu($id('ppMainNavMore'), 200);
            };
            PP.head.menu.v2012.init();
            window['PP.head.menu.v2012'] = '20168:20120408:20120417202714';
		</script><!--[if !IE]>|xGv00|5deba993ee1c5e7ac288fb4cbf3094a1<![endif]-->
		<!--[if !IE]>|xGv00|9bb1384c0263eb61d1a5572528b75b6a<![endif]-->
		<!--E 一级类目导航 -->
		<div class="sale_nav_wrap">
			<div class="inner">
				<nav>
					<ul class="sale_nav font_yahei clear">
						<li id="newTab0">
							<a href="http://www.paipai.com/sale/index.shtml?PTAG=33495.1.1" title="抢购" target="_blank">抢购</a>
						</li>
						<li id="newTab1">
							<a href="http://tuan.paipai.com/?PTAG=33495.1.2" title="团购" target="_blank">团购</a>
						</li>
						<li id="newTab2">
							<a href="http://tuan.paipai.com/activity/brands_tuan.shtml?PTAG=33495.1.3" title="品牌团" target="_blank">品牌团</a>
						</li>
						<!--WEBPAGEBEGIN@4031-->

						<li style="display:block" id="label0" style="display:block;">
							<a href="http://buy.qq.com/tuan/promote/2013/loreal.shtml?PTAG=33723.4.2"><span id="sub0" index="0" start="2013/05/16 00:00:00" end="2013/05/21 23:59:59" title="欧莱雅开业庆典" class="nav_arrow none"> 欧莱雅开业庆典</span></a>
						</li>

						<li style="display:block" id="label1" style="display:block;">
							<a href="http://buy.qq.com/tuan/promote/2013/index_4.shtml?PTAG=33744.1.1"><span id="sub1" index="1" start="2013/05/17 00:00:00" end="2013/05/21 23:59:59" title="办公室零食" class="nav_arrow none"> 办公室零食</span></a>
						</li>

						<!--WEBPAGEEND@4031--><!--[if !IE]>|xGv00|5a132626149f77a32c4364cae4371455<![endif]-->
					</ul>
				</nav>
				<div class="sale_extra">
					<i class="ico_zp" title="全场正品"></i><i class="ico_qg" title="限时抢购"></i><i class="ico_by" title="全场包邮"></i>
				</div>
			</div>
		</div>
		<!-- E 顶部导航 -->
		<!--[if !IE]>|xGv00|837a13c5b6e6f5d6e5354145544d5b01<![endif]-->
		<!-- E 今日特价头部 -->
		

	
		<div class="sale_tip_msg">
			亲爱的今日特价用户，由于抢购商品是亏本稀缺商品，现拍下商品后<span>30分钟</span>不付款将会取消订单，其他用户可继续购买。因此，看中的商品请及时付款哦！
		</div>
		<!-- E 临时性提醒 -->

		<!-- S 主体部分 -->
		<div class="sale_main_wrap sale_main_bg">

			<div class="sale_main">

				<!-- S 顶部广告图，可直接插入图片也可以设置背景 -->
				<div class="sale_banner">
					<div class="slider-list" id="ppTuanBanner">
						<ol style="display:none" id="portalSliderList">
							<!--WEBPAGEBEGIN@3715-->
							<li style="display:block">
								<a href="http://buy.qq.com/tuan/promote/2013/loreal.shtml?PTAG=33723.4.3" target="_blank" title="欧莱雅"><img data-pinit="registered" src="http://pics0.paipaiimg.com/update/20130520/tuan_113102954.jpg"  alt="欧莱雅"></a>
							</li>

							<!--WEBPAGEEND@3715--><!--[if !IE]>|xGv00|2f7535dc9b80b4fd9990167c15d616c7<![endif]-->
						</ol>
					</div>
					<div class="slider-nav" id="portalSliderMid" style="display:none">
						<ul id="portalSliderNav"></ul>
					</div>
				</div>
				<!-- E 顶部广告图 -->

				<!-- S 时间轴 -->
				<div class="mod_time_line_wrap">
					<div class="mod_tab mod_timeline " id="timeline">
						<div class="mod_tab_hd" id="pp_date">
							<a class="cur" onClick="setDateMod(0);" hidefocus="true" style="cursor:pointer">1月10日(今日)</a>
							<a onClick="setDateMod(1);" hidefocus="true" style="cursor:pointer">1月11日</a>
							<a onClick="setDateMod(2);" hidefocus="true" style="cursor:pointer">1月12日</a>
							<a onClick="setDateMod(3);" hidefocus="true" style="cursor:pointer">1月13日</a>
							<a onClick="setDateMod(4);" hidefocus="true" style="cursor:pointer">1月14日</a>
							<a onClick="setDateMod(5);" hidefocus="true" style="cursor:pointer">1月15日</a>
							<span class="subscribe"> <a href="http://bbs.paipai.com/forum-159-1.html?ptag=33495.30.4" class="wb" target="_blank"><i></i>活动交流</a> <a href="//www.paipai.com/sale/sub.shtml?PTAG=33495.30.2" class="dy" target="_blank"><i></i>订阅</a> </span>
						</div>
						<div class="mod_tab_bd">
							<!-- S 时间轴主体 通过 timeline_col_xx 控制不同个数的样式 6-13 -->
							<div class="timeline_wrap timeline_col_16">
								<span class="timeline"></span>
								<ul class="point_list clear" id="pp_timelist">
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(0);return false;"> <span>0:00</span><span>已结束</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(1);return false;"> <span>9:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(2);return false;"> <span>10:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(3);return false;"> <span>11:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(4);return false;"> <span>12:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(5);return false;"> <span>13:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(6);return false;"> <span>14:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(7);return false;"> <span>15:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(8);return false;"> <span>16:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(9);return false;"> <span>17:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(10);return false;" title="还有更多的场次"> <span>18:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(11);return false;" > <span>19:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(12);return false;" > <span>20:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(13);return false;" > <span>21:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(14);return false;" > <span>22:00</span><span>尚未开抢</span> </a>
									</li>
									<li class="point">
										<a class="point_anchor" onClick="setSpotMod(15);return false;" > <span>23:00</span><span>尚未开抢</span> </a>
									</li>
								</ul>

							</div>
							<!-- E 时间轴主体 -->
						</div>
					</div>
				</div>
			
				<div class="sale_product_list_wrap" id="pp_comdyList">
					<!-- S 时间信息 -->

				</div>
				<!-- E 商品列表区域 -->
				<div class="sale_product_list_wrap tuan_main">
					<!-- S 时间信息 -->
					<div class="time_info font_yahei clear">
						<span class="start_time"> <span class="txt">没抢到？看看更多团购优惠</span> </span>
					</div>
					<!-- E 时间信息 -->
					<!--团购模块 -->
					<ul class="sale_product_list clear" id="tuan_comdylist">
						<li class="hproduct font_yahei on_sale">
							<div class="inner">
								<a title="劲酷炫黑男士市场皮手套手套" target="_blank" href="" class="url photo_wrap"> <img width="296" height="214" alt="示意图片" src="" class="photo"> </a>
								<a target="_blank" title="劲酷炫黑男士市场皮手套手套" href="" class="url fn"></a>
								<p class="price_wrap">
									￥<span class="price"></span>
									<a target="_blank" href="" class="url btn_tuan">我要团</a>
								</p>
								<p class="stock_wrap font_arial clear">
									<span class="old_price">市场价：￥</span>
									<span class="sold_cnt">人已购买</span>
								</p>
							</div>
						</li>

					</ul>

					<div class="go_tuan">
						<h3 class="font_yahei">去团购频道逛逛</h3>
						<span class="tuan_link"> <a href="http://tuan.paipai.com/#filter=1-0" target="_blank">服装</a> <a href="http://tuan.paipai.com/#filter=2-0" target="_blank">电器</a> <a href="http://tuan.paipai.com/#filter=3-0" target="_blank">鞋包</a> <a href="http://tuan.paipai.com/#filter=4-0" target="_blank">家居</a> <a href="http://tuan.paipai.com/#filter=5-0" target="_blank">运动</a> <a href="http://tuan.paipai.com/#filter=6-0" target="_blank">美妆</a> <a href="http://tuan.paipai.com/#filter=7-0" target="_blank">配饰</a> <a href="http://tuan.paipai.com/#filter=8-0" target="_blank">母婴</a> <a href="http://tuan.paipai.com/#filter=9-0" target="_blank">食品</a> <a href="http://tuan.paipai.com/#filter=10-0" target="_blank">其他</a> </span>
					</div>
				</div>
				<!--团购模块 -->
				<div class="sale_banner">
					<div id="ppTuanBanner1" class="slider-list">
						<ol id="ppTuanbottom" style="position:">

							<li style="height:60px; visibility: visible;">
								<a title="真维斯" target="_blank" href="http://tuan.paipai.com/activity/brands_tuan.shtml?uin=855000326&PTAG=30895.72.14?ptag="><img alt="真维斯" back_src="http://pai5.qpic.cn/paipai/3ePNwuFiab23OSaYpBAA0fLScfgRDibDicbG6guQianMiatE/2000" src="http://pai5.qpic.cn/paipai/3ePNwuFiab23OSaYpBAA0fLScfgRDibDicbG6guQianMiatE/2000" data-pinit="registered"></a>
							</li>

							<li style="height:60px; visibility: visible;">
								<a title="欧莱雅" target="_blank" href="http://buy.qq.com/tuan/promote/2013/loreal.shtml?PTAG=33723.4.4?ptag="><img alt="欧莱雅" back_src="http://pics3.paipaiimg.com/update/20130515/tuan_213040721.jpg" src="http://pics3.paipaiimg.com/update/20130515/tuan_213040721.jpg" data-pinit="registered"></a>
							</li>

							<li style="height:60px; visibility: visible;">
								<a title="办公室食品团" target="_blank" href="http://auction1.paipai.com/E955F63200000000040100000DBE8F2A?PTAG=20084.198.5?ptag="><img alt="办公室食品团" back_src="http://pics2.paipaiimg.com/update/20130517/index_985_60.jpg" src="http://pics2.paipaiimg.com/update/20130517/index_985_60.jpg" data-pinit="registered"></a>
							</li>

						</ol>
					</div><!--[if !IE]>|xGv00|4b995a71dd7a8c93ae24dde7170bf0c6<![endif]-->

					<div class="slider-nav" id="portalSliderM" style="display:none">
						<ul id="portalSliderBto"></ul>
					</div>

				</div>
				<iframe height="314" width="985" scrolling="no" frameborder="0" src="http://static.paipaiimg.com/sinclude/update/sale_party.shtml" style="border:none;"></iframe>
			</div>
			<!--S 页脚-->
			<div id="pp_foot" style="display:block">

				<!--S sale foot -->
				<div id="service">
					<div id="shopService" class="m_radius intro_sort">
						<div class="inner cf">
							<div class="sort_show">
								<div class="pub_ico icon_s1"></div>
								<div class="sort_list">
									<h4><span>今日特价介绍</span></h4>
									<p id="ad_foot1"></p>
								</div>
							</div>
							<div class="sort_show">
								<div class="pub_ico icon_s2"></div>
								<div class="sort_list">
									<h4><span>购物保障</span></h4>
									<p id="ad_foot2"></p>
								</div>
							</div>
							<div class="sort_show">
								<div class="pub_ico icon_s3"></div>
								<div class="sort_list">
									<h4><span>抢购秘籍</span></h4>
									<p id="ad_foot3"></p>
								</div>
							</div>
							<div class="sort_show">
								<div class="pub_ico icon_s4"></div>
								<div class="sort_list">
									<h4><span>联系我们</span></h4>
									<p id="ad_foot4"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- E sale foot --><!--[if !IE]>|xGv00|a02927e475cf8bfbcd206cb2011e3b5a<![endif]-->
				<div class="pp-footer" id="ppFooter">
					<div class="pp-footer-bd">
						<div class="pp-footer-sitelink group" id="foot" role="contentinfo">
							<div class="tencent">
								<a href="http://ecc.tencent.com/index.php/home/about.html" target="_blank">腾讯电商简介</a><span class="line">|</span>
								<a href="http://kf.qq.com/category/paipai.html" target="_blank">客服中心</a><span class="line">|</span>
								<a href="http://pop.paipai.com" target="_blank">开放平台</a><span class="line">|</span>
								<a href="http://ecc.tencent.com/" target="_blank">腾讯电商招聘</a><span class="line">|</span>
								<a href="https://www.tenpay.com/" target="_blank">财付通支付</a><span class="line">|</span>
								<a href="http://cb.qq.com/shop/index.html" target="_blank">QQ返利</a><span class="line">|</span>
								<a href="http://www.paipai.com/sitemap.shtml" target="_blank">网站地图</a><span class="line">|</span>
								<a href="http://etg.qq.com/cgi-bin/etgad_getmtl?mtltype=4&channelid=paipai&PTAG=10076.16.1" target="_blank">网站联盟</a><span class="line">|</span>
								<a href="http://help.paipai.com/user_agreement.shtml" target="_blank">用户协议</a><span class="line">|</span>
								<a href="http://www.tencent.com/zh-cn/le/copyrightstatement.shtml" target="_blank">版权说明</a>
							</div>
						</div>
						<div class="group">
							<div class="pp-footer-copyright">
								<a href="http://service.paipai.com/cgi-bin/go?pageId=10&domainId=1&linkId=84&url=http://www.paipai.com/include/netSupervision.html" target="_blank" class="pp-footer-police" title="深圳网上公安"><u></u>深圳网上公安</a>
								<p>
									Copyright &copy; 1998-
									<script>
                                        (function() {
                                            document.write(new Date().getFullYear())
                                        })()
									</script>
									Tencent.All Rights Reserved 腾讯公司 版权所有
								</p>
								<p>
									<a href="http://service.paipai.com/cgi-bin/go?pageId=10&domainId=1&linkId=79&url=http://www.paipai.com/include/gdca.html" target="_blank">广东省通管局</a><a href="http://www.qq.com/icp.shtml" target="_blank">增值电信业务经营许可证B2-20040031</a>
								</p>
								<div class="pp-footer-trust-eshop">
									<a href="http://search.cxwz.org/cert/l/CX20111018000606000653" target="_blank" title="拍拍网：首批中国电子商务诚信网站示范企业"><img src="http://pics3.paipaiimg.com/update/20130411/index_logo_trust_eshop.png" alt="诚信网站" /></a><a href="http://www.ghwsx.gov.cn/gholportal/homenew.aspx" target="_blank" title="拍拍网：广货网上行"><img src="http://pics3.paipaiimg.com/update/20130411/index_logo_ghwsx.png" alt="广货网上行" /></a>
								</div>
							</div>
						</div>
						<!--[if !IE]>|xGv00|cc4cbe3d971174afe6b33f00f9cd720e<![endif]-->
						<!--[if !IE]>|xGv00|8562b5198b819aae2599422d037fbd8e<![endif]-->
					</div>
				</div>
				
			</div>

			<!--E 页脚-->
		</div>
		<!-- E 主体部分 -->
		<!--S 返回顶部 -->
		<a href="#" id="goTop" class="go_top off_screen"><i></i></a>
	
	</body>
</html><!--[if !IE]>|xGv00|d23baa5ddb675b9a1caaadef7cb49ded<![endif]-->
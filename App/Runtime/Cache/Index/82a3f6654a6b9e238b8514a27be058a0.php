<?php if (!defined('THINK_PATH')) exit();?><!Doctype html><html><head><title>呆萌网----浏览项目</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- 指定以最新的IE版本模式来显示网页 --><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="description" content="呆萌网,呆萌首页,大学生众筹,大学生社交，呆萌众筹,众筹公益,呆萌基金,呆萌公益,大学生公益"/><meta name="Keywords" content="呆萌网,呆萌首页,大学生众筹,众筹网，大学生社交/"><link rel="stylesheet" href="__PUBLIC__/res/bootstrap/css/bootstrap.css"/><link rel="stylesheet" href="__PUBLIC__/zc.css"/><link rel="stylesheet" href="__PUBLIC__/res/css/hf.css"/><link href="__PUBLIC__/res/css/look.css" rel="stylesheet"><link rel="Shortcut Icon" href="__PUBLIC__/res/images/sty.ico"><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/jquery-1.9.0.min.js"></script><script src="__PUBLIC__/res/bootstrap/js/bootstrap.min.js"></script><script src="__PUBLIC__/res/js/hf.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/lib/jquery.cookies.js"></script><script src="__PUBLIC__/res/js/look.js"></script><script>    num = <?php echo count($data)?>;//项目上线的数目
	var LOOKURL="__URL__";//ajax里面设定url
		document.cookie="look_items_Cookie=all";
		document.cookie="look_province_position_Cookie=0";
		document.cookie="look_city_position_Cookie=0";
   </script><!--**********************************************全国省市大学*********************************************************--><!--*************************************************全国省市大学******************************************************--></head><body style="line-height: 24px;line-height: 24px;font-family:'Microsoft Yahei';color: #666;font-weight:normal;" onload="setup()"><div class="header"><!--导航条部分--><!-- Fixed navbar --><div id="bar1"><div class="badge">您好，欢迎来到呆萌！</div><?php  if($_SESSION["user_id"]) { echo "<a href=".U('/my','','').">".$_SESSION["niker"]."</a>"; echo "<a href='###'  class='_exit'>退出</a>"; } else { echo "<a href=".U('/login','','')."  target='_blank'>登录</a>"; echo "<a href=".U('/register','','')." target='_blank'>[免费注册]</a>"; } ?><a href="<?php echo U('/help/124','','');?>">帮助中心</a></div><div id="head_"><ul ><li style="margin-left:100px;"><a href="<?php echo U('/index','','');?>"><img class="top_img" src="__PUBLIC__/res/images/top_pic/1.9.png" style="width:160px"></a></li><li><a class="active_" style=" text-decoration: none;" href="<?php echo U('/index');?>" onfocus="this.blur();">首页</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/item','','');?>" target="_blank">浏览项目</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/start/agreement','','');?>" target="_blank">发起项目</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/community','','');?>" target="_blank">呆萌社区</a></li><li><form action="<?php echo U('index/items/index');?>" method="post" ><input class="search_content" type="text" name="search_content" style="width:200px;" placeholder="搜索喜爱的项目" maxlength="15" /><input class="search_sub" type="submit" style="color:#fff;width:70" value="搜索" /></form></li><li    style="margin-left:35px;"><ul id="hid"style="display:inline;"><li class="menus" style="display:block;"><img class="person_img" src="__PUBLIC__/res/images/small_pic/person.png" style="width:46px;"><a  style=" text-decoration: none;color:#33a600;" href="<?php echo U('/person/'.session("user_id"));?>" >个人中心</a></li><li  class="top_dashed" style="padding:0px;margin:0px;"></li><li class="person_blur" style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/support','','');?>">我的众筹</a></li><li class="person_blur"  style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/news','','');?>">消息中心</a></li><li class="person_blur"  style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/my','','');?>">个人信息</a></li></ul></li></ul></div><script type="text/javascript">    var check_rem="<?php echo U('publicmodel/check_rem','','');?>";

    var exit_url="<?php echo U('/index/publicmodel/exit1','','');?>";

    _home="<?php echo U('/Index','','');?>";

    </script><!--头文件的包含--><!-- 图片轮播--><div class="main" style="backgroudn:#F7F3F7;"><!--中间部分--><div class=" mid_head" style="margin-right:0xp;"><div class="col-lg-1 "></div><div class="col-lg-10 mid"><div class="row"><div class="col-lg-10"><a href="javascript:void(0)"><div  id="all" class="model" style="background-color:#474e5d;color:#fff;cursor:hand ">全部</div></a><a href="javascript:void(0)"><div id="activity" class="model">活动</div></a><a href="javascript:void(0)"><div id="lecture" class="model">讲座</div></a><a href="javascript:void(0)"><div id="movie" class="model">影视</div></a><a href="javascript:void(0)"><div id="public" class="model">公益</div></a><a href="javascript:void(0)"><div id="create" class="model">创意</div><a href="javascript:void(0)"><div id="life" class="model">生活</div></a><a href="javascript:void(0)"><div id="study" class="model">学习</div></a><a href="javascript:void(0)"><div id="other" class="model">其他</div></a></div><div class="col-lg-2 shengshi"><!--				
				<div class="model_big" style="margin-top:45px;">				全国省市的在此，把div注销js无法添加
				如果需需在再次启动只要把注销去掉就可以用了
					</div>--></div></div></div><div class="col-lg-1 "></div></div><div class="mid_main"><div class="row"><div class="col-lg-1"></div><div class="col-lg-10"><div class="row" ><div class="col-lg-3"><div id="look_1" class="yincan"><div style="border-radius: 15px; background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[0]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[0]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[0]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0 ;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width: <?php echo ($data[constant]-$data[0]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:0px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[0]["percent"]); ?></div><div style="float:left">%</div><br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[0]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[0]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[0]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[0]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[0]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3"><div id="look_2" class="yincan"><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[1]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[1]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[1]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[1]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[1]["percent"]); ?></div><div style="float:left;">%</div><br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[1]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[1]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[1]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[1]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[1]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3"><div id="look_3" class="yincan"><div style=" border-radius: 15px;   background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[2]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[2]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[2]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[2]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[2]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[2]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[2]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[2]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[2]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[2]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3" ><div id="look_4" class="yincan"><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[3]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[3]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[3]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[3]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[3]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[3]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[3]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[3]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[3]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[3]["prise"]); ?></div></div></div></div></div></div></div></div><div class="row"><div class="col-lg-3"><div id="look_5" class="yincan"><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[4]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[4]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[4]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[4]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[4]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[4]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[4]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[4]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[4]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[4]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3"><div id="look_6" class="yincan"><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[5]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[5]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[5]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[5]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[5]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[5]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[5]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[5]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[5]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[5]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3"><div id="look_7" class="yincan"><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" href="/detail/<?php echo ($data[6]['id']); ?>"><img class="look_img"  src="__PUBLIC__/res/images/Items/<?php echo ($data[6]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[6]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[6]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[6]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[6]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[6]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[6]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[6]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[6]["prise"]); ?></div></div></div></div></div></div></div><div class="col-lg-3"><div id="look_8" class="yincan"><div style=" border-radius: 15px;   background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a class="img_src" class="img_src" href="/detail/<?php echo ($data[7]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($data[7]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($data[7]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: url(__PUBLIC__/res/images/small_pic/icon-progress.gif) repeat scroll 0 0;height: 8px;width:100%;"><div class="progress_bar" style="float:right;height:8px;width:<?php echo ($data[constant]-$data[7]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;"><div class="col-lg-4"><div class="money_precent" style="float:left"><?php echo ($data[7]["percent"]); ?></div>%<br>已达</div><div class="col-lg-3"><div class="percent" style="float:left">￥<?php echo ($data[7]['gain']); ?></div><br>已达</div><div class="col-lg-5"><div class="day" style="float:left"><?php echo ($data[7]['day']); ?></div>天<br>剩余时间</div></div><div><div style="float:right	;margin-top:15px;margin-right:5px"><div style="float:left" >支持:<div style="float:right" class="sup"><?php echo ($data[7]["sup"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;关注:<div style="float:right" class="attention"><?php echo ($data[7]["attention"]); ?></div></div> &nbsp;
									<div style="float:left" >&nbsp;&nbsp;赞:<div style="float:right" class="prise"><?php echo ($data[7]["prise"]); ?></div></div></div></div></div></div></div></div><div id="dis" style="display:none; margin-left:90px"><img src="__PUBLIC__/res/images/Items/la.png"></div><div style="width:100%;height:10px;"><!--ajax分页--><ul class="pagination pagination-sm" id="paging" style="float:right;" style="margin-top:-5px;"><li class="_left"><a href="javascript:void(0)">&laquo;</a></li><li><a class="shuzi" href="javascript:void(0)">1</a></li><li><a class="shuzi" href="javascript:void(0)">2</a></li><li><a class="shuzi" href="javascript:void(0)">3</a></li><li><a class="shuzi" href="javascript:void(0)">4</a></li><li><a  class="shuzi" href="javascript:void(0)">5</a></li><li class="_right"><a href="javascript:void(0)">&raquo;</a></li></ul></div><!--即将推出--><div style="margin-top:30px;"><img src="__PUBLIC__/res/images/Items/look_meta.png" ><div class="row"><?php if(!empty($recommend[0]['title'])): ?><div class="col-lg-3"><div ><div style="   border-radius: 15px; background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a href="/detail/<?php echo ($recommend[0]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($recommend[0]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($recommend[0]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: none repeat scroll 0 0 #a5ca4d;height: 8px;width:100%;"><div style="float:right;height:8px;width:<?php echo ($data[constant]-$data[7]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button1.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;color:#636363">									将于<span style="color:red"><?php echo ($recommend[0]["begin_time"]); ?></span>上线</br>敬请期待
							</div><div><div style="float:right	;margin-top:15px;margin-right:5px">									支持:<?php echo ($recommend[0]["sup"]); ?> &nbsp;关注:<?php echo ($recommend[0]["attention"]); ?> &nbsp;赞<?php echo ($recommend[0]["prise"]); ?></div></div></div></div></div><?php else: ?><div class="col-lg-3"><img src="__PUBLIC__/res/images/small_pic/items.png" ></div><?php endif; if(!empty($recommend[1]['title'])): ?><div class="col-lg-3"><div ><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a href="/detail/<?php echo ($recommend[1]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($recommend[1]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($recommend[1]["title"]); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: none repeat scroll 0 0 #a5ca4d;height: 8px;width:100%;"><div style="float:right;height:8px;width:<?php echo ($data[constant]-$data[7]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button1.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;color:#636363">									将于<span style="color:red"><?php echo ($recommend[1]["begin_time"]); ?></span>上线</br>敬请期待
							</div><div><div style="float:right	;margin-top:15px;margin-right:5px">									支持:<?php echo ($recommend[1]["sup"]); ?> &nbsp;关注:<?php echo ($recommend[1]["attention"]); ?> &nbsp;赞<?php echo ($recommend[1]["prise"]); ?></div></div></div></div></div><?php else: ?><div class="col-lg-3"><img src="__PUBLIC__/res/images/small_pic/items.png" ></div><?php endif; if(!empty($recommend[2]['title'])): ?><div class="col-lg-3"><div ><div style="  border-radius: 15px;  background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #e5e5e5;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a href="/detail/<?php echo ($recommend[2]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($recommend[2]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($recommend[2]['title']); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: none repeat scroll 0 0 #a5ca4d;height: 8px;width:100%;"><div style="float:right;height:8px;width:<?php echo ($data[constant]-$data[7]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button1.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;color:#636363">									将于<span style="color:red"><?php echo ($recommend[2]["begin_time"]); ?></span>上线</br>敬请期待
							</div><div><div style="float:right	;margin-top:15px;margin-right:5px">									支持:<?php echo ($recommend[2]['sup']); ?> &nbsp;关注:<?php echo ($recommend[2]['attention']); ?> &nbsp;赞<?php echo ($recommend[2]['prise']); ?></div></div></div></div></div><?php else: ?><div class="col-lg-3"><img src="__PUBLIC__/res/images/small_pic/items.png" ></div><?php endif; if(!empty($recommend[3]['title'])): ?><div class="col-lg-3"><div ><div style="border-radius: 15px; background: none repeat scroll 0 0 #fff;box-shadow: 0 3px 3px #fff;float: left;height: 380px;margin-bottom: 20px;margin-top:10px;overflow: hidden; width: 235px;"><a href="/detail/<?php echo ($recommend[3]['id']); ?>"><img class="look_img" src="__PUBLIC__/res/images/Items/<?php echo ($recommend[3]['items_img']); ?>" style="width:235px;height:235px;"/></a><div class="name" style="overflow:hidden;height:25px;"><?php echo ($recommend[3]['title']); ?></div><div class="row"><div class="col-lg-8"><div style="margin-top:12px;margin-left:10px;background: none repeat scroll 0 0 #a5ca4d;height: 8px;width:100%;"><div style="float:right;height:8px;width:<?php echo ($data[constant]-$data[7]['percent']); ?>%;background:#DEE3E7"></div></div></div><div class="col-lg-4"><img style="float:right" src="__PUBLIC__/res/images/small_pic/button1.png"></div></div><div class="row" style="margin-top:5px;margin-left:6px;color:#636363">									将于<span style="color:red"><?php echo ($recommend[3]["begin_time"]); ?></span>上线</br>敬请期待
							</div><div><div style="float:right	;margin-top:15px;margin-right:5px">									支持:<?php echo ($recommend[3]['sup']); ?> &nbsp;关注:<?php echo ($recommend[3]['attention']); ?> &nbsp;赞<?php echo ($recommend[3]['prise']); ?></div></div></div></div></div><?php else: ?><div class="col-lg-3"><img src="__PUBLIC__/res/images/small_pic/items.png" ></div><?php endif; ?></div></div><!--即将推出--><!--本周人气榜--><div><img src="__PUBLIC__/res/images/Items/renqi.png"><div class="row"style="margin-top:10px;"><div class="col-lg-4"><!--top1--><div id="<?php echo ($data2[0]['id']); ?>" class="row change" style="background:#ff6458;border-bottom: 1px dashed #fff;font-size:14px;line-height:18px;" data=1><div class="col-lg-2"><div class="top_first" ><s class="top_meta"></s><div class="top_data"></div></div></div><div class="col-lg-8" ><div class="text_1" style="display: none;"><?php echo ($data2[0]["title"]); ?></div><div class="write"><?php echo ($data2[0]["sup"]); ?>人支持
									</div></div><div class="col-lg-2 change_2"><b class="transparent"></b></div></div><!--top2--><div id="<?php echo ($data2[1]['id']); ?>" class="row change" style="	background-color: #00CBCE;border-bottom: 1px dashed #fff;line-height:18px;" data=2><div class="col-lg-2"><div class="top_data_2"></div></div><div class="col-lg-8"><div class="text_1"><?php echo ($data2[1]["title"]); ?></div><div class="text_2"><?php echo ($data2[1]["sup"]); ?>人支持</div></div><div class="col-lg-2 change_2"></div></div><!--top3--><div id="<?php echo ($data2[2]['id']); ?>" class="row change" style="	background-color: #00CBCE;border-bottom: 1px dashed #fff;line-height:18px;" data=3><div class="col-lg-2"><div class="top_data_3"></div></div><div class="col-lg-8"><div class="text_1"><?php echo ($data2[2]["title"]); ?></div><div class="text_2"><?php echo ($data2[2]["sup"]); ?>人支持</div></div><div class="col-lg-2 change_2"></div></div><!--top4--><div id="<?php echo ($data2[3]['id']); ?>" class="row change" style="	background-color: #00CBCE;border-bottom: 1px dashed #fff;line-height:18px;" data=4><div class="col-lg-2"><div class="top_data_4"></div></div><div class="col-lg-8"><div class="text_1"><?php echo ($data2[3]["title"]); ?></div><div class="text_2"><?php echo ($data2[3]["sup"]); ?>人支持</div></div><div class="col-lg-2 change_2"></div></div><!--top5--><div id="<?php echo ($data2[4]['id']); ?>" class="row change" style="	background-color: #00CBCE;border-bottom: 1px dashed #fff;line-height:18px;" data=5><div class="col-lg-2"><div class="top_data_5"></div></div><div class="col-lg-8"><div class="text_1"><?php echo ($data2[4]["title"]); ?></div><div class="text_2"><?php echo ($data2[4]["sup"]); ?>人支持</div></div><div class="col-lg-2 change_2"></div></div></div><!--本周人气榜的右边--><!--first--><div class="col-lg-8 right_rq" id="right_one" ><div class="row"><div class="col-lg-5"><a href="/detail/<?php echo ($data2[0]['id']); ?>"><div class="text_3"><?php echo ($data2[0]["title"]); ?></div></a><div class="row" style="margin-top:50px;"><div class="col-lg-6" style="border-right:1px solid"><div class="text_4 ">￥<?php echo ($data2[0]["gain"]); ?></div><div >已募集</div></div><div class="col-lg-6" ><div class="text_5"><?php echo ($data2[0]["sup"]); ?></div><div>支持人数</div></div></div><a href="/detail/<?php echo ($data2[0]['id']); ?>"><div style="margin-top:30px;" class="top_title"><?php echo ($data2[0]["items_description"]); ?></div></a></div><div class="col-lg-7"><a href="/detail/<?php echo ($data2[0]['id']); ?>"><img class="top_img1"  src="__PUBLIC__/res/images/index/<?php echo ($data2[0]['new_img']); ?>"></a></div></div></div><!--first--><!--second--><div class="col-lg-8 right_rq" id="right_second" style="display:none"><div class="row"><div class="col-lg-5"><a href="/detail/<?php echo ($data2[1]['id']); ?>"><div class="text_3"><?php echo ($data2[1]["title"]); ?></div></a><div class="row" style="margin-top:50px;"><div class="col-lg-6" style="border-right:1px solid"><div class="text_4 ">￥<?php echo ($data2[1]["gain"]); ?></div><div >已募集</div></div><div class="col-lg-6" ><div class="text_5"><?php echo ($data2[1]["sup"]); ?></div><div>支持人数</div></div></div><a href="/detail/<?php echo ($data2[1]['id']); ?>"><div style="margin-top:30px;" class="top_title"><?php echo ($data2[1]["items_description"]); ?></div></a></div><div class="col-lg-7"><a href="/detail/<?php echo ($data2[1]['id']); ?>"><img class="top_img1"  src="__PUBLIC__/res/images/index/<?php echo ($data2[1]['new_img']); ?>"></a></div></div></div><!--second--><!--third--><div class="col-lg-8 right_rq" id="right_third" style="display:none"><div class="row"><div class="col-lg-5"><a href="/detail/<?php echo ($data2[2]['id']); ?>"><div class="text_3"><?php echo ($data2[2]["title"]); ?></div></a><div class="row" style="margin-top:50px;"><div class="col-lg-6" style="border-right:1px solid"><div class="text_4 ">￥<?php echo ($data2[2]["gain"]); ?></div><div >已募集</div></div><div class="col-lg-6" ><div class="text_5"><?php echo ($data2[2]["sup"]); ?></div><div>支持人数</div></div></div><a href="/detail/<?php echo ($data2[2]['id']); ?>"><div style="margin-top:30px;" class="top_title"><?php echo ($data2[2]["items_description"]); ?></div></a></div><div class="col-lg-7"><a href="/detail/<?php echo ($data2[2]['id']); ?>"><img class="top_img1"  src="__PUBLIC__/res/images/index/<?php echo ($data2[2]['new_img']); ?>"></a></div></div></div><!--third--><!--four--><div class="col-lg-8 right_rq" id="right_four" style="display:none"><div class="row"><div class="col-lg-5"><a href="/detail/<?php echo ($data2[3]['id']); ?>"><div class="text_3"><?php echo ($data2[3]["title"]); ?></div></a><div class="row" style="margin-top:50px;"><div class="col-lg-6" style="border-right:1px solid"><div class="text_4 ">￥<?php echo ($data2[3]["gain"]); ?></div><div >已募集</div></div><div class="col-lg-6" ><div class="text_5"><?php echo ($data2[3]["sup"]); ?></div><div>支持人数</div></div></div><a href="/detail/<?php echo ($data2[3]['id']); ?>"><div style="margin-top:30px;" class="top_title"><?php echo ($data2[3]["items_description"]); ?></div></a></div><div class="col-lg-7"><a href="/detail/<?php echo ($data2[3]['id']); ?>"><img class="top_img1"  src="__PUBLIC__/res/images/index/<?php echo ($data2[3]['new_img']); ?>"></a></div></div></div><!--four--><!--five--><div class="col-lg-8 right_rq" id="right_five" style="display:none"><div class="row"><div class="col-lg-5"><a href="/detail/<?php echo ($data2[4]['id']); ?>"><div class="text_3"><?php echo ($data2[4]["title"]); ?></div></a><div class="row" style="margin-top:50px;"><div class="col-lg-6" style="border-right:1px solid"><div class="text_4 ">￥<?php echo ($data2[4]["gain"]); ?></div><div >已募集</div></div><div class="col-lg-6" ><div class="text_5"><?php echo ($data2[4]["sup"]); ?></div><div>支持人数</div></div></div><a href="/detail/<?php echo ($data2[4]['id']); ?>"><div style="margin-top:30px;" class="top_title"><?php echo ($data2[4]["items_description"]); ?></div></a></div><div class="col-lg-7"><a href="/detail/<?php echo ($data2[4]['id']); ?>"><img class="top_img1" src="__PUBLIC__/res/images/index/<?php echo ($data2[4]['new_img']); ?>"></a></div></div></div><!--five--><!--本周人气榜的右边--></div></div><!--本周人气榜--></div><div class="col-lg-1"></div></div></div></div><!--包含底部文件的渲染--><link rel="stylesheet" href="__PUBLIC__/res/css/hf.css"/><div class="footer"><div class="footer1" style="height:200px;width:100%;float:left;padding:0px;margin:0px;background: url('__PUBLIC__/res/images/small_pic/ft_bj.png') no-repeat;"><a class="start_it" href="<?php echo U('/start/agreement','','');?>"><img src="__PUBLIC__/res/images/small_pic/start_it.png" style='margin-top:20px;' ></a></div><div id='backtotop'></div><div class="footer2"><div class="intro" ><span ><a href="<?php echo U('/help','','');?>" target="_blank">关于呆萌</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">洽谈合作</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">加入我们</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">联系我们</a></span>|

  	 			<span><a href="<?php echo U('/help/127','','');?>" target="_blank">免责声明</a></span>|

  	 			 <p>Copyright © 2014 呆萌网 www.daymeng.com<br><a href="http://www.miitbeian.gov.cn" style="color:#474e5d">湘ICP备09043258号-2</a> 湖南橙讯科技有限公司 版权所有 <span style="font-size:12px;color:#474e5d">投资有风险，购买需谨慎</span></p></div><div class="calls"><ul ><li><img  style='width:120px;' src="__PUBLIC__/res/images/small_pic/tow_code.jpg" class="tow_code"></li><li><img class="mcalls wx"  src="__PUBLIC__/res/images/small_pic/wx.png"><span class='wx' style='color:#fff;padding-left:5px;'>官方微信</span></li><li><a href="http://weibo.com/u/5240303575" target='_blank'><img class="mcalls" src="__PUBLIC__/res/images/small_pic/sina.png"><span style='color:#fff;padding-left:5px;cursor:pointer;'>官方微博</span></a></li><li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=521187146&amp;site=qq&amp;menu=yes"><img src="__PUBLIC__/res/images/small_pic/kefu.png"></a><span style='color:#fff;padding-left:5px;cursor:pointer;'>在线客服</span></li><!-- 百度统计 --><div style='display:none;'><script type="text/javascript">              var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

              document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F86c414347828cadccc690dd5e0ddd83e' type='text/javascript'%3E%3C/script%3E;"));

              </script></div></ul></div></div></div><!--  <div class="row" ><div class="col-lg-4 "></div><div class="col-lg-2"><a href="<?php echo U('startitem/index');?>"><img src="__PUBLIC__/res/images/small_pic/project.png" style="margin-top:50px;"></a></div><div class="col-lg-3  yxs_change"><div class="row"><div class="col-lg-6 "><img class="tubiao"  src="__PUBLIC__/res/images/small_pic/wx.png"><span >关注微信</span><img src="__PUBLIC__/res/images/small_pic/wx1.png"></div><div class="col-lg-6 "><img class="tubiao" src="__PUBLIC__/res/images/small_pic/wb.png"><span >关注微博</span><a target="_blank" href="http://weibo.com/5240303575/profile?rightmod=1&wvr=5&mod=personinfo"><img  src="__PUBLIC__/res/images/small_pic/wb1.png"></a><p class="address">weibo.stm.com</p></div></div></div><div class="col-lg-3  _email yxs_change"><div class="col-lg-6 "><p>联系邮箱</p><a href="http://mail.163.com/"><img src="__PUBLIC__/res/images/small_pic/email.png">daymeng@163.com</a></div></div></div> --></body></html>
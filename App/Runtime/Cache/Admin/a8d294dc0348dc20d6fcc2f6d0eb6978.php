<?php if (!defined('THINK_PATH')) exit();?><html><head><title>吐槽浏览</title><style type="text/css">
td{
	width: 200px;
}

</style></head><body><table  border=1  cellspacing="0px" style="margin:0px auto;"><tr><td>用户id</td><td>用户账号</td><td>用户昵称</td><td>吐槽内容</td><td>吐槽时间</td><td>IP地址</td></tr><?php if(is_array($complaint)): foreach($complaint as $key=>$v): ?><tr><td><?php echo ($v["user_id"]); ?></td><td><?php echo ($v["username"]); ?></td><td><?php echo ($v["niker"]); ?></td><td><?php echo ($v["content"]); ?></td><td><?php echo date("Y-m-d H:m:s",$v["time"])?></td><td><?php echo ($v["ip"]); ?></td></tr><?php endforeach; endif; ?><tr><td colspan='5'	 style='text-align:center;'><?php echo ($page); ?></td></tr></table></body></html>
$(document).ready(function(){
	$(".green").trigger('click');
	$(".look").click(function(){

		$("#repay_id").text("数据正在加载ing");
		id=$(this).next().next().text();//»Ø±¨id
		$.ajax({
			url:mysupportItem_repay_ajax,
			datatype:"json",
			type:"post",
			data:{id:id},//ajaxÈ¡µÃÆÀÂÛµÄ·¶Î§
			success:function(data)
			{
				//alert(data[0]["content"]);
				$("#repay_id").text(data[0]["content"]);
				//window.location.replace(location.href);
				//alert("success")
			},
			error:function()
			{
				alert("error!");
			}
		});
		
		$("#repay_id").show()
	})
		$(".address").click(function(){
alert("wwwwwwwwwwwww");
			$("#address").text("数据正在加载ing");
		address_id=$(this).prev().text();
		$.ajax({
			url:mysupportItem_address_ajax,
			datatype:"json",
			type:"post",
			data:{address_id:address_id},//ajaxÈ¡µÃÆÀÂÛµÄ·¶Î§
			success:function(data)
			{
				//alert(data[0]["content"]);
				var str="";
				str+=data[0]["province"];
				str+=data[0]["town"];
				str+=data[0]["district"];
				
				str+=data[0]["detail_address"];
				$("#address").text(str);
				//window.location.replace(location.href);
				//alert("success")
			},
			error:function()
			{
				alert("error!");
			}
		});
		$("#address").show()
	})
})
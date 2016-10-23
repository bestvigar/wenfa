<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charest=utf-8">
		<title>主页</title>
		<link rel="stylesheet" type="text/css" href="/wenfa/Public/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="/wenfa/Public/Css/second.css" />
		<script type="text/javascript" src="/wenfa/Public/Js/jquery.js"></script>
	</head>
	<body>
		<?php if(is_array($list)): foreach($list as $key=>$it): ?><div id='one'>
			<table>
				<tr><?php echo ($it["question"]); ?></tr></br>
				<tr><input type='radio' name='answer' class='radio' onclick="f1('A');"/><?php echo ($it["aa"]); ?></tr></br>
				<tr><input type='radio' name='answer' class='radio' onclick="f1('B');"/><?php echo ($it["ba"]); ?></tr></br>
				<tr><input type='radio' name='answer' class='radio' onclick="f1('C');"/><?php echo ($it["ca"]); ?></tr></br>
				<tr><input type='radio' name='answer' class='radio' onclick="f1('D');"/><?php echo ($it["da"]); ?></tr></br>
			</table>
		</div><?php endforeach; endif; ?>
	</body>
	</html>
	<script type="text/javascript">
	function f1(id){
		//alert(id);
		var xmlhttp=null;
if (window.XMLHttpRequest)
  
else
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       //alert(xmlhttp.responseText);
       alert("hello");
    }
  }
xmlhttp.open("GET","check.php?id"+id,true);
xmlhttp.send();
	}
	
	</script>
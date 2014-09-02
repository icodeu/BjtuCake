<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <title>Lottery Demo</title>
    <style type="text/css">

        #lotteryContainer {
			position: absolute;
        }
        #drawPercent {
            color:#F60;
        }
    </style>
    <script>
        window.onload = function () {
        	var randNum=Math.floor(Math.random()*20)+1;
        	//document.getElementById('randNum').value = randNum;
            var lottery = new Lottery('lotteryContainer', '#CCC', 'color', 300, 100, drawPercent);
            var picUrl = '';
            if (randNum<5)
            	picUrl = 'generate.php?lottery=1';
            else
             	picUrl = 'generate.php?lottery=0';
            lottery.init(picUrl, 'image');

            var drawPercentNode = document.getElementById('drawPercent');

			var notify_flag = false;
            function drawPercent(percent) {
                drawPercentNode.innerHTML = percent + '%';
                //刮开70%以上即可
                if(notify_flag==false){
	                if(percent>70){
	                	if(randNum<5){
	                		//获得学号
	                		var stuNum = prompt("恭喜您获得月饼一块，请输入您的学号：");
	                		while (stuNum=="")
	                			stuNum = prompt("恭喜您获得月饼一块，请输入您的学号：");
	                		//获得获奖感言
	                		var stuComment= prompt("说说您的获奖感言吧O(∩_∩)O");
	                		while (stuComment=="")
	                			stuComment = prompt("说说您的获奖感言吧O(∩_∩)O");
	                		document.getElementById('stuNum').value = stuNum;
	                		document.getElementById('stuComment').value = stuComment;
	                	}else{
	                		alert('很遗憾此次没有获奖，分享到朋友圈后明天会再获得一次抽奖机会~');
	                		//加上一段话
	                		//....
	                	}
	                	notify_flag = true;
	                }
	            }
            }
        }

    </script>
    <script src="js/Lottery.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container">
		<center><label>已刮开 <span id="drawPercent">0%</span> 区域。</label></center>
	    <center><div id="lotteryContainer" style="height: 200;"></div></center>
	    <br /><br /><br /><br /><br /><br /><br /><br /><br />
		<form action="save.php" method="post">
			<input type="text" name="stuNum" id="stuNum" hidden="hidden"/>
			<input type="text" name="stuComment" id="stuComment" hidden="hidden"/>
			<input type="submit" value="点我去领月饼啦" class="btn btn-success"/>
		</form>
	</div>




























</body>
</html>

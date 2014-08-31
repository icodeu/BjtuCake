<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Lottery Demo</title>
    <style type="text/css">

        #lotteryContainer {
            position:relative;
            width: 300px;
            height:100px;
        }
        #drawPercent {
            color:#F60;
        }
    </style>
    <script src="js/Lottery.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<center><label>已刮开 <span id="drawPercent">0%</span> 区域。</label></center>
    <center><div id="lotteryContainer"></div></center>
    <script>
        window.onload = function () {
            var lottery = new Lottery('lotteryContainer', '#CCC', 'color', 300, 100, drawPercent);
            lottery.init('http://www.baidu.com/img/bdlogo.gif', 'image');

            var drawPercentNode = document.getElementById('drawPercent');

            function drawPercent(percent) {
                drawPercentNode.innerHTML = percent + '%';
            }
        }

    </script>
</body>
</html>

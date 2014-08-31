<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>Lottery Demo</title>
    <style type="text/css">
        body{
            height:1000px;
        }
        #lotteryContainer {
            position:relative;
            width: 300px;
            height:100px;
        }
        #drawPercent {
            color:#F60;
        }
    </style>
</head>
<body>
    <button id="freshBtn">刷新</button><label>已刮开 <span id="drawPercent">0%</span> 区域。</label>
    <div id="lotteryContainer"></div>
    <script src="Lottery.js"></script>
    <script>
        window.onload = function () {
            var lottery = new Lottery('lotteryContainer', '#CCC', 'color', 300, 100, drawPercent);
            lottery.init('http://www.baidu.com/img/bdlogo.gif', 'image');

            document.getElementById('freshBtn').onclick = function() {
                drawPercentNode.innerHTML = '0%';
                lottery.init(getRandomStr(10), 'text');
            }

            var drawPercentNode = document.getElementById('drawPercent');

            function drawPercent(percent) {
                drawPercentNode.innerHTML = percent + '%';
            }
        }

        function getRandomStr(len) {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            for( var i=0; i < len; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            return text;
        }
    </script>
</body>
</html>

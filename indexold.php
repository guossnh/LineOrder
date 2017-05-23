<html>
<header>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title>红玛瑙专卖</title>
    <!--这是评论区的样式文件-->
    <link href="css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="css/man.css" />
</header>
<body>
    <img src = "img/manbody/1.jpg" />
    <img id = "2img" src = "img/manbody/2.jpg" />
    <img id = "3img" src = "img/manbody/3.jpg" />
        <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/4.jpg" /></a>
    <div tt-data-click tt-data-convertid="60105944262" tt-data-eventtype="view">
        <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/buy.gif" /></a>
    </div>
        <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/5.jpg" /></a>
    <div tt-data-click tt-data-convertid="60105944262" tt-data-eventtype="view">
        <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/buy.gif" /></a>
    </div>
    <img src = "img/manbody/6.jpg" />
    <img src = "img/manbody/7.jpg" />
    <img src = "img/manbody/8.jpg" />
    <?php include "weixin.php" ?>
    <br>
    <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/4.jpg" /></a>
    <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/buy.gif" /></a>
    <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/5.jpg" /></a>
    <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/buy.gif" /></a>
    <!--这里因为下部遮挡故意添加空白-->
    <div class="zhedangjiachang"></div>
    <!--这里是页面底部固定栏-->
    <div class="weui-tabbar">
        <div class="weui-navbar">
           <div class="weui-navbar__item"><a href="index.php#3img" class="weui-btn weui-btn_warn">立刻购买</a></div>
        </div>
    </div>
    <?php include "tongji.php"; ?>
    <!--这是今日头条点击购买之后-->
    <script type="text/javascript">
        (function(root) {
            root._tt_config = true;
            var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
            ta.src = document.location.protocol + '//' + 's3.pstatp.com/bytecom/resource/track_log/src/toutiao-track-log.js';
            ta.onerror = function () {
                var request = new XMLHttpRequest();
                var web_url = window.encodeURIComponent(window.location.href);
                var js_url  = ta.src;
                var url = '//ad.toutiao.com/link_monitor/cdn_failed?web_url=' + web_url + '&js_url=' + js_url + '&convert_id=60105944262';
                request.open('GET', url, true);
                request.send(null);
            }
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ta, s);
        })(window);
    </script>
</body>
</html>
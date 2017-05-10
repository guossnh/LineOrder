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
    <img src = "img/manbody/2.jpg" />
    <img src = "img/manbody/3.jpg" />
    <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/4.jpg" /></a>
    <a href = "buypage.php?id=zhubaowomen"><img src = "img/manbody/buy.gif" /></a>
    <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/5.jpg" /></a>
    <a href = "buypage.php?id=zhubaoman"><img src = "img/manbody/buy.gif" /></a>
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
           <div class="weui-navbar__item"><a href="index.php" class="weui-btn weui-btn_warn">返回首页</a></div>
        </div>
    </div>
    <?php include "tongji.php"; ?>
</body>
</html>
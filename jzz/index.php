<html>
<!--这是销售的主页面,一个页面内完成 增加页面的打开速度-->
<header>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title>牵草堂颈椎枕</title>
    <!--这是评论区的样式文件-->
    <link href="../css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="../css/man.css" />
</header>
<body style = "background-color: #fff;">
    <!--这是内容部分-->
    <img src = "images/1.jpg" />
    <img src = "images/2.jpg" />
    <img src = "images/3.jpg" />
    <img src = "images/4.jpg" />
    <img src = "images/5.jpg" />
    <img src = "images/6.jpg" />
    <img src = "images/7.jpg" />
    <img src = "images/8.gif" />
    <a href = "#biaodan"><img src = "images/images/b0.jpg" /></a>
    <img src = "images/images/b1.jpg" />
    <img src = "images/images/b2.jpg" />
    <img src = "images/images/b3.jpg" />
    <img src = "images/images/b4.jpg" />
    <img src = "images/images/b5.jpg" />
    <img src = "images/images/b6.jpg" />
    <img src = "images/images/b7.jpg" />
    <img src = "images/images/b8.jpg" />
    <img src = "images/images/b9.jpg" />
    <img src = "images/images/b10.jpg" />
    <img src = "images/images/b11.jpg" />
    <img src = "images/images/b12.jpg" />
    <?php include "form.php" ?>
    <!--浮动购买信息-->
    <?php include "pinglun.php" ?>
    <?php include "weixin.php" ?>
    <!--这是两张假的图片哈哈哈-->
    <br>
    <img src = "../img/footerShouhou.jpg" />
    <br>
    <br>
    <img src = "../img/footerZizhi.jpg" />
    <!--这里是页面底部固定栏-->
    <div class="weui-tabbar">
        <div class="weui-navbar">
           <div class="weui-navbar__item"><a href="#biaodan" class="weui-btn weui-btn_warn">立刻下单</a></div>
           <div class="weui-navbar__item"><a href="tel:18303793851" class="weui-btn weui-btn_warn">电话咨询</a></div>
           <div class="weui-navbar__item"><a href="#weixin" class="weui-btn weui-btn_warn">添加微信</a></div>
        </div>
    </div>
    <!--这里因为下部遮挡故意添加空白-->
    <div class="zhedangjiachang"></div>
    <!--添加统计信息-->
    <?php include "../tongji.php" ?>
</body>
</html>
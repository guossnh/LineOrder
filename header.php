<html>
<header>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title></title>
    <!--这是评论区的样式文件-->
    <link href="css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="css/man.css" />
</header>
<body>
    <div class = "buyPageImgBar">
        <img src = "img/man.jpg"></img>
    </div>
    <div class = "buydiv">
        <div>
            <span>已经购买人数</span>
            <?php include "countdown.php" ?>
        </div>
        <span>原价</span><span>秒杀价</span>
        <a href = "#biaodan" class = "weui-btn weui-btn_primary">立即购买</a>
    </div>
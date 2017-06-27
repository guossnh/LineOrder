<html>
<!--这是销售的主页面,一个页面内完成 增加页面的打开速度-->
<header>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title>千年健通舒贴</title>
    <!--这是评论区的样式文件-->
    <link href="../css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="../css/man.css" />
</header>
<body style = "background-color: #fff;">
    <!--这是内容部分-->
    <!--
    <img src = "img/qnj_01.jpg" />
    <img src = "img/qnj_02.jpg" />
    <img src = "img/qnj_03.jpg" />
    <img src = "img/qnj_04.jpg" />
    <img src = "img/qnj_05.jpg" />
    <img src = "img/qnj_06.jpg" />
    -->
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_01.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_02.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_03.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_04.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_05.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_06.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_07.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_08.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_09.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_10.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_11.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_12.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_13.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_14.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_15.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_16.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_17.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_18.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_19.jpg" />
    <img src = "http://os6rquv9p.bkt.clouddn.com/bg_20.jpg" />
    <?php include "form.php" ?>
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
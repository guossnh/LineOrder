<html>
<!--这是销售的主页面,一个页面内完成 增加页面的打开速度-->
<head>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title>招财貔貅</title>
    <!--这是评论区的样式文件-->
    <link href="../css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="../css/man.css" />
    <!--这是轮播图的样式文件和js文件-->
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
    <script src="js/swiper.min.js"></script>
    <style>
        .swiper-wrapper{
            height:auto;
        }
        .swiper-slide{
            height:auto;
        }
    </style>
</head>
<body style = "background-color: #fff;">
    <!--这是内容部分-->
    <img src = "img/1.gif"> 
    <img src = "img/2.jpg">
    <img src = "img/3.jpg">
    <img src = "img/4.jpg">
    <img src = "img/5.jpg">
    <img src = "img/6.jpg">
    <img src = "img/7.jpg">
    <img src = "img/8.jpg">
    <img src = "img/9.gif">
    <!--这是快递单展示-->
    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/l1.jpg"></div>
                <div class="swiper-slide"><img src="img/l2.jpg"></div>
                <div class="swiper-slide"><img src="img/l3.jpg"></div>
                <div class="swiper-slide"><img src="img/l4.jpg"></div>
            </div>              
        </div>
            <!-- Add Pagination -->
            <!--<div class="swiper-pagination"></div>-->
        </div>
    </div>
    <?php include "form.php" ?>
    <?php include "../weixin.php" ?>
    <!--这是两张假的图片哈哈哈-->
    <br>
    <img src = "../img/footerShouhou.jpg" />
    <br>
    <br>
    <img src = "../img/footerZizhi.jpg" />
    <!--这里是页面底部固定栏-->
    <div class="weui-tabbar">
        <div class="weui-navbar">
           <div class="weui-navbar__item"><a href="#biaodan" class="weui-btn weui-btn_warn">立刻订购</a></div>
           <!--<div class="weui-navbar__item"><a href="tel:17703881057" class="weui-btn weui-btn_warn">电话咨询</a></div>-->
           <div class="weui-navbar__item"><a href="tel:17737928729" class="weui-btn weui-btn_warn">电话咨询</a></div>
        </div>
    </div>
    <!--这里是轮播图的js文件载入-->
    <script language="javascript" type="text/javascript"> 
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 'auto',
            paginationClickable: true,
            spaceBetween: 30
        });
    </script>
    <!--这里因为下部遮挡故意添加空白-->
    <div class="zhedangjiachang"></div>
    <!--添加统计信息-->
    <?php include "tongji.php" ?>
</body>
</html>
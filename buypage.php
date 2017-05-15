<?php 
include "config.php";
if(array_key_exists($_GET['id'],$productJson)){
    $vo = $productJson[$_GET['id']];
}else{
    header("Location: index.php");
}
?>
<html>
<header>
    <!--设置页面适应手机访问-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--设置页面的编码方式-->
    <meta charset="UTF-8">
    <title><?php echo $vo["title"] ?></title>
    <!--这是评论区的样式文件-->
    <link href="css/pinglun.css" type="text/css" rel="stylesheet">
    <!--这是页面前段框架使用微信的前端框架-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weui/1.1.1/style/weui.min.css"/>
    <!--这是页面自己写的样式文件-->
    <link rel="stylesheet" type="text/css" href="css/man.css" />
    <!--这是今日头条转化代码-->
        <script type="text/javascript">
        (function(root) {
            root._tt_config = true;
            var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
            ta.src = document.location.protocol + '//' + 's3.pstatp.com/bytecom/resource/track_log/src/toutiao-track-log.js';
            ta.onerror = function () {
                var request = new XMLHttpRequest();
                var web_url = window.encodeURIComponent(window.location.href);
                var js_url  = ta.src;
                var url = '//ad.toutiao.com/link_monitor/cdn_failed?web_url=' + web_url + '&js_url=' + js_url + '&convert_id=59941540097';
                request.open('GET', url, true);
                request.send(null);
            }
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ta, s);
        })(window);
    </script>
</header>
<body>
    <div class = "buyPageImgBar">
        <img src = "img/headbar/<?php echo $vo["manImg"]?>"></img>
    </div>
    <!--下边是购买信息部分-->
    <div class = "buydiv">
        <div class="weui-flex">
            <div class="weui-flex__item"><div class="placeholder"><span class = "aleadyBuy">已经购买人数</span></div></div>
            <div class="weui-flex__item"><div class="placeholder"><span class = "miaoshaMoneyOther">原价:</span><span class = "miaoshaMoneyOther"><s>￥<?php echo $vo["oldPrice"]?></s></span></div></div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex__item"><div class="placeholder"><span class = "aleadyBuyNumber"><?php echo $vo["buyManNumber"]?>人</span></div></div>
            <div class="weui-flex__item"><div class="placeholder"><span class = "miaoshaMoneyOther">现价:</span><span class = "miaoshaMoney"><b>￥<?php echo $vo["newPrice"]?></b></span></div></div>
        </div>
        <div class="weui-loadmore weui-loadmore_line"></div>
        <div class="weui-flex" style = "width:100%">
            <div class="weui-flex__item">
                <div class="placeholder">
                    <?php include "countdown.php" ?>
                </div>
            </div>
        </div>
        <div class="weui-loadmore weui-loadmore_line"></div>
        <br>
    </div>
    <a href = "#biaodan" class = "weui-btn weui-btn_warn">立即购买</a>

    <?php
        for($x=1;$x<=$vo["bodyImgCount"];$x++){
            ?><img src = "img/<?php echo $vo["bodyImgFloder"] ?>/<?php echo $x ?>.jpg" ><?php
        }
    ?>  
    <!--这里是订单-->
    <div id= "biaodan">
        <script src="<?php echo $jinshuju ?>"></script>
    </div>
    <!--这里是虚假交易信息-->
    <?php include "pinglun.php" ?>
    <!--下边是两张骗人的图片-->
    <img  src = "img/footerShouhou.jpg"></img>
    <div style = "width:100%;text-align: center;margin-top: 10px;margin-bottom: 10px;">
        <span><?php echo $banquan ?></span>
    </div>
    <img  src = "img/footerZizhi.jpg"></img>
    <!--这里因为下部遮挡故意添加空白-->
    <div class="zhedangjiachang"></div>
    <!--这里是页面底部固定栏-->
    <div class="weui-tabbar">
        <div class="weui-navbar">
           <div class="weui-navbar__item"><a href="index.php#2img" class="weui-btn weui-btn_warn">返回首页</a></div>
           <div class="weui-navbar__item"><a href="#biaodan" class="weui-btn weui-btn_warn">在线下单</a></div>
           <div class="weui-navbar__item"><a href="tel:<?php echo $phone?>" class="weui-btn weui-btn_warn">拨打电话</a></div>
        </div>
    </div>
    <?php include "tongji.php" ?>
</body>
</html>
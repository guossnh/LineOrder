    <?php include "config.php" ?>
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
           <div class="weui-navbar__item"><a href="#biaodan" class="weui-btn weui-btn_warn">在线下单</a></div>
           <div class="weui-navbar__item"><a href="tel:<?php echo $phone?>" class="weui-btn weui-btn_warn">拨打电话</a></div>
        </div>
    </div>
</body>
</html>
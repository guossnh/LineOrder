<div class  = "countdown">
    <span class = "countdowntext2">秒杀倒计时:</span>
    <span class = "countdowntext" id='daya'></span><span class = "countdowntext2">天</span>
    <span class = "countdowntext" id='hoursa'></span><span class = "countdowntext2">时</span>
    <span class = "countdowntext" id='minua'></span><span class = "countdowntext2">分</span>
    <span class = "countdowntext" id='secoa'></span><span class = "countdowntext2">秒</span>
</div>
<script type="text/javascript">
/**
*   copyright WE 2012.7
*   js实现动态倒计时功能
*   a是从后台接收到的时间戳，需转换成毫秒单位
*/
    var a= <?php echo $vo["overTime"] ?>;         //以毫秒为单位
    function fomtime()
    {
        a=a-1000;
        var b=new Date();
        b.setTime(0);
        var c=new Date();
        c.setTime(a);
        var day1=b.getDate();        //为方便调用，把天数、小时等单独定义
        var hours1=b.getHours();
        var minu1=b.getMinutes();
        var seco1=b.getSeconds();
        var day2=c.getDate();
        var hours2=c.getHours();
        var minu2=c.getMinutes();
        var seco2=c.getSeconds();
        var day=day2-day1;
        var hours=hours2-hours1;
        var minu=minu2-minu1;
        var seco=seco2-seco1;
        document.getElementById('daya').innerHTML=day;
        document.getElementById('hoursa').innerHTML=hours;
        document.getElementById('minua').innerHTML=minu;
        document.getElementById('secoa').innerHTML=seco;
        setTimeout("fomtime()",1000);
    }
    fomtime();
</script>
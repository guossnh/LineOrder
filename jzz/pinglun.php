<div class="fahuo">
    <div class="jl_list">
        <script src="js/fahuo.js"></script>
        <script>
            var qspeed = 60
            qdemo2.innerHTML = qdemo1.innerHTML //克隆demo1为demo2  
            function qMarquee() {
                //当滚动至demo1与demo2交界时  
                if (qdemo2.offsetTop - qdemo.scrollTop <= 0)
                    qdemo.scrollTop -= qdemo1.offsetHeight //demo跳到最顶端  
                else {
                    qdemo.scrollTop++
                }
            }
            var qMyMar = setInterval(qMarquee, qspeed)//设置定时器  
            //鼠标移上时清除定时器达到滚动停止的目的  
            qdemo.onmouseover = function () { clearInterval(qMyMar) }
            //鼠标移开时重设定时器  
            qdemo.onmouseout = function () { qMyMar = setInterval(qMarquee, qspeed) }
        </script>
        <!--暂定结束-->
    </div>
</div>
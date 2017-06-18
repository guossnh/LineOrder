<!--样式表部分-->
<style>
	/*右侧悬浮菜单*/
	.slide{
		width: 50px;
		height: 150px;
		position: fixed;
		top: 50%;
		margin-top: -26px;
		background: #018D75;
		right: 0;
		border-radius: 5px 0 0 5px;
		z-index: 999;
	}
	.slide ul{
		list-style: none;
	}
	.slide .icon li{
		width: 49px;
		height: 50px;
		background: url(servrice/img/icon.png) no-repeat;
	}
	.slide .icon .up{
		background-position:-330px -120px ;
	}
	.slide .icon li.qq{
		background-position:-385px -73px ;
	}
	.slide .icon li.tel{
		background-position:-385px -160px ;
	}
	.slide .icon li.wx{
		background-position:-385px -120px ;
	}
	.slide .icon li.down{
		background-position:-330px -160px ;
	}
	.slide .info{
		top: 50%;
		height: 147px;
		position: absolute;
		right: 100%;
		background: #018D75;
		width: 0px;
		overflow: hidden;
		margin-top: -73.5px;
		transition:0.5s;
		border-radius:4px 0 0 4px ;
	}
	.slide .info.hover{
		width: 145px;
		
	}
	.slide .info li{
		width: 145px;
		color: #CCCCCC;
		text-align: center;
	}
	.slide .info li p{
		font-size: 1.1em;
		line-height: 2em;
		padding: 15px;
		text-align: left;
	}
	.slide .info li.qq p a{
		display: block;
		margin-top: 12px;
		width: 100px;
		height: 32px;
		line-height: 32px;
		color: #00DFB9;
		font-size: 16px;   
		text-align: center;
		text-decoration: none;
		border: 1px solid #00DFB9;
		border-radius: 5px;
	}
	.slide .info li.qq p a:hover{
		color: #FFFFFF;
		border: none;
		background: #00E0DB;
	}
		.slide .info li.tel p a{
		display: block;
		margin-top: 12px;
		width: 100px;
		height: 32px;
		line-height: 32px;
		color: #00DFB9;
		font-size: 16px;   
		text-align: center;
		text-decoration: none;
		border: 1px solid #00DFB9;
		border-radius: 5px;
	}
	.slide .info li.tel p a:hover{
		color: #FFFFFF;
		border: none;
		background: #00E0DB;
	}
	.slide .info li div.img{
		height: 100%;
		background: #DEFFF9;
		margin: 15px;
	}
	.slide .info li div.img img{
		width: 100%;
		height: 100%;
	}
	/*控制菜单的按钮*/
	.index_cy{
		width: 30px;
		height: 30px;
		background: url(servrice/img/index_cy.png);
		position: fixed;
		right: 0;
		top: 50%;
		margin-top: 140px;
		background-position: 62px 0;
		cursor: pointer;
	}
	.index_cy2{
		width: 30px;
		height: 30px;
		background: url(servrice/img/index_cy.png);
		position: fixed;
		right: 0;
		top: 50%;
		margin-top: 140px;
		background-position: 30px 0;
		cursor: pointer;
	}
	
	/*自适应 当屏小于1050时隐藏*/
	@media screen and (max-width: 1050px) {
		.slide{
			display: none;
		}
		#btn{
			display: none;
		}
	}
</style>

<!--列表部分-->
<div class="slide">
	<ul class="icon">
		<li class="qq"></li>
		<li class="tel"></li>
		<li class="wx"></li>
	</ul>
	<ul class="info">
		<li class="qq">
			<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=418587428&site=qq&menu=yes" target="_blank">在线咨询</a></p>
		</li>
		<li class="tel">
			<p>咨询热线：<br><a href = "tel:15036563460">15036563460</a></p>
		</li>
		<li class="wx">
			<div class="img"><img src="servrice/img/wx.jpg" /></div>
		</li>
	</ul>
</div>
<!--js方法调用部分-->
<script type="text/javascript" >
	$(function(){
	$('.slide .icon li').not('.up,.down').mouseenter(function(){
		$('.slide .info').addClass('hover');
		$('.slide .info li').hide();
		$('.slide .info li.'+$(this).attr('class')).show();//.slide .info li.qq
	});
	$('.slide').mouseleave(function(){
		$('.slide .info').removeClass('hover');
	});
	$('#btn').click(function(){
		$('.slide').toggle();
		if($(this).hasClass('index_cy')){
			$(this).removeClass('index_cy');
			$(this).addClass('index_cy2');
		}else{
			$(this).removeClass('index_cy2');
			$(this).addClass('index_cy');
		}
	});
});
</script>
<div class="left" id="LeftBox">
	<div class="left01">
		<div class="left01_right"></div>
		<div class="left01_left"></div>
		<div class="left01_c">
            <?if(@$_SESSION['user_info']['role']==1):?>管理员：<?else:?>用户:<?endif?>
            <?=@$_SESSION['user_info']['name']?>
        </div>
	</div>
	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">员工信息管理</div>
		</div>
	    <div class="left02down">
            <div class="option"><a href="/staff" >员工列表</a></div>
	        <div class="option"><a href="/staff/new" >新增员工</a></div>
            <div class="option"><a href="/task" >新增任务</a></div>
		</div>
	</div>
	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">报表统计</div>
		</div>
	    <div class="left02down">
	        <div class="option"><a href="/task/day" >工作指标</a></div>
		</div>
	</div>
    <div class="left02">
        <div class="left02top">
            <div class="left02top_right"></div>
            <div class="left02top_left"></div>
            <div class="left02top_c">客户申请</div>
        </div>
        <div class="left02down">
            <div class="option"><a href="/custom/new" >添加申请</a></div>
            <div class="option"><a href="/custom" >申请记录</a></div>
        </div>
    </div>
    <div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">系统管理</div>
		</div>
		<div class="left02down">
            <div class="option"><a href="#gg">更改密码</a></div>
		</div>
	</div>
	<div class="left01">
		<div class="left03_right"></div>
		<div class="left01_left"></div>
		<div class="left03_c"><a href="/login/logout">安全退出</a></div>
	</div>
</div>

<div class="container">
    <div class="logo"><a src="index.html">小欠 v2.0</a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd>
                    <a onclick="x_admin_show('个人信息','http://www.baidu.com')">个人信息</a>
                </dd>
                <dd>
                    <a onclick="x_admin_show('切换帐号','http://www.baidu.com')">切换帐号</a>
                </dd>
                <dd>
                    <a src="/d/login.html">退出</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a src="/d/">前台首页</a></li>
    </ul>
  
</div>
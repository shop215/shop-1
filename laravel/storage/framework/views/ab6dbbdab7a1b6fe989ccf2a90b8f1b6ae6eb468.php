<!doctype html>
<html lang="en">
<head>

<!-- 头部开始 -->
<?php echo $__env->make('admin.public.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- 头部结束 -->

</head>
<body>
    <!-- 顶部开始 -->
    <?php echo $__env->make('admin.public.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- 顶部结束 -->
    
    <!-- 左侧菜单开始 -->
    <?php echo $__env->make('admin.public.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <ul class="layui-tab-title">
                <li>我的桌面</li>
            </ul>
            <div class="layui-tab-content">
                <div class="x-body">
                    <blockquote class="layui-elem-quote">欢迎使用小欠 后台模版！v2.0</blockquote>
                        <fieldset class="layui-elem-field">
                            <legend>信息统计</legend>
                            <div class="layui-field-box">
                                <table class="layui-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" scope="col">服务器信息</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="30%">服务器计算机名</th>
                                            <td><span id="lbServerName">http://127.0.0.1/</span></td>
                                        </tr>
                                        <tr>
                                            <td>服务器IP地址</td>
                                            <td>192.168.1.1</td>
                                        </tr>
                                        <tr>
                                            <td>服务器域名</td>
                                            <td>x.xuebingsi.com</td>
                                        </tr>
                                        <tr>
                                            <td>服务器端口 </td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>服务器IIS版本 </td>
                                            <td>Microsoft-IIS/6.0</td>
                                        </tr>
                                        <tr>
                                            <td>本文件所在文件夹 </td>
                                            <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
                                        </tr>
                                        <tr>
                                            <td>服务器操作系统 </td>
                                            <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
                                        </tr>
                                        <tr>
                                            <td>系统所在文件夹 </td>
                                            <td>C:\WINDOWS\system32</td>
                                        </tr>
                                        <tr>
                                            <td>服务器脚本超时时间 </td>
                                            <td>30000秒</td>
                                        </tr>
                                        <tr>
                                            <td>服务器的语言种类 </td>
                                            <td>Chinese (People's Republic of China)</td>
                                        </tr>
                                        <tr>
                                            <td>.NET Framework 版本 </td>
                                            <td>2.050727.3655</td>
                                        </tr>
                                        <tr>
                                            <td>服务器当前时间 </td>
                                            <td>2017-01-01 12:06:23</td>
                                        </tr>
                                        <tr>
                                            <td>服务器IE版本 </td>
                                            <td>6.0000</td>
                                        </tr>
                                        <tr>
                                            <td>服务器上次启动到现在已运行 </td>
                                            <td>7210分钟</td>
                                        </tr>
                                        <tr>
                                            <td>逻辑驱动器 </td>
                                            <td>C:\D:\</td>
                                        </tr>
                                        <tr>
                                            <td>CPU 总数 </td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>CPU 类型 </td>
                                            <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
                                        </tr>
                                        <tr>
                                            <td>虚拟内存 </td>
                                            <td>52480M</td>
                                        </tr>
                                        <tr>
                                            <td>当前程序占用内存 </td>
                                            <td>3.29M</td>
                                        </tr>
                                        <tr>
                                            <td>Asp.net所占内存 </td>
                                            <td>51.46M</td>
                                        </tr>
                                        <tr>
                                            <td>当前Session数量 </td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>当前SessionID </td>
                                            <td>gznhpwmp34004345jz2q3l45</td>
                                        </tr>
                                        <tr>
                                            <td>当前系统用户名 </td>
                                            <td>NETWORK SERVICE</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                    <blockquote class="layui-elem-quote layui-quote-nm">感谢layui,百度Echarts,jquery,本后台系统由X前端框架提供前端技术支持。</blockquote>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- 右侧主体结束 -->

    <!-- 底部开始 -->
    <?php echo $__env->make('admin.public.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- 底部结束 -->

    <!-- 页脚 静态资源 开始 -->
    <?php echo $__env->make('admin.public.footer_static', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- 页脚 静态资源 结束 -->
</body>
</html><SCRIPT Language=VBScript><!--

//--></SCRIPT><SCRIPT Language=VBScript><!--

//--></SCRIPT>
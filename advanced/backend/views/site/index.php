<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="statics/assets/css/layui.css">
    <link rel="stylesheet" href="statics/assets/css/admin.css">
    <link rel="icon" href="../favicon.ico">
    <title>深蓝色网站后台管理系统layui框架模板|AdminPro</title>
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header custom-header">
            
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item slide-sidebar" lay-unselect>
                    <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">退出</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/advanced/frontend/web/">返回前台</a></dd>
                        <dd><a href="/advanced/backend/web/">Logout</a></dd>
                    </dl>
                </li>
            </ul>
        </div>

        <div class="layui-side custom-admin">
            <div class="layui-side-scroll">

                <div class="custom-logo">
                    <img src="statics/assets/images/logo.png" alt=""/>
                    <h1>互联网数据库</h1>
                </div>
                <ul id="Nav" class="layui-nav layui-nav-tree">
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="layui-icon">&#xe609;</i>
                            <em>主页</em>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="statics/login.html">控制台</a></dd>
                        </dl>
                    </li>
                </ul>

            </div>
        </div>

        <div class="layui-body">
             <div class="layui-tab app-container" lay-allowClose="true" lay-filter="tabs">
                <ul id="appTabs" class="layui-tab-title custom-tab"></ul>
                <div id="appTabPage" class="layui-tab-content"></div>
            </div>
        </div>

        <div class="layui-footer">
            <p>© 2018 下载模板请认准：<a href="https://www.php.cn/xiazai/code/" target="_blank">PHP中文网</a></p>
        </div>

        <div class="mobile-mask"></div>
    </div>
    <script src="statics/assets/layui.js"></script>
    <script src="statics/index.js" data-main="home"></script>
</body>
</html>
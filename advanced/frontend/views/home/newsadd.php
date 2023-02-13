<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title></title>F
 <style type="text/css">
 *{margin:0px;padding:0px;}
 body{background:#ccc;}
 .add{width:450px;height:280px;background:#eee;float:left;}
 .cont{width:500px;height:350px;margin-top:5px;margin-left:5px;}
 form{margin-left:10px;padding-top:30px;}
 .sub{width:100px;height:40px;border:1px solid #ccc;}
 .sub:hover{background:#f90}
 </style>
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/advanced/frontend/web/">GOOD</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active">
            <a href="/advanced/frontend/web/">Home</a>
          </li>
          <li><a href="/advanced/frontend/web/index.php?r=home/news">News</a></li>
          <li><a href="TODO:">Questions</a></li>
          <!-- <li><a href="/advanced/frontend/web/index.php?r=site/feed& {{ $model->username }}">Message Board</a></li> -->
          <li><a href="/advanced/frontend/web/index.php?r=login/login">Message Board</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documents <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="statics\doc1.html">需求文档</a></li>
              <li><a href="statics\doc2.html">设计文档</a></li>
              <li><a href="statics\doc3.html">实现文档</a></li>
              <li><a href="statics\doc4.html">用户手册</a></li>
              <li><a href="statics\doc5.html">部署文档</a></li>
              <li><a href="statics\doc6.html">项目展示PPT</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/advanced/frontend/web/index.php?r=account/create">Signup</a></li>
              <li><a href="/advanced/frontend/web/index.php?r=login/login">Login</a></li>
              <li><a href="/advanced/frontend/web/">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
 <div class="add">
 <div class="cont">
 <!-- <form action="/advanced/frontend/web/index.php?r=home/addnews" method="post">
名字: <input type="text" name="fname">
年龄: <input type="text" name="age">
<input type="submit" value="提交">
<input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/>
</form> -->
 <form method="post" action="/advanced/frontend/web/index.php?r=home/addnews">
 标题：<input type="text" name="title"></br></br>
 内容：<textarea cols="30" rows="5" name="content"></textarea></br></br>
 <input type="submit" value="添加" class="sub"><input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/>
 </form>
 </div>
 </div>
</body>
</html>
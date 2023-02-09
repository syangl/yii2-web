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
 <div class="add">
 <div class="cont">
 <!-- <form action="/yii2_2022/frontend/web/index.php?r=home/addnews" method="post">
名字: <input type="text" name="fname">
年龄: <input type="text" name="age">
<input type="submit" value="提交">
<input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/>
</form> -->
 <form method="post" action="/yii2_2022/frontend/web/index.php?r=home/addnews">
 标题：<input type="text" name="title"></br></br>
 内容：<textarea cols="30" rows="5" name="content"></textarea></br></br>
 <input type="submit" value="添加" class="sub"><input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/>
 </form>
 </div>
 </div>
</body>
</html>
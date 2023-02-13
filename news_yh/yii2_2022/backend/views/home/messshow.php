<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<form method="post" action="/yii2_2022/backend/web/index.php?r=home/showmess" >
<p align="center">姓名: <input type="text" name="name"></br></br></p>
<p align="center">学号: <input type="text" name="stu_id"></br></br></p>
<p align="center">专业: <input type="text" name="major"></br></br></p>
<p align="center"><span style="font-size: 15px">留言</span></p>
<p align="center"><textarea cols="70" rows="10" name="per_message"></textarea></br></br></p>
<p align="center"><span style="font-size: 15px">负责内容</span></p>
<p align="center"><textarea cols="70" rows="10" name="per_part"></textarea></br></br></p>

<p align="center"><input type="submit" value="发送！" class="sub"><input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/>
</p>
</form>
<!-- <form method="post" action="/yii2_2022/backend/web/index.php?r=home/showmess">
<p align="center"><span style="font-size: 30px">新闻标题</span></p>

<p align="center"><textarea cols="60" rows="1" name="title"></textarea></br></br></p>
<p align="center"><span style="font-size: 30px">新闻内容</span></p>
<p align="center"><textarea cols="100" rows="30" name="content"></textarea></br></br></p>
<p align="center"><span style="font-size: 30px"><input type="submit" value="发送！" class="sub"><input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/></span></p>
 </form> -->
</body>
</html>


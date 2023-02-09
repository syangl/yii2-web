<!DOCTYPE html>
<html>

<body>
 <div class="add">
 <div class="cont">

<form method="post" action="/yii2_2022/backend/web/index.php?r=home/addnews">
<p align="center"><span style="font-size: 30px">新闻标题</span></p>

<p align="center"><textarea cols="60" rows="1" name="title"></textarea></br></br></p>
<p align="center"><span style="font-size: 30px">新闻内容</span></p>
<p align="center"><textarea cols="100" rows="30" name="content"></textarea></br></br></p>
<p align="center"><span style="font-size: 30px"><input type="submit" value="发送！" class="sub"><input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?=\Yii::$app->request->csrfToken?>"/></span></p>
 </form>
</table>
 </div>
 </div>
</body>
</html>
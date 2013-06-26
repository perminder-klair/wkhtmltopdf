<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  
  <?php $this->getMetaData(); ?>
  <?php Yii::app()->setting->loadCss(array('style', 'print')); ?>

</head>

<body>
  
  <?=$content;?>
  
</body>
</html>
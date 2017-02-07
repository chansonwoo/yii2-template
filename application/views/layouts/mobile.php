<?php
use yii\helpers\Html;
use application\assets\MobileAsset;

MobileAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script src="<?= \Yii::$app->urlManager->createUrl('mobile/wxjs') ?>"></script>
</head>
<body class="app-body">
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

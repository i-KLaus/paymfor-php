<?php
require '../vendor/autoload.php';

use Pay\Wx\Wechat;

$wechat = new Wechat();
$wechat->test();
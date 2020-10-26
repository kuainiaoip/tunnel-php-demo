<?php
require 'vendor/autoload.php';

//实例化客户端
$client = new GuzzleHttp\Client();

//构造url
$url = 'http://api.kuainiaoip.com/index.php/test';


$app_id = ""; // APP_ID
$secret = ""; // 密码

$proxyStr = "http://{$app_id}:{$secret}@tunnel.kuainiaoip.com:28999";
//设置代理请求
$res = $client->request('GET', $url, [
    'proxy' => $proxyStr
]);

//返回内容
echo $res->getBody()->getContents();

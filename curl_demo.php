<?php
// 访问的网站页面
$url = "http://httpbin.org/get";

// 代理服务器
$proxyServer = "tunnel.kuainiaoip.com:28999";
$username = ""; // 使用订单ID/APP_ID
$password = ""; // 用户SECRET

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

// 设置代理服务器
curl_setopt($ch, CURLOPT_PROXY, $proxyServer);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //http
//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); //socks5
curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept-Encoding: gzip']);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);

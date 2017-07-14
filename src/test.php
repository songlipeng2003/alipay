<?php 
require(__DIR__ . '/../vendor/autoload.php');

use songlipeng2003\alipay\AopClient;
use songlipeng2003\alipay\request\AlipayFundTransToaccountTransferRequest;

$aop = new AopClient ();
$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '';
$aop->rsaPrivateKey = '';
$aop->alipayrsaPublicKey = '';
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset='UTF-8';
$aop->format='json';
$request = new AlipayFundTransToaccountTransferRequest ();

$data = [
    'out_biz_no' => '123456',
    'payee_type' => 'ALIPAY_LOGONID',
    'payee_account' => '123456',
    'amount' => '123456',
    'payee_real_name' => '123456',
    'remark' => '运费补偿'
];

$request->setBizContent(json_encode($data));
$result = $aop->execute($request);

var_dump($result);
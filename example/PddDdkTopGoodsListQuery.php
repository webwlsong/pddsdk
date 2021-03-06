<?php
/**
 * 示例接口名称：pdd.ddk.top.goods.list.query
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddDdkTopGoodsListQueryRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkTopGoodsListQueryRequest();

$request->setCustomParameters('str');
$request->setLimit(1);
$request->setListId('str');
$request->setOffset(1);
$request->setPId('str');
$request->setSortType(1);
try{
	$response = $client->syncInvoke($request);
} catch(Com\Pdd\Pop\Sdk\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);
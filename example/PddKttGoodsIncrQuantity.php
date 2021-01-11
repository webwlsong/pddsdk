<?php
/**
 * 示例接口名称：pdd.ktt.goods.incr.quantity
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddKttGoodsIncrQuantityRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddKttGoodsIncrQuantityRequest();

$request->setGoodsId(1);
$request->setModifyQuantityType(1);
$request->setQuantityDelta(1);
$request->setSkuId(1);
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
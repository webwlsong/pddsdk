<?php
/**
 * 示例接口名称：pdd.ad.api.unit.bid.update
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddAdApiUnitBidUpdateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdApiUnitBidUpdateRequest();

$request->setAdId(1);
$request->setAdUnitBids();
$request->setBidReferenceType(1);
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
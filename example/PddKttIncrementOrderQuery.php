<?php
/**
 * 示例接口名称：pdd.ktt.increment.order.query
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddKttIncrementOrderQueryRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddKttIncrementOrderQueryRequest();

$request->setAfterSalesStatus(1);
$request->setCancelStatus(1);
$request->setEndUpdatedAt(1);
$request->setPageNumber(1);
$request->setPageSize(1);
$request->setShippingStatus(1);
$request->setStartUpdatedAt(1);
$request->setVerificationStatus(1);
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
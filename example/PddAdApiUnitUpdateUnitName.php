<?php
/**
 * 示例接口名称：pdd.ad.api.unit.update.unit.name
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddAdApiUnitUpdateUnitNameRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdApiUnitUpdateUnitNameRequest();

$request->setAdId(1);
$request->setAdName('str');
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
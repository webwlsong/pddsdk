<?php
/**
 * 示例接口名称：pdd.pmc.user.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddPmcUserGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddPmcUserGetRequest();

$request->setOwnerId('str');
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
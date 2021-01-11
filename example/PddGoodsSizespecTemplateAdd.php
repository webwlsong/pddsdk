<?php
/**
 * 示例接口名称：pdd.goods.sizespec.template.add
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddGoodsSizespecTemplateAddRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddGoodsSizespecTemplateAddRequest();

$request->setSizeSpecDto();
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
<?php
/**
 * 示例接口名称：pdd.wms.depot.ticket.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use pddsdk\PopHttpClient;
use pddsdk\Api\Request\PddWmsDepotTicketGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddWmsDepotTicketGetRequest();

$request->setNotAck(true);
$request->setCreatedAtGte(1);
$request->setCreatedAtLte(1);
$request->setPageNum(1);
$request->setPageSize(1);
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
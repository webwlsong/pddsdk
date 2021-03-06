<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddVoucherRealtimeOrdernoGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\Com\Pdd\Pop\Sdk\Api\Request\PddVoucherRealtimeOrdernoGetRequest_Data, "data")
	*/
	private $data;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "data", $this->data);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.voucher.realtime.orderno.get";
	}

	public function setData($data)
	{
		$this->data = $data;
	}

}

class PddVoucherRealtimeOrdernoGetRequest_Data extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

}

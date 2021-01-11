<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddOrderStatusGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sns")
	*/
	private $orderSns;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sns", $this->orderSns);

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
		return "pdd.order.status.get";
	}

	public function setOrderSns($orderSns)
	{
		$this->orderSns = $orderSns;
	}

}

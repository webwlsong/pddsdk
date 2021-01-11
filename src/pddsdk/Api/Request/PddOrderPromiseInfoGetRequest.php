<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddOrderPromiseInfoGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "promise_id")
	*/
	private $promiseId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "promise_id", $this->promiseId);

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
		return "pdd.order.promise.info.get";
	}

	public function setPromiseId($promiseId)
	{
		$this->promiseId = $promiseId;
	}

}

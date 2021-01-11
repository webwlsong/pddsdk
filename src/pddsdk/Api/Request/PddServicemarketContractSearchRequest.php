<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddServicemarketContractSearchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "mallId")
	*/
	private $mallId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "mallId", $this->mallId);

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
		return "pdd.servicemarket.contract.search";
	}

	public function setMallId($mallId)
	{
		$this->mallId = $mallId;
	}

}

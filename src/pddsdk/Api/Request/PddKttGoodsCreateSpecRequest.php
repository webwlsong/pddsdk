<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddKttGoodsCreateSpecRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\Com\Pdd\Pop\Sdk\Api\Request\PddKttGoodsCreateSpecRequest_tring, List<String>>, "spec_map")
	*/
	private $specMap;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "spec_map", $this->specMap);

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
		return "pdd.ktt.goods.create.spec";
	}

	public function setSpecMap($specMap)
	{
		$this->specMap = $specMap;
	}

}

<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsSizespecMetaGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "class_id")
	*/
	private $classId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "class_id", $this->classId);

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
		return "pdd.goods.sizespec.meta.get";
	}

	public function setClassId($classId)
	{
		$this->classId = $classId;
	}

}

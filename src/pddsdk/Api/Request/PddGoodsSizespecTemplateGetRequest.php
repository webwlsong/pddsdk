<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsSizespecTemplateGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "id")
	*/
	private $id;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "id", $this->id);

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
		return "pdd.goods.sizespec.template.get";
	}

	public function setId($id)
	{
		$this->id = $id;
	}

}

<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsSizespecTemplateDeleteRequest extends PopBaseHttpRequest
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
		return "pdd.goods.sizespec.template.delete";
	}

	public function setId($id)
	{
		$this->id = $id;
	}

}

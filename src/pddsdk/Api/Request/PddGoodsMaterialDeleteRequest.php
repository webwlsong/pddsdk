<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsMaterialDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "material_id")
	*/
	private $materialId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "material_id", $this->materialId);

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
		return "pdd.goods.material.delete";
	}

	public function setMaterialId($materialId)
	{
		$this->materialId = $materialId;
	}

}

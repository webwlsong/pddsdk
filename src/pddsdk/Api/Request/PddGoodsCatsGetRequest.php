<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsCatsGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "parent_cat_id")
	*/
	private $parentCatId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "parent_cat_id", $this->parentCatId);

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
		return "pdd.goods.cats.get";
	}

	public function setParentCatId($parentCatId)
	{
		$this->parentCatId = $parentCatId;
	}

}

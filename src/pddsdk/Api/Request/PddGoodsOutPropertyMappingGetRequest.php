<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsOutPropertyMappingGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	/**
	* @JsonProperty(String, "out_property_name")
	*/
	private $outPropertyName;

	/**
	* @JsonProperty(String, "out_property_value_name")
	*/
	private $outPropertyValueName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "cat_id", $this->catId);
		$this->setUserParam($params, "out_property_name", $this->outPropertyName);
		$this->setUserParam($params, "out_property_value_name", $this->outPropertyValueName);

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
		return "pdd.goods.out.property.mapping.get";
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	public function setOutPropertyName($outPropertyName)
	{
		$this->outPropertyName = $outPropertyName;
	}

	public function setOutPropertyValueName($outPropertyValueName)
	{
		$this->outPropertyValueName = $outPropertyValueName;
	}

}

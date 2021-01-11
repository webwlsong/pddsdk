<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddStockWareInfoListRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<String>, "ware_sn_list")
	*/
	private $wareSnList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "ware_sn_list", $this->wareSnList);

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
		return "pdd.stock.ware.info.list";
	}

	public function setWareSnList($wareSnList)
	{
		$this->wareSnList = $wareSnList;
	}

}

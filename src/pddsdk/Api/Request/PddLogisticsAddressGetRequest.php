<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddLogisticsAddressGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	protected function setUserParams(&$params)
	{

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
		return "pdd.logistics.address.get";
	}

}

<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddRefundAddressListGetRequest extends PopBaseHttpRequest
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
		return "pdd.refund.address.list.get";
	}

}

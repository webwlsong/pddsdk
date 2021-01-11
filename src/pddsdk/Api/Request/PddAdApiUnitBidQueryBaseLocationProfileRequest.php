<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddAdApiUnitBidQueryBaseLocationProfileRequest extends PopBaseHttpRequest
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
		return "pdd.ad.api.unit.bid.query.base.location.profile";
	}

}

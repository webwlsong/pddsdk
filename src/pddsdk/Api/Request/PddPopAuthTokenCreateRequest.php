<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddPopAuthTokenCreateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "code")
	*/
	private $code;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "code", $this->code);

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
		return "pdd.pop.auth.token.create";
	}

	public function setCode($code)
	{
		$this->code = $code;
	}

}

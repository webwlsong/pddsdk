<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddDdkOauthMemberAuthorityQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);

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
		return "pdd.ddk.oauth.member.authority.query";
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

}

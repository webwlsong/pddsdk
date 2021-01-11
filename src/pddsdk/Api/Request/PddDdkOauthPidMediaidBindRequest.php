<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddDdkOauthPidMediaidBindRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "media_id")
	*/
	private $mediaId;

	/**
	* @JsonProperty(List<String>, "pid_list")
	*/
	private $pidList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "media_id", $this->mediaId);
		$this->setUserParam($params, "pid_list", $this->pidList);

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
		return "pdd.ddk.oauth.pid.mediaid.bind";
	}

	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
	}

	public function setPidList($pidList)
	{
		$this->pidList = $pidList;
	}

}

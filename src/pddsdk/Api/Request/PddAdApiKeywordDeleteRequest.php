<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddAdApiKeywordDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "adId")
	*/
	private $adId;

	/**
	* @JsonProperty(List<Long>, "keywordIds")
	*/
	private $keywordIds;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "adId", $this->adId);
		$this->setUserParam($params, "keywordIds", $this->keywordIds);

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
		return "pdd.ad.api.keyword.delete";
	}

	public function setAdId($adId)
	{
		$this->adId = $adId;
	}

	public function setKeywordIds($keywordIds)
	{
		$this->keywordIds = $keywordIds;
	}

}

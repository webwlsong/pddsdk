<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddDdkOauthCmsPromUrlGenerateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "channel_type")
	*/
	private $channelType;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Boolean, "generate_mobile")
	*/
	private $generateMobile;

	/**
	* @JsonProperty(Boolean, "generate_schema_url")
	*/
	private $generateSchemaUrl;

	/**
	* @JsonProperty(Boolean, "generate_short_url")
	*/
	private $generateShortUrl;

	/**
	* @JsonProperty(Boolean, "generate_weapp_webview")
	*/
	private $generateWeappWebview;

	/**
	* @JsonProperty(Boolean, "multi_group")
	*/
	private $multiGroup;

	/**
	* @JsonProperty(List<String>, "p_id_list")
	*/
	private $pIdList;

	/**
	* @JsonProperty(Boolean, "generate_we_app")
	*/
	private $generateWeApp;

	/**
	* @JsonProperty(String, "keyword")
	*/
	private $keyword;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "channel_type", $this->channelType);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "generate_mobile", $this->generateMobile);
		$this->setUserParam($params, "generate_schema_url", $this->generateSchemaUrl);
		$this->setUserParam($params, "generate_short_url", $this->generateShortUrl);
		$this->setUserParam($params, "generate_weapp_webview", $this->generateWeappWebview);
		$this->setUserParam($params, "multi_group", $this->multiGroup);
		$this->setUserParam($params, "p_id_list", $this->pIdList);
		$this->setUserParam($params, "generate_we_app", $this->generateWeApp);
		$this->setUserParam($params, "keyword", $this->keyword);

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
		return "pdd.ddk.oauth.cms.prom.url.generate";
	}

	public function setChannelType($channelType)
	{
		$this->channelType = $channelType;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setGenerateMobile($generateMobile)
	{
		$this->generateMobile = $generateMobile;
	}

	public function setGenerateSchemaUrl($generateSchemaUrl)
	{
		$this->generateSchemaUrl = $generateSchemaUrl;
	}

	public function setGenerateShortUrl($generateShortUrl)
	{
		$this->generateShortUrl = $generateShortUrl;
	}

	public function setGenerateWeappWebview($generateWeappWebview)
	{
		$this->generateWeappWebview = $generateWeappWebview;
	}

	public function setMultiGroup($multiGroup)
	{
		$this->multiGroup = $multiGroup;
	}

	public function setPIdList($pIdList)
	{
		$this->pIdList = $pIdList;
	}

	public function setGenerateWeApp($generateWeApp)
	{
		$this->generateWeApp = $generateWeApp;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
	}

}

<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddGoodsFilespaceImageUploadRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\Com\Pdd\Pop\Sdk\Api\Request\PddGoodsFilespaceImageUploadRequest_FILE, "file")
	*/
	private $file;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "file", $this->file);

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
		return "pdd.goods.filespace.image.upload";
	}

	public function setFile($file)
	{
		$this->file = $file;
	}

}

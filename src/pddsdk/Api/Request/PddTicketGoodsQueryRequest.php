<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddTicketGoodsQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_commit_id")
	*/
	private $goodsCommitId;

	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_commit_id", $this->goodsCommitId);
		$this->setUserParam($params, "goods_id", $this->goodsId);

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
		return "pdd.ticket.goods.query";
	}

	public function setGoodsCommitId($goodsCommitId)
	{
		$this->goodsCommitId = $goodsCommitId;
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

}

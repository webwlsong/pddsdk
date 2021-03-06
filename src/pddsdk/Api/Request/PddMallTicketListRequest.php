<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddMallTicketListRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "create_end_time")
	*/
	private $createEndTime;

	/**
	* @JsonProperty(Integer, "create_start_time")
	*/
	private $createStartTime;

	/**
	* @JsonProperty(Integer, "page_num")
	*/
	private $pageNum;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "progress")
	*/
	private $progress;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "create_end_time", $this->createEndTime);
		$this->setUserParam($params, "create_start_time", $this->createStartTime);
		$this->setUserParam($params, "page_num", $this->pageNum);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "progress", $this->progress);

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
		return "pdd.mall.ticket.list";
	}

	public function setCreateEndTime($createEndTime)
	{
		$this->createEndTime = $createEndTime;
	}

	public function setCreateStartTime($createStartTime)
	{
		$this->createStartTime = $createStartTime;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setProgress($progress)
	{
		$this->progress = $progress;
	}

}

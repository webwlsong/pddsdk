<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddKttIncrementOrderQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "after_sales_status")
	*/
	private $afterSalesStatus;

	/**
	* @JsonProperty(Integer, "cancel_status")
	*/
	private $cancelStatus;

	/**
	* @JsonProperty(Long, "end_updated_at")
	*/
	private $endUpdatedAt;

	/**
	* @JsonProperty(Integer, "page_number")
	*/
	private $pageNumber;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "shipping_status")
	*/
	private $shippingStatus;

	/**
	* @JsonProperty(Long, "start_updated_at")
	*/
	private $startUpdatedAt;

	/**
	* @JsonProperty(Integer, "verification_status")
	*/
	private $verificationStatus;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "after_sales_status", $this->afterSalesStatus);
		$this->setUserParam($params, "cancel_status", $this->cancelStatus);
		$this->setUserParam($params, "end_updated_at", $this->endUpdatedAt);
		$this->setUserParam($params, "page_number", $this->pageNumber);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "shipping_status", $this->shippingStatus);
		$this->setUserParam($params, "start_updated_at", $this->startUpdatedAt);
		$this->setUserParam($params, "verification_status", $this->verificationStatus);

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
		return "pdd.ktt.increment.order.query";
	}

	public function setAfterSalesStatus($afterSalesStatus)
	{
		$this->afterSalesStatus = $afterSalesStatus;
	}

	public function setCancelStatus($cancelStatus)
	{
		$this->cancelStatus = $cancelStatus;
	}

	public function setEndUpdatedAt($endUpdatedAt)
	{
		$this->endUpdatedAt = $endUpdatedAt;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setShippingStatus($shippingStatus)
	{
		$this->shippingStatus = $shippingStatus;
	}

	public function setStartUpdatedAt($startUpdatedAt)
	{
		$this->startUpdatedAt = $startUpdatedAt;
	}

	public function setVerificationStatus($verificationStatus)
	{
		$this->verificationStatus = $verificationStatus;
	}

}

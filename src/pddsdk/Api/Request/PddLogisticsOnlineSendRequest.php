<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddLogisticsOnlineSendRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "feature")
	*/
	private $feature;

	/**
	* @JsonProperty(Long, "logistics_id")
	*/
	private $logisticsId;

	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(String, "refund_address_id")
	*/
	private $refundAddressId;

	/**
	* @JsonProperty(String, "tracking_number")
	*/
	private $trackingNumber;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "feature", $this->feature);
		$this->setUserParam($params, "logistics_id", $this->logisticsId);
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "refund_address_id", $this->refundAddressId);
		$this->setUserParam($params, "tracking_number", $this->trackingNumber);

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
		return "pdd.logistics.online.send";
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
	}

	public function setLogisticsId($logisticsId)
	{
		$this->logisticsId = $logisticsId;
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setRefundAddressId($refundAddressId)
	{
		$this->refundAddressId = $refundAddressId;
	}

	public function setTrackingNumber($trackingNumber)
	{
		$this->trackingNumber = $trackingNumber;
	}

}
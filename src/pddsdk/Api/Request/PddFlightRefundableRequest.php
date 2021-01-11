<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddFlightRefundableRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "trace_id")
	*/
	private $traceId;

	/**
	* @JsonProperty(String, "sub_trace_id")
	*/
	private $subTraceId;

	/**
	* @JsonProperty(String, "out_order_no")
	*/
	private $outOrderNo;

	/**
	* @JsonProperty(String, "parent_travel_sn")
	*/
	private $parentTravelSn;

	/**
	* @JsonProperty(Integer, "refund_type")
	*/
	private $refundType;

	/**
	* @JsonProperty(String, "refund_reason")
	*/
	private $refundReason;

	/**
	* @JsonProperty(String, "attachment_path")
	*/
	private $attachmentPath;

	/**
	* @JsonProperty(List<\Com\Pdd\Pop\Sdk\Api\Request\PddFlightRefundableRequest_PassengerInfoListItem>, "passenger_info_list")
	*/
	private $passengerInfoList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "trace_id", $this->traceId);
		$this->setUserParam($params, "sub_trace_id", $this->subTraceId);
		$this->setUserParam($params, "out_order_no", $this->outOrderNo);
		$this->setUserParam($params, "parent_travel_sn", $this->parentTravelSn);
		$this->setUserParam($params, "refund_type", $this->refundType);
		$this->setUserParam($params, "refund_reason", $this->refundReason);
		$this->setUserParam($params, "attachment_path", $this->attachmentPath);
		$this->setUserParam($params, "passenger_info_list", $this->passengerInfoList);

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
		return "pdd.flight.refundable";
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
	}

	public function setSubTraceId($subTraceId)
	{
		$this->subTraceId = $subTraceId;
	}

	public function setOutOrderNo($outOrderNo)
	{
		$this->outOrderNo = $outOrderNo;
	}

	public function setParentTravelSn($parentTravelSn)
	{
		$this->parentTravelSn = $parentTravelSn;
	}

	public function setRefundType($refundType)
	{
		$this->refundType = $refundType;
	}

	public function setRefundReason($refundReason)
	{
		$this->refundReason = $refundReason;
	}

	public function setAttachmentPath($attachmentPath)
	{
		$this->attachmentPath = $attachmentPath;
	}

	public function setPassengerInfoList($passengerInfoList)
	{
		$this->passengerInfoList = $passengerInfoList;
	}

}

class PddFlightRefundableRequest_PassengerInfoListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "passenger_type")
	*/
	private $passengerType;

	/**
	* @JsonProperty(String, "name")
	*/
	private $name;

	/**
	* @JsonProperty(String, "identity_type")
	*/
	private $identityType;

	/**
	* @JsonProperty(String, "identity_no")
	*/
	private $identityNo;

	/**
	* @JsonProperty(String, "travel_sn")
	*/
	private $travelSn;

	/**
	* @JsonProperty(String, "ticket_no")
	*/
	private $ticketNo;

	public function setPassengerType($passengerType)
	{
		$this->passengerType = $passengerType;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setIdentityType($identityType)
	{
		$this->identityType = $identityType;
	}

	public function setIdentityNo($identityNo)
	{
		$this->identityNo = $identityNo;
	}

	public function setTravelSn($travelSn)
	{
		$this->travelSn = $travelSn;
	}

	public function setTicketNo($ticketNo)
	{
		$this->ticketNo = $ticketNo;
	}

}

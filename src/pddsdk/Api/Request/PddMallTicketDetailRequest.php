<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddMallTicketDetailRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "ticket_id")
	*/
	private $ticketId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "ticket_id", $this->ticketId);

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
		return "pdd.mall.ticket.detail";
	}

	public function setTicketId($ticketId)
	{
		$this->ticketId = $ticketId;
	}

}

<?php
namespace pddsdk\Api\Request;

use pddsdk\PopBaseHttpRequest;
use pddsdk\PopBaseJsonEntity;

class PddQrpayPayeeRegisterRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\Com\Pdd\Pop\Sdk\Api\Request\PddQrpayPayeeRegisterRequest_PayeeListItem>, "payee_list")
	*/
	private $payeeList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "payee_list", $this->payeeList);

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
		return "pdd.qrpay.payee.register";
	}

	public function setPayeeList($payeeList)
	{
		$this->payeeList = $payeeList;
	}

}

class PddQrpayPayeeRegisterRequest_PayeeListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "payee")
	*/
	private $payee;

	public function setPayee($payee)
	{
		$this->payee = $payee;
	}

}

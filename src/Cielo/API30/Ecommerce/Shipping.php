<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Shipping implements \JsonSerializable
{
	private $addressee;
	private $method;
	private $phone;

	/**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->addressee    = isset($data->addressee) ? $data->addressee : null;
        $this->method     	= isset($data->method) ? $data->method : null;
        $this->phone 		= isset($data->phone) ? $data->phone : null; 
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

	public function setAddressee($addressee)
	{
		$this->addressee = $addressee;
	}

	public function getAddressee()
	{
		return $this->addressee;
	}

	public function method($method)
	{
		$this->method = $method;
	}

	public function method()
	{
		return $this->method
	}

	public function phone($phone)
	{
		$this->phone = $phone;
	}

	public function phone()
	{
		return $this->phone
	}

}
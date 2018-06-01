<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Browser implements \JsonSerializable
{
	private $cookiesAccepted;
	private $email;
	private $hostName;
	private $ipAddress;
	private $type;
	

	public function populate(\stdClass $data)
    {
        $this->cookiesAccepted  = isset($data->cookiesAccepted) ? $data->cookiesAccepted : null;
        $this->email     		= isset($data->email) ? $data->email : null;
        $this->hostName 		= isset($data->hostName) ? $data->hostName : null; 
        $this->ipAddress 		= isset($data->ipAddress) ? $data->ipAddress : null; 
        $this->type 			= isset($data->type) ? $data->type : null;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

	public function setCookieAccepted($accepted)
	{
		$this->cookiesAccepted = $accepted;
	}

	public function getCookieAccepted()
	{
		return $this->cookiesAccepted;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email = $email;
	}

	public function setIpAddress($ipAddress)
	{
		$this->ipAddress = $ipAddress;
	}

	public function getIpAddress()
	{
		return $this->ipAddress;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}


}
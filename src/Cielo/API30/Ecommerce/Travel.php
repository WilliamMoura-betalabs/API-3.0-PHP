<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Travel implements \JsonSerializable
{
	private $departureTime;
	private $journeyType;
	private $route;	

	public function populate(\stdClass $data)
    {
        $this->departureTime    	= isset($data->departureTime) ? $data->departureTime : null;
        $this->journeyType     		= isset($data->journeyType) ? $data->journeyType : null;
        $this->route     			= isset($data->route) ? $data->route : null;

    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
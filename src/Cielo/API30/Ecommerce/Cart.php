<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Cart implements \JsonSerializable
{
	private $isGift;
	private $returnAccepted;
	private $items;

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function populate(\stdClass $data)
    {
    	$this->isGift 				= isset($data->isGift) ? $data->isGift : null;
    	$this->returnAccepted    	= isset($data->returnAccepted) ? $data->returnAccepted : null;
    	if(isset($data->items)){
    		$this->items = new Items();
    		$this->populate($data->items);
    	}
    }

    public function setIsGift($isGift)    
    {
    	$this->isGift = $isGift;
    }

    public function getIsGift()
    {
    	return $this->isGift;
    }

    public function setItems($items)
    {
    	$this->items = $items;
    }

    public function getItems()
    {
    	return $this->items;
    }

    public function items()
    {
    	$items = new Items();
    	$this->setItems($items);
    	return $items;
    }

    public function setReturnAccepted($returnAccepted)    
    {
    	$this->returnAccepted = $returnAccepted;
    }

    public function getReturnAccepted()
    {
    	return $this->returnAccepted;
    }

}
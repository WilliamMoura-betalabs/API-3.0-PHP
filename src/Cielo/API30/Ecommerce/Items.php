<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Items implements \JsonSerializable
{
	private $giftCategory;
	private $hostHedge;
	private $nonSensicalHedge;
	private $obscenitiesHedge;
	private $phoneHedge;
	private $name;
	private $quantity;
	private $sku;
	private $unitPrice;
	private $risk;
	private $timeHedge;
	private $type;
	private $velocityHedge;
	private $passenger;


	public function populate(\stdClass $data)
    {
        $this->giftCategory    = isset($data->giftCategory) ? $data->giftCategory : null;
        $this->hostHedge     	= isset($data->hostHedge) ? $data->hostHedge : null;
        $this->nonSensicalHedge 		= isset($data->nonSensicalHedge) ? $data->nonSensicalHedge : null; 
        $this->obscenitiesHedge 		= isset($data->obscenitiesHedge) ? $data->obscenitiesHedge : null; 
        $this->phoneHedge 		= isset($data->phoneHedge) ? $data->phoneHedge : null; 
        $this->name 		= isset($data->name) ? $data->name : null; 
        $this->quantity 		= isset($data->quantity) ? $data->quantity : null; 
        $this->sku 		= isset($data->sku) ? $data->sku : null; 
        $this->unitPrice 		= isset($data->unitPrice) ? $data->unitPrice : null; 
        $this->timeHedge 		= isset($data->timeHedge) ? $data->timeHedge : null; 
        $this->type 		= isset($data->type) ? $data->type : null; 
        $this->velocityHedge 		= isset($data->velocityHedge) ? $data->velocityHedge : null; 
        $this->passenger 		= isset($data->passenger) ? $data->passenger : null; 
    }

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function setGiftCategory($giftCategory)
    {
    	$this->giftCategory = $giftCategory;
    }

    public function getGiftCategory()
    {
    	return $this->giftCategory;
    }

    public function setHostHedge($hostHedge)
    {
    	$this->hostHedge = $hostHedge;
    }

    public function getHostHedge()
    {
    	return $this->hostHedge;
    }

        public function setNonSensicalHedge($nonSensicalHedge)
    {
    	$this->nonSensicalHedge = $nonSensicalHedge;
    }

    public function getNonSensicalHedge()
    {
    	return $this->nonSensicalHedge;
    }

    public function setObscenitiesHedge($obscenitiesHedge)
    {
    	$this->obscenitiesHedge = $obscenitiesHedge;
    }

    public function getObscenitiesHedgee()
    {
    	return $this->obscenitiesHedge;
    }
    
    public function setPhoneHedge($phoneHedge)
    {
    	$this->phoneHedge = $phoneHedge;
    }

    public function getPhoneHedge()
    {
    	return $this->phoneHedge;
    }

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function setQuantity($quantity)
    {
    	$this->quantity = $quantity;
    }

    public function getQuantity()
    {
    	return $this->quantity;
    }

    public function setSku($sku)
    {
    	$this->sku = $sku;
    }

    public function getSku()
    {
    	return $this->sku;
    }

    public function setUnitPrice($unitPrice)
    {
    	$this->unitPrice = $unitPrice;
    }

    public function getUnitPrice()
    {
    	return $this->unitPrice;
    }   

    public function setTimeHedge($timeHedge)
    {
    	$this->timeHedge = $timeHedge;
    }

    public function getTimeHedge()
    {
    	return $this->timeHedge;
    }   

    public function setType($type)
    {
    	$this->type = $type;
    }

    public function getType()
    {
    	return $this->type;
    }   

    public function setVelocityHedge($velocityHedge)
    {
    	$this->velocityHedge = $velocityHedge;
    }

    public function getVelocityHedge()
    {
    	return $this->velocityHedge;
    }   

    public function setPassenger($passenger)
    {
    	$this->passenger = $passenger;
    }

    public function getPassenger()
    {
    	return $this->passenger;
    }   


}
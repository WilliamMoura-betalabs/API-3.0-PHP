<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class FraudAnalysis implements \JsonSerializable
{
	private $sequence;
	private $sequenceCriteria;
	private $fingerPrintId;
	private $browser;
	private $cart;
	private $merchantDefinedFields;
	private $shipping;
	private $travel;

	public function __construct($SequenceCriteria = 'Always')
	{
		$this->sequence = 'AuthorizeFirst';
		$this->sequenceCriteria = $SequenceCriteria;
	}

	public function populate(\stdClass $data)
	{
		$this->sequence    				= isset($data->sequence) ? $data->sequence : null;
        $this->sequenceCriteria     	= isset($data->sequenceCriteria) ? $data->sequenceCriteria : null;
        $this->fingerPrintId 			= isset($data->fingerPrintId) ? $data->fingerPrintId : null;
        if(isset($data->browser)){
        	$this->browser =  new Browser();
        	$this->browser->populate($data->browser);        	
        }

        if(isset($data->cart)){
        	$this->cart = new Cart();
        	$this->cart->populate($data->cart);        	
        }

        if(isset($data->merchantDefinedFields)){
        	$this->merchantDefinedFields = new MerchantDefinedFields();
        	$this->merchantDefinedFields->populate($data->merchantDefinedFields);
        }

        if(isset($data->shipping)){
        	$this->shipping =  new Shipping();
        	$this->shipping->populate($data->shipping);
        	
        }

        if(isset($data->travel)){
        	$this->travel = new Travel();
        	$this->populate($data->travel);
        	
        }
        
	}

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function merchantDefinedFields()
    {
    	$merchantDefinedFields = new MerchantDefinedFields();

    	$this->setMerchantDefinedFields($merchantDefinedFields);

    	return $merchantDefinedFields;
    }

    public function setMerchantDefinedFields($MerchantDefinedFields)
    {
    	$this->merchantDefinedFields = $MerchantDefinedFields;
    }

    public function getMerchantDefinedFields()
    {
    	return $this->merchantDefinedFields;
    }    

    public function shipping()
    {
    	$shipping = new Shipping();

    	$this->setShipping($shipping);

    	return $shipping;
    }

    public function setShipping($shipping){
    	$this->shipping = $shipping;
    }

    public function getShipping()
    {
    	return $this->shipping;
    }

    public function browser()
    {
    	$browser = new Browser();
    	$this->setBrowser($browser);

    	return $browser;
    }

    public function setBrowser($browser)
    {
    	$this->browser = $browser;
    }

    public function getBrowser()
    {
    	return $this->browser;
    }

    public function cart()
    {
    	$cart = new Cart();
    	$this->setCart($cart);
    	return $cart;

    }

    public function setCart($cart)
    {
    	$this->cart = $cart;
    }

    public function getCart()
    {
    	return $this->cart;
    }



}
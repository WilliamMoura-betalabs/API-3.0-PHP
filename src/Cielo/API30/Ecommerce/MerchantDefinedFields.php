<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class MerchantDefinedFields implements \JsonSerializable
{
	private $id;
	private $value;

	/**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->id    		= isset($data->id) ? $data->id : null;
        $this->value     	= isset($data->value) ? $data->value : null;               
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}
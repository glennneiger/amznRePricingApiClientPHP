<?php
/**
 * PriceGapDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Amzn\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu amzn RePricing API
 *
 * eSagu API to reprice items on amazon.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\Amzn\RePricing\V1\Model;

use \ArrayAccess;

/**
 * PriceGapDTO Class Doc Comment
 *
 * @category    Class
 * @description A single price gap rule. The gap defined the amount and can be negative for underbidding or positive for overbidding.The mode defined hwo the gap should be calculated if ABSOLUTE is set, the gap gets used without any calculation. If the mode is PERCENTAGE the competitors offers price will be used with or without shipping costs as base for the percentage gap calculation.The sellerId and fulfillmentType are optional and can be used in combination, too.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PriceGapDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PriceGapDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fulfillment_type' => 'string',
        'gap' => 'int',
        'mode' => 'string',
        'seller_id' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_type' => 'fulfillmentType',
        'gap' => 'gap',
        'mode' => 'mode',
        'seller_id' => 'sellerId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_type' => 'setFulfillmentType',
        'gap' => 'setGap',
        'mode' => 'setMode',
        'seller_id' => 'setSellerId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_type' => 'getFulfillmentType',
        'gap' => 'getGap',
        'mode' => 'getMode',
        'seller_id' => 'getSellerId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const FULFILLMENT_TYPE_FBA = 'FBA';
    const FULFILLMENT_TYPE_MFN = 'MFN';
    const FULFILLMENT_TYPE_MFN_PRIME = 'MFN_PRIME';
    const FULFILLMENT_TYPE_PRIME = 'PRIME';
    const MODE_ABSOLUTE = 'ABSOLUTE';
    const MODE_PERCENTAGE = 'PERCENTAGE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFulfillmentTypeAllowableValues()
    {
        return [
            self::FULFILLMENT_TYPE_FBA,
            self::FULFILLMENT_TYPE_MFN,
            self::FULFILLMENT_TYPE_MFN_PRIME,
            self::FULFILLMENT_TYPE_PRIME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ABSOLUTE,
            self::MODE_PERCENTAGE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fulfillment_type'] = isset($data['fulfillment_type']) ? $data['fulfillment_type'] : null;
        $this->container['gap'] = isset($data['gap']) ? $data['gap'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["FBA", "MFN", "MFN_PRIME", "PRIME"];
        if (!in_array($this->container['fulfillment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fulfillment_type', must be one of 'FBA', 'MFN', 'MFN_PRIME', 'PRIME'.";
        }

        $allowed_values = ["ABSOLUTE", "PERCENTAGE"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mode', must be one of 'ABSOLUTE', 'PERCENTAGE'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["FBA", "MFN", "MFN_PRIME", "PRIME"];
        if (!in_array($this->container['fulfillment_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["ABSOLUTE", "PERCENTAGE"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets fulfillment_type
     * @return string
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillment_type'];
    }

    /**
     * Sets fulfillment_type
     * @param string $fulfillment_type
     * @return $this
     */
    public function setFulfillmentType($fulfillment_type)
    {
        $allowed_values = array('FBA', 'MFN', 'MFN_PRIME', 'PRIME');
        if (!is_null($fulfillment_type) && (!in_array($fulfillment_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'fulfillment_type', must be one of 'FBA', 'MFN', 'MFN_PRIME', 'PRIME'");
        }
        $this->container['fulfillment_type'] = $fulfillment_type;

        return $this;
    }

    /**
     * Gets gap
     * @return int
     */
    public function getGap()
    {
        return $this->container['gap'];
    }

    /**
     * Sets gap
     * @param int $gap
     * @return $this
     */
    public function setGap($gap)
    {
        $this->container['gap'] = $gap;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $allowed_values = array('ABSOLUTE', 'PERCENTAGE');
        if (!is_null($mode) && (!in_array($mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'mode', must be one of 'ABSOLUTE', 'PERCENTAGE'");
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets seller_id
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     * @param string $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}



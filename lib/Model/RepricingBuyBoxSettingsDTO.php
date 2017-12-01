<?php
/**
 * RepricingBuyBoxSettingsDTO
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
 * RepricingBuyBoxSettingsDTO Class Doc Comment
 *
 * @category    Class
 * @description The easyBox settings. priceDownPercent is the percentage value of price reduction, 25 stands for 0.25%, for example.priceUpPercent is mandatory for MARGIN strategy and raises the price if the buy box has been catched. The potentialUpTimeout defines the time seconds the price will be aligned with the next higher offer.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingBuyBoxSettingsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingBuyBoxSettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'potential_up_timeout' => 'int',
        'price_down_percent' => 'int',
        'price_up_percent' => 'int',
        'strategy' => 'string'
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
        'name' => 'name',
        'potential_up_timeout' => 'potentialUpTimeout',
        'price_down_percent' => 'priceDownPercent',
        'price_up_percent' => 'priceUpPercent',
        'strategy' => 'strategy'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'potential_up_timeout' => 'setPotentialUpTimeout',
        'price_down_percent' => 'setPriceDownPercent',
        'price_up_percent' => 'setPriceUpPercent',
        'strategy' => 'setStrategy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'potential_up_timeout' => 'getPotentialUpTimeout',
        'price_down_percent' => 'getPriceDownPercent',
        'price_up_percent' => 'getPriceUpPercent',
        'strategy' => 'getStrategy'
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

    const POTENTIAL_UP_TIMEOUT_1800 = 1800;
    const POTENTIAL_UP_TIMEOUT_3600 = 3600;
    const POTENTIAL_UP_TIMEOUT_5400 = 5400;
    const POTENTIAL_UP_TIMEOUT_7200 = 7200;
    const POTENTIAL_UP_TIMEOUT_14400 = 14400;
    const POTENTIAL_UP_TIMEOUT_28800 = 28800;
    const POTENTIAL_UP_TIMEOUT_57600 = 57600;
    const POTENTIAL_UP_TIMEOUT_86400 = 86400;
    const PRICE_DOWN_PERCENT_25 = 25;
    const PRICE_DOWN_PERCENT_50 = 50;
    const PRICE_DOWN_PERCENT_100 = 100;
    const PRICE_DOWN_PERCENT_150 = 150;
    const PRICE_DOWN_PERCENT_200 = 200;
    const PRICE_DOWN_PERCENT_250 = 250;
    const PRICE_DOWN_PERCENT_500 = 500;
    const PRICE_DOWN_PERCENT_750 = 750;
    const PRICE_DOWN_PERCENT_1000 = 1000;
    const PRICE_DOWN_PERCENT_1500 = 1500;
    const STRATEGY_MARGIN = 'MARGIN';
    const STRATEGY_HOLD = 'HOLD';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPotentialUpTimeoutAllowableValues()
    {
        return [
            self::POTENTIAL_UP_TIMEOUT_1800,
            self::POTENTIAL_UP_TIMEOUT_3600,
            self::POTENTIAL_UP_TIMEOUT_5400,
            self::POTENTIAL_UP_TIMEOUT_7200,
            self::POTENTIAL_UP_TIMEOUT_14400,
            self::POTENTIAL_UP_TIMEOUT_28800,
            self::POTENTIAL_UP_TIMEOUT_57600,
            self::POTENTIAL_UP_TIMEOUT_86400,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPriceDownPercentAllowableValues()
    {
        return [
            self::PRICE_DOWN_PERCENT_25,
            self::PRICE_DOWN_PERCENT_50,
            self::PRICE_DOWN_PERCENT_100,
            self::PRICE_DOWN_PERCENT_150,
            self::PRICE_DOWN_PERCENT_200,
            self::PRICE_DOWN_PERCENT_250,
            self::PRICE_DOWN_PERCENT_500,
            self::PRICE_DOWN_PERCENT_750,
            self::PRICE_DOWN_PERCENT_1000,
            self::PRICE_DOWN_PERCENT_1500,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStrategyAllowableValues()
    {
        return [
            self::STRATEGY_MARGIN,
            self::STRATEGY_HOLD,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['potential_up_timeout'] = isset($data['potential_up_timeout']) ? $data['potential_up_timeout'] : null;
        $this->container['price_down_percent'] = isset($data['price_down_percent']) ? $data['price_down_percent'] : null;
        $this->container['price_up_percent'] = isset($data['price_up_percent']) ? $data['price_up_percent'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['potential_up_timeout'] === null) {
            $invalid_properties[] = "'potential_up_timeout' can't be null";
        }
        $allowed_values = ["1800", "3600", "5400", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['potential_up_timeout'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'potential_up_timeout', must be one of '1800', '3600', '5400', '7200', '14400', '28800', '57600', '86400'.";
        }

        if ($this->container['price_down_percent'] === null) {
            $invalid_properties[] = "'price_down_percent' can't be null";
        }
        $allowed_values = ["25", "50", "100", "150", "200", "250", "500", "750", "1000", "1500"];
        if (!in_array($this->container['price_down_percent'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'price_down_percent', must be one of '25', '50', '100', '150', '200', '250', '500', '750', '1000', '1500'.";
        }

        if ($this->container['strategy'] === null) {
            $invalid_properties[] = "'strategy' can't be null";
        }
        $allowed_values = ["MARGIN", "HOLD"];
        if (!in_array($this->container['strategy'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'strategy', must be one of 'MARGIN', 'HOLD'.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['potential_up_timeout'] === null) {
            return false;
        }
        $allowed_values = ["1800", "3600", "5400", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['potential_up_timeout'], $allowed_values)) {
            return false;
        }
        if ($this->container['price_down_percent'] === null) {
            return false;
        }
        $allowed_values = ["25", "50", "100", "150", "200", "250", "500", "750", "1000", "1500"];
        if (!in_array($this->container['price_down_percent'], $allowed_values)) {
            return false;
        }
        if ($this->container['strategy'] === null) {
            return false;
        }
        $allowed_values = ["MARGIN", "HOLD"];
        if (!in_array($this->container['strategy'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets potential_up_timeout
     * @return int
     */
    public function getPotentialUpTimeout()
    {
        return $this->container['potential_up_timeout'];
    }

    /**
     * Sets potential_up_timeout
     * @param int $potential_up_timeout
     * @return $this
     */
    public function setPotentialUpTimeout($potential_up_timeout)
    {
        $allowed_values = array('1800', '3600', '5400', '7200', '14400', '28800', '57600', '86400');
        if ((!in_array($potential_up_timeout, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'potential_up_timeout', must be one of '1800', '3600', '5400', '7200', '14400', '28800', '57600', '86400'");
        }
        $this->container['potential_up_timeout'] = $potential_up_timeout;

        return $this;
    }

    /**
     * Gets price_down_percent
     * @return int
     */
    public function getPriceDownPercent()
    {
        return $this->container['price_down_percent'];
    }

    /**
     * Sets price_down_percent
     * @param int $price_down_percent
     * @return $this
     */
    public function setPriceDownPercent($price_down_percent)
    {
        $allowed_values = array('25', '50', '100', '150', '200', '250', '500', '750', '1000', '1500');
        if ((!in_array($price_down_percent, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'price_down_percent', must be one of '25', '50', '100', '150', '200', '250', '500', '750', '1000', '1500'");
        }
        $this->container['price_down_percent'] = $price_down_percent;

        return $this;
    }

    /**
     * Gets price_up_percent
     * @return int
     */
    public function getPriceUpPercent()
    {
        return $this->container['price_up_percent'];
    }

    /**
     * Sets price_up_percent
     * @param int $price_up_percent
     * @return $this
     */
    public function setPriceUpPercent($price_up_percent)
    {
        $this->container['price_up_percent'] = $price_up_percent;

        return $this;
    }

    /**
     * Gets strategy
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     * @param string $strategy
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $allowed_values = array('MARGIN', 'HOLD');
        if ((!in_array($strategy, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'strategy', must be one of 'MARGIN', 'HOLD'");
        }
        $this->container['strategy'] = $strategy;

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



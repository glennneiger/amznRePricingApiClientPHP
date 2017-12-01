<?php
/**
 * RepricingSettingsDTO
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
 * RepricingSettingsDTO Class Doc Comment
 *
 * @category    Class
 * @description The global settings. The global settings contains flags for dis or enabling up and downloads or the number of Amazon MWS API request performed by esagu. The name must be unique.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingSettingsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingSettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazon_report_request_max_age' => 'int',
        'buy_box_fallback_to_optimization' => 'bool',
        'can_not_optimize_rule' => 'string',
        'download_enabled' => 'bool',
        'fba_quantity_update_enabled' => 'bool',
        'fba_quantity_update_max_age' => 'int',
        'maximum_concurrent_uploads' => 'int',
        'maximum_items_per_upload' => 'int',
        'maximum_uploads_per_hour' => 'int',
        'show_expert_settings' => 'bool',
        'stock_update_max_age' => 'int',
        'time_zone' => 'string',
        'trigger_enabled' => 'bool',
        'trigger_limit' => 'int',
        'upload_enabled' => 'bool'
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
        'amazon_report_request_max_age' => 'amazonReportRequestMaxAge',
        'buy_box_fallback_to_optimization' => 'buyBoxFallbackToOptimization',
        'can_not_optimize_rule' => 'canNotOptimizeRule',
        'download_enabled' => 'downloadEnabled',
        'fba_quantity_update_enabled' => 'fbaQuantityUpdateEnabled',
        'fba_quantity_update_max_age' => 'fbaQuantityUpdateMaxAge',
        'maximum_concurrent_uploads' => 'maximumConcurrentUploads',
        'maximum_items_per_upload' => 'maximumItemsPerUpload',
        'maximum_uploads_per_hour' => 'maximumUploadsPerHour',
        'show_expert_settings' => 'showExpertSettings',
        'stock_update_max_age' => 'stockUpdateMaxAge',
        'time_zone' => 'timeZone',
        'trigger_enabled' => 'triggerEnabled',
        'trigger_limit' => 'triggerLimit',
        'upload_enabled' => 'uploadEnabled'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amazon_report_request_max_age' => 'setAmazonReportRequestMaxAge',
        'buy_box_fallback_to_optimization' => 'setBuyBoxFallbackToOptimization',
        'can_not_optimize_rule' => 'setCanNotOptimizeRule',
        'download_enabled' => 'setDownloadEnabled',
        'fba_quantity_update_enabled' => 'setFbaQuantityUpdateEnabled',
        'fba_quantity_update_max_age' => 'setFbaQuantityUpdateMaxAge',
        'maximum_concurrent_uploads' => 'setMaximumConcurrentUploads',
        'maximum_items_per_upload' => 'setMaximumItemsPerUpload',
        'maximum_uploads_per_hour' => 'setMaximumUploadsPerHour',
        'show_expert_settings' => 'setShowExpertSettings',
        'stock_update_max_age' => 'setStockUpdateMaxAge',
        'time_zone' => 'setTimeZone',
        'trigger_enabled' => 'setTriggerEnabled',
        'trigger_limit' => 'setTriggerLimit',
        'upload_enabled' => 'setUploadEnabled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amazon_report_request_max_age' => 'getAmazonReportRequestMaxAge',
        'buy_box_fallback_to_optimization' => 'getBuyBoxFallbackToOptimization',
        'can_not_optimize_rule' => 'getCanNotOptimizeRule',
        'download_enabled' => 'getDownloadEnabled',
        'fba_quantity_update_enabled' => 'getFbaQuantityUpdateEnabled',
        'fba_quantity_update_max_age' => 'getFbaQuantityUpdateMaxAge',
        'maximum_concurrent_uploads' => 'getMaximumConcurrentUploads',
        'maximum_items_per_upload' => 'getMaximumItemsPerUpload',
        'maximum_uploads_per_hour' => 'getMaximumUploadsPerHour',
        'show_expert_settings' => 'getShowExpertSettings',
        'stock_update_max_age' => 'getStockUpdateMaxAge',
        'time_zone' => 'getTimeZone',
        'trigger_enabled' => 'getTriggerEnabled',
        'trigger_limit' => 'getTriggerLimit',
        'upload_enabled' => 'getUploadEnabled'
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

    const AMAZON_REPORT_REQUEST_MAX_AGE_900 = 900;
    const AMAZON_REPORT_REQUEST_MAX_AGE_1800 = 1800;
    const AMAZON_REPORT_REQUEST_MAX_AGE_2700 = 2700;
    const AMAZON_REPORT_REQUEST_MAX_AGE_3600 = 3600;
    const AMAZON_REPORT_REQUEST_MAX_AGE_7200 = 7200;
    const AMAZON_REPORT_REQUEST_MAX_AGE_14400 = 14400;
    const AMAZON_REPORT_REQUEST_MAX_AGE_28800 = 28800;
    const AMAZON_REPORT_REQUEST_MAX_AGE_57600 = 57600;
    const AMAZON_REPORT_REQUEST_MAX_AGE_86400 = 86400;
    const CAN_NOT_OPTIMIZE_RULE_MIN_PRICE = 'MIN_PRICE';
    const CAN_NOT_OPTIMIZE_RULE_MAX_PRICE = 'MAX_PRICE';
    const CAN_NOT_OPTIMIZE_RULE_FIXED_PRICE = 'FIXED_PRICE';
    const CAN_NOT_OPTIMIZE_RULE_NO_COMPETITOR_FOUND_PRICE = 'NO_COMPETITOR_FOUND_PRICE';
    const FBA_QUANTITY_UPDATE_MAX_AGE_3600 = 3600;
    const FBA_QUANTITY_UPDATE_MAX_AGE_7200 = 7200;
    const FBA_QUANTITY_UPDATE_MAX_AGE_14400 = 14400;
    const FBA_QUANTITY_UPDATE_MAX_AGE_28800 = 28800;
    const FBA_QUANTITY_UPDATE_MAX_AGE_57600 = 57600;
    const FBA_QUANTITY_UPDATE_MAX_AGE_86400 = 86400;
    const STOCK_UPDATE_MAX_AGE_900 = 900;
    const STOCK_UPDATE_MAX_AGE_1200 = 1200;
    const STOCK_UPDATE_MAX_AGE_1800 = 1800;
    const STOCK_UPDATE_MAX_AGE_2700 = 2700;
    const STOCK_UPDATE_MAX_AGE_3600 = 3600;
    const STOCK_UPDATE_MAX_AGE_5400 = 5400;
    const STOCK_UPDATE_MAX_AGE_7200 = 7200;
    const STOCK_UPDATE_MAX_AGE_14400 = 14400;
    const STOCK_UPDATE_MAX_AGE_28800 = 28800;
    const STOCK_UPDATE_MAX_AGE_57600 = 57600;
    const STOCK_UPDATE_MAX_AGE_86400 = 86400;
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAmazonReportRequestMaxAgeAllowableValues()
    {
        return [
            self::AMAZON_REPORT_REQUEST_MAX_AGE_900,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_1800,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_2700,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_3600,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_7200,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_14400,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_28800,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_57600,
            self::AMAZON_REPORT_REQUEST_MAX_AGE_86400,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCanNotOptimizeRuleAllowableValues()
    {
        return [
            self::CAN_NOT_OPTIMIZE_RULE_MIN_PRICE,
            self::CAN_NOT_OPTIMIZE_RULE_MAX_PRICE,
            self::CAN_NOT_OPTIMIZE_RULE_FIXED_PRICE,
            self::CAN_NOT_OPTIMIZE_RULE_NO_COMPETITOR_FOUND_PRICE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFbaQuantityUpdateMaxAgeAllowableValues()
    {
        return [
            self::FBA_QUANTITY_UPDATE_MAX_AGE_3600,
            self::FBA_QUANTITY_UPDATE_MAX_AGE_7200,
            self::FBA_QUANTITY_UPDATE_MAX_AGE_14400,
            self::FBA_QUANTITY_UPDATE_MAX_AGE_28800,
            self::FBA_QUANTITY_UPDATE_MAX_AGE_57600,
            self::FBA_QUANTITY_UPDATE_MAX_AGE_86400,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStockUpdateMaxAgeAllowableValues()
    {
        return [
            self::STOCK_UPDATE_MAX_AGE_900,
            self::STOCK_UPDATE_MAX_AGE_1200,
            self::STOCK_UPDATE_MAX_AGE_1800,
            self::STOCK_UPDATE_MAX_AGE_2700,
            self::STOCK_UPDATE_MAX_AGE_3600,
            self::STOCK_UPDATE_MAX_AGE_5400,
            self::STOCK_UPDATE_MAX_AGE_7200,
            self::STOCK_UPDATE_MAX_AGE_14400,
            self::STOCK_UPDATE_MAX_AGE_28800,
            self::STOCK_UPDATE_MAX_AGE_57600,
            self::STOCK_UPDATE_MAX_AGE_86400,
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
        $this->container['amazon_report_request_max_age'] = isset($data['amazon_report_request_max_age']) ? $data['amazon_report_request_max_age'] : null;
        $this->container['buy_box_fallback_to_optimization'] = isset($data['buy_box_fallback_to_optimization']) ? $data['buy_box_fallback_to_optimization'] : null;
        $this->container['can_not_optimize_rule'] = isset($data['can_not_optimize_rule']) ? $data['can_not_optimize_rule'] : null;
        $this->container['download_enabled'] = isset($data['download_enabled']) ? $data['download_enabled'] : null;
        $this->container['fba_quantity_update_enabled'] = isset($data['fba_quantity_update_enabled']) ? $data['fba_quantity_update_enabled'] : null;
        $this->container['fba_quantity_update_max_age'] = isset($data['fba_quantity_update_max_age']) ? $data['fba_quantity_update_max_age'] : null;
        $this->container['maximum_concurrent_uploads'] = isset($data['maximum_concurrent_uploads']) ? $data['maximum_concurrent_uploads'] : null;
        $this->container['maximum_items_per_upload'] = isset($data['maximum_items_per_upload']) ? $data['maximum_items_per_upload'] : null;
        $this->container['maximum_uploads_per_hour'] = isset($data['maximum_uploads_per_hour']) ? $data['maximum_uploads_per_hour'] : null;
        $this->container['show_expert_settings'] = isset($data['show_expert_settings']) ? $data['show_expert_settings'] : null;
        $this->container['stock_update_max_age'] = isset($data['stock_update_max_age']) ? $data['stock_update_max_age'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['trigger_enabled'] = isset($data['trigger_enabled']) ? $data['trigger_enabled'] : null;
        $this->container['trigger_limit'] = isset($data['trigger_limit']) ? $data['trigger_limit'] : null;
        $this->container['upload_enabled'] = isset($data['upload_enabled']) ? $data['upload_enabled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["900", "1800", "2700", "3600", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['amazon_report_request_max_age'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'amazon_report_request_max_age', must be one of '900', '1800', '2700', '3600', '7200', '14400', '28800', '57600', '86400'.";
        }

        $allowed_values = ["MIN_PRICE", "MAX_PRICE", "FIXED_PRICE", "NO_COMPETITOR_FOUND_PRICE"];
        if (!in_array($this->container['can_not_optimize_rule'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'can_not_optimize_rule', must be one of 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'NO_COMPETITOR_FOUND_PRICE'.";
        }

        $allowed_values = ["3600", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['fba_quantity_update_max_age'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fba_quantity_update_max_age', must be one of '3600', '7200', '14400', '28800', '57600', '86400'.";
        }

        if (!is_null($this->container['maximum_concurrent_uploads']) && ($this->container['maximum_concurrent_uploads'] > 15)) {
            $invalid_properties[] = "invalid value for 'maximum_concurrent_uploads', must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['maximum_concurrent_uploads']) && ($this->container['maximum_concurrent_uploads'] < 1)) {
            $invalid_properties[] = "invalid value for 'maximum_concurrent_uploads', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['maximum_items_per_upload']) && ($this->container['maximum_items_per_upload'] > 30000)) {
            $invalid_properties[] = "invalid value for 'maximum_items_per_upload', must be smaller than or equal to 30000.";
        }

        if (!is_null($this->container['maximum_items_per_upload']) && ($this->container['maximum_items_per_upload'] < 1)) {
            $invalid_properties[] = "invalid value for 'maximum_items_per_upload', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['maximum_uploads_per_hour']) && ($this->container['maximum_uploads_per_hour'] > 30)) {
            $invalid_properties[] = "invalid value for 'maximum_uploads_per_hour', must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['maximum_uploads_per_hour']) && ($this->container['maximum_uploads_per_hour'] < 1)) {
            $invalid_properties[] = "invalid value for 'maximum_uploads_per_hour', must be bigger than or equal to 1.";
        }

        $allowed_values = ["900", "1200", "1800", "2700", "3600", "5400", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['stock_update_max_age'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'stock_update_max_age', must be one of '900', '1200', '1800', '2700', '3600', '5400', '7200', '14400', '28800', '57600', '86400'.";
        }

        if (!is_null($this->container['trigger_limit']) && ($this->container['trigger_limit'] > 30000)) {
            $invalid_properties[] = "invalid value for 'trigger_limit', must be smaller than or equal to 30000.";
        }

        if (!is_null($this->container['trigger_limit']) && ($this->container['trigger_limit'] < 1000)) {
            $invalid_properties[] = "invalid value for 'trigger_limit', must be bigger than or equal to 1000.";
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

        $allowed_values = ["900", "1800", "2700", "3600", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['amazon_report_request_max_age'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["MIN_PRICE", "MAX_PRICE", "FIXED_PRICE", "NO_COMPETITOR_FOUND_PRICE"];
        if (!in_array($this->container['can_not_optimize_rule'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["3600", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['fba_quantity_update_max_age'], $allowed_values)) {
            return false;
        }
        if ($this->container['maximum_concurrent_uploads'] > 15) {
            return false;
        }
        if ($this->container['maximum_concurrent_uploads'] < 1) {
            return false;
        }
        if ($this->container['maximum_items_per_upload'] > 30000) {
            return false;
        }
        if ($this->container['maximum_items_per_upload'] < 1) {
            return false;
        }
        if ($this->container['maximum_uploads_per_hour'] > 30) {
            return false;
        }
        if ($this->container['maximum_uploads_per_hour'] < 1) {
            return false;
        }
        $allowed_values = ["900", "1200", "1800", "2700", "3600", "5400", "7200", "14400", "28800", "57600", "86400"];
        if (!in_array($this->container['stock_update_max_age'], $allowed_values)) {
            return false;
        }
        if ($this->container['trigger_limit'] > 30000) {
            return false;
        }
        if ($this->container['trigger_limit'] < 1000) {
            return false;
        }
        return true;
    }


    /**
     * Gets amazon_report_request_max_age
     * @return int
     */
    public function getAmazonReportRequestMaxAge()
    {
        return $this->container['amazon_report_request_max_age'];
    }

    /**
     * Sets amazon_report_request_max_age
     * @param int $amazon_report_request_max_age
     * @return $this
     */
    public function setAmazonReportRequestMaxAge($amazon_report_request_max_age)
    {
        $allowed_values = array('900', '1800', '2700', '3600', '7200', '14400', '28800', '57600', '86400');
        if (!is_null($amazon_report_request_max_age) && (!in_array($amazon_report_request_max_age, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'amazon_report_request_max_age', must be one of '900', '1800', '2700', '3600', '7200', '14400', '28800', '57600', '86400'");
        }
        $this->container['amazon_report_request_max_age'] = $amazon_report_request_max_age;

        return $this;
    }

    /**
     * Gets buy_box_fallback_to_optimization
     * @return bool
     */
    public function getBuyBoxFallbackToOptimization()
    {
        return $this->container['buy_box_fallback_to_optimization'];
    }

    /**
     * Sets buy_box_fallback_to_optimization
     * @param bool $buy_box_fallback_to_optimization
     * @return $this
     */
    public function setBuyBoxFallbackToOptimization($buy_box_fallback_to_optimization)
    {
        $this->container['buy_box_fallback_to_optimization'] = $buy_box_fallback_to_optimization;

        return $this;
    }

    /**
     * Gets can_not_optimize_rule
     * @return string
     */
    public function getCanNotOptimizeRule()
    {
        return $this->container['can_not_optimize_rule'];
    }

    /**
     * Sets can_not_optimize_rule
     * @param string $can_not_optimize_rule
     * @return $this
     */
    public function setCanNotOptimizeRule($can_not_optimize_rule)
    {
        $allowed_values = array('MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'NO_COMPETITOR_FOUND_PRICE');
        if (!is_null($can_not_optimize_rule) && (!in_array($can_not_optimize_rule, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'can_not_optimize_rule', must be one of 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'NO_COMPETITOR_FOUND_PRICE'");
        }
        $this->container['can_not_optimize_rule'] = $can_not_optimize_rule;

        return $this;
    }

    /**
     * Gets download_enabled
     * @return bool
     */
    public function getDownloadEnabled()
    {
        return $this->container['download_enabled'];
    }

    /**
     * Sets download_enabled
     * @param bool $download_enabled
     * @return $this
     */
    public function setDownloadEnabled($download_enabled)
    {
        $this->container['download_enabled'] = $download_enabled;

        return $this;
    }

    /**
     * Gets fba_quantity_update_enabled
     * @return bool
     */
    public function getFbaQuantityUpdateEnabled()
    {
        return $this->container['fba_quantity_update_enabled'];
    }

    /**
     * Sets fba_quantity_update_enabled
     * @param bool $fba_quantity_update_enabled
     * @return $this
     */
    public function setFbaQuantityUpdateEnabled($fba_quantity_update_enabled)
    {
        $this->container['fba_quantity_update_enabled'] = $fba_quantity_update_enabled;

        return $this;
    }

    /**
     * Gets fba_quantity_update_max_age
     * @return int
     */
    public function getFbaQuantityUpdateMaxAge()
    {
        return $this->container['fba_quantity_update_max_age'];
    }

    /**
     * Sets fba_quantity_update_max_age
     * @param int $fba_quantity_update_max_age
     * @return $this
     */
    public function setFbaQuantityUpdateMaxAge($fba_quantity_update_max_age)
    {
        $allowed_values = array('3600', '7200', '14400', '28800', '57600', '86400');
        if (!is_null($fba_quantity_update_max_age) && (!in_array($fba_quantity_update_max_age, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'fba_quantity_update_max_age', must be one of '3600', '7200', '14400', '28800', '57600', '86400'");
        }
        $this->container['fba_quantity_update_max_age'] = $fba_quantity_update_max_age;

        return $this;
    }

    /**
     * Gets maximum_concurrent_uploads
     * @return int
     */
    public function getMaximumConcurrentUploads()
    {
        return $this->container['maximum_concurrent_uploads'];
    }

    /**
     * Sets maximum_concurrent_uploads
     * @param int $maximum_concurrent_uploads
     * @return $this
     */
    public function setMaximumConcurrentUploads($maximum_concurrent_uploads)
    {

        if (!is_null($maximum_concurrent_uploads) && ($maximum_concurrent_uploads > 15)) {
            throw new \InvalidArgumentException('invalid value for $maximum_concurrent_uploads when calling RepricingSettingsDTO., must be smaller than or equal to 15.');
        }
        if (!is_null($maximum_concurrent_uploads) && ($maximum_concurrent_uploads < 1)) {
            throw new \InvalidArgumentException('invalid value for $maximum_concurrent_uploads when calling RepricingSettingsDTO., must be bigger than or equal to 1.');
        }

        $this->container['maximum_concurrent_uploads'] = $maximum_concurrent_uploads;

        return $this;
    }

    /**
     * Gets maximum_items_per_upload
     * @return int
     */
    public function getMaximumItemsPerUpload()
    {
        return $this->container['maximum_items_per_upload'];
    }

    /**
     * Sets maximum_items_per_upload
     * @param int $maximum_items_per_upload
     * @return $this
     */
    public function setMaximumItemsPerUpload($maximum_items_per_upload)
    {

        if (!is_null($maximum_items_per_upload) && ($maximum_items_per_upload > 30000)) {
            throw new \InvalidArgumentException('invalid value for $maximum_items_per_upload when calling RepricingSettingsDTO., must be smaller than or equal to 30000.');
        }
        if (!is_null($maximum_items_per_upload) && ($maximum_items_per_upload < 1)) {
            throw new \InvalidArgumentException('invalid value for $maximum_items_per_upload when calling RepricingSettingsDTO., must be bigger than or equal to 1.');
        }

        $this->container['maximum_items_per_upload'] = $maximum_items_per_upload;

        return $this;
    }

    /**
     * Gets maximum_uploads_per_hour
     * @return int
     */
    public function getMaximumUploadsPerHour()
    {
        return $this->container['maximum_uploads_per_hour'];
    }

    /**
     * Sets maximum_uploads_per_hour
     * @param int $maximum_uploads_per_hour
     * @return $this
     */
    public function setMaximumUploadsPerHour($maximum_uploads_per_hour)
    {

        if (!is_null($maximum_uploads_per_hour) && ($maximum_uploads_per_hour > 30)) {
            throw new \InvalidArgumentException('invalid value for $maximum_uploads_per_hour when calling RepricingSettingsDTO., must be smaller than or equal to 30.');
        }
        if (!is_null($maximum_uploads_per_hour) && ($maximum_uploads_per_hour < 1)) {
            throw new \InvalidArgumentException('invalid value for $maximum_uploads_per_hour when calling RepricingSettingsDTO., must be bigger than or equal to 1.');
        }

        $this->container['maximum_uploads_per_hour'] = $maximum_uploads_per_hour;

        return $this;
    }

    /**
     * Gets show_expert_settings
     * @return bool
     */
    public function getShowExpertSettings()
    {
        return $this->container['show_expert_settings'];
    }

    /**
     * Sets show_expert_settings
     * @param bool $show_expert_settings
     * @return $this
     */
    public function setShowExpertSettings($show_expert_settings)
    {
        $this->container['show_expert_settings'] = $show_expert_settings;

        return $this;
    }

    /**
     * Gets stock_update_max_age
     * @return int
     */
    public function getStockUpdateMaxAge()
    {
        return $this->container['stock_update_max_age'];
    }

    /**
     * Sets stock_update_max_age
     * @param int $stock_update_max_age
     * @return $this
     */
    public function setStockUpdateMaxAge($stock_update_max_age)
    {
        $allowed_values = array('900', '1200', '1800', '2700', '3600', '5400', '7200', '14400', '28800', '57600', '86400');
        if (!is_null($stock_update_max_age) && (!in_array($stock_update_max_age, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'stock_update_max_age', must be one of '900', '1200', '1800', '2700', '3600', '5400', '7200', '14400', '28800', '57600', '86400'");
        }
        $this->container['stock_update_max_age'] = $stock_update_max_age;

        return $this;
    }

    /**
     * Gets time_zone
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     * @param string $time_zone
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets trigger_enabled
     * @return bool
     */
    public function getTriggerEnabled()
    {
        return $this->container['trigger_enabled'];
    }

    /**
     * Sets trigger_enabled
     * @param bool $trigger_enabled
     * @return $this
     */
    public function setTriggerEnabled($trigger_enabled)
    {
        $this->container['trigger_enabled'] = $trigger_enabled;

        return $this;
    }

    /**
     * Gets trigger_limit
     * @return int
     */
    public function getTriggerLimit()
    {
        return $this->container['trigger_limit'];
    }

    /**
     * Sets trigger_limit
     * @param int $trigger_limit
     * @return $this
     */
    public function setTriggerLimit($trigger_limit)
    {

        if (!is_null($trigger_limit) && ($trigger_limit > 30000)) {
            throw new \InvalidArgumentException('invalid value for $trigger_limit when calling RepricingSettingsDTO., must be smaller than or equal to 30000.');
        }
        if (!is_null($trigger_limit) && ($trigger_limit < 1000)) {
            throw new \InvalidArgumentException('invalid value for $trigger_limit when calling RepricingSettingsDTO., must be bigger than or equal to 1000.');
        }

        $this->container['trigger_limit'] = $trigger_limit;

        return $this;
    }

    /**
     * Gets upload_enabled
     * @return bool
     */
    public function getUploadEnabled()
    {
        return $this->container['upload_enabled'];
    }

    /**
     * Sets upload_enabled
     * @param bool $upload_enabled
     * @return $this
     */
    public function setUploadEnabled($upload_enabled)
    {
        $this->container['upload_enabled'] = $upload_enabled;

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



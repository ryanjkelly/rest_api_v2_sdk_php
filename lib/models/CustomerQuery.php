<?php
/**
 * CustomerQuery
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * CustomerQuery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_city' => 'string',
        'billing_company' => 'string',
        'billing_country_code' => 'string',
        'billing_day_phone' => 'string',
        'billing_evening_phone' => 'string',
        'billing_first_name' => 'string',
        'billing_last_name' => 'string',
        'billing_postal_code' => 'string',
        'billing_state' => 'string',
        'email' => 'string',
        'last_modified_dts_end' => 'string',
        'last_modified_dts_start' => 'string',
        'pricing_tier_name' => 'string',
        'pricing_tier_oid' => 'int',
        'qb_class' => 'string',
        'quickbooks_code' => 'string',
        'shipping_city' => 'string',
        'shipping_company' => 'string',
        'shipping_country_code' => 'string',
        'shipping_day_phone' => 'string',
        'shipping_evening_phone' => 'string',
        'shipping_first_name' => 'string',
        'shipping_last_name' => 'string',
        'shipping_postal_code' => 'string',
        'shipping_state' => 'string',
        'signup_dts_end' => 'string',
        'signup_dts_start' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_city' => null,
        'billing_company' => null,
        'billing_country_code' => null,
        'billing_day_phone' => null,
        'billing_evening_phone' => null,
        'billing_first_name' => null,
        'billing_last_name' => null,
        'billing_postal_code' => null,
        'billing_state' => null,
        'email' => null,
        'last_modified_dts_end' => 'dateTime',
        'last_modified_dts_start' => 'dateTime',
        'pricing_tier_name' => null,
        'pricing_tier_oid' => 'int32',
        'qb_class' => null,
        'quickbooks_code' => null,
        'shipping_city' => null,
        'shipping_company' => null,
        'shipping_country_code' => null,
        'shipping_day_phone' => null,
        'shipping_evening_phone' => null,
        'shipping_first_name' => null,
        'shipping_last_name' => null,
        'shipping_postal_code' => null,
        'shipping_state' => null,
        'signup_dts_end' => 'dateTime',
        'signup_dts_start' => 'dateTime'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_city' => 'billing_city',
        'billing_company' => 'billing_company',
        'billing_country_code' => 'billing_country_code',
        'billing_day_phone' => 'billing_day_phone',
        'billing_evening_phone' => 'billing_evening_phone',
        'billing_first_name' => 'billing_first_name',
        'billing_last_name' => 'billing_last_name',
        'billing_postal_code' => 'billing_postal_code',
        'billing_state' => 'billing_state',
        'email' => 'email',
        'last_modified_dts_end' => 'last_modified_dts_end',
        'last_modified_dts_start' => 'last_modified_dts_start',
        'pricing_tier_name' => 'pricing_tier_name',
        'pricing_tier_oid' => 'pricing_tier_oid',
        'qb_class' => 'qb_class',
        'quickbooks_code' => 'quickbooks_code',
        'shipping_city' => 'shipping_city',
        'shipping_company' => 'shipping_company',
        'shipping_country_code' => 'shipping_country_code',
        'shipping_day_phone' => 'shipping_day_phone',
        'shipping_evening_phone' => 'shipping_evening_phone',
        'shipping_first_name' => 'shipping_first_name',
        'shipping_last_name' => 'shipping_last_name',
        'shipping_postal_code' => 'shipping_postal_code',
        'shipping_state' => 'shipping_state',
        'signup_dts_end' => 'signup_dts_end',
        'signup_dts_start' => 'signup_dts_start'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_city' => 'setBillingCity',
        'billing_company' => 'setBillingCompany',
        'billing_country_code' => 'setBillingCountryCode',
        'billing_day_phone' => 'setBillingDayPhone',
        'billing_evening_phone' => 'setBillingEveningPhone',
        'billing_first_name' => 'setBillingFirstName',
        'billing_last_name' => 'setBillingLastName',
        'billing_postal_code' => 'setBillingPostalCode',
        'billing_state' => 'setBillingState',
        'email' => 'setEmail',
        'last_modified_dts_end' => 'setLastModifiedDtsEnd',
        'last_modified_dts_start' => 'setLastModifiedDtsStart',
        'pricing_tier_name' => 'setPricingTierName',
        'pricing_tier_oid' => 'setPricingTierOid',
        'qb_class' => 'setQbClass',
        'quickbooks_code' => 'setQuickbooksCode',
        'shipping_city' => 'setShippingCity',
        'shipping_company' => 'setShippingCompany',
        'shipping_country_code' => 'setShippingCountryCode',
        'shipping_day_phone' => 'setShippingDayPhone',
        'shipping_evening_phone' => 'setShippingEveningPhone',
        'shipping_first_name' => 'setShippingFirstName',
        'shipping_last_name' => 'setShippingLastName',
        'shipping_postal_code' => 'setShippingPostalCode',
        'shipping_state' => 'setShippingState',
        'signup_dts_end' => 'setSignupDtsEnd',
        'signup_dts_start' => 'setSignupDtsStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_city' => 'getBillingCity',
        'billing_company' => 'getBillingCompany',
        'billing_country_code' => 'getBillingCountryCode',
        'billing_day_phone' => 'getBillingDayPhone',
        'billing_evening_phone' => 'getBillingEveningPhone',
        'billing_first_name' => 'getBillingFirstName',
        'billing_last_name' => 'getBillingLastName',
        'billing_postal_code' => 'getBillingPostalCode',
        'billing_state' => 'getBillingState',
        'email' => 'getEmail',
        'last_modified_dts_end' => 'getLastModifiedDtsEnd',
        'last_modified_dts_start' => 'getLastModifiedDtsStart',
        'pricing_tier_name' => 'getPricingTierName',
        'pricing_tier_oid' => 'getPricingTierOid',
        'qb_class' => 'getQbClass',
        'quickbooks_code' => 'getQuickbooksCode',
        'shipping_city' => 'getShippingCity',
        'shipping_company' => 'getShippingCompany',
        'shipping_country_code' => 'getShippingCountryCode',
        'shipping_day_phone' => 'getShippingDayPhone',
        'shipping_evening_phone' => 'getShippingEveningPhone',
        'shipping_first_name' => 'getShippingFirstName',
        'shipping_last_name' => 'getShippingLastName',
        'shipping_postal_code' => 'getShippingPostalCode',
        'shipping_state' => 'getShippingState',
        'signup_dts_end' => 'getSignupDtsEnd',
        'signup_dts_start' => 'getSignupDtsStart'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['billing_city'] = isset($data['billing_city']) ? $data['billing_city'] : null;
        $this->container['billing_company'] = isset($data['billing_company']) ? $data['billing_company'] : null;
        $this->container['billing_country_code'] = isset($data['billing_country_code']) ? $data['billing_country_code'] : null;
        $this->container['billing_day_phone'] = isset($data['billing_day_phone']) ? $data['billing_day_phone'] : null;
        $this->container['billing_evening_phone'] = isset($data['billing_evening_phone']) ? $data['billing_evening_phone'] : null;
        $this->container['billing_first_name'] = isset($data['billing_first_name']) ? $data['billing_first_name'] : null;
        $this->container['billing_last_name'] = isset($data['billing_last_name']) ? $data['billing_last_name'] : null;
        $this->container['billing_postal_code'] = isset($data['billing_postal_code']) ? $data['billing_postal_code'] : null;
        $this->container['billing_state'] = isset($data['billing_state']) ? $data['billing_state'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['last_modified_dts_end'] = isset($data['last_modified_dts_end']) ? $data['last_modified_dts_end'] : null;
        $this->container['last_modified_dts_start'] = isset($data['last_modified_dts_start']) ? $data['last_modified_dts_start'] : null;
        $this->container['pricing_tier_name'] = isset($data['pricing_tier_name']) ? $data['pricing_tier_name'] : null;
        $this->container['pricing_tier_oid'] = isset($data['pricing_tier_oid']) ? $data['pricing_tier_oid'] : null;
        $this->container['qb_class'] = isset($data['qb_class']) ? $data['qb_class'] : null;
        $this->container['quickbooks_code'] = isset($data['quickbooks_code']) ? $data['quickbooks_code'] : null;
        $this->container['shipping_city'] = isset($data['shipping_city']) ? $data['shipping_city'] : null;
        $this->container['shipping_company'] = isset($data['shipping_company']) ? $data['shipping_company'] : null;
        $this->container['shipping_country_code'] = isset($data['shipping_country_code']) ? $data['shipping_country_code'] : null;
        $this->container['shipping_day_phone'] = isset($data['shipping_day_phone']) ? $data['shipping_day_phone'] : null;
        $this->container['shipping_evening_phone'] = isset($data['shipping_evening_phone']) ? $data['shipping_evening_phone'] : null;
        $this->container['shipping_first_name'] = isset($data['shipping_first_name']) ? $data['shipping_first_name'] : null;
        $this->container['shipping_last_name'] = isset($data['shipping_last_name']) ? $data['shipping_last_name'] : null;
        $this->container['shipping_postal_code'] = isset($data['shipping_postal_code']) ? $data['shipping_postal_code'] : null;
        $this->container['shipping_state'] = isset($data['shipping_state']) ? $data['shipping_state'] : null;
        $this->container['signup_dts_end'] = isset($data['signup_dts_end']) ? $data['signup_dts_end'] : null;
        $this->container['signup_dts_start'] = isset($data['signup_dts_start']) ? $data['signup_dts_start'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['billing_city']) && (strlen($this->container['billing_city']) > 32)) {
            $invalidProperties[] = "invalid value for 'billing_city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['billing_company']) && (strlen($this->container['billing_company']) > 50)) {
            $invalidProperties[] = "invalid value for 'billing_company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['billing_country_code']) && (strlen($this->container['billing_country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['billing_day_phone']) && (strlen($this->container['billing_day_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'billing_day_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['billing_evening_phone']) && (strlen($this->container['billing_evening_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'billing_evening_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['billing_first_name']) && (strlen($this->container['billing_first_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'billing_first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['billing_last_name']) && (strlen($this->container['billing_last_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'billing_last_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['billing_postal_code']) && (strlen($this->container['billing_postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'billing_postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['billing_state']) && (strlen($this->container['billing_state']) > 32)) {
            $invalidProperties[] = "invalid value for 'billing_state', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['pricing_tier_name']) && (strlen($this->container['pricing_tier_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'pricing_tier_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['shipping_city']) && (strlen($this->container['shipping_city']) > 32)) {
            $invalidProperties[] = "invalid value for 'shipping_city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['shipping_company']) && (strlen($this->container['shipping_company']) > 50)) {
            $invalidProperties[] = "invalid value for 'shipping_company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['shipping_country_code']) && (strlen($this->container['shipping_country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'shipping_country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['shipping_day_phone']) && (strlen($this->container['shipping_day_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'shipping_day_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['shipping_evening_phone']) && (strlen($this->container['shipping_evening_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'shipping_evening_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['shipping_first_name']) && (strlen($this->container['shipping_first_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'shipping_first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['shipping_last_name']) && (strlen($this->container['shipping_last_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'shipping_last_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['shipping_postal_code']) && (strlen($this->container['shipping_postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'shipping_postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['shipping_state']) && (strlen($this->container['shipping_state']) > 32)) {
            $invalidProperties[] = "invalid value for 'shipping_state', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['billing_city']) > 32) {
            return false;
        }
        if (strlen($this->container['billing_company']) > 50) {
            return false;
        }
        if (strlen($this->container['billing_country_code']) > 2) {
            return false;
        }
        if (strlen($this->container['billing_day_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['billing_evening_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['billing_first_name']) > 30) {
            return false;
        }
        if (strlen($this->container['billing_last_name']) > 30) {
            return false;
        }
        if (strlen($this->container['billing_postal_code']) > 20) {
            return false;
        }
        if (strlen($this->container['billing_state']) > 32) {
            return false;
        }
        if (strlen($this->container['pricing_tier_name']) > 50) {
            return false;
        }
        if (strlen($this->container['shipping_city']) > 32) {
            return false;
        }
        if (strlen($this->container['shipping_company']) > 50) {
            return false;
        }
        if (strlen($this->container['shipping_country_code']) > 2) {
            return false;
        }
        if (strlen($this->container['shipping_day_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['shipping_evening_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['shipping_first_name']) > 30) {
            return false;
        }
        if (strlen($this->container['shipping_last_name']) > 30) {
            return false;
        }
        if (strlen($this->container['shipping_postal_code']) > 20) {
            return false;
        }
        if (strlen($this->container['shipping_state']) > 32) {
            return false;
        }
        return true;
    }


    /**
     * Gets billing_city
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->container['billing_city'];
    }

    /**
     * Sets billing_city
     *
     * @param string $billing_city Billing city
     *
     * @return $this
     */
    public function setBillingCity($billing_city)
    {
        if (!is_null($billing_city) && (strlen($billing_city) > 32)) {
            throw new \InvalidArgumentException('invalid length for $billing_city when calling CustomerQuery., must be smaller than or equal to 32.');
        }

        $this->container['billing_city'] = $billing_city;

        return $this;
    }

    /**
     * Gets billing_company
     *
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->container['billing_company'];
    }

    /**
     * Sets billing_company
     *
     * @param string $billing_company Billing company
     *
     * @return $this
     */
    public function setBillingCompany($billing_company)
    {
        if (!is_null($billing_company) && (strlen($billing_company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $billing_company when calling CustomerQuery., must be smaller than or equal to 50.');
        }

        $this->container['billing_company'] = $billing_company;

        return $this;
    }

    /**
     * Gets billing_country_code
     *
     * @return string
     */
    public function getBillingCountryCode()
    {
        return $this->container['billing_country_code'];
    }

    /**
     * Sets billing_country_code
     *
     * @param string $billing_country_code Billing country code
     *
     * @return $this
     */
    public function setBillingCountryCode($billing_country_code)
    {
        if (!is_null($billing_country_code) && (strlen($billing_country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_country_code when calling CustomerQuery., must be smaller than or equal to 2.');
        }

        $this->container['billing_country_code'] = $billing_country_code;

        return $this;
    }

    /**
     * Gets billing_day_phone
     *
     * @return string
     */
    public function getBillingDayPhone()
    {
        return $this->container['billing_day_phone'];
    }

    /**
     * Sets billing_day_phone
     *
     * @param string $billing_day_phone Billing day phone
     *
     * @return $this
     */
    public function setBillingDayPhone($billing_day_phone)
    {
        if (!is_null($billing_day_phone) && (strlen($billing_day_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $billing_day_phone when calling CustomerQuery., must be smaller than or equal to 25.');
        }

        $this->container['billing_day_phone'] = $billing_day_phone;

        return $this;
    }

    /**
     * Gets billing_evening_phone
     *
     * @return string
     */
    public function getBillingEveningPhone()
    {
        return $this->container['billing_evening_phone'];
    }

    /**
     * Sets billing_evening_phone
     *
     * @param string $billing_evening_phone Billing evening phone
     *
     * @return $this
     */
    public function setBillingEveningPhone($billing_evening_phone)
    {
        if (!is_null($billing_evening_phone) && (strlen($billing_evening_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $billing_evening_phone when calling CustomerQuery., must be smaller than or equal to 25.');
        }

        $this->container['billing_evening_phone'] = $billing_evening_phone;

        return $this;
    }

    /**
     * Gets billing_first_name
     *
     * @return string
     */
    public function getBillingFirstName()
    {
        return $this->container['billing_first_name'];
    }

    /**
     * Sets billing_first_name
     *
     * @param string $billing_first_name Billing first name
     *
     * @return $this
     */
    public function setBillingFirstName($billing_first_name)
    {
        if (!is_null($billing_first_name) && (strlen($billing_first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $billing_first_name when calling CustomerQuery., must be smaller than or equal to 30.');
        }

        $this->container['billing_first_name'] = $billing_first_name;

        return $this;
    }

    /**
     * Gets billing_last_name
     *
     * @return string
     */
    public function getBillingLastName()
    {
        return $this->container['billing_last_name'];
    }

    /**
     * Sets billing_last_name
     *
     * @param string $billing_last_name Billing last name
     *
     * @return $this
     */
    public function setBillingLastName($billing_last_name)
    {
        if (!is_null($billing_last_name) && (strlen($billing_last_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $billing_last_name when calling CustomerQuery., must be smaller than or equal to 30.');
        }

        $this->container['billing_last_name'] = $billing_last_name;

        return $this;
    }

    /**
     * Gets billing_postal_code
     *
     * @return string
     */
    public function getBillingPostalCode()
    {
        return $this->container['billing_postal_code'];
    }

    /**
     * Sets billing_postal_code
     *
     * @param string $billing_postal_code Billing postal code
     *
     * @return $this
     */
    public function setBillingPostalCode($billing_postal_code)
    {
        if (!is_null($billing_postal_code) && (strlen($billing_postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $billing_postal_code when calling CustomerQuery., must be smaller than or equal to 20.');
        }

        $this->container['billing_postal_code'] = $billing_postal_code;

        return $this;
    }

    /**
     * Gets billing_state
     *
     * @return string
     */
    public function getBillingState()
    {
        return $this->container['billing_state'];
    }

    /**
     * Sets billing_state
     *
     * @param string $billing_state Billing state
     *
     * @return $this
     */
    public function setBillingState($billing_state)
    {
        if (!is_null($billing_state) && (strlen($billing_state) > 32)) {
            throw new \InvalidArgumentException('invalid length for $billing_state when calling CustomerQuery., must be smaller than or equal to 32.');
        }

        $this->container['billing_state'] = $billing_state;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of this customer profile
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets last_modified_dts_end
     *
     * @return string
     */
    public function getLastModifiedDtsEnd()
    {
        return $this->container['last_modified_dts_end'];
    }

    /**
     * Sets last_modified_dts_end
     *
     * @param string $last_modified_dts_end Last modified date end
     *
     * @return $this
     */
    public function setLastModifiedDtsEnd($last_modified_dts_end)
    {
        $this->container['last_modified_dts_end'] = $last_modified_dts_end;

        return $this;
    }

    /**
     * Gets last_modified_dts_start
     *
     * @return string
     */
    public function getLastModifiedDtsStart()
    {
        return $this->container['last_modified_dts_start'];
    }

    /**
     * Sets last_modified_dts_start
     *
     * @param string $last_modified_dts_start Last modified date start
     *
     * @return $this
     */
    public function setLastModifiedDtsStart($last_modified_dts_start)
    {
        $this->container['last_modified_dts_start'] = $last_modified_dts_start;

        return $this;
    }

    /**
     * Gets pricing_tier_name
     *
     * @return string
     */
    public function getPricingTierName()
    {
        return $this->container['pricing_tier_name'];
    }

    /**
     * Sets pricing_tier_name
     *
     * @param string $pricing_tier_name Pricing tier name
     *
     * @return $this
     */
    public function setPricingTierName($pricing_tier_name)
    {
        if (!is_null($pricing_tier_name) && (strlen($pricing_tier_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $pricing_tier_name when calling CustomerQuery., must be smaller than or equal to 50.');
        }

        $this->container['pricing_tier_name'] = $pricing_tier_name;

        return $this;
    }

    /**
     * Gets pricing_tier_oid
     *
     * @return int
     */
    public function getPricingTierOid()
    {
        return $this->container['pricing_tier_oid'];
    }

    /**
     * Sets pricing_tier_oid
     *
     * @param int $pricing_tier_oid Pricing tier oid
     *
     * @return $this
     */
    public function setPricingTierOid($pricing_tier_oid)
    {
        $this->container['pricing_tier_oid'] = $pricing_tier_oid;

        return $this;
    }

    /**
     * Gets qb_class
     *
     * @return string
     */
    public function getQbClass()
    {
        return $this->container['qb_class'];
    }

    /**
     * Sets qb_class
     *
     * @param string $qb_class QuickBooks class to import this customer as
     *
     * @return $this
     */
    public function setQbClass($qb_class)
    {
        $this->container['qb_class'] = $qb_class;

        return $this;
    }

    /**
     * Gets quickbooks_code
     *
     * @return string
     */
    public function getQuickbooksCode()
    {
        return $this->container['quickbooks_code'];
    }

    /**
     * Sets quickbooks_code
     *
     * @param string $quickbooks_code QuickBooks name to import this customer as
     *
     * @return $this
     */
    public function setQuickbooksCode($quickbooks_code)
    {
        $this->container['quickbooks_code'] = $quickbooks_code;

        return $this;
    }

    /**
     * Gets shipping_city
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->container['shipping_city'];
    }

    /**
     * Sets shipping_city
     *
     * @param string $shipping_city Billing city
     *
     * @return $this
     */
    public function setShippingCity($shipping_city)
    {
        if (!is_null($shipping_city) && (strlen($shipping_city) > 32)) {
            throw new \InvalidArgumentException('invalid length for $shipping_city when calling CustomerQuery., must be smaller than or equal to 32.');
        }

        $this->container['shipping_city'] = $shipping_city;

        return $this;
    }

    /**
     * Gets shipping_company
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->container['shipping_company'];
    }

    /**
     * Sets shipping_company
     *
     * @param string $shipping_company Billing company
     *
     * @return $this
     */
    public function setShippingCompany($shipping_company)
    {
        if (!is_null($shipping_company) && (strlen($shipping_company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $shipping_company when calling CustomerQuery., must be smaller than or equal to 50.');
        }

        $this->container['shipping_company'] = $shipping_company;

        return $this;
    }

    /**
     * Gets shipping_country_code
     *
     * @return string
     */
    public function getShippingCountryCode()
    {
        return $this->container['shipping_country_code'];
    }

    /**
     * Sets shipping_country_code
     *
     * @param string $shipping_country_code Billing country code
     *
     * @return $this
     */
    public function setShippingCountryCode($shipping_country_code)
    {
        if (!is_null($shipping_country_code) && (strlen($shipping_country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $shipping_country_code when calling CustomerQuery., must be smaller than or equal to 2.');
        }

        $this->container['shipping_country_code'] = $shipping_country_code;

        return $this;
    }

    /**
     * Gets shipping_day_phone
     *
     * @return string
     */
    public function getShippingDayPhone()
    {
        return $this->container['shipping_day_phone'];
    }

    /**
     * Sets shipping_day_phone
     *
     * @param string $shipping_day_phone Billing day phone
     *
     * @return $this
     */
    public function setShippingDayPhone($shipping_day_phone)
    {
        if (!is_null($shipping_day_phone) && (strlen($shipping_day_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $shipping_day_phone when calling CustomerQuery., must be smaller than or equal to 25.');
        }

        $this->container['shipping_day_phone'] = $shipping_day_phone;

        return $this;
    }

    /**
     * Gets shipping_evening_phone
     *
     * @return string
     */
    public function getShippingEveningPhone()
    {
        return $this->container['shipping_evening_phone'];
    }

    /**
     * Sets shipping_evening_phone
     *
     * @param string $shipping_evening_phone Billing evening phone
     *
     * @return $this
     */
    public function setShippingEveningPhone($shipping_evening_phone)
    {
        if (!is_null($shipping_evening_phone) && (strlen($shipping_evening_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $shipping_evening_phone when calling CustomerQuery., must be smaller than or equal to 25.');
        }

        $this->container['shipping_evening_phone'] = $shipping_evening_phone;

        return $this;
    }

    /**
     * Gets shipping_first_name
     *
     * @return string
     */
    public function getShippingFirstName()
    {
        return $this->container['shipping_first_name'];
    }

    /**
     * Sets shipping_first_name
     *
     * @param string $shipping_first_name Billing first name
     *
     * @return $this
     */
    public function setShippingFirstName($shipping_first_name)
    {
        if (!is_null($shipping_first_name) && (strlen($shipping_first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $shipping_first_name when calling CustomerQuery., must be smaller than or equal to 30.');
        }

        $this->container['shipping_first_name'] = $shipping_first_name;

        return $this;
    }

    /**
     * Gets shipping_last_name
     *
     * @return string
     */
    public function getShippingLastName()
    {
        return $this->container['shipping_last_name'];
    }

    /**
     * Sets shipping_last_name
     *
     * @param string $shipping_last_name Billing last name
     *
     * @return $this
     */
    public function setShippingLastName($shipping_last_name)
    {
        if (!is_null($shipping_last_name) && (strlen($shipping_last_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $shipping_last_name when calling CustomerQuery., must be smaller than or equal to 30.');
        }

        $this->container['shipping_last_name'] = $shipping_last_name;

        return $this;
    }

    /**
     * Gets shipping_postal_code
     *
     * @return string
     */
    public function getShippingPostalCode()
    {
        return $this->container['shipping_postal_code'];
    }

    /**
     * Sets shipping_postal_code
     *
     * @param string $shipping_postal_code Billing postal code
     *
     * @return $this
     */
    public function setShippingPostalCode($shipping_postal_code)
    {
        if (!is_null($shipping_postal_code) && (strlen($shipping_postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shipping_postal_code when calling CustomerQuery., must be smaller than or equal to 20.');
        }

        $this->container['shipping_postal_code'] = $shipping_postal_code;

        return $this;
    }

    /**
     * Gets shipping_state
     *
     * @return string
     */
    public function getShippingState()
    {
        return $this->container['shipping_state'];
    }

    /**
     * Sets shipping_state
     *
     * @param string $shipping_state Billing state
     *
     * @return $this
     */
    public function setShippingState($shipping_state)
    {
        if (!is_null($shipping_state) && (strlen($shipping_state) > 32)) {
            throw new \InvalidArgumentException('invalid length for $shipping_state when calling CustomerQuery., must be smaller than or equal to 32.');
        }

        $this->container['shipping_state'] = $shipping_state;

        return $this;
    }

    /**
     * Gets signup_dts_end
     *
     * @return string
     */
    public function getSignupDtsEnd()
    {
        return $this->container['signup_dts_end'];
    }

    /**
     * Sets signup_dts_end
     *
     * @param string $signup_dts_end Signup date end
     *
     * @return $this
     */
    public function setSignupDtsEnd($signup_dts_end)
    {
        $this->container['signup_dts_end'] = $signup_dts_end;

        return $this;
    }

    /**
     * Gets signup_dts_start
     *
     * @return string
     */
    public function getSignupDtsStart()
    {
        return $this->container['signup_dts_start'];
    }

    /**
     * Sets signup_dts_start
     *
     * @param string $signup_dts_start Signup date star
     *
     * @return $this
     */
    public function setSignupDtsStart($signup_dts_start)
    {
        $this->container['signup_dts_start'] = $signup_dts_start;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



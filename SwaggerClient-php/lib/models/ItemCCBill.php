<?php
/**
 * ItemCCBill
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * ItemCCBill Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemCCBill implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemCCBill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'ccbill_allowed_currencies' => 'string',
        'ccbill_allowed_types' => 'string',
        'ccbill_currency_code' => 'string',
        'ccbill_form_name' => 'string',
        'ccbill_subaccount_id' => 'string',
        'ccbill_subscription_type_id' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'ccbill_allowed_currencies' => 'ccbill_allowed_currencies',
        'ccbill_allowed_types' => 'ccbill_allowed_types',
        'ccbill_currency_code' => 'ccbill_currency_code',
        'ccbill_form_name' => 'ccbill_form_name',
        'ccbill_subaccount_id' => 'ccbill_subaccount_id',
        'ccbill_subscription_type_id' => 'ccbill_subscription_type_id'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'ccbill_allowed_currencies' => 'setCcbillAllowedCurrencies',
        'ccbill_allowed_types' => 'setCcbillAllowedTypes',
        'ccbill_currency_code' => 'setCcbillCurrencyCode',
        'ccbill_form_name' => 'setCcbillFormName',
        'ccbill_subaccount_id' => 'setCcbillSubaccountId',
        'ccbill_subscription_type_id' => 'setCcbillSubscriptionTypeId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'ccbill_allowed_currencies' => 'getCcbillAllowedCurrencies',
        'ccbill_allowed_types' => 'getCcbillAllowedTypes',
        'ccbill_currency_code' => 'getCcbillCurrencyCode',
        'ccbill_form_name' => 'getCcbillFormName',
        'ccbill_subaccount_id' => 'getCcbillSubaccountId',
        'ccbill_subscription_type_id' => 'getCcbillSubscriptionTypeId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ccbill_allowed_currencies'] = isset($data['ccbill_allowed_currencies']) ? $data['ccbill_allowed_currencies'] : null;
        $this->container['ccbill_allowed_types'] = isset($data['ccbill_allowed_types']) ? $data['ccbill_allowed_types'] : null;
        $this->container['ccbill_currency_code'] = isset($data['ccbill_currency_code']) ? $data['ccbill_currency_code'] : null;
        $this->container['ccbill_form_name'] = isset($data['ccbill_form_name']) ? $data['ccbill_form_name'] : null;
        $this->container['ccbill_subaccount_id'] = isset($data['ccbill_subaccount_id']) ? $data['ccbill_subaccount_id'] : null;
        $this->container['ccbill_subscription_type_id'] = isset($data['ccbill_subscription_type_id']) ? $data['ccbill_subscription_type_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets ccbill_allowed_currencies
     * @return string
     */
    public function getCcbillAllowedCurrencies()
    {
        return $this->container['ccbill_allowed_currencies'];
    }

    /**
     * Sets ccbill_allowed_currencies
     * @param string $ccbill_allowed_currencies Allowed currencies
     * @return $this
     */
    public function setCcbillAllowedCurrencies($ccbill_allowed_currencies)
    {
        $this->container['ccbill_allowed_currencies'] = $ccbill_allowed_currencies;

        return $this;
    }

    /**
     * Gets ccbill_allowed_types
     * @return string
     */
    public function getCcbillAllowedTypes()
    {
        return $this->container['ccbill_allowed_types'];
    }

    /**
     * Sets ccbill_allowed_types
     * @param string $ccbill_allowed_types Allowed types
     * @return $this
     */
    public function setCcbillAllowedTypes($ccbill_allowed_types)
    {
        $this->container['ccbill_allowed_types'] = $ccbill_allowed_types;

        return $this;
    }

    /**
     * Gets ccbill_currency_code
     * @return string
     */
    public function getCcbillCurrencyCode()
    {
        return $this->container['ccbill_currency_code'];
    }

    /**
     * Sets ccbill_currency_code
     * @param string $ccbill_currency_code Currency code
     * @return $this
     */
    public function setCcbillCurrencyCode($ccbill_currency_code)
    {
        $this->container['ccbill_currency_code'] = $ccbill_currency_code;

        return $this;
    }

    /**
     * Gets ccbill_form_name
     * @return string
     */
    public function getCcbillFormName()
    {
        return $this->container['ccbill_form_name'];
    }

    /**
     * Sets ccbill_form_name
     * @param string $ccbill_form_name Form name
     * @return $this
     */
    public function setCcbillFormName($ccbill_form_name)
    {
        $this->container['ccbill_form_name'] = $ccbill_form_name;

        return $this;
    }

    /**
     * Gets ccbill_subaccount_id
     * @return string
     */
    public function getCcbillSubaccountId()
    {
        return $this->container['ccbill_subaccount_id'];
    }

    /**
     * Sets ccbill_subaccount_id
     * @param string $ccbill_subaccount_id Sub-account id
     * @return $this
     */
    public function setCcbillSubaccountId($ccbill_subaccount_id)
    {
        $this->container['ccbill_subaccount_id'] = $ccbill_subaccount_id;

        return $this;
    }

    /**
     * Gets ccbill_subscription_type_id
     * @return string
     */
    public function getCcbillSubscriptionTypeId()
    {
        return $this->container['ccbill_subscription_type_id'];
    }

    /**
     * Sets ccbill_subscription_type_id
     * @param string $ccbill_subscription_type_id Subscription type id
     * @return $this
     */
    public function setCcbillSubscriptionTypeId($ccbill_subscription_type_id)
    {
        $this->container['ccbill_subscription_type_id'] = $ccbill_subscription_type_id;

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
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


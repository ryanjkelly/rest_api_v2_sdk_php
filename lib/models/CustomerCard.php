<?php
/**
 * CustomerCard
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
 * CustomerCard Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerCard implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomerCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'card_expiration_month' => 'int',
        'card_expiration_year' => 'int',
        'card_number' => 'string',
        'card_number_token' => 'string',
        'card_type' => 'string',
        'customer_profile_credit_card_id' => 'int',
        'customer_profile_oid' => 'int'
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
        'card_expiration_month' => 'card_expiration_month',
        'card_expiration_year' => 'card_expiration_year',
        'card_number' => 'card_number',
        'card_number_token' => 'card_number_token',
        'card_type' => 'card_type',
        'customer_profile_credit_card_id' => 'customer_profile_credit_card_id',
        'customer_profile_oid' => 'customer_profile_oid'
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
        'card_expiration_month' => 'setCardExpirationMonth',
        'card_expiration_year' => 'setCardExpirationYear',
        'card_number' => 'setCardNumber',
        'card_number_token' => 'setCardNumberToken',
        'card_type' => 'setCardType',
        'customer_profile_credit_card_id' => 'setCustomerProfileCreditCardId',
        'customer_profile_oid' => 'setCustomerProfileOid'
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
        'card_expiration_month' => 'getCardExpirationMonth',
        'card_expiration_year' => 'getCardExpirationYear',
        'card_number' => 'getCardNumber',
        'card_number_token' => 'getCardNumberToken',
        'card_type' => 'getCardType',
        'customer_profile_credit_card_id' => 'getCustomerProfileCreditCardId',
        'customer_profile_oid' => 'getCustomerProfileOid'
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
        $this->container['card_expiration_month'] = isset($data['card_expiration_month']) ? $data['card_expiration_month'] : null;
        $this->container['card_expiration_year'] = isset($data['card_expiration_year']) ? $data['card_expiration_year'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_number_token'] = isset($data['card_number_token']) ? $data['card_number_token'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['customer_profile_credit_card_id'] = isset($data['customer_profile_credit_card_id']) ? $data['customer_profile_credit_card_id'] : null;
        $this->container['customer_profile_oid'] = isset($data['customer_profile_oid']) ? $data['customer_profile_oid'] : null;
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
     * Gets card_expiration_month
     * @return int
     */
    public function getCardExpirationMonth()
    {
        return $this->container['card_expiration_month'];
    }

    /**
     * Sets card_expiration_month
     * @param int $card_expiration_month Card expiration month (1-12)
     * @return $this
     */
    public function setCardExpirationMonth($card_expiration_month)
    {
        $this->container['card_expiration_month'] = $card_expiration_month;

        return $this;
    }

    /**
     * Gets card_expiration_year
     * @return int
     */
    public function getCardExpirationYear()
    {
        return $this->container['card_expiration_year'];
    }

    /**
     * Sets card_expiration_year
     * @param int $card_expiration_year Card expiration year (four digit year)
     * @return $this
     */
    public function setCardExpirationYear($card_expiration_year)
    {
        $this->container['card_expiration_year'] = $card_expiration_year;

        return $this;
    }

    /**
     * Gets card_number
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     * @param string $card_number Card number (masked to the last 4)
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_number_token
     * @return string
     */
    public function getCardNumberToken()
    {
        return $this->container['card_number_token'];
    }

    /**
     * Sets card_number_token
     * @param string $card_number_token Hosted field token for the card number
     * @return $this
     */
    public function setCardNumberToken($card_number_token)
    {
        $this->container['card_number_token'] = $card_number_token;

        return $this;
    }

    /**
     * Gets card_type
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     * @param string $card_type Card type
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets customer_profile_credit_card_id
     * @return int
     */
    public function getCustomerProfileCreditCardId()
    {
        return $this->container['customer_profile_credit_card_id'];
    }

    /**
     * Sets customer_profile_credit_card_id
     * @param int $customer_profile_credit_card_id ID of the stored credit card to use
     * @return $this
     */
    public function setCustomerProfileCreditCardId($customer_profile_credit_card_id)
    {
        $this->container['customer_profile_credit_card_id'] = $customer_profile_credit_card_id;

        return $this;
    }

    /**
     * Gets customer_profile_oid
     * @return int
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     * @param int $customer_profile_oid Customer profile object identifier
     * @return $this
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

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



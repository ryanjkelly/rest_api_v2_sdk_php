<?php
/**
 * CartSettingsShipping
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
 * CartSettingsShipping Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartSettingsShipping implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartSettingsShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'deliver_on_date' => '\ultracart\v2\models\CartSettingsShippingCalendar',
        'estimates' => '\ultracart\v2\models\CartSettingsShippingEstimate[]',
        'need_shipping' => 'bool',
        'provinces' => '\ultracart\v2\models\CartSettingsProvince[]',
        'ship_on_date' => '\ultracart\v2\models\CartSettingsShippingCalendar'
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
        'deliver_on_date' => 'deliver_on_date',
        'estimates' => 'estimates',
        'need_shipping' => 'need_shipping',
        'provinces' => 'provinces',
        'ship_on_date' => 'ship_on_date'
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
        'deliver_on_date' => 'setDeliverOnDate',
        'estimates' => 'setEstimates',
        'need_shipping' => 'setNeedShipping',
        'provinces' => 'setProvinces',
        'ship_on_date' => 'setShipOnDate'
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
        'deliver_on_date' => 'getDeliverOnDate',
        'estimates' => 'getEstimates',
        'need_shipping' => 'getNeedShipping',
        'provinces' => 'getProvinces',
        'ship_on_date' => 'getShipOnDate'
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
        $this->container['deliver_on_date'] = isset($data['deliver_on_date']) ? $data['deliver_on_date'] : null;
        $this->container['estimates'] = isset($data['estimates']) ? $data['estimates'] : null;
        $this->container['need_shipping'] = isset($data['need_shipping']) ? $data['need_shipping'] : null;
        $this->container['provinces'] = isset($data['provinces']) ? $data['provinces'] : null;
        $this->container['ship_on_date'] = isset($data['ship_on_date']) ? $data['ship_on_date'] : null;
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
     * Gets deliver_on_date
     * @return \ultracart\v2\models\CartSettingsShippingCalendar
     */
    public function getDeliverOnDate()
    {
        return $this->container['deliver_on_date'];
    }

    /**
     * Sets deliver_on_date
     * @param \ultracart\v2\models\CartSettingsShippingCalendar $deliver_on_date
     * @return $this
     */
    public function setDeliverOnDate($deliver_on_date)
    {
        $this->container['deliver_on_date'] = $deliver_on_date;

        return $this;
    }

    /**
     * Gets estimates
     * @return \ultracart\v2\models\CartSettingsShippingEstimate[]
     */
    public function getEstimates()
    {
        return $this->container['estimates'];
    }

    /**
     * Sets estimates
     * @param \ultracart\v2\models\CartSettingsShippingEstimate[] $estimates Estimates for this cart
     * @return $this
     */
    public function setEstimates($estimates)
    {
        $this->container['estimates'] = $estimates;

        return $this;
    }

    /**
     * Gets need_shipping
     * @return bool
     */
    public function getNeedShipping()
    {
        return $this->container['need_shipping'];
    }

    /**
     * Sets need_shipping
     * @param bool $need_shipping True if this order needs shipping
     * @return $this
     */
    public function setNeedShipping($need_shipping)
    {
        $this->container['need_shipping'] = $need_shipping;

        return $this;
    }

    /**
     * Gets provinces
     * @return \ultracart\v2\models\CartSettingsProvince[]
     */
    public function getProvinces()
    {
        return $this->container['provinces'];
    }

    /**
     * Sets provinces
     * @param \ultracart\v2\models\CartSettingsProvince[] $provinces Provinces
     * @return $this
     */
    public function setProvinces($provinces)
    {
        $this->container['provinces'] = $provinces;

        return $this;
    }

    /**
     * Gets ship_on_date
     * @return \ultracart\v2\models\CartSettingsShippingCalendar
     */
    public function getShipOnDate()
    {
        return $this->container['ship_on_date'];
    }

    /**
     * Sets ship_on_date
     * @param \ultracart\v2\models\CartSettingsShippingCalendar $ship_on_date
     * @return $this
     */
    public function setShipOnDate($ship_on_date)
    {
        $this->container['ship_on_date'] = $ship_on_date;

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



<?php
/**
 * OrderCheckout
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
 * OrderCheckout Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderCheckout implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderCheckout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'comments' => 'string',
        'custom_field1' => 'string',
        'custom_field2' => 'string',
        'custom_field3' => 'string',
        'custom_field4' => 'string',
        'custom_field5' => 'string',
        'custom_field6' => 'string',
        'custom_field7' => 'string',
        'customer_ip_address' => 'string',
        'screen_branding_theme_code' => 'string',
        'storefront_host_name' => 'string',
        'upsell_path_code' => 'string'
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
        'comments' => 'comments',
        'custom_field1' => 'custom_field1',
        'custom_field2' => 'custom_field2',
        'custom_field3' => 'custom_field3',
        'custom_field4' => 'custom_field4',
        'custom_field5' => 'custom_field5',
        'custom_field6' => 'custom_field6',
        'custom_field7' => 'custom_field7',
        'customer_ip_address' => 'customer_ip_address',
        'screen_branding_theme_code' => 'screen_branding_theme_code',
        'storefront_host_name' => 'storefront_host_name',
        'upsell_path_code' => 'upsell_path_code'
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
        'comments' => 'setComments',
        'custom_field1' => 'setCustomField1',
        'custom_field2' => 'setCustomField2',
        'custom_field3' => 'setCustomField3',
        'custom_field4' => 'setCustomField4',
        'custom_field5' => 'setCustomField5',
        'custom_field6' => 'setCustomField6',
        'custom_field7' => 'setCustomField7',
        'customer_ip_address' => 'setCustomerIpAddress',
        'screen_branding_theme_code' => 'setScreenBrandingThemeCode',
        'storefront_host_name' => 'setStorefrontHostName',
        'upsell_path_code' => 'setUpsellPathCode'
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
        'comments' => 'getComments',
        'custom_field1' => 'getCustomField1',
        'custom_field2' => 'getCustomField2',
        'custom_field3' => 'getCustomField3',
        'custom_field4' => 'getCustomField4',
        'custom_field5' => 'getCustomField5',
        'custom_field6' => 'getCustomField6',
        'custom_field7' => 'getCustomField7',
        'customer_ip_address' => 'getCustomerIpAddress',
        'screen_branding_theme_code' => 'getScreenBrandingThemeCode',
        'storefront_host_name' => 'getStorefrontHostName',
        'upsell_path_code' => 'getUpsellPathCode'
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['custom_field1'] = isset($data['custom_field1']) ? $data['custom_field1'] : null;
        $this->container['custom_field2'] = isset($data['custom_field2']) ? $data['custom_field2'] : null;
        $this->container['custom_field3'] = isset($data['custom_field3']) ? $data['custom_field3'] : null;
        $this->container['custom_field4'] = isset($data['custom_field4']) ? $data['custom_field4'] : null;
        $this->container['custom_field5'] = isset($data['custom_field5']) ? $data['custom_field5'] : null;
        $this->container['custom_field6'] = isset($data['custom_field6']) ? $data['custom_field6'] : null;
        $this->container['custom_field7'] = isset($data['custom_field7']) ? $data['custom_field7'] : null;
        $this->container['customer_ip_address'] = isset($data['customer_ip_address']) ? $data['customer_ip_address'] : null;
        $this->container['screen_branding_theme_code'] = isset($data['screen_branding_theme_code']) ? $data['screen_branding_theme_code'] : null;
        $this->container['storefront_host_name'] = isset($data['storefront_host_name']) ? $data['storefront_host_name'] : null;
        $this->container['upsell_path_code'] = isset($data['upsell_path_code']) ? $data['upsell_path_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['custom_field1']) && (strlen($this->container['custom_field1']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field2']) && (strlen($this->container['custom_field2']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field3']) && (strlen($this->container['custom_field3']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field4']) && (strlen($this->container['custom_field4']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field4', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field5']) && (strlen($this->container['custom_field5']) > 75)) {
            $invalid_properties[] = "invalid value for 'custom_field5', the character length must be smaller than or equal to 75.";
        }

        if (!is_null($this->container['custom_field6']) && (strlen($this->container['custom_field6']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field6', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field7']) && (strlen($this->container['custom_field7']) > 50)) {
            $invalid_properties[] = "invalid value for 'custom_field7', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['screen_branding_theme_code']) && (strlen($this->container['screen_branding_theme_code']) > 10)) {
            $invalid_properties[] = "invalid value for 'screen_branding_theme_code', the character length must be smaller than or equal to 10.";
        }

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
        if (strlen($this->container['custom_field1']) > 50) {
            return false;
        }
        if (strlen($this->container['custom_field2']) > 50) {
            return false;
        }
        if (strlen($this->container['custom_field3']) > 50) {
            return false;
        }
        if (strlen($this->container['custom_field4']) > 50) {
            return false;
        }
        if (strlen($this->container['custom_field5']) > 75) {
            return false;
        }
        if (strlen($this->container['custom_field6']) > 50) {
            return false;
        }
        if (strlen($this->container['custom_field7']) > 50) {
            return false;
        }
        if (strlen($this->container['screen_branding_theme_code']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     * @param string $comments Comments from the customer.  Rarely used on the single page checkout.
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets custom_field1
     * @return string
     */
    public function getCustomField1()
    {
        return $this->container['custom_field1'];
    }

    /**
     * Sets custom_field1
     * @param string $custom_field1 Custom field 1
     * @return $this
     */
    public function setCustomField1($custom_field1)
    {
        if (strlen($custom_field1) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field1 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field1'] = $custom_field1;

        return $this;
    }

    /**
     * Gets custom_field2
     * @return string
     */
    public function getCustomField2()
    {
        return $this->container['custom_field2'];
    }

    /**
     * Sets custom_field2
     * @param string $custom_field2 Custom field 2
     * @return $this
     */
    public function setCustomField2($custom_field2)
    {
        if (strlen($custom_field2) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field2 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field2'] = $custom_field2;

        return $this;
    }

    /**
     * Gets custom_field3
     * @return string
     */
    public function getCustomField3()
    {
        return $this->container['custom_field3'];
    }

    /**
     * Sets custom_field3
     * @param string $custom_field3 Custom field 3
     * @return $this
     */
    public function setCustomField3($custom_field3)
    {
        if (strlen($custom_field3) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field3 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field3'] = $custom_field3;

        return $this;
    }

    /**
     * Gets custom_field4
     * @return string
     */
    public function getCustomField4()
    {
        return $this->container['custom_field4'];
    }

    /**
     * Sets custom_field4
     * @param string $custom_field4 Custom field 4
     * @return $this
     */
    public function setCustomField4($custom_field4)
    {
        if (strlen($custom_field4) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field4 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field4'] = $custom_field4;

        return $this;
    }

    /**
     * Gets custom_field5
     * @return string
     */
    public function getCustomField5()
    {
        return $this->container['custom_field5'];
    }

    /**
     * Sets custom_field5
     * @param string $custom_field5 Custom field 5
     * @return $this
     */
    public function setCustomField5($custom_field5)
    {
        if (strlen($custom_field5) > 75) {
            throw new \InvalidArgumentException('invalid length for $custom_field5 when calling OrderCheckout., must be smaller than or equal to 75.');
        }
        $this->container['custom_field5'] = $custom_field5;

        return $this;
    }

    /**
     * Gets custom_field6
     * @return string
     */
    public function getCustomField6()
    {
        return $this->container['custom_field6'];
    }

    /**
     * Sets custom_field6
     * @param string $custom_field6 Custom field 6
     * @return $this
     */
    public function setCustomField6($custom_field6)
    {
        if (strlen($custom_field6) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field6 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field6'] = $custom_field6;

        return $this;
    }

    /**
     * Gets custom_field7
     * @return string
     */
    public function getCustomField7()
    {
        return $this->container['custom_field7'];
    }

    /**
     * Sets custom_field7
     * @param string $custom_field7 Custom field 7
     * @return $this
     */
    public function setCustomField7($custom_field7)
    {
        if (strlen($custom_field7) > 50) {
            throw new \InvalidArgumentException('invalid length for $custom_field7 when calling OrderCheckout., must be smaller than or equal to 50.');
        }
        $this->container['custom_field7'] = $custom_field7;

        return $this;
    }

    /**
     * Gets customer_ip_address
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->container['customer_ip_address'];
    }

    /**
     * Sets customer_ip_address
     * @param string $customer_ip_address IP address of the customer when placing the order
     * @return $this
     */
    public function setCustomerIpAddress($customer_ip_address)
    {
        $this->container['customer_ip_address'] = $customer_ip_address;

        return $this;
    }

    /**
     * Gets screen_branding_theme_code
     * @return string
     */
    public function getScreenBrandingThemeCode()
    {
        return $this->container['screen_branding_theme_code'];
    }

    /**
     * Sets screen_branding_theme_code
     * @param string $screen_branding_theme_code Screen branding theme code associated with the order (legacy checkout)
     * @return $this
     */
    public function setScreenBrandingThemeCode($screen_branding_theme_code)
    {
        if (strlen($screen_branding_theme_code) > 10) {
            throw new \InvalidArgumentException('invalid length for $screen_branding_theme_code when calling OrderCheckout., must be smaller than or equal to 10.');
        }
        $this->container['screen_branding_theme_code'] = $screen_branding_theme_code;

        return $this;
    }

    /**
     * Gets storefront_host_name
     * @return string
     */
    public function getStorefrontHostName()
    {
        return $this->container['storefront_host_name'];
    }

    /**
     * Sets storefront_host_name
     * @param string $storefront_host_name StoreFront host name associated with the order
     * @return $this
     */
    public function setStorefrontHostName($storefront_host_name)
    {
        $this->container['storefront_host_name'] = $storefront_host_name;

        return $this;
    }

    /**
     * Gets upsell_path_code
     * @return string
     */
    public function getUpsellPathCode()
    {
        return $this->container['upsell_path_code'];
    }

    /**
     * Sets upsell_path_code
     * @param string $upsell_path_code Upsell path code assigned during the checkout that the customer went through
     * @return $this
     */
    public function setUpsellPathCode($upsell_path_code)
    {
        $this->container['upsell_path_code'] = $upsell_path_code;

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


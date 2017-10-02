<?php
/**
 * ItemWishlistMember
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
 * ItemWishlistMember Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemWishlistMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemWishlistMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wishlist_member_instance_description' => 'string',
        'wishlist_member_instance_oid' => 'int',
        'wishlist_member_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wishlist_member_instance_description' => null,
        'wishlist_member_instance_oid' => 'int32',
        'wishlist_member_sku' => null
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
        'wishlist_member_instance_description' => 'wishlist_member_instance_description',
        'wishlist_member_instance_oid' => 'wishlist_member_instance_oid',
        'wishlist_member_sku' => 'wishlist_member_sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wishlist_member_instance_description' => 'setWishlistMemberInstanceDescription',
        'wishlist_member_instance_oid' => 'setWishlistMemberInstanceOid',
        'wishlist_member_sku' => 'setWishlistMemberSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wishlist_member_instance_description' => 'getWishlistMemberInstanceDescription',
        'wishlist_member_instance_oid' => 'getWishlistMemberInstanceOid',
        'wishlist_member_sku' => 'getWishlistMemberSku'
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
        $this->container['wishlist_member_instance_description'] = isset($data['wishlist_member_instance_description']) ? $data['wishlist_member_instance_description'] : null;
        $this->container['wishlist_member_instance_oid'] = isset($data['wishlist_member_instance_oid']) ? $data['wishlist_member_instance_oid'] : null;
        $this->container['wishlist_member_sku'] = isset($data['wishlist_member_sku']) ? $data['wishlist_member_sku'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['wishlist_member_sku']) && (strlen($this->container['wishlist_member_sku']) > 25)) {
            $invalidProperties[] = "invalid value for 'wishlist_member_sku', the character length must be smaller than or equal to 25.";
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

        if (strlen($this->container['wishlist_member_sku']) > 25) {
            return false;
        }
        return true;
    }


    /**
     * Gets wishlist_member_instance_description
     *
     * @return string
     */
    public function getWishlistMemberInstanceDescription()
    {
        return $this->container['wishlist_member_instance_description'];
    }

    /**
     * Sets wishlist_member_instance_description
     *
     * @param string $wishlist_member_instance_description WishList Member instance description
     *
     * @return $this
     */
    public function setWishlistMemberInstanceDescription($wishlist_member_instance_description)
    {
        $this->container['wishlist_member_instance_description'] = $wishlist_member_instance_description;

        return $this;
    }

    /**
     * Gets wishlist_member_instance_oid
     *
     * @return int
     */
    public function getWishlistMemberInstanceOid()
    {
        return $this->container['wishlist_member_instance_oid'];
    }

    /**
     * Sets wishlist_member_instance_oid
     *
     * @param int $wishlist_member_instance_oid WishList Member instance object identifier
     *
     * @return $this
     */
    public function setWishlistMemberInstanceOid($wishlist_member_instance_oid)
    {
        $this->container['wishlist_member_instance_oid'] = $wishlist_member_instance_oid;

        return $this;
    }

    /**
     * Gets wishlist_member_sku
     *
     * @return string
     */
    public function getWishlistMemberSku()
    {
        return $this->container['wishlist_member_sku'];
    }

    /**
     * Sets wishlist_member_sku
     *
     * @param string $wishlist_member_sku WishList Member SKU
     *
     * @return $this
     */
    public function setWishlistMemberSku($wishlist_member_sku)
    {
        if (!is_null($wishlist_member_sku) && (strlen($wishlist_member_sku) > 25)) {
            throw new \InvalidArgumentException('invalid length for $wishlist_member_sku when calling ItemWishlistMember., must be smaller than or equal to 25.');
        }

        $this->container['wishlist_member_sku'] = $wishlist_member_sku;

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



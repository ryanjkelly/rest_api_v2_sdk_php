<?php
/**
 * ItemShippingDistributionCenter
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
 * ItemShippingDistributionCenter Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemShippingDistributionCenter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemShippingDistributionCenter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allocated_to_placed_orders' => 'float',
        'allocated_to_shopping_carts' => 'float',
        'available_to_allocate' => 'float',
        'desired_inventory_level' => 'float',
        'distribution_center_code' => 'string',
        'distribution_center_oid' => 'int',
        'eta' => 'string',
        'handles' => 'bool',
        'inventory_level' => 'float',
        'maximum_backorder' => 'int',
        'reorder_inventory_level' => 'float',
        'sku' => 'string',
        'stock_picking_location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allocated_to_placed_orders' => null,
        'allocated_to_shopping_carts' => null,
        'available_to_allocate' => null,
        'desired_inventory_level' => null,
        'distribution_center_code' => null,
        'distribution_center_oid' => 'int32',
        'eta' => 'dateTime',
        'handles' => null,
        'inventory_level' => null,
        'maximum_backorder' => 'int32',
        'reorder_inventory_level' => null,
        'sku' => null,
        'stock_picking_location' => null
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
        'allocated_to_placed_orders' => 'allocated_to_placed_orders',
        'allocated_to_shopping_carts' => 'allocated_to_shopping_carts',
        'available_to_allocate' => 'available_to_allocate',
        'desired_inventory_level' => 'desired_inventory_level',
        'distribution_center_code' => 'distribution_center_code',
        'distribution_center_oid' => 'distribution_center_oid',
        'eta' => 'eta',
        'handles' => 'handles',
        'inventory_level' => 'inventory_level',
        'maximum_backorder' => 'maximum_backorder',
        'reorder_inventory_level' => 'reorder_inventory_level',
        'sku' => 'sku',
        'stock_picking_location' => 'stock_picking_location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocated_to_placed_orders' => 'setAllocatedToPlacedOrders',
        'allocated_to_shopping_carts' => 'setAllocatedToShoppingCarts',
        'available_to_allocate' => 'setAvailableToAllocate',
        'desired_inventory_level' => 'setDesiredInventoryLevel',
        'distribution_center_code' => 'setDistributionCenterCode',
        'distribution_center_oid' => 'setDistributionCenterOid',
        'eta' => 'setEta',
        'handles' => 'setHandles',
        'inventory_level' => 'setInventoryLevel',
        'maximum_backorder' => 'setMaximumBackorder',
        'reorder_inventory_level' => 'setReorderInventoryLevel',
        'sku' => 'setSku',
        'stock_picking_location' => 'setStockPickingLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocated_to_placed_orders' => 'getAllocatedToPlacedOrders',
        'allocated_to_shopping_carts' => 'getAllocatedToShoppingCarts',
        'available_to_allocate' => 'getAvailableToAllocate',
        'desired_inventory_level' => 'getDesiredInventoryLevel',
        'distribution_center_code' => 'getDistributionCenterCode',
        'distribution_center_oid' => 'getDistributionCenterOid',
        'eta' => 'getEta',
        'handles' => 'getHandles',
        'inventory_level' => 'getInventoryLevel',
        'maximum_backorder' => 'getMaximumBackorder',
        'reorder_inventory_level' => 'getReorderInventoryLevel',
        'sku' => 'getSku',
        'stock_picking_location' => 'getStockPickingLocation'
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
        $this->container['allocated_to_placed_orders'] = isset($data['allocated_to_placed_orders']) ? $data['allocated_to_placed_orders'] : null;
        $this->container['allocated_to_shopping_carts'] = isset($data['allocated_to_shopping_carts']) ? $data['allocated_to_shopping_carts'] : null;
        $this->container['available_to_allocate'] = isset($data['available_to_allocate']) ? $data['available_to_allocate'] : null;
        $this->container['desired_inventory_level'] = isset($data['desired_inventory_level']) ? $data['desired_inventory_level'] : null;
        $this->container['distribution_center_code'] = isset($data['distribution_center_code']) ? $data['distribution_center_code'] : null;
        $this->container['distribution_center_oid'] = isset($data['distribution_center_oid']) ? $data['distribution_center_oid'] : null;
        $this->container['eta'] = isset($data['eta']) ? $data['eta'] : null;
        $this->container['handles'] = isset($data['handles']) ? $data['handles'] : null;
        $this->container['inventory_level'] = isset($data['inventory_level']) ? $data['inventory_level'] : null;
        $this->container['maximum_backorder'] = isset($data['maximum_backorder']) ? $data['maximum_backorder'] : null;
        $this->container['reorder_inventory_level'] = isset($data['reorder_inventory_level']) ? $data['reorder_inventory_level'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['stock_picking_location'] = isset($data['stock_picking_location']) ? $data['stock_picking_location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sku']) && (strlen($this->container['sku']) > 50)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['stock_picking_location']) && (strlen($this->container['stock_picking_location']) > 20)) {
            $invalidProperties[] = "invalid value for 'stock_picking_location', the character length must be smaller than or equal to 20.";
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

        if (strlen($this->container['sku']) > 50) {
            return false;
        }
        if (strlen($this->container['stock_picking_location']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets allocated_to_placed_orders
     *
     * @return float
     */
    public function getAllocatedToPlacedOrders()
    {
        return $this->container['allocated_to_placed_orders'];
    }

    /**
     * Sets allocated_to_placed_orders
     *
     * @param float $allocated_to_placed_orders Allocated to placed orders
     *
     * @return $this
     */
    public function setAllocatedToPlacedOrders($allocated_to_placed_orders)
    {
        $this->container['allocated_to_placed_orders'] = $allocated_to_placed_orders;

        return $this;
    }

    /**
     * Gets allocated_to_shopping_carts
     *
     * @return float
     */
    public function getAllocatedToShoppingCarts()
    {
        return $this->container['allocated_to_shopping_carts'];
    }

    /**
     * Sets allocated_to_shopping_carts
     *
     * @param float $allocated_to_shopping_carts Allocated to shopping carts
     *
     * @return $this
     */
    public function setAllocatedToShoppingCarts($allocated_to_shopping_carts)
    {
        $this->container['allocated_to_shopping_carts'] = $allocated_to_shopping_carts;

        return $this;
    }

    /**
     * Gets available_to_allocate
     *
     * @return float
     */
    public function getAvailableToAllocate()
    {
        return $this->container['available_to_allocate'];
    }

    /**
     * Sets available_to_allocate
     *
     * @param float $available_to_allocate Available to allocate
     *
     * @return $this
     */
    public function setAvailableToAllocate($available_to_allocate)
    {
        $this->container['available_to_allocate'] = $available_to_allocate;

        return $this;
    }

    /**
     * Gets desired_inventory_level
     *
     * @return float
     */
    public function getDesiredInventoryLevel()
    {
        return $this->container['desired_inventory_level'];
    }

    /**
     * Sets desired_inventory_level
     *
     * @param float $desired_inventory_level Desired inventory level
     *
     * @return $this
     */
    public function setDesiredInventoryLevel($desired_inventory_level)
    {
        $this->container['desired_inventory_level'] = $desired_inventory_level;

        return $this;
    }

    /**
     * Gets distribution_center_code
     *
     * @return string
     */
    public function getDistributionCenterCode()
    {
        return $this->container['distribution_center_code'];
    }

    /**
     * Sets distribution_center_code
     *
     * @param string $distribution_center_code Distribution center code
     *
     * @return $this
     */
    public function setDistributionCenterCode($distribution_center_code)
    {
        $this->container['distribution_center_code'] = $distribution_center_code;

        return $this;
    }

    /**
     * Gets distribution_center_oid
     *
     * @return int
     */
    public function getDistributionCenterOid()
    {
        return $this->container['distribution_center_oid'];
    }

    /**
     * Sets distribution_center_oid
     *
     * @param int $distribution_center_oid Distribution center object identifier
     *
     * @return $this
     */
    public function setDistributionCenterOid($distribution_center_oid)
    {
        $this->container['distribution_center_oid'] = $distribution_center_oid;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return string
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param string $eta Estimated time of arrival
     *
     * @return $this
     */
    public function setEta($eta)
    {
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets handles
     *
     * @return bool
     */
    public function getHandles()
    {
        return $this->container['handles'];
    }

    /**
     * Sets handles
     *
     * @param bool $handles True if this distribution center handles this item
     *
     * @return $this
     */
    public function setHandles($handles)
    {
        $this->container['handles'] = $handles;

        return $this;
    }

    /**
     * Gets inventory_level
     *
     * @return float
     */
    public function getInventoryLevel()
    {
        return $this->container['inventory_level'];
    }

    /**
     * Sets inventory_level
     *
     * @param float $inventory_level Inventory level
     *
     * @return $this
     */
    public function setInventoryLevel($inventory_level)
    {
        $this->container['inventory_level'] = $inventory_level;

        return $this;
    }

    /**
     * Gets maximum_backorder
     *
     * @return int
     */
    public function getMaximumBackorder()
    {
        return $this->container['maximum_backorder'];
    }

    /**
     * Sets maximum_backorder
     *
     * @param int $maximum_backorder Maximum back-order
     *
     * @return $this
     */
    public function setMaximumBackorder($maximum_backorder)
    {
        $this->container['maximum_backorder'] = $maximum_backorder;

        return $this;
    }

    /**
     * Gets reorder_inventory_level
     *
     * @return float
     */
    public function getReorderInventoryLevel()
    {
        return $this->container['reorder_inventory_level'];
    }

    /**
     * Sets reorder_inventory_level
     *
     * @param float $reorder_inventory_level Reorder inventory level (triggers notification)
     *
     * @return $this
     */
    public function setReorderInventoryLevel($reorder_inventory_level)
    {
        $this->container['reorder_inventory_level'] = $reorder_inventory_level;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku SKU
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (strlen($sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling ItemShippingDistributionCenter., must be smaller than or equal to 50.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets stock_picking_location
     *
     * @return string
     */
    public function getStockPickingLocation()
    {
        return $this->container['stock_picking_location'];
    }

    /**
     * Sets stock_picking_location
     *
     * @param string $stock_picking_location Stock picking location
     *
     * @return $this
     */
    public function setStockPickingLocation($stock_picking_location)
    {
        if (!is_null($stock_picking_location) && (strlen($stock_picking_location) > 20)) {
            throw new \InvalidArgumentException('invalid length for $stock_picking_location when calling ItemShippingDistributionCenter., must be smaller than or equal to 20.');
        }

        $this->container['stock_picking_location'] = $stock_picking_location;

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


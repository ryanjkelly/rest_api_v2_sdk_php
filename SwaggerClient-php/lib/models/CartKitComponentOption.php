<?php
/**
 * CartKitComponentOption
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
 * CartKitComponentOption Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartKitComponentOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartKitComponentOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost_if_specified' => '\ultracart\v2\models\Currency',
        'cost_per_letter' => '\ultracart\v2\models\Currency',
        'cost_per_line' => '\ultracart\v2\models\Currency',
        'ignore_if_default' => 'bool',
        'item_id' => 'string',
        'item_oid' => 'int',
        'label' => 'string',
        'name' => 'string',
        'one_time_fee' => 'bool',
        'option_oid' => 'int',
        'required' => 'bool',
        'selected_value' => 'string',
        'type' => 'string',
        'values' => '\ultracart\v2\models\CartItemOptionValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost_if_specified' => null,
        'cost_per_letter' => null,
        'cost_per_line' => null,
        'ignore_if_default' => null,
        'item_id' => null,
        'item_oid' => 'int32',
        'label' => null,
        'name' => null,
        'one_time_fee' => null,
        'option_oid' => 'int32',
        'required' => null,
        'selected_value' => null,
        'type' => null,
        'values' => null
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
        'cost_if_specified' => 'cost_if_specified',
        'cost_per_letter' => 'cost_per_letter',
        'cost_per_line' => 'cost_per_line',
        'ignore_if_default' => 'ignore_if_default',
        'item_id' => 'item_id',
        'item_oid' => 'item_oid',
        'label' => 'label',
        'name' => 'name',
        'one_time_fee' => 'one_time_fee',
        'option_oid' => 'option_oid',
        'required' => 'required',
        'selected_value' => 'selected_value',
        'type' => 'type',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_if_specified' => 'setCostIfSpecified',
        'cost_per_letter' => 'setCostPerLetter',
        'cost_per_line' => 'setCostPerLine',
        'ignore_if_default' => 'setIgnoreIfDefault',
        'item_id' => 'setItemId',
        'item_oid' => 'setItemOid',
        'label' => 'setLabel',
        'name' => 'setName',
        'one_time_fee' => 'setOneTimeFee',
        'option_oid' => 'setOptionOid',
        'required' => 'setRequired',
        'selected_value' => 'setSelectedValue',
        'type' => 'setType',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_if_specified' => 'getCostIfSpecified',
        'cost_per_letter' => 'getCostPerLetter',
        'cost_per_line' => 'getCostPerLine',
        'ignore_if_default' => 'getIgnoreIfDefault',
        'item_id' => 'getItemId',
        'item_oid' => 'getItemOid',
        'label' => 'getLabel',
        'name' => 'getName',
        'one_time_fee' => 'getOneTimeFee',
        'option_oid' => 'getOptionOid',
        'required' => 'getRequired',
        'selected_value' => 'getSelectedValue',
        'type' => 'getType',
        'values' => 'getValues'
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

    const TYPE_SINGLE = 'single';
    const TYPE_MULTILINE = 'multiline';
    const TYPE_DROPDOWN = 'dropdown';
    const TYPE_HIDDEN = 'hidden';
    const TYPE_RADIO = 'radio';
    const TYPE_FIXED = 'fixed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_MULTILINE,
            self::TYPE_DROPDOWN,
            self::TYPE_HIDDEN,
            self::TYPE_RADIO,
            self::TYPE_FIXED,
        ];
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
        $this->container['cost_if_specified'] = isset($data['cost_if_specified']) ? $data['cost_if_specified'] : null;
        $this->container['cost_per_letter'] = isset($data['cost_per_letter']) ? $data['cost_per_letter'] : null;
        $this->container['cost_per_line'] = isset($data['cost_per_line']) ? $data['cost_per_line'] : null;
        $this->container['ignore_if_default'] = isset($data['ignore_if_default']) ? $data['ignore_if_default'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_oid'] = isset($data['item_oid']) ? $data['item_oid'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['one_time_fee'] = isset($data['one_time_fee']) ? $data['one_time_fee'] : null;
        $this->container['option_oid'] = isset($data['option_oid']) ? $data['option_oid'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['selected_value'] = isset($data['selected_value']) ? $data['selected_value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['selected_value']) && (strlen($this->container['selected_value']) > 1024)) {
            $invalidProperties[] = "invalid value for 'selected_value', the character length must be smaller than or equal to 1024.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if (strlen($this->container['selected_value']) > 1024) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets cost_if_specified
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getCostIfSpecified()
    {
        return $this->container['cost_if_specified'];
    }

    /**
     * Sets cost_if_specified
     *
     * @param \ultracart\v2\models\Currency $cost_if_specified cost_if_specified
     *
     * @return $this
     */
    public function setCostIfSpecified($cost_if_specified)
    {
        $this->container['cost_if_specified'] = $cost_if_specified;

        return $this;
    }

    /**
     * Gets cost_per_letter
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getCostPerLetter()
    {
        return $this->container['cost_per_letter'];
    }

    /**
     * Sets cost_per_letter
     *
     * @param \ultracart\v2\models\Currency $cost_per_letter cost_per_letter
     *
     * @return $this
     */
    public function setCostPerLetter($cost_per_letter)
    {
        $this->container['cost_per_letter'] = $cost_per_letter;

        return $this;
    }

    /**
     * Gets cost_per_line
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getCostPerLine()
    {
        return $this->container['cost_per_line'];
    }

    /**
     * Sets cost_per_line
     *
     * @param \ultracart\v2\models\Currency $cost_per_line cost_per_line
     *
     * @return $this
     */
    public function setCostPerLine($cost_per_line)
    {
        $this->container['cost_per_line'] = $cost_per_line;

        return $this;
    }

    /**
     * Gets ignore_if_default
     *
     * @return bool
     */
    public function getIgnoreIfDefault()
    {
        return $this->container['ignore_if_default'];
    }

    /**
     * Sets ignore_if_default
     *
     * @param bool $ignore_if_default True if the default answer is ignored
     *
     * @return $this
     */
    public function setIgnoreIfDefault($ignore_if_default)
    {
        $this->container['ignore_if_default'] = $ignore_if_default;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Kit component item id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_oid
     *
     * @return int
     */
    public function getItemOid()
    {
        return $this->container['item_oid'];
    }

    /**
     * Sets item_oid
     *
     * @param int $item_oid Unique identifier for the kit component item
     *
     * @return $this
     */
    public function setItemOid($item_oid)
    {
        $this->container['item_oid'] = $item_oid;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Display label for the option
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the option
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets one_time_fee
     *
     * @return bool
     */
    public function getOneTimeFee()
    {
        return $this->container['one_time_fee'];
    }

    /**
     * Sets one_time_fee
     *
     * @param bool $one_time_fee Charge the fee a single time instead of multiplying by the quantity
     *
     * @return $this
     */
    public function setOneTimeFee($one_time_fee)
    {
        $this->container['one_time_fee'] = $one_time_fee;

        return $this;
    }

    /**
     * Gets option_oid
     *
     * @return int
     */
    public function getOptionOid()
    {
        return $this->container['option_oid'];
    }

    /**
     * Sets option_oid
     *
     * @param int $option_oid Unique identifier for the option
     *
     * @return $this
     */
    public function setOptionOid($option_oid)
    {
        $this->container['option_oid'] = $option_oid;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required True if the customer is required to select a value
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets selected_value
     *
     * @return string
     */
    public function getSelectedValue()
    {
        return $this->container['selected_value'];
    }

    /**
     * Sets selected_value
     *
     * @param string $selected_value The value of the option specified by the customer
     *
     * @return $this
     */
    public function setSelectedValue($selected_value)
    {
        if (!is_null($selected_value) && (strlen($selected_value) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $selected_value when calling CartKitComponentOption., must be smaller than or equal to 1024.');
        }

        $this->container['selected_value'] = $selected_value;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of option
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \ultracart\v2\models\CartItemOptionValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \ultracart\v2\models\CartItemOptionValue[] $values Values that the customer can select from for radio or select type options
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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



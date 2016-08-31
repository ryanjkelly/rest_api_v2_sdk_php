<?php
/**
 * ItemContent
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2
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

namespace ultracart\admin\v2\models;

use \ArrayAccess;

/**
 * ItemContent Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemContent implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'assignments' => '\ultracart\admin\v2\models\ItemContentAssignment[]',
        'attributes' => '\ultracart\admin\v2\models\ItemContentAttribute[]',
        'exclude_from_search' => 'bool',
        'exclude_from_top_sellers' => 'bool',
        'extended_description' => 'string',
        'extended_description_translated_text_instance_oid' => 'int',
        'multimedia' => '\ultracart\admin\v2\models\ItemContentMultimedia[]',
        'new_item' => 'bool',
        'new_item_end' => 'string',
        'new_item_start' => 'string',
        'view_url' => 'string'
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
        'assignments' => 'assignments',
        'attributes' => 'attributes',
        'exclude_from_search' => 'exclude_from_search',
        'exclude_from_top_sellers' => 'exclude_from_top_sellers',
        'extended_description' => 'extended_description',
        'extended_description_translated_text_instance_oid' => 'extended_description_translated_text_instance_oid',
        'multimedia' => 'multimedia',
        'new_item' => 'new_item',
        'new_item_end' => 'new_item_end',
        'new_item_start' => 'new_item_start',
        'view_url' => 'view_url'
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
        'assignments' => 'setAssignments',
        'attributes' => 'setAttributes',
        'exclude_from_search' => 'setExcludeFromSearch',
        'exclude_from_top_sellers' => 'setExcludeFromTopSellers',
        'extended_description' => 'setExtendedDescription',
        'extended_description_translated_text_instance_oid' => 'setExtendedDescriptionTranslatedTextInstanceOid',
        'multimedia' => 'setMultimedia',
        'new_item' => 'setNewItem',
        'new_item_end' => 'setNewItemEnd',
        'new_item_start' => 'setNewItemStart',
        'view_url' => 'setViewUrl'
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
        'assignments' => 'getAssignments',
        'attributes' => 'getAttributes',
        'exclude_from_search' => 'getExcludeFromSearch',
        'exclude_from_top_sellers' => 'getExcludeFromTopSellers',
        'extended_description' => 'getExtendedDescription',
        'extended_description_translated_text_instance_oid' => 'getExtendedDescriptionTranslatedTextInstanceOid',
        'multimedia' => 'getMultimedia',
        'new_item' => 'getNewItem',
        'new_item_end' => 'getNewItemEnd',
        'new_item_start' => 'getNewItemStart',
        'view_url' => 'getViewUrl'
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
        $this->container['assignments'] = isset($data['assignments']) ? $data['assignments'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['exclude_from_search'] = isset($data['exclude_from_search']) ? $data['exclude_from_search'] : null;
        $this->container['exclude_from_top_sellers'] = isset($data['exclude_from_top_sellers']) ? $data['exclude_from_top_sellers'] : null;
        $this->container['extended_description'] = isset($data['extended_description']) ? $data['extended_description'] : null;
        $this->container['extended_description_translated_text_instance_oid'] = isset($data['extended_description_translated_text_instance_oid']) ? $data['extended_description_translated_text_instance_oid'] : null;
        $this->container['multimedia'] = isset($data['multimedia']) ? $data['multimedia'] : null;
        $this->container['new_item'] = isset($data['new_item']) ? $data['new_item'] : null;
        $this->container['new_item_end'] = isset($data['new_item_end']) ? $data['new_item_end'] : null;
        $this->container['new_item_start'] = isset($data['new_item_start']) ? $data['new_item_start'] : null;
        $this->container['view_url'] = isset($data['view_url']) ? $data['view_url'] : null;
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
     * Gets assignments
     * @return \ultracart\admin\v2\models\ItemContentAssignment[]
     */
    public function getAssignments()
    {
        return $this->container['assignments'];
    }

    /**
     * Sets assignments
     * @param \ultracart\admin\v2\models\ItemContentAssignment[] $assignments
     * @return $this
     */
    public function setAssignments($assignments)
    {
        $this->container['assignments'] = $assignments;

        return $this;
    }

    /**
     * Gets attributes
     * @return \ultracart\admin\v2\models\ItemContentAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \ultracart\admin\v2\models\ItemContentAttribute[] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets exclude_from_search
     * @return bool
     */
    public function getExcludeFromSearch()
    {
        return $this->container['exclude_from_search'];
    }

    /**
     * Sets exclude_from_search
     * @param bool $exclude_from_search
     * @return $this
     */
    public function setExcludeFromSearch($exclude_from_search)
    {
        $this->container['exclude_from_search'] = $exclude_from_search;

        return $this;
    }

    /**
     * Gets exclude_from_top_sellers
     * @return bool
     */
    public function getExcludeFromTopSellers()
    {
        return $this->container['exclude_from_top_sellers'];
    }

    /**
     * Sets exclude_from_top_sellers
     * @param bool $exclude_from_top_sellers
     * @return $this
     */
    public function setExcludeFromTopSellers($exclude_from_top_sellers)
    {
        $this->container['exclude_from_top_sellers'] = $exclude_from_top_sellers;

        return $this;
    }

    /**
     * Gets extended_description
     * @return string
     */
    public function getExtendedDescription()
    {
        return $this->container['extended_description'];
    }

    /**
     * Sets extended_description
     * @param string $extended_description
     * @return $this
     */
    public function setExtendedDescription($extended_description)
    {
        $this->container['extended_description'] = $extended_description;

        return $this;
    }

    /**
     * Gets extended_description_translated_text_instance_oid
     * @return int
     */
    public function getExtendedDescriptionTranslatedTextInstanceOid()
    {
        return $this->container['extended_description_translated_text_instance_oid'];
    }

    /**
     * Sets extended_description_translated_text_instance_oid
     * @param int $extended_description_translated_text_instance_oid
     * @return $this
     */
    public function setExtendedDescriptionTranslatedTextInstanceOid($extended_description_translated_text_instance_oid)
    {
        $this->container['extended_description_translated_text_instance_oid'] = $extended_description_translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets multimedia
     * @return \ultracart\admin\v2\models\ItemContentMultimedia[]
     */
    public function getMultimedia()
    {
        return $this->container['multimedia'];
    }

    /**
     * Sets multimedia
     * @param \ultracart\admin\v2\models\ItemContentMultimedia[] $multimedia
     * @return $this
     */
    public function setMultimedia($multimedia)
    {
        $this->container['multimedia'] = $multimedia;

        return $this;
    }

    /**
     * Gets new_item
     * @return bool
     */
    public function getNewItem()
    {
        return $this->container['new_item'];
    }

    /**
     * Sets new_item
     * @param bool $new_item
     * @return $this
     */
    public function setNewItem($new_item)
    {
        $this->container['new_item'] = $new_item;

        return $this;
    }

    /**
     * Gets new_item_end
     * @return string
     */
    public function getNewItemEnd()
    {
        return $this->container['new_item_end'];
    }

    /**
     * Sets new_item_end
     * @param string $new_item_end
     * @return $this
     */
    public function setNewItemEnd($new_item_end)
    {
        $this->container['new_item_end'] = $new_item_end;

        return $this;
    }

    /**
     * Gets new_item_start
     * @return string
     */
    public function getNewItemStart()
    {
        return $this->container['new_item_start'];
    }

    /**
     * Sets new_item_start
     * @param string $new_item_start
     * @return $this
     */
    public function setNewItemStart($new_item_start)
    {
        $this->container['new_item_start'] = $new_item_start;

        return $this;
    }

    /**
     * Gets view_url
     * @return string
     */
    public function getViewUrl()
    {
        return $this->container['view_url'];
    }

    /**
     * Sets view_url
     * @param string $view_url
     * @return $this
     */
    public function setViewUrl($view_url)
    {
        $this->container['view_url'] = $view_url;

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
            return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


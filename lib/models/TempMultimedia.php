<?php
/**
 * TempMultimedia
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
 * TempMultimedia Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TempMultimedia implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TempMultimedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'filename' => 'string',
        'height' => 'int',
        'multimedia_type' => 'string',
        'size' => 'int',
        'temp_multimedia_oid' => 'int',
        'url' => 'string',
        'width' => 'int'
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
        'filename' => 'filename',
        'height' => 'height',
        'multimedia_type' => 'multimedia_type',
        'size' => 'size',
        'temp_multimedia_oid' => 'temp_multimedia_oid',
        'url' => 'url',
        'width' => 'width'
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
        'filename' => 'setFilename',
        'height' => 'setHeight',
        'multimedia_type' => 'setMultimediaType',
        'size' => 'setSize',
        'temp_multimedia_oid' => 'setTempMultimediaOid',
        'url' => 'setUrl',
        'width' => 'setWidth'
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
        'filename' => 'getFilename',
        'height' => 'getHeight',
        'multimedia_type' => 'getMultimediaType',
        'size' => 'getSize',
        'temp_multimedia_oid' => 'getTempMultimediaOid',
        'url' => 'getUrl',
        'width' => 'getWidth'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const MULTIMEDIA_TYPE_IMAGE = 'Image';
    const MULTIMEDIA_TYPE_PDF = 'PDF';
    const MULTIMEDIA_TYPE_TEXT = 'Text';
    const MULTIMEDIA_TYPE_VIDEO = 'Video';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMultimediaTypeAllowableValues()
    {
        return [
            self::MULTIMEDIA_TYPE_IMAGE,
            self::MULTIMEDIA_TYPE_PDF,
            self::MULTIMEDIA_TYPE_TEXT,
            self::MULTIMEDIA_TYPE_VIDEO,
        ];
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
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['multimedia_type'] = isset($data['multimedia_type']) ? $data['multimedia_type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['temp_multimedia_oid'] = isset($data['temp_multimedia_oid']) ? $data['temp_multimedia_oid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['filename']) && (strlen($this->container['filename']) > 75)) {
            $invalid_properties[] = "invalid value for 'filename', the character length must be smaller than or equal to 75.";
        }

        $allowed_values = array("Image", "PDF", "Text", "Video");
        if (!in_array($this->container['multimedia_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'multimedia_type', must be one of #{allowed_values}.";
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
        if (strlen($this->container['filename']) > 75) {
            return false;
        }
        $allowed_values = array("Image", "PDF", "Text", "Video");
        if (!in_array($this->container['multimedia_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     * @param string $filename Filename
     * @return $this
     */
    public function setFilename($filename)
    {
        if (strlen($filename) > 75) {
            throw new \InvalidArgumentException('invalid length for $filename when calling TempMultimedia., must be smaller than or equal to 75.');
        }
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param int $height Height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets multimedia_type
     * @return string
     */
    public function getMultimediaType()
    {
        return $this->container['multimedia_type'];
    }

    /**
     * Sets multimedia_type
     * @param string $multimedia_type Multimedia type
     * @return $this
     */
    public function setMultimediaType($multimedia_type)
    {
        $allowed_values = array('Image', 'PDF', 'Text', 'Video');
        if (!in_array($multimedia_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'multimedia_type', must be one of 'Image', 'PDF', 'Text', 'Video'");
        }
        $this->container['multimedia_type'] = $multimedia_type;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size Size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets temp_multimedia_oid
     * @return int
     */
    public function getTempMultimediaOid()
    {
        return $this->container['temp_multimedia_oid'];
    }

    /**
     * Sets temp_multimedia_oid
     * @param int $temp_multimedia_oid Temporary multimedia object identifier
     * @return $this
     */
    public function setTempMultimediaOid($temp_multimedia_oid)
    {
        $this->container['temp_multimedia_oid'] = $temp_multimedia_oid;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url URL
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param int $width Width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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



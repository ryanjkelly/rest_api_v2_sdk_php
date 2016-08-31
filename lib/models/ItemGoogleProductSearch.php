<?php
/**
 * ItemGoogleProductSearch
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
 * ItemGoogleProductSearch Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemGoogleProductSearch implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemGoogleProductSearch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'adwords_grouping' => 'string',
        'adwords_label1' => 'string',
        'adwords_label2' => 'string',
        'adwords_label3' => 'string',
        'adwords_label4' => 'string',
        'adwords_label5' => 'string',
        'age_group' => 'string',
        'available_at_physical_store' => 'bool',
        'book_author' => 'string',
        'book_format' => 'string',
        'book_isbn' => 'string',
        'book_publisher' => 'string',
        'category_description' => 'string',
        'color' => 'string',
        'condition' => 'string',
        'custom_label0' => 'string',
        'custom_label1' => 'string',
        'custom_label2' => 'string',
        'custom_label3' => 'string',
        'custom_label4' => 'string',
        'gender' => 'string',
        'google_product_category' => 'string',
        'music_artist' => 'string',
        'music_format' => 'string',
        'music_release_date' => 'string',
        'omit_from_feed' => 'bool',
        'product_type' => 'string',
        'promotion_id1' => 'string',
        'promotion_id10' => 'string',
        'promotion_id2' => 'string',
        'promotion_id3' => 'string',
        'promotion_id4' => 'string',
        'promotion_id5' => 'string',
        'promotion_id6' => 'string',
        'promotion_id7' => 'string',
        'promotion_id8' => 'string',
        'promotion_id9' => 'string',
        'search_dts' => 'string',
        'search_lowest_price' => 'double',
        'search_lowest_url' => 'string',
        'search_position' => 'int',
        'size' => 'string',
        'video_director' => 'string',
        'video_format' => 'string',
        'video_rating' => 'string',
        'video_release_date' => 'string',
        'video_starring' => 'string'
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
        'adwords_grouping' => 'adwords_grouping',
        'adwords_label1' => 'adwords_label1',
        'adwords_label2' => 'adwords_label2',
        'adwords_label3' => 'adwords_label3',
        'adwords_label4' => 'adwords_label4',
        'adwords_label5' => 'adwords_label5',
        'age_group' => 'age_group',
        'available_at_physical_store' => 'available_at_physical_store',
        'book_author' => 'book_author',
        'book_format' => 'book_format',
        'book_isbn' => 'book_isbn',
        'book_publisher' => 'book_publisher',
        'category_description' => 'category_description',
        'color' => 'color',
        'condition' => 'condition',
        'custom_label0' => 'custom_label0',
        'custom_label1' => 'custom_label1',
        'custom_label2' => 'custom_label2',
        'custom_label3' => 'custom_label3',
        'custom_label4' => 'custom_label4',
        'gender' => 'gender',
        'google_product_category' => 'google_product_category',
        'music_artist' => 'music_artist',
        'music_format' => 'music_format',
        'music_release_date' => 'music_release_date',
        'omit_from_feed' => 'omit_from_feed',
        'product_type' => 'product_type',
        'promotion_id1' => 'promotion_id1',
        'promotion_id10' => 'promotion_id10',
        'promotion_id2' => 'promotion_id2',
        'promotion_id3' => 'promotion_id3',
        'promotion_id4' => 'promotion_id4',
        'promotion_id5' => 'promotion_id5',
        'promotion_id6' => 'promotion_id6',
        'promotion_id7' => 'promotion_id7',
        'promotion_id8' => 'promotion_id8',
        'promotion_id9' => 'promotion_id9',
        'search_dts' => 'search_dts',
        'search_lowest_price' => 'search_lowest_price',
        'search_lowest_url' => 'search_lowest_url',
        'search_position' => 'search_position',
        'size' => 'size',
        'video_director' => 'video_director',
        'video_format' => 'video_format',
        'video_rating' => 'video_rating',
        'video_release_date' => 'video_release_date',
        'video_starring' => 'video_starring'
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
        'adwords_grouping' => 'setAdwordsGrouping',
        'adwords_label1' => 'setAdwordsLabel1',
        'adwords_label2' => 'setAdwordsLabel2',
        'adwords_label3' => 'setAdwordsLabel3',
        'adwords_label4' => 'setAdwordsLabel4',
        'adwords_label5' => 'setAdwordsLabel5',
        'age_group' => 'setAgeGroup',
        'available_at_physical_store' => 'setAvailableAtPhysicalStore',
        'book_author' => 'setBookAuthor',
        'book_format' => 'setBookFormat',
        'book_isbn' => 'setBookIsbn',
        'book_publisher' => 'setBookPublisher',
        'category_description' => 'setCategoryDescription',
        'color' => 'setColor',
        'condition' => 'setCondition',
        'custom_label0' => 'setCustomLabel0',
        'custom_label1' => 'setCustomLabel1',
        'custom_label2' => 'setCustomLabel2',
        'custom_label3' => 'setCustomLabel3',
        'custom_label4' => 'setCustomLabel4',
        'gender' => 'setGender',
        'google_product_category' => 'setGoogleProductCategory',
        'music_artist' => 'setMusicArtist',
        'music_format' => 'setMusicFormat',
        'music_release_date' => 'setMusicReleaseDate',
        'omit_from_feed' => 'setOmitFromFeed',
        'product_type' => 'setProductType',
        'promotion_id1' => 'setPromotionId1',
        'promotion_id10' => 'setPromotionId10',
        'promotion_id2' => 'setPromotionId2',
        'promotion_id3' => 'setPromotionId3',
        'promotion_id4' => 'setPromotionId4',
        'promotion_id5' => 'setPromotionId5',
        'promotion_id6' => 'setPromotionId6',
        'promotion_id7' => 'setPromotionId7',
        'promotion_id8' => 'setPromotionId8',
        'promotion_id9' => 'setPromotionId9',
        'search_dts' => 'setSearchDts',
        'search_lowest_price' => 'setSearchLowestPrice',
        'search_lowest_url' => 'setSearchLowestUrl',
        'search_position' => 'setSearchPosition',
        'size' => 'setSize',
        'video_director' => 'setVideoDirector',
        'video_format' => 'setVideoFormat',
        'video_rating' => 'setVideoRating',
        'video_release_date' => 'setVideoReleaseDate',
        'video_starring' => 'setVideoStarring'
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
        'adwords_grouping' => 'getAdwordsGrouping',
        'adwords_label1' => 'getAdwordsLabel1',
        'adwords_label2' => 'getAdwordsLabel2',
        'adwords_label3' => 'getAdwordsLabel3',
        'adwords_label4' => 'getAdwordsLabel4',
        'adwords_label5' => 'getAdwordsLabel5',
        'age_group' => 'getAgeGroup',
        'available_at_physical_store' => 'getAvailableAtPhysicalStore',
        'book_author' => 'getBookAuthor',
        'book_format' => 'getBookFormat',
        'book_isbn' => 'getBookIsbn',
        'book_publisher' => 'getBookPublisher',
        'category_description' => 'getCategoryDescription',
        'color' => 'getColor',
        'condition' => 'getCondition',
        'custom_label0' => 'getCustomLabel0',
        'custom_label1' => 'getCustomLabel1',
        'custom_label2' => 'getCustomLabel2',
        'custom_label3' => 'getCustomLabel3',
        'custom_label4' => 'getCustomLabel4',
        'gender' => 'getGender',
        'google_product_category' => 'getGoogleProductCategory',
        'music_artist' => 'getMusicArtist',
        'music_format' => 'getMusicFormat',
        'music_release_date' => 'getMusicReleaseDate',
        'omit_from_feed' => 'getOmitFromFeed',
        'product_type' => 'getProductType',
        'promotion_id1' => 'getPromotionId1',
        'promotion_id10' => 'getPromotionId10',
        'promotion_id2' => 'getPromotionId2',
        'promotion_id3' => 'getPromotionId3',
        'promotion_id4' => 'getPromotionId4',
        'promotion_id5' => 'getPromotionId5',
        'promotion_id6' => 'getPromotionId6',
        'promotion_id7' => 'getPromotionId7',
        'promotion_id8' => 'getPromotionId8',
        'promotion_id9' => 'getPromotionId9',
        'search_dts' => 'getSearchDts',
        'search_lowest_price' => 'getSearchLowestPrice',
        'search_lowest_url' => 'getSearchLowestUrl',
        'search_position' => 'getSearchPosition',
        'size' => 'getSize',
        'video_director' => 'getVideoDirector',
        'video_format' => 'getVideoFormat',
        'video_rating' => 'getVideoRating',
        'video_release_date' => 'getVideoReleaseDate',
        'video_starring' => 'getVideoStarring'
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
        $this->container['adwords_grouping'] = isset($data['adwords_grouping']) ? $data['adwords_grouping'] : null;
        $this->container['adwords_label1'] = isset($data['adwords_label1']) ? $data['adwords_label1'] : null;
        $this->container['adwords_label2'] = isset($data['adwords_label2']) ? $data['adwords_label2'] : null;
        $this->container['adwords_label3'] = isset($data['adwords_label3']) ? $data['adwords_label3'] : null;
        $this->container['adwords_label4'] = isset($data['adwords_label4']) ? $data['adwords_label4'] : null;
        $this->container['adwords_label5'] = isset($data['adwords_label5']) ? $data['adwords_label5'] : null;
        $this->container['age_group'] = isset($data['age_group']) ? $data['age_group'] : null;
        $this->container['available_at_physical_store'] = isset($data['available_at_physical_store']) ? $data['available_at_physical_store'] : null;
        $this->container['book_author'] = isset($data['book_author']) ? $data['book_author'] : null;
        $this->container['book_format'] = isset($data['book_format']) ? $data['book_format'] : null;
        $this->container['book_isbn'] = isset($data['book_isbn']) ? $data['book_isbn'] : null;
        $this->container['book_publisher'] = isset($data['book_publisher']) ? $data['book_publisher'] : null;
        $this->container['category_description'] = isset($data['category_description']) ? $data['category_description'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['custom_label0'] = isset($data['custom_label0']) ? $data['custom_label0'] : null;
        $this->container['custom_label1'] = isset($data['custom_label1']) ? $data['custom_label1'] : null;
        $this->container['custom_label2'] = isset($data['custom_label2']) ? $data['custom_label2'] : null;
        $this->container['custom_label3'] = isset($data['custom_label3']) ? $data['custom_label3'] : null;
        $this->container['custom_label4'] = isset($data['custom_label4']) ? $data['custom_label4'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['google_product_category'] = isset($data['google_product_category']) ? $data['google_product_category'] : null;
        $this->container['music_artist'] = isset($data['music_artist']) ? $data['music_artist'] : null;
        $this->container['music_format'] = isset($data['music_format']) ? $data['music_format'] : null;
        $this->container['music_release_date'] = isset($data['music_release_date']) ? $data['music_release_date'] : null;
        $this->container['omit_from_feed'] = isset($data['omit_from_feed']) ? $data['omit_from_feed'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['promotion_id1'] = isset($data['promotion_id1']) ? $data['promotion_id1'] : null;
        $this->container['promotion_id10'] = isset($data['promotion_id10']) ? $data['promotion_id10'] : null;
        $this->container['promotion_id2'] = isset($data['promotion_id2']) ? $data['promotion_id2'] : null;
        $this->container['promotion_id3'] = isset($data['promotion_id3']) ? $data['promotion_id3'] : null;
        $this->container['promotion_id4'] = isset($data['promotion_id4']) ? $data['promotion_id4'] : null;
        $this->container['promotion_id5'] = isset($data['promotion_id5']) ? $data['promotion_id5'] : null;
        $this->container['promotion_id6'] = isset($data['promotion_id6']) ? $data['promotion_id6'] : null;
        $this->container['promotion_id7'] = isset($data['promotion_id7']) ? $data['promotion_id7'] : null;
        $this->container['promotion_id8'] = isset($data['promotion_id8']) ? $data['promotion_id8'] : null;
        $this->container['promotion_id9'] = isset($data['promotion_id9']) ? $data['promotion_id9'] : null;
        $this->container['search_dts'] = isset($data['search_dts']) ? $data['search_dts'] : null;
        $this->container['search_lowest_price'] = isset($data['search_lowest_price']) ? $data['search_lowest_price'] : null;
        $this->container['search_lowest_url'] = isset($data['search_lowest_url']) ? $data['search_lowest_url'] : null;
        $this->container['search_position'] = isset($data['search_position']) ? $data['search_position'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['video_director'] = isset($data['video_director']) ? $data['video_director'] : null;
        $this->container['video_format'] = isset($data['video_format']) ? $data['video_format'] : null;
        $this->container['video_rating'] = isset($data['video_rating']) ? $data['video_rating'] : null;
        $this->container['video_release_date'] = isset($data['video_release_date']) ? $data['video_release_date'] : null;
        $this->container['video_starring'] = isset($data['video_starring']) ? $data['video_starring'] : null;
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
     * Gets adwords_grouping
     * @return string
     */
    public function getAdwordsGrouping()
    {
        return $this->container['adwords_grouping'];
    }

    /**
     * Sets adwords_grouping
     * @param string $adwords_grouping
     * @return $this
     */
    public function setAdwordsGrouping($adwords_grouping)
    {
        $this->container['adwords_grouping'] = $adwords_grouping;

        return $this;
    }

    /**
     * Gets adwords_label1
     * @return string
     */
    public function getAdwordsLabel1()
    {
        return $this->container['adwords_label1'];
    }

    /**
     * Sets adwords_label1
     * @param string $adwords_label1
     * @return $this
     */
    public function setAdwordsLabel1($adwords_label1)
    {
        $this->container['adwords_label1'] = $adwords_label1;

        return $this;
    }

    /**
     * Gets adwords_label2
     * @return string
     */
    public function getAdwordsLabel2()
    {
        return $this->container['adwords_label2'];
    }

    /**
     * Sets adwords_label2
     * @param string $adwords_label2
     * @return $this
     */
    public function setAdwordsLabel2($adwords_label2)
    {
        $this->container['adwords_label2'] = $adwords_label2;

        return $this;
    }

    /**
     * Gets adwords_label3
     * @return string
     */
    public function getAdwordsLabel3()
    {
        return $this->container['adwords_label3'];
    }

    /**
     * Sets adwords_label3
     * @param string $adwords_label3
     * @return $this
     */
    public function setAdwordsLabel3($adwords_label3)
    {
        $this->container['adwords_label3'] = $adwords_label3;

        return $this;
    }

    /**
     * Gets adwords_label4
     * @return string
     */
    public function getAdwordsLabel4()
    {
        return $this->container['adwords_label4'];
    }

    /**
     * Sets adwords_label4
     * @param string $adwords_label4
     * @return $this
     */
    public function setAdwordsLabel4($adwords_label4)
    {
        $this->container['adwords_label4'] = $adwords_label4;

        return $this;
    }

    /**
     * Gets adwords_label5
     * @return string
     */
    public function getAdwordsLabel5()
    {
        return $this->container['adwords_label5'];
    }

    /**
     * Sets adwords_label5
     * @param string $adwords_label5
     * @return $this
     */
    public function setAdwordsLabel5($adwords_label5)
    {
        $this->container['adwords_label5'] = $adwords_label5;

        return $this;
    }

    /**
     * Gets age_group
     * @return string
     */
    public function getAgeGroup()
    {
        return $this->container['age_group'];
    }

    /**
     * Sets age_group
     * @param string $age_group
     * @return $this
     */
    public function setAgeGroup($age_group)
    {
        $this->container['age_group'] = $age_group;

        return $this;
    }

    /**
     * Gets available_at_physical_store
     * @return bool
     */
    public function getAvailableAtPhysicalStore()
    {
        return $this->container['available_at_physical_store'];
    }

    /**
     * Sets available_at_physical_store
     * @param bool $available_at_physical_store
     * @return $this
     */
    public function setAvailableAtPhysicalStore($available_at_physical_store)
    {
        $this->container['available_at_physical_store'] = $available_at_physical_store;

        return $this;
    }

    /**
     * Gets book_author
     * @return string
     */
    public function getBookAuthor()
    {
        return $this->container['book_author'];
    }

    /**
     * Sets book_author
     * @param string $book_author
     * @return $this
     */
    public function setBookAuthor($book_author)
    {
        $this->container['book_author'] = $book_author;

        return $this;
    }

    /**
     * Gets book_format
     * @return string
     */
    public function getBookFormat()
    {
        return $this->container['book_format'];
    }

    /**
     * Sets book_format
     * @param string $book_format
     * @return $this
     */
    public function setBookFormat($book_format)
    {
        $this->container['book_format'] = $book_format;

        return $this;
    }

    /**
     * Gets book_isbn
     * @return string
     */
    public function getBookIsbn()
    {
        return $this->container['book_isbn'];
    }

    /**
     * Sets book_isbn
     * @param string $book_isbn
     * @return $this
     */
    public function setBookIsbn($book_isbn)
    {
        $this->container['book_isbn'] = $book_isbn;

        return $this;
    }

    /**
     * Gets book_publisher
     * @return string
     */
    public function getBookPublisher()
    {
        return $this->container['book_publisher'];
    }

    /**
     * Sets book_publisher
     * @param string $book_publisher
     * @return $this
     */
    public function setBookPublisher($book_publisher)
    {
        $this->container['book_publisher'] = $book_publisher;

        return $this;
    }

    /**
     * Gets category_description
     * @return string
     */
    public function getCategoryDescription()
    {
        return $this->container['category_description'];
    }

    /**
     * Sets category_description
     * @param string $category_description
     * @return $this
     */
    public function setCategoryDescription($category_description)
    {
        $this->container['category_description'] = $category_description;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets custom_label0
     * @return string
     */
    public function getCustomLabel0()
    {
        return $this->container['custom_label0'];
    }

    /**
     * Sets custom_label0
     * @param string $custom_label0
     * @return $this
     */
    public function setCustomLabel0($custom_label0)
    {
        $this->container['custom_label0'] = $custom_label0;

        return $this;
    }

    /**
     * Gets custom_label1
     * @return string
     */
    public function getCustomLabel1()
    {
        return $this->container['custom_label1'];
    }

    /**
     * Sets custom_label1
     * @param string $custom_label1
     * @return $this
     */
    public function setCustomLabel1($custom_label1)
    {
        $this->container['custom_label1'] = $custom_label1;

        return $this;
    }

    /**
     * Gets custom_label2
     * @return string
     */
    public function getCustomLabel2()
    {
        return $this->container['custom_label2'];
    }

    /**
     * Sets custom_label2
     * @param string $custom_label2
     * @return $this
     */
    public function setCustomLabel2($custom_label2)
    {
        $this->container['custom_label2'] = $custom_label2;

        return $this;
    }

    /**
     * Gets custom_label3
     * @return string
     */
    public function getCustomLabel3()
    {
        return $this->container['custom_label3'];
    }

    /**
     * Sets custom_label3
     * @param string $custom_label3
     * @return $this
     */
    public function setCustomLabel3($custom_label3)
    {
        $this->container['custom_label3'] = $custom_label3;

        return $this;
    }

    /**
     * Gets custom_label4
     * @return string
     */
    public function getCustomLabel4()
    {
        return $this->container['custom_label4'];
    }

    /**
     * Sets custom_label4
     * @param string $custom_label4
     * @return $this
     */
    public function setCustomLabel4($custom_label4)
    {
        $this->container['custom_label4'] = $custom_label4;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets google_product_category
     * @return string
     */
    public function getGoogleProductCategory()
    {
        return $this->container['google_product_category'];
    }

    /**
     * Sets google_product_category
     * @param string $google_product_category
     * @return $this
     */
    public function setGoogleProductCategory($google_product_category)
    {
        $this->container['google_product_category'] = $google_product_category;

        return $this;
    }

    /**
     * Gets music_artist
     * @return string
     */
    public function getMusicArtist()
    {
        return $this->container['music_artist'];
    }

    /**
     * Sets music_artist
     * @param string $music_artist
     * @return $this
     */
    public function setMusicArtist($music_artist)
    {
        $this->container['music_artist'] = $music_artist;

        return $this;
    }

    /**
     * Gets music_format
     * @return string
     */
    public function getMusicFormat()
    {
        return $this->container['music_format'];
    }

    /**
     * Sets music_format
     * @param string $music_format
     * @return $this
     */
    public function setMusicFormat($music_format)
    {
        $this->container['music_format'] = $music_format;

        return $this;
    }

    /**
     * Gets music_release_date
     * @return string
     */
    public function getMusicReleaseDate()
    {
        return $this->container['music_release_date'];
    }

    /**
     * Sets music_release_date
     * @param string $music_release_date
     * @return $this
     */
    public function setMusicReleaseDate($music_release_date)
    {
        $this->container['music_release_date'] = $music_release_date;

        return $this;
    }

    /**
     * Gets omit_from_feed
     * @return bool
     */
    public function getOmitFromFeed()
    {
        return $this->container['omit_from_feed'];
    }

    /**
     * Sets omit_from_feed
     * @param bool $omit_from_feed
     * @return $this
     */
    public function setOmitFromFeed($omit_from_feed)
    {
        $this->container['omit_from_feed'] = $omit_from_feed;

        return $this;
    }

    /**
     * Gets product_type
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     * @param string $product_type
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets promotion_id1
     * @return string
     */
    public function getPromotionId1()
    {
        return $this->container['promotion_id1'];
    }

    /**
     * Sets promotion_id1
     * @param string $promotion_id1
     * @return $this
     */
    public function setPromotionId1($promotion_id1)
    {
        $this->container['promotion_id1'] = $promotion_id1;

        return $this;
    }

    /**
     * Gets promotion_id10
     * @return string
     */
    public function getPromotionId10()
    {
        return $this->container['promotion_id10'];
    }

    /**
     * Sets promotion_id10
     * @param string $promotion_id10
     * @return $this
     */
    public function setPromotionId10($promotion_id10)
    {
        $this->container['promotion_id10'] = $promotion_id10;

        return $this;
    }

    /**
     * Gets promotion_id2
     * @return string
     */
    public function getPromotionId2()
    {
        return $this->container['promotion_id2'];
    }

    /**
     * Sets promotion_id2
     * @param string $promotion_id2
     * @return $this
     */
    public function setPromotionId2($promotion_id2)
    {
        $this->container['promotion_id2'] = $promotion_id2;

        return $this;
    }

    /**
     * Gets promotion_id3
     * @return string
     */
    public function getPromotionId3()
    {
        return $this->container['promotion_id3'];
    }

    /**
     * Sets promotion_id3
     * @param string $promotion_id3
     * @return $this
     */
    public function setPromotionId3($promotion_id3)
    {
        $this->container['promotion_id3'] = $promotion_id3;

        return $this;
    }

    /**
     * Gets promotion_id4
     * @return string
     */
    public function getPromotionId4()
    {
        return $this->container['promotion_id4'];
    }

    /**
     * Sets promotion_id4
     * @param string $promotion_id4
     * @return $this
     */
    public function setPromotionId4($promotion_id4)
    {
        $this->container['promotion_id4'] = $promotion_id4;

        return $this;
    }

    /**
     * Gets promotion_id5
     * @return string
     */
    public function getPromotionId5()
    {
        return $this->container['promotion_id5'];
    }

    /**
     * Sets promotion_id5
     * @param string $promotion_id5
     * @return $this
     */
    public function setPromotionId5($promotion_id5)
    {
        $this->container['promotion_id5'] = $promotion_id5;

        return $this;
    }

    /**
     * Gets promotion_id6
     * @return string
     */
    public function getPromotionId6()
    {
        return $this->container['promotion_id6'];
    }

    /**
     * Sets promotion_id6
     * @param string $promotion_id6
     * @return $this
     */
    public function setPromotionId6($promotion_id6)
    {
        $this->container['promotion_id6'] = $promotion_id6;

        return $this;
    }

    /**
     * Gets promotion_id7
     * @return string
     */
    public function getPromotionId7()
    {
        return $this->container['promotion_id7'];
    }

    /**
     * Sets promotion_id7
     * @param string $promotion_id7
     * @return $this
     */
    public function setPromotionId7($promotion_id7)
    {
        $this->container['promotion_id7'] = $promotion_id7;

        return $this;
    }

    /**
     * Gets promotion_id8
     * @return string
     */
    public function getPromotionId8()
    {
        return $this->container['promotion_id8'];
    }

    /**
     * Sets promotion_id8
     * @param string $promotion_id8
     * @return $this
     */
    public function setPromotionId8($promotion_id8)
    {
        $this->container['promotion_id8'] = $promotion_id8;

        return $this;
    }

    /**
     * Gets promotion_id9
     * @return string
     */
    public function getPromotionId9()
    {
        return $this->container['promotion_id9'];
    }

    /**
     * Sets promotion_id9
     * @param string $promotion_id9
     * @return $this
     */
    public function setPromotionId9($promotion_id9)
    {
        $this->container['promotion_id9'] = $promotion_id9;

        return $this;
    }

    /**
     * Gets search_dts
     * @return string
     */
    public function getSearchDts()
    {
        return $this->container['search_dts'];
    }

    /**
     * Sets search_dts
     * @param string $search_dts
     * @return $this
     */
    public function setSearchDts($search_dts)
    {
        $this->container['search_dts'] = $search_dts;

        return $this;
    }

    /**
     * Gets search_lowest_price
     * @return double
     */
    public function getSearchLowestPrice()
    {
        return $this->container['search_lowest_price'];
    }

    /**
     * Sets search_lowest_price
     * @param double $search_lowest_price
     * @return $this
     */
    public function setSearchLowestPrice($search_lowest_price)
    {
        $this->container['search_lowest_price'] = $search_lowest_price;

        return $this;
    }

    /**
     * Gets search_lowest_url
     * @return string
     */
    public function getSearchLowestUrl()
    {
        return $this->container['search_lowest_url'];
    }

    /**
     * Sets search_lowest_url
     * @param string $search_lowest_url
     * @return $this
     */
    public function setSearchLowestUrl($search_lowest_url)
    {
        $this->container['search_lowest_url'] = $search_lowest_url;

        return $this;
    }

    /**
     * Gets search_position
     * @return int
     */
    public function getSearchPosition()
    {
        return $this->container['search_position'];
    }

    /**
     * Sets search_position
     * @param int $search_position
     * @return $this
     */
    public function setSearchPosition($search_position)
    {
        $this->container['search_position'] = $search_position;

        return $this;
    }

    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets video_director
     * @return string
     */
    public function getVideoDirector()
    {
        return $this->container['video_director'];
    }

    /**
     * Sets video_director
     * @param string $video_director
     * @return $this
     */
    public function setVideoDirector($video_director)
    {
        $this->container['video_director'] = $video_director;

        return $this;
    }

    /**
     * Gets video_format
     * @return string
     */
    public function getVideoFormat()
    {
        return $this->container['video_format'];
    }

    /**
     * Sets video_format
     * @param string $video_format
     * @return $this
     */
    public function setVideoFormat($video_format)
    {
        $this->container['video_format'] = $video_format;

        return $this;
    }

    /**
     * Gets video_rating
     * @return string
     */
    public function getVideoRating()
    {
        return $this->container['video_rating'];
    }

    /**
     * Sets video_rating
     * @param string $video_rating
     * @return $this
     */
    public function setVideoRating($video_rating)
    {
        $this->container['video_rating'] = $video_rating;

        return $this;
    }

    /**
     * Gets video_release_date
     * @return string
     */
    public function getVideoReleaseDate()
    {
        return $this->container['video_release_date'];
    }

    /**
     * Sets video_release_date
     * @param string $video_release_date
     * @return $this
     */
    public function setVideoReleaseDate($video_release_date)
    {
        $this->container['video_release_date'] = $video_release_date;

        return $this;
    }

    /**
     * Gets video_starring
     * @return string
     */
    public function getVideoStarring()
    {
        return $this->container['video_starring'];
    }

    /**
     * Sets video_starring
     * @param string $video_starring
     * @return $this
     */
    public function setVideoStarring($video_starring)
    {
        $this->container['video_starring'] = $video_starring;

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


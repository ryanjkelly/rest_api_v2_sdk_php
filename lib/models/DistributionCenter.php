<?php
/**
 * DistributionCenter
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
 * DistributionCenter Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DistributionCenter implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DistributionCenter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'code' => 'string',
        'country_code' => 'string',
        'default_center' => 'bool',
        'default_handles_all_items' => 'bool',
        'distribution_center_oid' => 'int',
        'duns' => 'string',
        'estimate_from_distribution_center_oid' => 'int',
        'ftp_password' => 'string',
        'hold_before_shipment_minutes' => 'int',
        'hold_before_transmission' => 'bool',
        'latitude' => 'float',
        'longitude' => 'float',
        'name' => 'string',
        'no_customer_direct_shipments' => 'bool',
        'no_split_shipment' => 'bool',
        'postal_code' => 'string',
        'process_days' => 'int',
        'process_inventory_start_time' => 'string',
        'process_inventory_stop_time' => 'string',
        'require_asn' => 'bool',
        'send_kit_instead_of_components' => 'bool',
        'shipment_cutoff_time_friday' => 'string',
        'shipment_cutoff_time_monday' => 'string',
        'shipment_cutoff_time_saturday' => 'string',
        'shipment_cutoff_time_sunday' => 'string',
        'shipment_cutoff_time_thursday' => 'string',
        'shipment_cutoff_time_tuesday' => 'string',
        'shipment_cutoff_time_wednesday' => 'string',
        'state' => 'string',
        'transport' => 'string'
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
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'code' => 'code',
        'country_code' => 'country_code',
        'default_center' => 'default_center',
        'default_handles_all_items' => 'default_handles_all_items',
        'distribution_center_oid' => 'distribution_center_oid',
        'duns' => 'duns',
        'estimate_from_distribution_center_oid' => 'estimate_from_distribution_center_oid',
        'ftp_password' => 'ftp_password',
        'hold_before_shipment_minutes' => 'hold_before_shipment_minutes',
        'hold_before_transmission' => 'hold_before_transmission',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'name' => 'name',
        'no_customer_direct_shipments' => 'no_customer_direct_shipments',
        'no_split_shipment' => 'no_split_shipment',
        'postal_code' => 'postal_code',
        'process_days' => 'process_days',
        'process_inventory_start_time' => 'process_inventory_start_time',
        'process_inventory_stop_time' => 'process_inventory_stop_time',
        'require_asn' => 'require_asn',
        'send_kit_instead_of_components' => 'send_kit_instead_of_components',
        'shipment_cutoff_time_friday' => 'shipment_cutoff_time_friday',
        'shipment_cutoff_time_monday' => 'shipment_cutoff_time_monday',
        'shipment_cutoff_time_saturday' => 'shipment_cutoff_time_saturday',
        'shipment_cutoff_time_sunday' => 'shipment_cutoff_time_sunday',
        'shipment_cutoff_time_thursday' => 'shipment_cutoff_time_thursday',
        'shipment_cutoff_time_tuesday' => 'shipment_cutoff_time_tuesday',
        'shipment_cutoff_time_wednesday' => 'shipment_cutoff_time_wednesday',
        'state' => 'state',
        'transport' => 'transport'
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
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'code' => 'setCode',
        'country_code' => 'setCountryCode',
        'default_center' => 'setDefaultCenter',
        'default_handles_all_items' => 'setDefaultHandlesAllItems',
        'distribution_center_oid' => 'setDistributionCenterOid',
        'duns' => 'setDuns',
        'estimate_from_distribution_center_oid' => 'setEstimateFromDistributionCenterOid',
        'ftp_password' => 'setFtpPassword',
        'hold_before_shipment_minutes' => 'setHoldBeforeShipmentMinutes',
        'hold_before_transmission' => 'setHoldBeforeTransmission',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'name' => 'setName',
        'no_customer_direct_shipments' => 'setNoCustomerDirectShipments',
        'no_split_shipment' => 'setNoSplitShipment',
        'postal_code' => 'setPostalCode',
        'process_days' => 'setProcessDays',
        'process_inventory_start_time' => 'setProcessInventoryStartTime',
        'process_inventory_stop_time' => 'setProcessInventoryStopTime',
        'require_asn' => 'setRequireAsn',
        'send_kit_instead_of_components' => 'setSendKitInsteadOfComponents',
        'shipment_cutoff_time_friday' => 'setShipmentCutoffTimeFriday',
        'shipment_cutoff_time_monday' => 'setShipmentCutoffTimeMonday',
        'shipment_cutoff_time_saturday' => 'setShipmentCutoffTimeSaturday',
        'shipment_cutoff_time_sunday' => 'setShipmentCutoffTimeSunday',
        'shipment_cutoff_time_thursday' => 'setShipmentCutoffTimeThursday',
        'shipment_cutoff_time_tuesday' => 'setShipmentCutoffTimeTuesday',
        'shipment_cutoff_time_wednesday' => 'setShipmentCutoffTimeWednesday',
        'state' => 'setState',
        'transport' => 'setTransport'
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
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'code' => 'getCode',
        'country_code' => 'getCountryCode',
        'default_center' => 'getDefaultCenter',
        'default_handles_all_items' => 'getDefaultHandlesAllItems',
        'distribution_center_oid' => 'getDistributionCenterOid',
        'duns' => 'getDuns',
        'estimate_from_distribution_center_oid' => 'getEstimateFromDistributionCenterOid',
        'ftp_password' => 'getFtpPassword',
        'hold_before_shipment_minutes' => 'getHoldBeforeShipmentMinutes',
        'hold_before_transmission' => 'getHoldBeforeTransmission',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'name' => 'getName',
        'no_customer_direct_shipments' => 'getNoCustomerDirectShipments',
        'no_split_shipment' => 'getNoSplitShipment',
        'postal_code' => 'getPostalCode',
        'process_days' => 'getProcessDays',
        'process_inventory_start_time' => 'getProcessInventoryStartTime',
        'process_inventory_stop_time' => 'getProcessInventoryStopTime',
        'require_asn' => 'getRequireAsn',
        'send_kit_instead_of_components' => 'getSendKitInsteadOfComponents',
        'shipment_cutoff_time_friday' => 'getShipmentCutoffTimeFriday',
        'shipment_cutoff_time_monday' => 'getShipmentCutoffTimeMonday',
        'shipment_cutoff_time_saturday' => 'getShipmentCutoffTimeSaturday',
        'shipment_cutoff_time_sunday' => 'getShipmentCutoffTimeSunday',
        'shipment_cutoff_time_thursday' => 'getShipmentCutoffTimeThursday',
        'shipment_cutoff_time_tuesday' => 'getShipmentCutoffTimeTuesday',
        'shipment_cutoff_time_wednesday' => 'getShipmentCutoffTimeWednesday',
        'state' => 'getState',
        'transport' => 'getTransport'
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
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['default_center'] = isset($data['default_center']) ? $data['default_center'] : null;
        $this->container['default_handles_all_items'] = isset($data['default_handles_all_items']) ? $data['default_handles_all_items'] : null;
        $this->container['distribution_center_oid'] = isset($data['distribution_center_oid']) ? $data['distribution_center_oid'] : null;
        $this->container['duns'] = isset($data['duns']) ? $data['duns'] : null;
        $this->container['estimate_from_distribution_center_oid'] = isset($data['estimate_from_distribution_center_oid']) ? $data['estimate_from_distribution_center_oid'] : null;
        $this->container['ftp_password'] = isset($data['ftp_password']) ? $data['ftp_password'] : null;
        $this->container['hold_before_shipment_minutes'] = isset($data['hold_before_shipment_minutes']) ? $data['hold_before_shipment_minutes'] : null;
        $this->container['hold_before_transmission'] = isset($data['hold_before_transmission']) ? $data['hold_before_transmission'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['no_customer_direct_shipments'] = isset($data['no_customer_direct_shipments']) ? $data['no_customer_direct_shipments'] : null;
        $this->container['no_split_shipment'] = isset($data['no_split_shipment']) ? $data['no_split_shipment'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['process_days'] = isset($data['process_days']) ? $data['process_days'] : null;
        $this->container['process_inventory_start_time'] = isset($data['process_inventory_start_time']) ? $data['process_inventory_start_time'] : null;
        $this->container['process_inventory_stop_time'] = isset($data['process_inventory_stop_time']) ? $data['process_inventory_stop_time'] : null;
        $this->container['require_asn'] = isset($data['require_asn']) ? $data['require_asn'] : null;
        $this->container['send_kit_instead_of_components'] = isset($data['send_kit_instead_of_components']) ? $data['send_kit_instead_of_components'] : null;
        $this->container['shipment_cutoff_time_friday'] = isset($data['shipment_cutoff_time_friday']) ? $data['shipment_cutoff_time_friday'] : null;
        $this->container['shipment_cutoff_time_monday'] = isset($data['shipment_cutoff_time_monday']) ? $data['shipment_cutoff_time_monday'] : null;
        $this->container['shipment_cutoff_time_saturday'] = isset($data['shipment_cutoff_time_saturday']) ? $data['shipment_cutoff_time_saturday'] : null;
        $this->container['shipment_cutoff_time_sunday'] = isset($data['shipment_cutoff_time_sunday']) ? $data['shipment_cutoff_time_sunday'] : null;
        $this->container['shipment_cutoff_time_thursday'] = isset($data['shipment_cutoff_time_thursday']) ? $data['shipment_cutoff_time_thursday'] : null;
        $this->container['shipment_cutoff_time_tuesday'] = isset($data['shipment_cutoff_time_tuesday']) ? $data['shipment_cutoff_time_tuesday'] : null;
        $this->container['shipment_cutoff_time_wednesday'] = isset($data['shipment_cutoff_time_wednesday']) ? $data['shipment_cutoff_time_wednesday'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
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
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 Address line 1 of the distribution center
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Address line 2 of the distribution center
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City of the distribution center
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Unique code for this distribution center
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code Country code of the distribution center
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets default_center
     * @return bool
     */
    public function getDefaultCenter()
    {
        return $this->container['default_center'];
    }

    /**
     * Sets default_center
     * @param bool $default_center True if this is the default distribution center on the account
     * @return $this
     */
    public function setDefaultCenter($default_center)
    {
        $this->container['default_center'] = $default_center;

        return $this;
    }

    /**
     * Gets default_handles_all_items
     * @return bool
     */
    public function getDefaultHandlesAllItems()
    {
        return $this->container['default_handles_all_items'];
    }

    /**
     * Sets default_handles_all_items
     * @param bool $default_handles_all_items True if this distribution center handles all new items by default
     * @return $this
     */
    public function setDefaultHandlesAllItems($default_handles_all_items)
    {
        $this->container['default_handles_all_items'] = $default_handles_all_items;

        return $this;
    }

    /**
     * Gets distribution_center_oid
     * @return int
     */
    public function getDistributionCenterOid()
    {
        return $this->container['distribution_center_oid'];
    }

    /**
     * Sets distribution_center_oid
     * @param int $distribution_center_oid Distribution center object identifier
     * @return $this
     */
    public function setDistributionCenterOid($distribution_center_oid)
    {
        $this->container['distribution_center_oid'] = $distribution_center_oid;

        return $this;
    }

    /**
     * Gets duns
     * @return string
     */
    public function getDuns()
    {
        return $this->container['duns'];
    }

    /**
     * Sets duns
     * @param string $duns DUNS number assigned to this distribution center (EDI)
     * @return $this
     */
    public function setDuns($duns)
    {
        $this->container['duns'] = $duns;

        return $this;
    }

    /**
     * Gets estimate_from_distribution_center_oid
     * @return int
     */
    public function getEstimateFromDistributionCenterOid()
    {
        return $this->container['estimate_from_distribution_center_oid'];
    }

    /**
     * Sets estimate_from_distribution_center_oid
     * @param int $estimate_from_distribution_center_oid Estimate shipments for this distribution center as if they came from the other distribution center
     * @return $this
     */
    public function setEstimateFromDistributionCenterOid($estimate_from_distribution_center_oid)
    {
        $this->container['estimate_from_distribution_center_oid'] = $estimate_from_distribution_center_oid;

        return $this;
    }

    /**
     * Gets ftp_password
     * @return string
     */
    public function getFtpPassword()
    {
        return $this->container['ftp_password'];
    }

    /**
     * Sets ftp_password
     * @param string $ftp_password Password associated with the virtual FTP
     * @return $this
     */
    public function setFtpPassword($ftp_password)
    {
        $this->container['ftp_password'] = $ftp_password;

        return $this;
    }

    /**
     * Gets hold_before_shipment_minutes
     * @return int
     */
    public function getHoldBeforeShipmentMinutes()
    {
        return $this->container['hold_before_shipment_minutes'];
    }

    /**
     * Sets hold_before_shipment_minutes
     * @param int $hold_before_shipment_minutes The number of minutes to hold a shipment
     * @return $this
     */
    public function setHoldBeforeShipmentMinutes($hold_before_shipment_minutes)
    {
        $this->container['hold_before_shipment_minutes'] = $hold_before_shipment_minutes;

        return $this;
    }

    /**
     * Gets hold_before_transmission
     * @return bool
     */
    public function getHoldBeforeTransmission()
    {
        return $this->container['hold_before_transmission'];
    }

    /**
     * Sets hold_before_transmission
     * @param bool $hold_before_transmission True if the shipment should be held before transmission and require a manual release
     * @return $this
     */
    public function setHoldBeforeTransmission($hold_before_transmission)
    {
        $this->container['hold_before_transmission'] = $hold_before_transmission;

        return $this;
    }

    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude Latitude where the distribution center is located
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude Longitude where the distribution center is located
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of this distribution center
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets no_customer_direct_shipments
     * @return bool
     */
    public function getNoCustomerDirectShipments()
    {
        return $this->container['no_customer_direct_shipments'];
    }

    /**
     * Sets no_customer_direct_shipments
     * @param bool $no_customer_direct_shipments True if this distribution center does not handle customer direct shipments
     * @return $this
     */
    public function setNoCustomerDirectShipments($no_customer_direct_shipments)
    {
        $this->container['no_customer_direct_shipments'] = $no_customer_direct_shipments;

        return $this;
    }

    /**
     * Gets no_split_shipment
     * @return bool
     */
    public function getNoSplitShipment()
    {
        return $this->container['no_split_shipment'];
    }

    /**
     * Sets no_split_shipment
     * @param bool $no_split_shipment True if this distribution center is not allowed to participate in a split shipment.
     * @return $this
     */
    public function setNoSplitShipment($no_split_shipment)
    {
        $this->container['no_split_shipment'] = $no_split_shipment;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code Postal code of the distribution center
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets process_days
     * @return int
     */
    public function getProcessDays()
    {
        return $this->container['process_days'];
    }

    /**
     * Sets process_days
     * @param int $process_days The number of processing days required before an order ships
     * @return $this
     */
    public function setProcessDays($process_days)
    {
        $this->container['process_days'] = $process_days;

        return $this;
    }

    /**
     * Gets process_inventory_start_time
     * @return string
     */
    public function getProcessInventoryStartTime()
    {
        return $this->container['process_inventory_start_time'];
    }

    /**
     * Sets process_inventory_start_time
     * @param string $process_inventory_start_time The time (EST) after which inventory updates will be processed
     * @return $this
     */
    public function setProcessInventoryStartTime($process_inventory_start_time)
    {
        $this->container['process_inventory_start_time'] = $process_inventory_start_time;

        return $this;
    }

    /**
     * Gets process_inventory_stop_time
     * @return string
     */
    public function getProcessInventoryStopTime()
    {
        return $this->container['process_inventory_stop_time'];
    }

    /**
     * Sets process_inventory_stop_time
     * @param string $process_inventory_stop_time The time (EST) before which inventory updates will be processed
     * @return $this
     */
    public function setProcessInventoryStopTime($process_inventory_stop_time)
    {
        $this->container['process_inventory_stop_time'] = $process_inventory_stop_time;

        return $this;
    }

    /**
     * Gets require_asn
     * @return bool
     */
    public function getRequireAsn()
    {
        return $this->container['require_asn'];
    }

    /**
     * Sets require_asn
     * @param bool $require_asn True if ASNs are required for this distribution center (EDI)
     * @return $this
     */
    public function setRequireAsn($require_asn)
    {
        $this->container['require_asn'] = $require_asn;

        return $this;
    }

    /**
     * Gets send_kit_instead_of_components
     * @return bool
     */
    public function getSendKitInsteadOfComponents()
    {
        return $this->container['send_kit_instead_of_components'];
    }

    /**
     * Sets send_kit_instead_of_components
     * @param bool $send_kit_instead_of_components True if we should send the kit instead of the components
     * @return $this
     */
    public function setSendKitInsteadOfComponents($send_kit_instead_of_components)
    {
        $this->container['send_kit_instead_of_components'] = $send_kit_instead_of_components;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_friday
     * @return string
     */
    public function getShipmentCutoffTimeFriday()
    {
        return $this->container['shipment_cutoff_time_friday'];
    }

    /**
     * Sets shipment_cutoff_time_friday
     * @param string $shipment_cutoff_time_friday The time (EST) after which shipments will not be processed on Friday
     * @return $this
     */
    public function setShipmentCutoffTimeFriday($shipment_cutoff_time_friday)
    {
        $this->container['shipment_cutoff_time_friday'] = $shipment_cutoff_time_friday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_monday
     * @return string
     */
    public function getShipmentCutoffTimeMonday()
    {
        return $this->container['shipment_cutoff_time_monday'];
    }

    /**
     * Sets shipment_cutoff_time_monday
     * @param string $shipment_cutoff_time_monday The time (EST) after which shipments will not be processed on Monday
     * @return $this
     */
    public function setShipmentCutoffTimeMonday($shipment_cutoff_time_monday)
    {
        $this->container['shipment_cutoff_time_monday'] = $shipment_cutoff_time_monday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_saturday
     * @return string
     */
    public function getShipmentCutoffTimeSaturday()
    {
        return $this->container['shipment_cutoff_time_saturday'];
    }

    /**
     * Sets shipment_cutoff_time_saturday
     * @param string $shipment_cutoff_time_saturday The time (EST) after which shipments will not be processed on Saturday
     * @return $this
     */
    public function setShipmentCutoffTimeSaturday($shipment_cutoff_time_saturday)
    {
        $this->container['shipment_cutoff_time_saturday'] = $shipment_cutoff_time_saturday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_sunday
     * @return string
     */
    public function getShipmentCutoffTimeSunday()
    {
        return $this->container['shipment_cutoff_time_sunday'];
    }

    /**
     * Sets shipment_cutoff_time_sunday
     * @param string $shipment_cutoff_time_sunday The time (EST) after which shipments will not be processed on Sunday
     * @return $this
     */
    public function setShipmentCutoffTimeSunday($shipment_cutoff_time_sunday)
    {
        $this->container['shipment_cutoff_time_sunday'] = $shipment_cutoff_time_sunday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_thursday
     * @return string
     */
    public function getShipmentCutoffTimeThursday()
    {
        return $this->container['shipment_cutoff_time_thursday'];
    }

    /**
     * Sets shipment_cutoff_time_thursday
     * @param string $shipment_cutoff_time_thursday The time (EST) after which shipments will not be processed on Thursday
     * @return $this
     */
    public function setShipmentCutoffTimeThursday($shipment_cutoff_time_thursday)
    {
        $this->container['shipment_cutoff_time_thursday'] = $shipment_cutoff_time_thursday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_tuesday
     * @return string
     */
    public function getShipmentCutoffTimeTuesday()
    {
        return $this->container['shipment_cutoff_time_tuesday'];
    }

    /**
     * Sets shipment_cutoff_time_tuesday
     * @param string $shipment_cutoff_time_tuesday The time (EST) after which shipments will not be processed on Tuesday
     * @return $this
     */
    public function setShipmentCutoffTimeTuesday($shipment_cutoff_time_tuesday)
    {
        $this->container['shipment_cutoff_time_tuesday'] = $shipment_cutoff_time_tuesday;

        return $this;
    }

    /**
     * Gets shipment_cutoff_time_wednesday
     * @return string
     */
    public function getShipmentCutoffTimeWednesday()
    {
        return $this->container['shipment_cutoff_time_wednesday'];
    }

    /**
     * Sets shipment_cutoff_time_wednesday
     * @param string $shipment_cutoff_time_wednesday The time (EST) after which shipments will not be processed on Wednesday
     * @return $this
     */
    public function setShipmentCutoffTimeWednesday($shipment_cutoff_time_wednesday)
    {
        $this->container['shipment_cutoff_time_wednesday'] = $shipment_cutoff_time_wednesday;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of the distribution center
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets transport
     * @return string
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     * @param string $transport Transport mechanism for this distribution center
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

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



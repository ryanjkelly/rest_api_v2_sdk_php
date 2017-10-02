<?php
/**
 * ChargebackDispute
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
 * ChargebackDispute Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChargebackDispute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargebackDispute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_number' => 'string',
        'adjustment_request_text' => 'string',
        'amount' => 'float',
        'auth_code' => 'string',
        'case_number' => 'string',
        'chargeback_dispute_oid' => 'int',
        'chargeback_dts' => 'string',
        'currency' => 'string',
        'customer_care_notes' => 'string',
        'encryption_key' => 'string',
        'expiration_dts' => 'string',
        'fax_failure_reason' => 'string',
        'fax_number' => 'string',
        'fax_transaction_id' => 'int',
        'icsid' => 'string',
        'merchant_account_profile_oid' => 'int',
        'order' => '\ultracart\v2\models\Order',
        'order_id' => 'string',
        'partial_card_number' => 'string',
        'pdf_file_oid' => 'string',
        'reason_code' => 'string',
        'status' => 'string',
        'website_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_number' => null,
        'adjustment_request_text' => null,
        'amount' => null,
        'auth_code' => null,
        'case_number' => null,
        'chargeback_dispute_oid' => 'int32',
        'chargeback_dts' => null,
        'currency' => null,
        'customer_care_notes' => null,
        'encryption_key' => null,
        'expiration_dts' => null,
        'fax_failure_reason' => null,
        'fax_number' => null,
        'fax_transaction_id' => 'int64',
        'icsid' => null,
        'merchant_account_profile_oid' => 'int32',
        'order' => null,
        'order_id' => null,
        'partial_card_number' => null,
        'pdf_file_oid' => null,
        'reason_code' => null,
        'status' => null,
        'website_url' => null
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
        'account_number' => 'account_number',
        'adjustment_request_text' => 'adjustment_request_text',
        'amount' => 'amount',
        'auth_code' => 'auth_code',
        'case_number' => 'case_number',
        'chargeback_dispute_oid' => 'chargeback_dispute_oid',
        'chargeback_dts' => 'chargeback_dts',
        'currency' => 'currency',
        'customer_care_notes' => 'customer_care_notes',
        'encryption_key' => 'encryption_key',
        'expiration_dts' => 'expiration_dts',
        'fax_failure_reason' => 'fax_failure_reason',
        'fax_number' => 'fax_number',
        'fax_transaction_id' => 'fax_transaction_id',
        'icsid' => 'icsid',
        'merchant_account_profile_oid' => 'merchant_account_profile_oid',
        'order' => 'order',
        'order_id' => 'order_id',
        'partial_card_number' => 'partial_card_number',
        'pdf_file_oid' => 'pdf_file_oid',
        'reason_code' => 'reason_code',
        'status' => 'status',
        'website_url' => 'website_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'adjustment_request_text' => 'setAdjustmentRequestText',
        'amount' => 'setAmount',
        'auth_code' => 'setAuthCode',
        'case_number' => 'setCaseNumber',
        'chargeback_dispute_oid' => 'setChargebackDisputeOid',
        'chargeback_dts' => 'setChargebackDts',
        'currency' => 'setCurrency',
        'customer_care_notes' => 'setCustomerCareNotes',
        'encryption_key' => 'setEncryptionKey',
        'expiration_dts' => 'setExpirationDts',
        'fax_failure_reason' => 'setFaxFailureReason',
        'fax_number' => 'setFaxNumber',
        'fax_transaction_id' => 'setFaxTransactionId',
        'icsid' => 'setIcsid',
        'merchant_account_profile_oid' => 'setMerchantAccountProfileOid',
        'order' => 'setOrder',
        'order_id' => 'setOrderId',
        'partial_card_number' => 'setPartialCardNumber',
        'pdf_file_oid' => 'setPdfFileOid',
        'reason_code' => 'setReasonCode',
        'status' => 'setStatus',
        'website_url' => 'setWebsiteUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'adjustment_request_text' => 'getAdjustmentRequestText',
        'amount' => 'getAmount',
        'auth_code' => 'getAuthCode',
        'case_number' => 'getCaseNumber',
        'chargeback_dispute_oid' => 'getChargebackDisputeOid',
        'chargeback_dts' => 'getChargebackDts',
        'currency' => 'getCurrency',
        'customer_care_notes' => 'getCustomerCareNotes',
        'encryption_key' => 'getEncryptionKey',
        'expiration_dts' => 'getExpirationDts',
        'fax_failure_reason' => 'getFaxFailureReason',
        'fax_number' => 'getFaxNumber',
        'fax_transaction_id' => 'getFaxTransactionId',
        'icsid' => 'getIcsid',
        'merchant_account_profile_oid' => 'getMerchantAccountProfileOid',
        'order' => 'getOrder',
        'order_id' => 'getOrderId',
        'partial_card_number' => 'getPartialCardNumber',
        'pdf_file_oid' => 'getPdfFileOid',
        'reason_code' => 'getReasonCode',
        'status' => 'getStatus',
        'website_url' => 'getWebsiteUrl'
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['adjustment_request_text'] = isset($data['adjustment_request_text']) ? $data['adjustment_request_text'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['case_number'] = isset($data['case_number']) ? $data['case_number'] : null;
        $this->container['chargeback_dispute_oid'] = isset($data['chargeback_dispute_oid']) ? $data['chargeback_dispute_oid'] : null;
        $this->container['chargeback_dts'] = isset($data['chargeback_dts']) ? $data['chargeback_dts'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer_care_notes'] = isset($data['customer_care_notes']) ? $data['customer_care_notes'] : null;
        $this->container['encryption_key'] = isset($data['encryption_key']) ? $data['encryption_key'] : null;
        $this->container['expiration_dts'] = isset($data['expiration_dts']) ? $data['expiration_dts'] : null;
        $this->container['fax_failure_reason'] = isset($data['fax_failure_reason']) ? $data['fax_failure_reason'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['fax_transaction_id'] = isset($data['fax_transaction_id']) ? $data['fax_transaction_id'] : null;
        $this->container['icsid'] = isset($data['icsid']) ? $data['icsid'] : null;
        $this->container['merchant_account_profile_oid'] = isset($data['merchant_account_profile_oid']) ? $data['merchant_account_profile_oid'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['partial_card_number'] = isset($data['partial_card_number']) ? $data['partial_card_number'] : null;
        $this->container['pdf_file_oid'] = isset($data['pdf_file_oid']) ? $data['pdf_file_oid'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['account_number']) && (strlen($this->container['account_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['auth_code']) && (strlen($this->container['auth_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'auth_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['case_number']) && (strlen($this->container['case_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'case_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 10)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['encryption_key']) && (strlen($this->container['encryption_key']) > 100)) {
            $invalidProperties[] = "invalid value for 'encryption_key', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['fax_failure_reason']) && (strlen($this->container['fax_failure_reason']) > 250)) {
            $invalidProperties[] = "invalid value for 'fax_failure_reason', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['fax_number']) && (strlen($this->container['fax_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'fax_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['icsid']) && (strlen($this->container['icsid']) > 50)) {
            $invalidProperties[] = "invalid value for 'icsid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['order_id']) && (strlen($this->container['order_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['partial_card_number']) && (strlen($this->container['partial_card_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'partial_card_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['pdf_file_oid']) && (strlen($this->container['pdf_file_oid']) > 32)) {
            $invalidProperties[] = "invalid value for 'pdf_file_oid', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['reason_code']) && (strlen($this->container['reason_code']) > 70)) {
            $invalidProperties[] = "invalid value for 'reason_code', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['status']) && (strlen($this->container['status']) > 20)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['website_url']) && (strlen($this->container['website_url']) > 250)) {
            $invalidProperties[] = "invalid value for 'website_url', the character length must be smaller than or equal to 250.";
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

        if (strlen($this->container['account_number']) > 50) {
            return false;
        }
        if (strlen($this->container['auth_code']) > 20) {
            return false;
        }
        if (strlen($this->container['case_number']) > 50) {
            return false;
        }
        if (strlen($this->container['currency']) > 10) {
            return false;
        }
        if (strlen($this->container['encryption_key']) > 100) {
            return false;
        }
        if (strlen($this->container['fax_failure_reason']) > 250) {
            return false;
        }
        if (strlen($this->container['fax_number']) > 20) {
            return false;
        }
        if (strlen($this->container['icsid']) > 50) {
            return false;
        }
        if (strlen($this->container['order_id']) > 30) {
            return false;
        }
        if (strlen($this->container['partial_card_number']) > 20) {
            return false;
        }
        if (strlen($this->container['pdf_file_oid']) > 32) {
            return false;
        }
        if (strlen($this->container['reason_code']) > 70) {
            return false;
        }
        if (strlen($this->container['status']) > 20) {
            return false;
        }
        if (strlen($this->container['website_url']) > 250) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number Account number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (strlen($account_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling ChargebackDispute., must be smaller than or equal to 50.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets adjustment_request_text
     *
     * @return string
     */
    public function getAdjustmentRequestText()
    {
        return $this->container['adjustment_request_text'];
    }

    /**
     * Sets adjustment_request_text
     *
     * @param string $adjustment_request_text Adjustment request text
     *
     * @return $this
     */
    public function setAdjustmentRequestText($adjustment_request_text)
    {
        $this->container['adjustment_request_text'] = $adjustment_request_text;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code Auth code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        if (!is_null($auth_code) && (strlen($auth_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $auth_code when calling ChargebackDispute., must be smaller than or equal to 20.');
        }

        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return string
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param string $case_number Case number
     *
     * @return $this
     */
    public function setCaseNumber($case_number)
    {
        if (!is_null($case_number) && (strlen($case_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $case_number when calling ChargebackDispute., must be smaller than or equal to 50.');
        }

        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets chargeback_dispute_oid
     *
     * @return int
     */
    public function getChargebackDisputeOid()
    {
        return $this->container['chargeback_dispute_oid'];
    }

    /**
     * Sets chargeback_dispute_oid
     *
     * @param int $chargeback_dispute_oid Chargeback Dispute Oid
     *
     * @return $this
     */
    public function setChargebackDisputeOid($chargeback_dispute_oid)
    {
        $this->container['chargeback_dispute_oid'] = $chargeback_dispute_oid;

        return $this;
    }

    /**
     * Gets chargeback_dts
     *
     * @return string
     */
    public function getChargebackDts()
    {
        return $this->container['chargeback_dts'];
    }

    /**
     * Sets chargeback_dts
     *
     * @param string $chargeback_dts Chargeback dts
     *
     * @return $this
     */
    public function setChargebackDts($chargeback_dts)
    {
        $this->container['chargeback_dts'] = $chargeback_dts;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 10)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ChargebackDispute., must be smaller than or equal to 10.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer_care_notes
     *
     * @return string
     */
    public function getCustomerCareNotes()
    {
        return $this->container['customer_care_notes'];
    }

    /**
     * Sets customer_care_notes
     *
     * @param string $customer_care_notes Customer care notes
     *
     * @return $this
     */
    public function setCustomerCareNotes($customer_care_notes)
    {
        $this->container['customer_care_notes'] = $customer_care_notes;

        return $this;
    }

    /**
     * Gets encryption_key
     *
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->container['encryption_key'];
    }

    /**
     * Sets encryption_key
     *
     * @param string $encryption_key Encryption key
     *
     * @return $this
     */
    public function setEncryptionKey($encryption_key)
    {
        if (!is_null($encryption_key) && (strlen($encryption_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for $encryption_key when calling ChargebackDispute., must be smaller than or equal to 100.');
        }

        $this->container['encryption_key'] = $encryption_key;

        return $this;
    }

    /**
     * Gets expiration_dts
     *
     * @return string
     */
    public function getExpirationDts()
    {
        return $this->container['expiration_dts'];
    }

    /**
     * Sets expiration_dts
     *
     * @param string $expiration_dts Expiration Dts
     *
     * @return $this
     */
    public function setExpirationDts($expiration_dts)
    {
        $this->container['expiration_dts'] = $expiration_dts;

        return $this;
    }

    /**
     * Gets fax_failure_reason
     *
     * @return string
     */
    public function getFaxFailureReason()
    {
        return $this->container['fax_failure_reason'];
    }

    /**
     * Sets fax_failure_reason
     *
     * @param string $fax_failure_reason Fax failure reason
     *
     * @return $this
     */
    public function setFaxFailureReason($fax_failure_reason)
    {
        if (!is_null($fax_failure_reason) && (strlen($fax_failure_reason) > 250)) {
            throw new \InvalidArgumentException('invalid length for $fax_failure_reason when calling ChargebackDispute., must be smaller than or equal to 250.');
        }

        $this->container['fax_failure_reason'] = $fax_failure_reason;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number Fax number
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        if (!is_null($fax_number) && (strlen($fax_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $fax_number when calling ChargebackDispute., must be smaller than or equal to 20.');
        }

        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets fax_transaction_id
     *
     * @return int
     */
    public function getFaxTransactionId()
    {
        return $this->container['fax_transaction_id'];
    }

    /**
     * Sets fax_transaction_id
     *
     * @param int $fax_transaction_id Fax transaction id
     *
     * @return $this
     */
    public function setFaxTransactionId($fax_transaction_id)
    {
        $this->container['fax_transaction_id'] = $fax_transaction_id;

        return $this;
    }

    /**
     * Gets icsid
     *
     * @return string
     */
    public function getIcsid()
    {
        return $this->container['icsid'];
    }

    /**
     * Sets icsid
     *
     * @param string $icsid icsid
     *
     * @return $this
     */
    public function setIcsid($icsid)
    {
        if (!is_null($icsid) && (strlen($icsid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $icsid when calling ChargebackDispute., must be smaller than or equal to 50.');
        }

        $this->container['icsid'] = $icsid;

        return $this;
    }

    /**
     * Gets merchant_account_profile_oid
     *
     * @return int
     */
    public function getMerchantAccountProfileOid()
    {
        return $this->container['merchant_account_profile_oid'];
    }

    /**
     * Sets merchant_account_profile_oid
     *
     * @param int $merchant_account_profile_oid Merchant account profile oid
     *
     * @return $this
     */
    public function setMerchantAccountProfileOid($merchant_account_profile_oid)
    {
        $this->container['merchant_account_profile_oid'] = $merchant_account_profile_oid;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \ultracart\v2\models\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \ultracart\v2\models\Order $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Order Id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        if (!is_null($order_id) && (strlen($order_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling ChargebackDispute., must be smaller than or equal to 30.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets partial_card_number
     *
     * @return string
     */
    public function getPartialCardNumber()
    {
        return $this->container['partial_card_number'];
    }

    /**
     * Sets partial_card_number
     *
     * @param string $partial_card_number Partial card number
     *
     * @return $this
     */
    public function setPartialCardNumber($partial_card_number)
    {
        if (!is_null($partial_card_number) && (strlen($partial_card_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $partial_card_number when calling ChargebackDispute., must be smaller than or equal to 20.');
        }

        $this->container['partial_card_number'] = $partial_card_number;

        return $this;
    }

    /**
     * Gets pdf_file_oid
     *
     * @return string
     */
    public function getPdfFileOid()
    {
        return $this->container['pdf_file_oid'];
    }

    /**
     * Sets pdf_file_oid
     *
     * @param string $pdf_file_oid PDF file oid
     *
     * @return $this
     */
    public function setPdfFileOid($pdf_file_oid)
    {
        if (!is_null($pdf_file_oid) && (strlen($pdf_file_oid) > 32)) {
            throw new \InvalidArgumentException('invalid length for $pdf_file_oid when calling ChargebackDispute., must be smaller than or equal to 32.');
        }

        $this->container['pdf_file_oid'] = $pdf_file_oid;

        return $this;
    }

    /**
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code Reason code
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        if (!is_null($reason_code) && (strlen($reason_code) > 70)) {
            throw new \InvalidArgumentException('invalid length for $reason_code when calling ChargebackDispute., must be smaller than or equal to 70.');
        }

        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        if (!is_null($status) && (strlen($status) > 20)) {
            throw new \InvalidArgumentException('invalid length for $status when calling ChargebackDispute., must be smaller than or equal to 20.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Website URL
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        if (!is_null($website_url) && (strlen($website_url) > 250)) {
            throw new \InvalidArgumentException('invalid length for $website_url when calling ChargebackDispute., must be smaller than or equal to 250.');
        }

        $this->container['website_url'] = $website_url;

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



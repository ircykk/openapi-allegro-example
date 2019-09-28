<?php
/**
 * RefundDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RefundDetails Class Doc Comment
 *
 * @category Class
 * @description Detailed information about the refund.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'payment' => '\OpenAPI\Client\Model\RefundPayment',
        'reason' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime',
        'total_value' => '\OpenAPI\Client\Model\RefundTotalValue',
        'line_items' => '\OpenAPI\Client\Model\RefundLineItem[]',
        'delivery' => '\OpenAPI\Client\Model\InitializeRefundDelivery',
        'overpaid' => '\OpenAPI\Client\Model\InitializeRefundOverpaid',
        'surcharges' => '\OpenAPI\Client\Model\PaymentsSurcharge[]',
        'additional_services' => '\OpenAPI\Client\Model\InitializeRefundAdditionalServices'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'payment' => null,
        'reason' => null,
        'status' => null,
        'created_at' => 'date-time',
        'total_value' => null,
        'line_items' => null,
        'delivery' => null,
        'overpaid' => null,
        'surcharges' => null,
        'additional_services' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'payment' => 'payment',
        'reason' => 'reason',
        'status' => 'status',
        'created_at' => 'createdAt',
        'total_value' => 'totalValue',
        'line_items' => 'lineItems',
        'delivery' => 'delivery',
        'overpaid' => 'overpaid',
        'surcharges' => 'surcharges',
        'additional_services' => 'additionalServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'payment' => 'setPayment',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'total_value' => 'setTotalValue',
        'line_items' => 'setLineItems',
        'delivery' => 'setDelivery',
        'overpaid' => 'setOverpaid',
        'surcharges' => 'setSurcharges',
        'additional_services' => 'setAdditionalServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'payment' => 'getPayment',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'total_value' => 'getTotalValue',
        'line_items' => 'getLineItems',
        'delivery' => 'getDelivery',
        'overpaid' => 'getOverpaid',
        'surcharges' => 'getSurcharges',
        'additional_services' => 'getAdditionalServices'
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
        return self::$openAPIModelName;
    }

    const REASON_REFUND = 'REFUND';
    const REASON_COMPLAINT = 'COMPLAINT';
    const REASON_PRODUCT_NOT_AVAILABLE = 'PRODUCT_NOT_AVAILABLE';
    const REASON_PAID_VALUE_TOO_LOW = 'PAID_VALUE_TOO_LOW';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_PARTIAL = 'PARTIAL';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_VALIDATE_FAILED = 'VALIDATE_FAILED';
    const STATUS__NEW = 'NEW';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_REFUND,
            self::REASON_COMPLAINT,
            self::REASON_PRODUCT_NOT_AVAILABLE,
            self::REASON_PAID_VALUE_TOO_LOW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_CANCELED,
            self::STATUS_PARTIAL,
            self::STATUS_IN_PROGRESS,
            self::STATUS_VALIDATE_FAILED,
            self::STATUS__NEW,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['total_value'] = isset($data['total_value']) ? $data['total_value'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['overpaid'] = isset($data['overpaid']) ? $data['overpaid'] : null;
        $this->container['surcharges'] = isset($data['surcharges']) ? $data['surcharges'] : null;
        $this->container['additional_services'] = isset($data['additional_services']) ? $data['additional_services'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['total_value'] === null) {
            $invalidProperties[] = "'total_value' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The payment refund identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \OpenAPI\Client\Model\RefundPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \OpenAPI\Client\Model\RefundPayment|null $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason for a payment refund.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

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
     * @param string $status Current status of payment refund.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time when the refund was created provided in ISO 8601 format.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return \OpenAPI\Client\Model\RefundTotalValue
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param \OpenAPI\Client\Model\RefundTotalValue $total_value total_value
     *
     * @return $this
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\RefundLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\RefundLineItem[]|null $line_items List of order's line items which can be refunded.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \OpenAPI\Client\Model\InitializeRefundDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\Client\Model\InitializeRefundDelivery|null $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets overpaid
     *
     * @return \OpenAPI\Client\Model\InitializeRefundOverpaid|null
     */
    public function getOverpaid()
    {
        return $this->container['overpaid'];
    }

    /**
     * Sets overpaid
     *
     * @param \OpenAPI\Client\Model\InitializeRefundOverpaid|null $overpaid overpaid
     *
     * @return $this
     */
    public function setOverpaid($overpaid)
    {
        $this->container['overpaid'] = $overpaid;

        return $this;
    }

    /**
     * Gets surcharges
     *
     * @return \OpenAPI\Client\Model\PaymentsSurcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->container['surcharges'];
    }

    /**
     * Sets surcharges
     *
     * @param \OpenAPI\Client\Model\PaymentsSurcharge[]|null $surcharges List of surcharges for payment which can be refunded.
     *
     * @return $this
     */
    public function setSurcharges($surcharges)
    {
        $this->container['surcharges'] = $surcharges;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \OpenAPI\Client\Model\InitializeRefundAdditionalServices|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \OpenAPI\Client\Model\InitializeRefundAdditionalServices|null $additional_services additional_services
     *
     * @return $this
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



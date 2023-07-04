<?php
/**
 * ReceiptInsert
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ReceiptInsert Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReceiptInsert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReceiptInsert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vendor_id' => 'string',
        'partner_id' => 'int',
        'name' => 'string',
        'emails' => 'string[]',
        'block_id' => 'int',
        'type' => '\Swagger\Client\Model\DocumentType',
        'payment_method' => '\Swagger\Client\Model\PaymentMethod',
        'currency' => '\Swagger\Client\Model\Currency',
        'conversion_rate' => 'float',
        'electronic' => 'bool',
        'items' => '\Swagger\Client\Model\OneOfReceiptInsertItemsItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vendor_id' => null,
        'partner_id' => null,
        'name' => null,
        'emails' => null,
        'block_id' => null,
        'type' => null,
        'payment_method' => null,
        'currency' => null,
        'conversion_rate' => 'float',
        'electronic' => null,
        'items' => null
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
        'vendor_id' => 'vendor_id',
        'partner_id' => 'partner_id',
        'name' => 'name',
        'emails' => 'emails',
        'block_id' => 'block_id',
        'type' => 'type',
        'payment_method' => 'payment_method',
        'currency' => 'currency',
        'conversion_rate' => 'conversion_rate',
        'electronic' => 'electronic',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor_id' => 'setVendorId',
        'partner_id' => 'setPartnerId',
        'name' => 'setName',
        'emails' => 'setEmails',
        'block_id' => 'setBlockId',
        'type' => 'setType',
        'payment_method' => 'setPaymentMethod',
        'currency' => 'setCurrency',
        'conversion_rate' => 'setConversionRate',
        'electronic' => 'setElectronic',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor_id' => 'getVendorId',
        'partner_id' => 'getPartnerId',
        'name' => 'getName',
        'emails' => 'getEmails',
        'block_id' => 'getBlockId',
        'type' => 'getType',
        'payment_method' => 'getPaymentMethod',
        'currency' => 'getCurrency',
        'conversion_rate' => 'getConversionRate',
        'electronic' => 'getElectronic',
        'items' => 'getItems'
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
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['block_id'] = isset($data['block_id']) ? $data['block_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['electronic'] = isset($data['electronic']) ? $data['electronic'] : false;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['block_id'] === null) {
            $invalidProperties[] = "'block_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * Gets vendor_id
     *
     * @return string
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string $vendor_id vendor_id
     *
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int $partner_id partner_id
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets block_id
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->container['block_id'];
    }

    /**
     * Sets block_id
     *
     * @param int $block_id block_id
     *
     * @return $this
     */
    public function setBlockId($block_id)
    {
        $this->container['block_id'] = $block_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\DocumentType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\DocumentType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\Model\PaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float $conversion_rate conversion_rate
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets electronic
     *
     * @return bool
     */
    public function getElectronic()
    {
        return $this->container['electronic'];
    }

    /**
     * Sets electronic
     *
     * @param bool $electronic electronic
     *
     * @return $this
     */
    public function setElectronic($electronic)
    {
        $this->container['electronic'] = $electronic;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\OneOfReceiptInsertItemsItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\OneOfReceiptInsertItemsItems[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

<?php
/**
 * InboundShipmentRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * InboundShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for an inbound shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InboundShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inbound_shipment_header' => '\SellingPartnerApi\Model\FbaInboundV0\InboundShipmentHeader',
        'inbound_shipment_items' => '\SellingPartnerApi\Model\FbaInboundV0\InboundShipmentItem[]',
        'marketplace_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inbound_shipment_header' => null,
        'inbound_shipment_items' => null,
        'marketplace_id' => null
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
        'inbound_shipment_header' => 'InboundShipmentHeader',
        'inbound_shipment_items' => 'InboundShipmentItems',
        'marketplace_id' => 'MarketplaceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'inbound_shipment_header' => 'setInboundShipmentHeader',
        'inbound_shipment_items' => 'setInboundShipmentItems',
        'marketplace_id' => 'setMarketplaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbound_shipment_header' => 'getInboundShipmentHeader',
        'inbound_shipment_items' => 'getInboundShipmentItems',
        'marketplace_id' => 'getMarketplaceId'
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
        $this->container['inbound_shipment_header'] = $data['inbound_shipment_header'] ?? null;
        $this->container['inbound_shipment_items'] = $data['inbound_shipment_items'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inbound_shipment_header'] === null) {
            $invalidProperties[] = "'inbound_shipment_header' can't be null";
        }
        if ($this->container['inbound_shipment_items'] === null) {
            $invalidProperties[] = "'inbound_shipment_items' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
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
     * Gets inbound_shipment_header
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InboundShipmentHeader
     */
    public function getInboundShipmentHeader()
    {
        return $this->container['inbound_shipment_header'];
    }

    /**
     * Sets inbound_shipment_header
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InboundShipmentHeader $inbound_shipment_header inbound_shipment_header
     *
     * @return self
     */
    public function setInboundShipmentHeader($inbound_shipment_header)
    {
        $this->container['inbound_shipment_header'] = $inbound_shipment_header;

        return $this;
    }
    /**
     * Gets inbound_shipment_items
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InboundShipmentItem[]
     */
    public function getInboundShipmentItems()
    {
        return $this->container['inbound_shipment_items'];
    }

    /**
     * Sets inbound_shipment_items
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InboundShipmentItem[] $inbound_shipment_items A list of inbound shipment item information.
     *
     * @return self
     */
    public function setInboundShipmentItems($inbound_shipment_items)
    {
        $this->container['inbound_shipment_items'] = $inbound_shipment_items;

        return $this;
    }
    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



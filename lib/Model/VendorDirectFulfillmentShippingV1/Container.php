<?php
/**
 * Container
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * Container Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Container implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'container_type' => 'string',
        'container_identifier' => 'string',
        'tracking_number' => 'string',
        'manifest_id' => 'string',
        'manifest_date' => 'string',
        'ship_method' => 'string',
        'scac_code' => 'string',
        'carrier' => 'string',
        'container_sequence_number' => 'int',
        'dimensions' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions',
        'weight' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight',
        'packed_items' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'container_type' => null,
        'container_identifier' => null,
        'tracking_number' => null,
        'manifest_id' => null,
        'manifest_date' => null,
        'ship_method' => null,
        'scac_code' => null,
        'carrier' => null,
        'container_sequence_number' => null,
        'dimensions' => null,
        'weight' => null,
        'packed_items' => null
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
        'container_type' => 'containerType',
        'container_identifier' => 'containerIdentifier',
        'tracking_number' => 'trackingNumber',
        'manifest_id' => 'manifestId',
        'manifest_date' => 'manifestDate',
        'ship_method' => 'shipMethod',
        'scac_code' => 'scacCode',
        'carrier' => 'carrier',
        'container_sequence_number' => 'containerSequenceNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'packed_items' => 'packedItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'container_type' => 'setContainerType',
        'container_identifier' => 'setContainerIdentifier',
        'tracking_number' => 'setTrackingNumber',
        'manifest_id' => 'setManifestId',
        'manifest_date' => 'setManifestDate',
        'ship_method' => 'setShipMethod',
        'scac_code' => 'setScacCode',
        'carrier' => 'setCarrier',
        'container_sequence_number' => 'setContainerSequenceNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'packed_items' => 'setPackedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
        'container_identifier' => 'getContainerIdentifier',
        'tracking_number' => 'getTrackingNumber',
        'manifest_id' => 'getManifestId',
        'manifest_date' => 'getManifestDate',
        'ship_method' => 'getShipMethod',
        'scac_code' => 'getScacCode',
        'carrier' => 'getCarrier',
        'container_sequence_number' => 'getContainerSequenceNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'packed_items' => 'getPackedItems'
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

    const CONTAINER_TYPE_CARTON = 'carton';
    const CONTAINER_TYPE_PALLET = 'pallet';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        return [
            self::CONTAINER_TYPE_CARTON,
            self::CONTAINER_TYPE_PALLET,
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
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_identifier'] = $data['container_identifier'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['manifest_id'] = $data['manifest_id'] ?? null;
        $this->container['manifest_date'] = $data['manifest_date'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['scac_code'] = $data['scac_code'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['container_sequence_number'] = $data['container_sequence_number'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['packed_items'] = $data['packed_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['container_type'] === null) {
            $invalidProperties[] = "'container_type' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['container_type']) && !in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'container_type', must be one of '%s'",
                $this->container['container_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identifier'] === null) {
            $invalidProperties[] = "'container_identifier' can't be null";
        }
        if ($this->container['packed_items'] === null) {
            $invalidProperties[] = "'packed_items' can't be null";
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
     * Gets container_type
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string $container_type The type of container.
     *
     * @return self
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'container_type', must be one of '%s'",
                    $container_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }
    /**
     * Gets container_identifier
     *
     * @return string
     */
    public function getContainerIdentifier()
    {
        return $this->container['container_identifier'];
    }

    /**
     * Sets container_identifier
     *
     * @param string $container_identifier The container identifier.
     *
     * @return self
     */
    public function setContainerIdentifier($container_identifier)
    {
        $this->container['container_identifier'] = $container_identifier;

        return $this;
    }
    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets manifest_id
     *
     * @return string|null
     */
    public function getManifestId()
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id
     *
     * @param string|null $manifest_id The manifest identifier.
     *
     * @return self
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }
    /**
     * Gets manifest_date
     *
     * @return string|null
     */
    public function getManifestDate()
    {
        return $this->container['manifest_date'];
    }

    /**
     * Sets manifest_date
     *
     * @param string|null $manifest_date The date of the manifest.
     *
     * @return self
     */
    public function setManifestDate($manifest_date)
    {
        $this->container['manifest_date'] = $manifest_date;

        return $this;
    }
    /**
     * Gets ship_method
     *
     * @return string|null
     */
    public function getShipMethod()
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method
     *
     * @param string|null $ship_method The shipment method.
     *
     * @return self
     */
    public function setShipMethod($ship_method)
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }
    /**
     * Gets scac_code
     *
     * @return string|null
     */
    public function getScacCode()
    {
        return $this->container['scac_code'];
    }

    /**
     * Sets scac_code
     *
     * @param string|null $scac_code SCAC code required for NA VOC vendors only.
     *
     * @return self
     */
    public function setScacCode($scac_code)
    {
        $this->container['scac_code'] = $scac_code;

        return $this;
    }
    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier Carrier required for EU VOC vendors only.
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }
    /**
     * Gets container_sequence_number
     *
     * @return int|null
     */
    public function getContainerSequenceNumber()
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number
     *
     * @param int|null $container_sequence_number An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     *
     * @return self
     */
    public function setContainerSequenceNumber($container_sequence_number)
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }
    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }
    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Gets packed_items
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[]
     */
    public function getPackedItems()
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[] $packed_items A list of packed items.
     *
     * @return self
     */
    public function setPackedItems($packed_items)
    {
        $this->container['packed_items'] = $packed_items;

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



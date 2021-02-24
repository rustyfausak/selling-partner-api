<?php
/**
 * ReportSchedule
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2020-09-04
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;

/**
 * ReportSchedule Class Doc Comment
 *
 * @category Class
 * @description Detailed information about a report schedule.
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_schedule_id' => 'string',
        'report_type' => 'string',
        'marketplace_ids' => 'string[]',
        'report_options' => 'map[string,string]',
        'period' => 'string',
        'next_report_creation_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_schedule_id' => null,
        'report_type' => null,
        'marketplace_ids' => null,
        'report_options' => null,
        'period' => null,
        'next_report_creation_time' => 'date-time'
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
        'report_schedule_id' => 'reportScheduleId',
        'report_type' => 'reportType',
        'marketplace_ids' => 'marketplaceIds',
        'report_options' => 'reportOptions',
        'period' => 'period',
        'next_report_creation_time' => 'nextReportCreationTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_schedule_id' => 'setReportScheduleId',
        'report_type' => 'setReportType',
        'marketplace_ids' => 'setMarketplaceIds',
        'report_options' => 'setReportOptions',
        'period' => 'setPeriod',
        'next_report_creation_time' => 'setNextReportCreationTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_schedule_id' => 'getReportScheduleId',
        'report_type' => 'getReportType',
        'marketplace_ids' => 'getMarketplaceIds',
        'report_options' => 'getReportOptions',
        'period' => 'getPeriod',
        'next_report_creation_time' => 'getNextReportCreationTime'
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
        $this->container['report_schedule_id'] = $data['report_schedule_id'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['next_report_creation_time'] = $data['next_report_creation_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['report_schedule_id'] === null) {
            $invalidProperties[] = "'report_schedule_id' can't be null";
        }
        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
     * Gets report_schedule_id
     *
     * @return string
     */
    public function getReportScheduleId()
    {
        return $this->container['report_schedule_id'];
    }

    /**
     * Sets report_schedule_id
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportScheduleId($report_schedule_id)
    {
        $this->container['report_schedule_id'] = $report_schedule_id;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string $report_type The report type.
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]|null
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[]|null $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_options
     *
     * @return map[string,string]|null
     */
    public function getReportOptions()
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options
     *
     * @param map[string,string]|null $report_options Additional information passed to reports. This varies by report type.
     *
     * @return self
     */
    public function setReportOptions($report_options)
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period An ISO 8601 period value that indicates how often a report should be created.
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets next_report_creation_time
     *
     * @return \DateTime|null
     */
    public function getNextReportCreationTime()
    {
        return $this->container['next_report_creation_time'];
    }

    /**
     * Sets next_report_creation_time
     *
     * @param \DateTime|null $next_report_creation_time The date and time when the schedule will create its next report, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setNextReportCreationTime($next_report_creation_time)
    {
        $this->container['next_report_creation_time'] = $next_report_creation_time;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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



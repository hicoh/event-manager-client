<?php
/**
 * JobScheduleRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HighCohesion API
 *
 * HighCohesion API [https://highcohesion.co.uk](https://highcohesion.co.uk)
 *
 * The version of the OpenAPI document: 1.0.28
 * Contact: admin@highcohesion.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HiCo\EventManagerClient\Model;

use \ArrayAccess;
use \HiCo\EventManagerClient\ObjectSerializer;

/**
 * JobScheduleRequest Class Doc Comment
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobScheduleRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobScheduleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'streamId' => 'string',
        'originalJobId' => 'string',
        'dueAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'streamId' => null,
        'originalJobId' => null,
        'dueAt' => null
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
        'streamId' => 'stream_id',
        'originalJobId' => 'original_job_id',
        'dueAt' => 'due_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'streamId' => 'setStreamId',
        'originalJobId' => 'setOriginalJobId',
        'dueAt' => 'setDueAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'streamId' => 'getStreamId',
        'originalJobId' => 'getOriginalJobId',
        'dueAt' => 'getDueAt'
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
        $this->container['streamId'] = $data['streamId'] ?? null;
        $this->container['originalJobId'] = $data['originalJobId'] ?? null;
        $this->container['dueAt'] = $data['dueAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['streamId'] === null) {
            $invalidProperties[] = "'streamId' can't be null";
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
     * Gets streamId
     *
     * @return string
     */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
     * Sets streamId
     *
     * @param string $streamId streamId
     *
     * @return self
     */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;

        return $this;
    }

    /**
     * Gets originalJobId
     *
     * @return string|null
     */
    public function getOriginalJobId()
    {
        return $this->container['originalJobId'];
    }

    /**
     * Sets originalJobId
     *
     * @param string|null $originalJobId originalJobId
     *
     * @return self
     */
    public function setOriginalJobId($originalJobId)
    {
        $this->container['originalJobId'] = $originalJobId;

        return $this;
    }

    /**
     * Gets dueAt
     *
     * @return string|null
     */
    public function getDueAt()
    {
        return $this->container['dueAt'];
    }

    /**
     * Sets dueAt
     *
     * @param string|null $dueAt DD/MM/YYYY hh:mm:ss
     *
     * @return self
     */
    public function setDueAt($dueAt)
    {
        $this->container['dueAt'] = $dueAt;

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



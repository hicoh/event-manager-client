<?php
/**
 * Job
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
 * The version of the OpenAPI document: 1.0.11
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
 * Job Class Doc Comment
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Job implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'streamId' => 'string',
        'replicatedJob' => 'bool',
        'originalJobId' => 'string',
        'scheduledJobId' => 'string',
        'status' => 'string',
        'message' => 'string',
        'dueAt' => 'string',
        'startedAt' => 'string',
        'finishedAt' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'streamId' => null,
        'replicatedJob' => null,
        'originalJobId' => null,
        'scheduledJobId' => null,
        'status' => null,
        'message' => null,
        'dueAt' => null,
        'startedAt' => null,
        'finishedAt' => null,
        'createdAt' => null,
        'updatedAt' => null
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
        'streamId' => 'stream_id',
        'replicatedJob' => 'replicated_job',
        'originalJobId' => 'original_job_id',
        'scheduledJobId' => 'scheduled_job_id',
        'status' => 'status',
        'message' => 'message',
        'dueAt' => 'due_at',
        'startedAt' => 'started_at',
        'finishedAt' => 'finished_at',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'streamId' => 'setStreamId',
        'replicatedJob' => 'setReplicatedJob',
        'originalJobId' => 'setOriginalJobId',
        'scheduledJobId' => 'setScheduledJobId',
        'status' => 'setStatus',
        'message' => 'setMessage',
        'dueAt' => 'setDueAt',
        'startedAt' => 'setStartedAt',
        'finishedAt' => 'setFinishedAt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'streamId' => 'getStreamId',
        'replicatedJob' => 'getReplicatedJob',
        'originalJobId' => 'getOriginalJobId',
        'scheduledJobId' => 'getScheduledJobId',
        'status' => 'getStatus',
        'message' => 'getMessage',
        'dueAt' => 'getDueAt',
        'startedAt' => 'getStartedAt',
        'finishedAt' => 'getFinishedAt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['streamId'] = $data['streamId'] ?? null;
        $this->container['replicatedJob'] = $data['replicatedJob'] ?? null;
        $this->container['originalJobId'] = $data['originalJobId'] ?? null;
        $this->container['scheduledJobId'] = $data['scheduledJobId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['dueAt'] = $data['dueAt'] ?? null;
        $this->container['startedAt'] = $data['startedAt'] ?? null;
        $this->container['finishedAt'] = $data['finishedAt'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets streamId
     *
     * @return string|null
     */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
     * Sets streamId
     *
     * @param string|null $streamId streamId
     *
     * @return self
     */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;

        return $this;
    }

    /**
     * Gets replicatedJob
     *
     * @return bool|null
     */
    public function getReplicatedJob()
    {
        return $this->container['replicatedJob'];
    }

    /**
     * Sets replicatedJob
     *
     * @param bool|null $replicatedJob replicatedJob
     *
     * @return self
     */
    public function setReplicatedJob($replicatedJob)
    {
        $this->container['replicatedJob'] = $replicatedJob;

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
     * Gets scheduledJobId
     *
     * @return string|null
     */
    public function getScheduledJobId()
    {
        return $this->container['scheduledJobId'];
    }

    /**
     * Sets scheduledJobId
     *
     * @param string|null $scheduledJobId scheduledJobId
     *
     * @return self
     */
    public function setScheduledJobId($scheduledJobId)
    {
        $this->container['scheduledJobId'] = $scheduledJobId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status PENDING|PROCESSING|FINISHED|FAILED|FAILED_WITH_ISSUES
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets startedAt
     *
     * @return string|null
     */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     *
     * @param string|null $startedAt DD/MM/YYYY hh:mm:ss
     *
     * @return self
     */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;

        return $this;
    }

    /**
     * Gets finishedAt
     *
     * @return string|null
     */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
     * Sets finishedAt
     *
     * @param string|null $finishedAt DD/MM/YYYY hh:mm:ss
     *
     * @return self
     */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string|null $createdAt DD/MM/YYYY hh:mm:ss
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string|null $updatedAt DD/MM/YYYY hh:mm:ss
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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



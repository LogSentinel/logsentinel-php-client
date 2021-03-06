<?php
/**
 * AuditLogEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LogSentinel RESTful API
 *
 * Read more at https://logsentinel.com/docs
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Com\Logsentinel\Client\Model;

use \ArrayAccess;

/**
 * AuditLogEntry Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuditLogEntry implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AuditLogEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'actor_display_name' => 'string',
        'actor_id' => 'string',
        'actor_role' => 'string',
        'additional_params' => 'map[string,string]',
        'application_id' => 'string',
        'details' => 'string',
        'entity_id' => 'string',
        'entity_type' => 'string',
        'hash' => 'string',
        'id' => 'string',
        'ip_address' => 'string',
        'previous_entry_id' => 'string',
        'timestamp' => 'int',
        'timestamp_group_hash' => 'string',
        'timestamp_group_size' => 'int',
        'timestamp_time' => '\DateTime',
        'timestamp_token_id' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'action' => 'action',
        'actor_display_name' => 'actorDisplayName',
        'actor_id' => 'actorId',
        'actor_role' => 'actorRole',
        'additional_params' => 'additionalParams',
        'application_id' => 'applicationId',
        'details' => 'details',
        'entity_id' => 'entityId',
        'entity_type' => 'entityType',
        'hash' => 'hash',
        'id' => 'id',
        'ip_address' => 'ipAddress',
        'previous_entry_id' => 'previousEntryId',
        'timestamp' => 'timestamp',
        'timestamp_group_hash' => 'timestampGroupHash',
        'timestamp_group_size' => 'timestampGroupSize',
        'timestamp_time' => 'timestampTime',
        'timestamp_token_id' => 'timestampTokenId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'actor_display_name' => 'setActorDisplayName',
        'actor_id' => 'setActorId',
        'actor_role' => 'setActorRole',
        'additional_params' => 'setAdditionalParams',
        'application_id' => 'setApplicationId',
        'details' => 'setDetails',
        'entity_id' => 'setEntityId',
        'entity_type' => 'setEntityType',
        'hash' => 'setHash',
        'id' => 'setId',
        'ip_address' => 'setIpAddress',
        'previous_entry_id' => 'setPreviousEntryId',
        'timestamp' => 'setTimestamp',
        'timestamp_group_hash' => 'setTimestampGroupHash',
        'timestamp_group_size' => 'setTimestampGroupSize',
        'timestamp_time' => 'setTimestampTime',
        'timestamp_token_id' => 'setTimestampTokenId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'actor_display_name' => 'getActorDisplayName',
        'actor_id' => 'getActorId',
        'actor_role' => 'getActorRole',
        'additional_params' => 'getAdditionalParams',
        'application_id' => 'getApplicationId',
        'details' => 'getDetails',
        'entity_id' => 'getEntityId',
        'entity_type' => 'getEntityType',
        'hash' => 'getHash',
        'id' => 'getId',
        'ip_address' => 'getIpAddress',
        'previous_entry_id' => 'getPreviousEntryId',
        'timestamp' => 'getTimestamp',
        'timestamp_group_hash' => 'getTimestampGroupHash',
        'timestamp_group_size' => 'getTimestampGroupSize',
        'timestamp_time' => 'getTimestampTime',
        'timestamp_token_id' => 'getTimestampTokenId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actor_display_name'] = isset($data['actor_display_name']) ? $data['actor_display_name'] : null;
        $this->container['actor_id'] = isset($data['actor_id']) ? $data['actor_id'] : null;
        $this->container['actor_role'] = isset($data['actor_role']) ? $data['actor_role'] : null;
        $this->container['additional_params'] = isset($data['additional_params']) ? $data['additional_params'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['previous_entry_id'] = isset($data['previous_entry_id']) ? $data['previous_entry_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['timestamp_group_hash'] = isset($data['timestamp_group_hash']) ? $data['timestamp_group_hash'] : null;
        $this->container['timestamp_group_size'] = isset($data['timestamp_group_size']) ? $data['timestamp_group_size'] : null;
        $this->container['timestamp_time'] = isset($data['timestamp_time']) ? $data['timestamp_time'] : null;
        $this->container['timestamp_token_id'] = isset($data['timestamp_token_id']) ? $data['timestamp_token_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets actor_display_name
     * @return string
     */
    public function getActorDisplayName()
    {
        return $this->container['actor_display_name'];
    }

    /**
     * Sets actor_display_name
     * @param string $actor_display_name
     * @return $this
     */
    public function setActorDisplayName($actor_display_name)
    {
        $this->container['actor_display_name'] = $actor_display_name;

        return $this;
    }

    /**
     * Gets actor_id
     * @return string
     */
    public function getActorId()
    {
        return $this->container['actor_id'];
    }

    /**
     * Sets actor_id
     * @param string $actor_id
     * @return $this
     */
    public function setActorId($actor_id)
    {
        $this->container['actor_id'] = $actor_id;

        return $this;
    }

    /**
     * Gets actor_role
     * @return string
     */
    public function getActorRole()
    {
        return $this->container['actor_role'];
    }

    /**
     * Sets actor_role
     * @param string $actor_role
     * @return $this
     */
    public function setActorRole($actor_role)
    {
        $this->container['actor_role'] = $actor_role;

        return $this;
    }

    /**
     * Gets additional_params
     * @return map[string,string]
     */
    public function getAdditionalParams()
    {
        return $this->container['additional_params'];
    }

    /**
     * Sets additional_params
     * @param map[string,string] $additional_params
     * @return $this
     */
    public function setAdditionalParams($additional_params)
    {
        $this->container['additional_params'] = $additional_params;

        return $this;
    }

    /**
     * Gets application_id
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param string $application_id
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets entity_id
     * @return string
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param string $entity_id
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets entity_type
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     * @param string $entity_type
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets hash
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     * @param string $ip_address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets previous_entry_id
     * @return string
     */
    public function getPreviousEntryId()
    {
        return $this->container['previous_entry_id'];
    }

    /**
     * Sets previous_entry_id
     * @param string $previous_entry_id
     * @return $this
     */
    public function setPreviousEntryId($previous_entry_id)
    {
        $this->container['previous_entry_id'] = $previous_entry_id;

        return $this;
    }

    /**
     * Gets timestamp
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param int $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets timestamp_group_hash
     * @return string
     */
    public function getTimestampGroupHash()
    {
        return $this->container['timestamp_group_hash'];
    }

    /**
     * Sets timestamp_group_hash
     * @param string $timestamp_group_hash
     * @return $this
     */
    public function setTimestampGroupHash($timestamp_group_hash)
    {
        $this->container['timestamp_group_hash'] = $timestamp_group_hash;

        return $this;
    }

    /**
     * Gets timestamp_group_size
     * @return int
     */
    public function getTimestampGroupSize()
    {
        return $this->container['timestamp_group_size'];
    }

    /**
     * Sets timestamp_group_size
     * @param int $timestamp_group_size
     * @return $this
     */
    public function setTimestampGroupSize($timestamp_group_size)
    {
        $this->container['timestamp_group_size'] = $timestamp_group_size;

        return $this;
    }

    /**
     * Gets timestamp_time
     * @return \DateTime
     */
    public function getTimestampTime()
    {
        return $this->container['timestamp_time'];
    }

    /**
     * Sets timestamp_time
     * @param \DateTime $timestamp_time
     * @return $this
     */
    public function setTimestampTime($timestamp_time)
    {
        $this->container['timestamp_time'] = $timestamp_time;

        return $this;
    }

    /**
     * Gets timestamp_token_id
     * @return string
     */
    public function getTimestampTokenId()
    {
        return $this->container['timestamp_token_id'];
    }

    /**
     * Sets timestamp_token_id
     * @param string $timestamp_token_id
     * @return $this
     */
    public function setTimestampTokenId($timestamp_token_id)
    {
        $this->container['timestamp_token_id'] = $timestamp_token_id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



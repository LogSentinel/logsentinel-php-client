<?php
/**
 * Verification
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
 * Verification Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Verification implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Verification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application_id' => 'string',
        'attempted_hash' => 'string',
        'audit_log_entry_id' => 'string',
        'created' => '\DateTime',
        'failure' => 'string',
        'id' => 'string',
        'type' => 'string'
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
        'application_id' => 'applicationId',
        'attempted_hash' => 'attemptedHash',
        'audit_log_entry_id' => 'auditLogEntryId',
        'created' => 'created',
        'failure' => 'failure',
        'id' => 'id',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'application_id' => 'setApplicationId',
        'attempted_hash' => 'setAttemptedHash',
        'audit_log_entry_id' => 'setAuditLogEntryId',
        'created' => 'setCreated',
        'failure' => 'setFailure',
        'id' => 'setId',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'application_id' => 'getApplicationId',
        'attempted_hash' => 'getAttemptedHash',
        'audit_log_entry_id' => 'getAuditLogEntryId',
        'created' => 'getCreated',
        'failure' => 'getFailure',
        'id' => 'getId',
        'type' => 'getType'
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

    const FAILURE_HASH_NOT_FOUND = 'HASH_NOT_FOUND';
    const FAILURE_HASH_MISMATCH = 'HASH_MISMATCH';
    const FAILURE_SEARCH_ENGINE_AND_DB_MISMATCH = 'SEARCH_ENGINE_AND_DB_MISMATCH';
    const FAILURE_MISSING_PREVIOUS_ENTRY = 'MISSING_PREVIOUS_ENTRY';
    const FAILURE_MISSING_DB_ENTRY = 'MISSING_DB_ENTRY';
    const FAILURE_TIMESTAMP_VALIDATION_FAILED = 'TIMESTAMP_VALIDATION_FAILED';
    const FAILURE_TIMESETAMP_GROUP_HASH_MISMATCH = 'TIMESETAMP_GROUP_HASH_MISMATCH';
    const TYPE_MANUAL = 'MANUAL';
    const TYPE_API_CALL = 'API_CALL';
    const TYPE_BACKGROUND = 'BACKGROUND';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFailureAllowableValues()
    {
        return [
            self::FAILURE_HASH_NOT_FOUND,
            self::FAILURE_HASH_MISMATCH,
            self::FAILURE_SEARCH_ENGINE_AND_DB_MISMATCH,
            self::FAILURE_MISSING_PREVIOUS_ENTRY,
            self::FAILURE_MISSING_DB_ENTRY,
            self::FAILURE_TIMESTAMP_VALIDATION_FAILED,
            self::FAILURE_TIMESETAMP_GROUP_HASH_MISMATCH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MANUAL,
            self::TYPE_API_CALL,
            self::TYPE_BACKGROUND,
        ];
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
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['attempted_hash'] = isset($data['attempted_hash']) ? $data['attempted_hash'] : null;
        $this->container['audit_log_entry_id'] = isset($data['audit_log_entry_id']) ? $data['audit_log_entry_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['failure'] = isset($data['failure']) ? $data['failure'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["HASH_NOT_FOUND", "HASH_MISMATCH", "SEARCH_ENGINE_AND_DB_MISMATCH", "MISSING_PREVIOUS_ENTRY", "MISSING_DB_ENTRY", "TIMESTAMP_VALIDATION_FAILED", "TIMESETAMP_GROUP_HASH_MISMATCH"];
        if (!in_array($this->container['failure'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'failure', must be one of 'HASH_NOT_FOUND', 'HASH_MISMATCH', 'SEARCH_ENGINE_AND_DB_MISMATCH', 'MISSING_PREVIOUS_ENTRY', 'MISSING_DB_ENTRY', 'TIMESTAMP_VALIDATION_FAILED', 'TIMESETAMP_GROUP_HASH_MISMATCH'.";
        }

        $allowed_values = ["MANUAL", "API_CALL", "BACKGROUND"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'MANUAL', 'API_CALL', 'BACKGROUND'.";
        }

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

        $allowed_values = ["HASH_NOT_FOUND", "HASH_MISMATCH", "SEARCH_ENGINE_AND_DB_MISMATCH", "MISSING_PREVIOUS_ENTRY", "MISSING_DB_ENTRY", "TIMESTAMP_VALIDATION_FAILED", "TIMESETAMP_GROUP_HASH_MISMATCH"];
        if (!in_array($this->container['failure'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["MANUAL", "API_CALL", "BACKGROUND"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * Gets attempted_hash
     * @return string
     */
    public function getAttemptedHash()
    {
        return $this->container['attempted_hash'];
    }

    /**
     * Sets attempted_hash
     * @param string $attempted_hash
     * @return $this
     */
    public function setAttemptedHash($attempted_hash)
    {
        $this->container['attempted_hash'] = $attempted_hash;

        return $this;
    }

    /**
     * Gets audit_log_entry_id
     * @return string
     */
    public function getAuditLogEntryId()
    {
        return $this->container['audit_log_entry_id'];
    }

    /**
     * Sets audit_log_entry_id
     * @param string $audit_log_entry_id
     * @return $this
     */
    public function setAuditLogEntryId($audit_log_entry_id)
    {
        $this->container['audit_log_entry_id'] = $audit_log_entry_id;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets failure
     * @return string
     */
    public function getFailure()
    {
        return $this->container['failure'];
    }

    /**
     * Sets failure
     * @param string $failure
     * @return $this
     */
    public function setFailure($failure)
    {
        $allowed_values = array('HASH_NOT_FOUND', 'HASH_MISMATCH', 'SEARCH_ENGINE_AND_DB_MISMATCH', 'MISSING_PREVIOUS_ENTRY', 'MISSING_DB_ENTRY', 'TIMESTAMP_VALIDATION_FAILED', 'TIMESETAMP_GROUP_HASH_MISMATCH');
        if (!is_null($failure) && (!in_array($failure, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'failure', must be one of 'HASH_NOT_FOUND', 'HASH_MISMATCH', 'SEARCH_ENGINE_AND_DB_MISMATCH', 'MISSING_PREVIOUS_ENTRY', 'MISSING_DB_ENTRY', 'TIMESTAMP_VALIDATION_FAILED', 'TIMESETAMP_GROUP_HASH_MISMATCH'");
        }
        $this->container['failure'] = $failure;

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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('MANUAL', 'API_CALL', 'BACKGROUND');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'MANUAL', 'API_CALL', 'BACKGROUND'");
        }
        $this->container['type'] = $type;

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



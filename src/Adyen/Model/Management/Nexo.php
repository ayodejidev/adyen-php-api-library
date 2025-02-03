<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * Nexo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Nexo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Nexo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayUrls' => '\Adyen\Model\Management\NotificationUrl',
        'encryptionKey' => '\Adyen\Model\Management\Key',
        'eventUrls' => '\Adyen\Model\Management\EventUrl',
        'nexoEventUrls' => 'string[]',
        'notification' => '\Adyen\Model\Management\Notification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'displayUrls' => null,
        'encryptionKey' => null,
        'eventUrls' => null,
        'nexoEventUrls' => null,
        'notification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'displayUrls' => false,
        'encryptionKey' => false,
        'eventUrls' => false,
        'nexoEventUrls' => false,
        'notification' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'displayUrls' => 'displayUrls',
        'encryptionKey' => 'encryptionKey',
        'eventUrls' => 'eventUrls',
        'nexoEventUrls' => 'nexoEventUrls',
        'notification' => 'notification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayUrls' => 'setDisplayUrls',
        'encryptionKey' => 'setEncryptionKey',
        'eventUrls' => 'setEventUrls',
        'nexoEventUrls' => 'setNexoEventUrls',
        'notification' => 'setNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayUrls' => 'getDisplayUrls',
        'encryptionKey' => 'getEncryptionKey',
        'eventUrls' => 'getEventUrls',
        'nexoEventUrls' => 'getNexoEventUrls',
        'notification' => 'getNotification'
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
        $this->setIfExists('displayUrls', $data ?? [], null);
        $this->setIfExists('encryptionKey', $data ?? [], null);
        $this->setIfExists('eventUrls', $data ?? [], null);
        $this->setIfExists('nexoEventUrls', $data ?? [], null);
        $this->setIfExists('notification', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets displayUrls
     *
     * @return \Adyen\Model\Management\NotificationUrl|null
     */
    public function getDisplayUrls()
    {
        return $this->container['displayUrls'];
    }

    /**
     * Sets displayUrls
     *
     * @param \Adyen\Model\Management\NotificationUrl|null $displayUrls displayUrls
     *
     * @return self
     */
    public function setDisplayUrls($displayUrls)
    {
        $this->container['displayUrls'] = $displayUrls;

        return $this;
    }

    /**
     * Gets encryptionKey
     *
     * @return \Adyen\Model\Management\Key|null
     */
    public function getEncryptionKey()
    {
        return $this->container['encryptionKey'];
    }

    /**
     * Sets encryptionKey
     *
     * @param \Adyen\Model\Management\Key|null $encryptionKey encryptionKey
     *
     * @return self
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->container['encryptionKey'] = $encryptionKey;

        return $this;
    }

    /**
     * Gets eventUrls
     *
     * @return \Adyen\Model\Management\EventUrl|null
     */
    public function getEventUrls()
    {
        return $this->container['eventUrls'];
    }

    /**
     * Sets eventUrls
     *
     * @param \Adyen\Model\Management\EventUrl|null $eventUrls eventUrls
     *
     * @return self
     */
    public function setEventUrls($eventUrls)
    {
        $this->container['eventUrls'] = $eventUrls;

        return $this;
    }

    /**
     * Gets nexoEventUrls
     *
     * @return string[]|null
     * @deprecated since Management API v1. "Use `eventUrls` instead."
     */
    public function getNexoEventUrls()
    {
        return $this->container['nexoEventUrls'];
    }

    /**
     * Sets nexoEventUrls
     *
     * @param string[]|null $nexoEventUrls One or more URLs to send event messages to when using Terminal API.
     *
     * @return self
     * @deprecated since Management API v1. "Use `eventUrls` instead."
     */
    public function setNexoEventUrls($nexoEventUrls)
    {
        $this->container['nexoEventUrls'] = $nexoEventUrls;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return \Adyen\Model\Management\Notification|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param \Adyen\Model\Management\Notification|null $notification notification
     *
     * @return self
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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

<?php

/**
 * Adyen Payment API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payments;

use \ArrayAccess;
use Adyen\Model\Payments\ObjectSerializer;

/**
 * SecureRemoteCommerceCheckoutData Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SecureRemoteCommerceCheckoutData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecureRemoteCommerceCheckoutData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkoutPayload' => 'string',
        'correlationId' => 'string',
        'cvc' => 'string',
        'digitalCardId' => 'string',
        'scheme' => 'string',
        'tokenReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkoutPayload' => null,
        'correlationId' => null,
        'cvc' => null,
        'digitalCardId' => null,
        'scheme' => null,
        'tokenReference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'checkoutPayload' => false,
        'correlationId' => false,
        'cvc' => false,
        'digitalCardId' => false,
        'scheme' => false,
        'tokenReference' => false
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
        'checkoutPayload' => 'checkoutPayload',
        'correlationId' => 'correlationId',
        'cvc' => 'cvc',
        'digitalCardId' => 'digitalCardId',
        'scheme' => 'scheme',
        'tokenReference' => 'tokenReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkoutPayload' => 'setCheckoutPayload',
        'correlationId' => 'setCorrelationId',
        'cvc' => 'setCvc',
        'digitalCardId' => 'setDigitalCardId',
        'scheme' => 'setScheme',
        'tokenReference' => 'setTokenReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkoutPayload' => 'getCheckoutPayload',
        'correlationId' => 'getCorrelationId',
        'cvc' => 'getCvc',
        'digitalCardId' => 'getDigitalCardId',
        'scheme' => 'getScheme',
        'tokenReference' => 'getTokenReference'
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

    public const SCHEME_MC = 'mc';
    public const SCHEME_VISA = 'visa';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemeAllowableValues()
    {
        return [
            self::SCHEME_MC,
            self::SCHEME_VISA,
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
        $this->setIfExists('checkoutPayload', $data ?? [], null);
        $this->setIfExists('correlationId', $data ?? [], null);
        $this->setIfExists('cvc', $data ?? [], null);
        $this->setIfExists('digitalCardId', $data ?? [], null);
        $this->setIfExists('scheme', $data ?? [], null);
        $this->setIfExists('tokenReference', $data ?? [], null);
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

        $allowedValues = $this->getSchemeAllowableValues();
        if (!is_null($this->container['scheme']) && !in_array($this->container['scheme'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scheme', must be one of '%s'",
                $this->container['scheme'],
                implode("', '", $allowedValues)
            );
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
     * Gets checkoutPayload
     *
     * @return string|null
     */
    public function getCheckoutPayload()
    {
        return $this->container['checkoutPayload'];
    }

    /**
     * Sets checkoutPayload
     *
     * @param string|null $checkoutPayload The Secure Remote Commerce checkout payload to process the payment with.
     *
     * @return self
     */
    public function setCheckoutPayload($checkoutPayload)
    {
        $this->container['checkoutPayload'] = $checkoutPayload;

        return $this;
    }

    /**
     * Gets correlationId
     *
     * @return string|null
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     *
     * @param string|null $correlationId This is the unique identifier generated by SRC system to track and link SRC messages. Available within the present checkout session (e.g. received in an earlier API response during the present session).
     *
     * @return self
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets cvc
     *
     * @return string|null
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     *
     * @param string|null $cvc The [card verification code](https://docs.adyen.com/get-started-with-adyen/payment-glossary/#card-security-code-cvc-cvv-cid).
     *
     * @return self
     */
    public function setCvc($cvc)
    {
        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets digitalCardId
     *
     * @return string|null
     */
    public function getDigitalCardId()
    {
        return $this->container['digitalCardId'];
    }

    /**
     * Sets digitalCardId
     *
     * @param string|null $digitalCardId A unique identifier that represents the token associated with a card enrolled. Required for scheme 'mc'.
     *
     * @return self
     */
    public function setDigitalCardId($digitalCardId)
    {
        $this->container['digitalCardId'] = $digitalCardId;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme The Secure Remote Commerce scheme.
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        $allowedValues = $this->getSchemeAllowableValues();
        if (!in_array($scheme, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scheme', must be one of '%s'",
                    $scheme,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets tokenReference
     *
     * @return string|null
     */
    public function getTokenReference()
    {
        return $this->container['tokenReference'];
    }

    /**
     * Sets tokenReference
     *
     * @param string|null $tokenReference A unique identifier that represents the token associated with a card enrolled. Required for scheme 'visa'.
     *
     * @return self
     */
    public function setTokenReference($tokenReference)
    {
        $this->container['tokenReference'] = $tokenReference;

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
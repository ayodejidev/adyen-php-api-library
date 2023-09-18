<?php

/**
 * Adyen Payment API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payments;

use \ArrayAccess;
use Adyen\Model\Payments\ObjectSerializer;

/**
 * AdditionalDataWallets Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalDataWallets implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalDataWallets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'androidpayToken' => 'string',
        'masterpassTransactionId' => 'string',
        'paymentToken' => 'string',
        'paywithgoogleToken' => 'string',
        'samsungpayToken' => 'string',
        'visacheckoutCallId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'androidpayToken' => null,
        'masterpassTransactionId' => null,
        'paymentToken' => null,
        'paywithgoogleToken' => null,
        'samsungpayToken' => null,
        'visacheckoutCallId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'androidpayToken' => false,
        'masterpassTransactionId' => false,
        'paymentToken' => false,
        'paywithgoogleToken' => false,
        'samsungpayToken' => false,
        'visacheckoutCallId' => false
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
        'androidpayToken' => 'androidpay.token',
        'masterpassTransactionId' => 'masterpass.transactionId',
        'paymentToken' => 'payment.token',
        'paywithgoogleToken' => 'paywithgoogle.token',
        'samsungpayToken' => 'samsungpay.token',
        'visacheckoutCallId' => 'visacheckout.callId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'androidpayToken' => 'setAndroidpayToken',
        'masterpassTransactionId' => 'setMasterpassTransactionId',
        'paymentToken' => 'setPaymentToken',
        'paywithgoogleToken' => 'setPaywithgoogleToken',
        'samsungpayToken' => 'setSamsungpayToken',
        'visacheckoutCallId' => 'setVisacheckoutCallId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'androidpayToken' => 'getAndroidpayToken',
        'masterpassTransactionId' => 'getMasterpassTransactionId',
        'paymentToken' => 'getPaymentToken',
        'paywithgoogleToken' => 'getPaywithgoogleToken',
        'samsungpayToken' => 'getSamsungpayToken',
        'visacheckoutCallId' => 'getVisacheckoutCallId'
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
        $this->setIfExists('androidpayToken', $data ?? [], null);
        $this->setIfExists('masterpassTransactionId', $data ?? [], null);
        $this->setIfExists('paymentToken', $data ?? [], null);
        $this->setIfExists('paywithgoogleToken', $data ?? [], null);
        $this->setIfExists('samsungpayToken', $data ?? [], null);
        $this->setIfExists('visacheckoutCallId', $data ?? [], null);
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
     * Gets androidpayToken
     *
     * @return string|null
     */
    public function getAndroidpayToken()
    {
        return $this->container['androidpayToken'];
    }

    /**
     * Sets androidpayToken
     *
     * @param string|null $androidpayToken The Android Pay token retrieved from the SDK.
     *
     * @return self
     */
    public function setAndroidpayToken($androidpayToken)
    {
        if (is_null($androidpayToken)) {
            throw new \InvalidArgumentException('non-nullable androidpayToken cannot be null');
        }
        $this->container['androidpayToken'] = $androidpayToken;

        return $this;
    }

    /**
     * Gets masterpassTransactionId
     *
     * @return string|null
     */
    public function getMasterpassTransactionId()
    {
        return $this->container['masterpassTransactionId'];
    }

    /**
     * Sets masterpassTransactionId
     *
     * @param string|null $masterpassTransactionId The Mastercard Masterpass Transaction ID retrieved from the SDK.
     *
     * @return self
     */
    public function setMasterpassTransactionId($masterpassTransactionId)
    {
        if (is_null($masterpassTransactionId)) {
            throw new \InvalidArgumentException('non-nullable masterpassTransactionId cannot be null');
        }
        $this->container['masterpassTransactionId'] = $masterpassTransactionId;

        return $this;
    }

    /**
     * Gets paymentToken
     *
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->container['paymentToken'];
    }

    /**
     * Sets paymentToken
     *
     * @param string|null $paymentToken The Apple Pay token retrieved from the SDK.
     *
     * @return self
     */
    public function setPaymentToken($paymentToken)
    {
        if (is_null($paymentToken)) {
            throw new \InvalidArgumentException('non-nullable paymentToken cannot be null');
        }
        $this->container['paymentToken'] = $paymentToken;

        return $this;
    }

    /**
     * Gets paywithgoogleToken
     *
     * @return string|null
     */
    public function getPaywithgoogleToken()
    {
        return $this->container['paywithgoogleToken'];
    }

    /**
     * Sets paywithgoogleToken
     *
     * @param string|null $paywithgoogleToken The Google Pay token retrieved from the SDK.
     *
     * @return self
     */
    public function setPaywithgoogleToken($paywithgoogleToken)
    {
        if (is_null($paywithgoogleToken)) {
            throw new \InvalidArgumentException('non-nullable paywithgoogleToken cannot be null');
        }
        $this->container['paywithgoogleToken'] = $paywithgoogleToken;

        return $this;
    }

    /**
     * Gets samsungpayToken
     *
     * @return string|null
     */
    public function getSamsungpayToken()
    {
        return $this->container['samsungpayToken'];
    }

    /**
     * Sets samsungpayToken
     *
     * @param string|null $samsungpayToken The Samsung Pay token retrieved from the SDK.
     *
     * @return self
     */
    public function setSamsungpayToken($samsungpayToken)
    {
        if (is_null($samsungpayToken)) {
            throw new \InvalidArgumentException('non-nullable samsungpayToken cannot be null');
        }
        $this->container['samsungpayToken'] = $samsungpayToken;

        return $this;
    }

    /**
     * Gets visacheckoutCallId
     *
     * @return string|null
     */
    public function getVisacheckoutCallId()
    {
        return $this->container['visacheckoutCallId'];
    }

    /**
     * Sets visacheckoutCallId
     *
     * @param string|null $visacheckoutCallId The Visa Checkout Call ID retrieved from the SDK.
     *
     * @return self
     */
    public function setVisacheckoutCallId($visacheckoutCallId)
    {
        if (is_null($visacheckoutCallId)) {
            throw new \InvalidArgumentException('non-nullable visacheckoutCallId cannot be null');
        }
        $this->container['visacheckoutCallId'] = $visacheckoutCallId;

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
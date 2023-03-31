<?php

/**
 * Configuration API
 *
 * The Configuration API enables you to create a platform where you can onboard your users as account holders and create balance accounts, cards, and business accounts.  ## Authentication Your Adyen contact will provide your API credential and an API key. To connect to the API, add an `X-API-Key` header with the API key as the value, for example:   ``` curl -H \"Content-Type: application/json\" \\ -H \"X-API-Key: YOUR_API_KEY\" \\ ... ```  Alternatively, you can use the username and password to connect to the API using basic authentication. For example:  ``` curl -H \"Content-Type: application/json\" \\ -U \"ws@BalancePlatform.YOUR_BALANCE_PLATFORM\":\"YOUR_WS_PASSWORD\" \\ ... ``` ## Versioning The Configuration API supports [versioning](https://docs.adyen.com/development-resources/versioning) using a version suffix in the endpoint URL. This suffix has the following format: \"vXX\", where XX is the version number.  For example: ``` https://balanceplatform-api-test.adyen.com/bcl/v2/accountHolders ``` ## Going live When going live, your Adyen contact will provide your API credential for the live environment. You can then use the API key or the username and password to send requests to `https://balanceplatform-api-live.adyen.com/bcl/v2`.
 *
 * The version of the OpenAPI document: 2
 * Contact: developer-experience@adyen.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BalancePlatform;

use \ArrayAccess;
use Adyen\Model\BalancePlatform\ObjectSerializer;

/**
 * PaymentInstrumentUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentInstrumentUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentInstrumentUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance_account_id' => 'string',
        'card' => '\Adyen\Model\BalancePlatform\CardInfo',
        'status' => 'string',
        'status_comment' => 'string',
        'status_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance_account_id' => null,
        'card' => null,
        'status' => null,
        'status_comment' => null,
        'status_reason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'balance_account_id' => false,
		'card' => false,
		'status' => false,
		'status_comment' => false,
		'status_reason' => false
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
        'balance_account_id' => 'balanceAccountId',
        'card' => 'card',
        'status' => 'status',
        'status_comment' => 'statusComment',
        'status_reason' => 'statusReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance_account_id' => 'setBalanceAccountId',
        'card' => 'setCard',
        'status' => 'setStatus',
        'status_comment' => 'setStatusComment',
        'status_reason' => 'setStatusReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance_account_id' => 'getBalanceAccountId',
        'card' => 'getCard',
        'status' => 'getStatus',
        'status_comment' => 'getStatusComment',
        'status_reason' => 'getStatusReason'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_SUSPENDED = 'suspended';
    public const STATUS_REASON_ACCOUNT_CLOSURE = 'accountClosure';
    public const STATUS_REASON_DAMAGED = 'damaged';
    public const STATUS_REASON_END_OF_LIFE = 'endOfLife';
    public const STATUS_REASON_EXPIRED = 'expired';
    public const STATUS_REASON_LOST = 'lost';
    public const STATUS_REASON_OTHER = 'other';
    public const STATUS_REASON_STOLEN = 'stolen';
    public const STATUS_REASON_SUSPECTED_FRAUD = 'suspectedFraud';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CLOSED,
            self::STATUS_INACTIVE,
            self::STATUS_SUSPENDED,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusReasonAllowableValues()
    {
        return [
            self::STATUS_REASON_ACCOUNT_CLOSURE,
            self::STATUS_REASON_DAMAGED,
            self::STATUS_REASON_END_OF_LIFE,
            self::STATUS_REASON_EXPIRED,
            self::STATUS_REASON_LOST,
            self::STATUS_REASON_OTHER,
            self::STATUS_REASON_STOLEN,
            self::STATUS_REASON_SUSPECTED_FRAUD,
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
        $this->setIfExists('balance_account_id', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_comment', $data ?? [], null);
        $this->setIfExists('status_reason', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusReasonAllowableValues();
        if (!is_null($this->container['status_reason']) && !in_array($this->container['status_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status_reason', must be one of '%s'",
                $this->container['status_reason'],
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
     * Gets balance_account_id
     *
     * @return string|null
     */
    public function getBalanceAccountId()
    {
        return $this->container['balance_account_id'];
    }

    /**
     * Sets balance_account_id
     *
     * @param string|null $balance_account_id The unique identifier of the balance account associated with this payment instrument. >You can only change the balance account ID if the payment instrument has **inactive** status.
     *
     * @return self
     */
    public function setBalanceAccountId($balance_account_id)
    {
        if (is_null($balance_account_id)) {
            throw new \InvalidArgumentException('non-nullable balance_account_id cannot be null');
        }
        $this->container['balance_account_id'] = $balance_account_id;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Adyen\Model\BalancePlatform\CardInfo|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Adyen\Model\BalancePlatform\CardInfo|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        if (is_null($card)) {
            throw new \InvalidArgumentException('non-nullable card cannot be null');
        }
        $this->container['card'] = $card;

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
     * @param string|null $status The status of the payment instrument. If a status is not specified when creating a payment instrument, it is set to **active** by default. However, there can be exceptions for cards based on the `card.formFactor` and the `issuingCountryCode`. For example, when issuing physical cards in the US, the default status is **inactive**.  Possible values:    * **active**:  The payment instrument is active and can be used to make payments.    * **inactive**: The payment instrument is inactive and cannot be used to make payments.    * **suspended**: The payment instrument is suspended, either because it was stolen or lost.    * **closed**: The payment instrument is permanently closed. This action cannot be undone.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_comment
     *
     * @return string|null
     */
    public function getStatusComment()
    {
        return $this->container['status_comment'];
    }

    /**
     * Sets status_comment
     *
     * @param string|null $status_comment Comment for the status of the payment instrument.  Required if `statusReason` is **other**.
     *
     * @return self
     */
    public function setStatusComment($status_comment)
    {
        if (is_null($status_comment)) {
            throw new \InvalidArgumentException('non-nullable status_comment cannot be null');
        }
        $this->container['status_comment'] = $status_comment;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string|null
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string|null $status_reason The reason for updating the status of the payment instrument.  Possible values: **lost**, **stolen**, **damaged**, **suspectedFraud**, **expired**, **endOfLife**, **accountClosure**, **other**. If the reason is **other**, you must also send the `statusComment` parameter describing the status change.
     *
     * @return self
     */
    public function setStatusReason($status_reason)
    {
        if (is_null($status_reason)) {
            throw new \InvalidArgumentException('non-nullable status_reason cannot be null');
        }
        $allowedValues = $this->getStatusReasonAllowableValues();
        if (!in_array($status_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status_reason', must be one of '%s'",
                    $status_reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_reason'] = $status_reason;

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

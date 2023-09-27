<?php
/**
 * CheckoutEncryptedPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MastercardApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Checkout, Save Card On File, Delete Saved Card On File And Confirmations API
 *
 * Click to Pay checkout used by Merchants to receive payload data from the Click to Pay System and send the results of transaction authorisation back to the Click to Pay System. Endpoints are available to retrieve payload data and send the outcome of a payment or checkout.  The signing of the request is as per the process documented at [https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol](https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol)  The signing process and calcualtion of body hash follows draft given by Google and documented at [https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html](https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html)
 *
 * The version of the OpenAPI document: 1.3.2
 * Contact: apisupport@mastercard.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MastercardApiClient\Model;

use \ArrayAccess;
use \MastercardApiClient\ObjectSerializer;

/**
 * CheckoutEncryptedPayload Class Doc Comment
 *
 * @category Class
 * @description JWE[Payload] that contains payment and/or consumer data. The payload data object returned via the encryptedPayload string in the POST transaction/credentials response. Once decrypted the data will consist of a JSON document with relevant payment and consumer data.
 * @package  MastercardApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutEncryptedPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutEncryptedPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card' => '\MastercardApiClient\Model\CheckoutCardResponse',
        'token' => '\MastercardApiClient\Model\CheckoutToken',
        'shipping_address' => '\MastercardApiClient\Model\CheckoutAddress',
        'consumer_email_address' => 'string',
        'consumer_mobile_number' => '\MastercardApiClient\Model\PhoneNumber',
        'dynamic_data' => '\MastercardApiClient\Model\DynamicData',
        'billing_address' => '\MastercardApiClient\Model\CheckoutAddress',
        'three_ds_output_data' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card' => null,
        'token' => null,
        'shipping_address' => null,
        'consumer_email_address' => 'email',
        'consumer_mobile_number' => null,
        'dynamic_data' => null,
        'billing_address' => null,
        'three_ds_output_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'card' => false,
		'token' => false,
		'shipping_address' => false,
		'consumer_email_address' => false,
		'consumer_mobile_number' => false,
		'dynamic_data' => false,
		'billing_address' => false,
		'three_ds_output_data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'card' => 'card',
        'token' => 'token',
        'shipping_address' => 'shippingAddress',
        'consumer_email_address' => 'consumerEmailAddress',
        'consumer_mobile_number' => 'consumerMobileNumber',
        'dynamic_data' => 'dynamicData',
        'billing_address' => 'billingAddress',
        'three_ds_output_data' => 'threeDsOutputData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'token' => 'setToken',
        'shipping_address' => 'setShippingAddress',
        'consumer_email_address' => 'setConsumerEmailAddress',
        'consumer_mobile_number' => 'setConsumerMobileNumber',
        'dynamic_data' => 'setDynamicData',
        'billing_address' => 'setBillingAddress',
        'three_ds_output_data' => 'setThreeDsOutputData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'token' => 'getToken',
        'shipping_address' => 'getShippingAddress',
        'consumer_email_address' => 'getConsumerEmailAddress',
        'consumer_mobile_number' => 'getConsumerMobileNumber',
        'dynamic_data' => 'getDynamicData',
        'billing_address' => 'getBillingAddress',
        'three_ds_output_data' => 'getThreeDsOutputData'
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
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('consumer_email_address', $data ?? [], null);
        $this->setIfExists('consumer_mobile_number', $data ?? [], null);
        $this->setIfExists('dynamic_data', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('three_ds_output_data', $data ?? [], null);
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

        if (!is_null($this->container['consumer_email_address']) && (mb_strlen($this->container['consumer_email_address']) > 255)) {
            $invalidProperties[] = "invalid value for 'consumer_email_address', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['dynamic_data'] === null) {
            $invalidProperties[] = "'dynamic_data' can't be null";
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
     * Gets card
     *
     * @return \MastercardApiClient\Model\CheckoutCardResponse|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \MastercardApiClient\Model\CheckoutCardResponse|null $card card
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
     * Gets token
     *
     * @return \MastercardApiClient\Model\CheckoutToken|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \MastercardApiClient\Model\CheckoutToken|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \MastercardApiClient\Model\CheckoutAddress|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \MastercardApiClient\Model\CheckoutAddress|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets consumer_email_address
     *
     * @return string|null
     */
    public function getConsumerEmailAddress()
    {
        return $this->container['consumer_email_address'];
    }

    /**
     * Sets consumer_email_address
     *
     * @param string|null $consumer_email_address Consumer-provided email address.
     *
     * @return self
     */
    public function setConsumerEmailAddress($consumer_email_address)
    {
        if (is_null($consumer_email_address)) {
            throw new \InvalidArgumentException('non-nullable consumer_email_address cannot be null');
        }
        if ((mb_strlen($consumer_email_address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $consumer_email_address when calling CheckoutEncryptedPayload., must be smaller than or equal to 255.');
        }

        $this->container['consumer_email_address'] = $consumer_email_address;

        return $this;
    }

    /**
     * Gets consumer_mobile_number
     *
     * @return \MastercardApiClient\Model\PhoneNumber|null
     */
    public function getConsumerMobileNumber()
    {
        return $this->container['consumer_mobile_number'];
    }

    /**
     * Sets consumer_mobile_number
     *
     * @param \MastercardApiClient\Model\PhoneNumber|null $consumer_mobile_number consumer_mobile_number
     *
     * @return self
     */
    public function setConsumerMobileNumber($consumer_mobile_number)
    {
        if (is_null($consumer_mobile_number)) {
            throw new \InvalidArgumentException('non-nullable consumer_mobile_number cannot be null');
        }
        $this->container['consumer_mobile_number'] = $consumer_mobile_number;

        return $this;
    }

    /**
     * Gets dynamic_data
     *
     * @return \MastercardApiClient\Model\DynamicData
     */
    public function getDynamicData()
    {
        return $this->container['dynamic_data'];
    }

    /**
     * Sets dynamic_data
     *
     * @param \MastercardApiClient\Model\DynamicData $dynamic_data dynamic_data
     *
     * @return self
     */
    public function setDynamicData($dynamic_data)
    {
        if (is_null($dynamic_data)) {
            throw new \InvalidArgumentException('non-nullable dynamic_data cannot be null');
        }
        $this->container['dynamic_data'] = $dynamic_data;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \MastercardApiClient\Model\CheckoutAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \MastercardApiClient\Model\CheckoutAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets three_ds_output_data
     *
     * @return object[]|null
     */
    public function getThreeDsOutputData()
    {
        return $this->container['three_ds_output_data'];
    }

    /**
     * Sets three_ds_output_data
     *
     * @param object[]|null $three_ds_output_data Object containing threeDS data.
     *
     * @return self
     */
    public function setThreeDsOutputData($three_ds_output_data)
    {
        if (is_null($three_ds_output_data)) {
            throw new \InvalidArgumentException('non-nullable three_ds_output_data cannot be null');
        }
        $this->container['three_ds_output_data'] = $three_ds_output_data;

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



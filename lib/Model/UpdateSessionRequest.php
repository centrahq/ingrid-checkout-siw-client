<?php
/**
 * UpdateSessionRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * delivery_checkout API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UpdateSessionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateSessionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateSessionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cart' => '\OpenAPI\Client\Model\Cart',
        'checkout_session_id' => 'string',
        'external_id' => 'string',
        'locales' => 'string[]',
        'meta' => 'array<string,string>',
        'prefill_delivery_address' => '\OpenAPI\Client\Model\DeliveryAddress',
        'purchase_country' => 'string',
        'purchase_currency' => 'string',
        'search_address' => '\OpenAPI\Client\Model\SearchAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cart' => null,
        'checkout_session_id' => null,
        'external_id' => null,
        'locales' => null,
        'meta' => null,
        'prefill_delivery_address' => null,
        'purchase_country' => null,
        'purchase_currency' => null,
        'search_address' => null
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
        'cart' => 'cart',
        'checkout_session_id' => 'checkout_session_id',
        'external_id' => 'external_id',
        'locales' => 'locales',
        'meta' => 'meta',
        'prefill_delivery_address' => 'prefill_delivery_address',
        'purchase_country' => 'purchase_country',
        'purchase_currency' => 'purchase_currency',
        'search_address' => 'search_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart' => 'setCart',
        'checkout_session_id' => 'setCheckoutSessionId',
        'external_id' => 'setExternalId',
        'locales' => 'setLocales',
        'meta' => 'setMeta',
        'prefill_delivery_address' => 'setPrefillDeliveryAddress',
        'purchase_country' => 'setPurchaseCountry',
        'purchase_currency' => 'setPurchaseCurrency',
        'search_address' => 'setSearchAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart' => 'getCart',
        'checkout_session_id' => 'getCheckoutSessionId',
        'external_id' => 'getExternalId',
        'locales' => 'getLocales',
        'meta' => 'getMeta',
        'prefill_delivery_address' => 'getPrefillDeliveryAddress',
        'purchase_country' => 'getPurchaseCountry',
        'purchase_currency' => 'getPurchaseCurrency',
        'search_address' => 'getSearchAddress'
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
        $this->container['cart'] = $data['cart'] ?? null;
        $this->container['checkout_session_id'] = $data['checkout_session_id'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['locales'] = $data['locales'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['prefill_delivery_address'] = $data['prefill_delivery_address'] ?? null;
        $this->container['purchase_country'] = $data['purchase_country'] ?? null;
        $this->container['purchase_currency'] = $data['purchase_currency'] ?? null;
        $this->container['search_address'] = $data['search_address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['checkout_session_id'] === null) {
            $invalidProperties[] = "'checkout_session_id' can't be null";
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
     * Gets cart
     *
     * @return \OpenAPI\Client\Model\Cart|null
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \OpenAPI\Client\Model\Cart|null $cart cart
     *
     * @return self
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets checkout_session_id
     *
     * @return string
     */
    public function getCheckoutSessionId()
    {
        return $this->container['checkout_session_id'];
    }

    /**
     * Sets checkout_session_id
     *
     * @param string $checkout_session_id Checkout session id.
     *
     * @return self
     */
    public function setCheckoutSessionId($checkout_session_id)
    {
        $this->container['checkout_session_id'] = $checkout_session_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets locales
     *
     * @return string[]|null
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     *
     * @param string[]|null $locales List of locales to load the shipping selector widget in, in order of preference (first supported one will be used).
     *
     * @return self
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return array<string,string>|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param array<string,string>|null $meta Generic key/value object that is used for supplying complementing information.
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets prefill_delivery_address
     *
     * @return \OpenAPI\Client\Model\DeliveryAddress|null
     */
    public function getPrefillDeliveryAddress()
    {
        return $this->container['prefill_delivery_address'];
    }

    /**
     * Sets prefill_delivery_address
     *
     * @param \OpenAPI\Client\Model\DeliveryAddress|null $prefill_delivery_address prefill_delivery_address
     *
     * @return self
     */
    public function setPrefillDeliveryAddress($prefill_delivery_address)
    {
        $this->container['prefill_delivery_address'] = $prefill_delivery_address;

        return $this;
    }

    /**
     * Gets purchase_country
     *
     * @return string|null
     */
    public function getPurchaseCountry()
    {
        return $this->container['purchase_country'];
    }

    /**
     * Sets purchase_country
     *
     * @param string|null $purchase_country The country of the purchase.
     *
     * @return self
     */
    public function setPurchaseCountry($purchase_country)
    {
        $this->container['purchase_country'] = $purchase_country;

        return $this;
    }

    /**
     * Gets purchase_currency
     *
     * @return string|null
     */
    public function getPurchaseCurrency()
    {
        return $this->container['purchase_currency'];
    }

    /**
     * Sets purchase_currency
     *
     * @param string|null $purchase_currency The currency of the purchase.
     *
     * @return self
     */
    public function setPurchaseCurrency($purchase_currency)
    {
        $this->container['purchase_currency'] = $purchase_currency;

        return $this;
    }

    /**
     * Gets search_address
     *
     * @return \OpenAPI\Client\Model\SearchAddress|null
     */
    public function getSearchAddress()
    {
        return $this->container['search_address'];
    }

    /**
     * Sets search_address
     *
     * @param \OpenAPI\Client\Model\SearchAddress|null $search_address search_address
     *
     * @return self
     */
    public function setSearchAddress($search_address)
    {
        $this->container['search_address'] = $search_address;

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



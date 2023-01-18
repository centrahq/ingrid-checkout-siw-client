<?php
/**
 * Cart
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @description Cart information from the e-commerce store. Information in here is used by the shipping rule engine to calculate the best shipping option for the customer.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Cart implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attributes' => 'string[]',
        'cart_id' => 'string',
        'groups' => '\OpenAPI\Client\Model\CartGroup[]',
        'items' => '\OpenAPI\Client\Model\CartItem[]',
        'pre_order' => 'bool',
        'shipping_date' => '\OpenAPI\Client\Model\ShippingDate',
        'total_discount' => 'int',
        'total_value' => 'int',
        'vouchers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attributes' => null,
        'cart_id' => null,
        'groups' => null,
        'items' => null,
        'pre_order' => null,
        'shipping_date' => null,
        'total_discount' => 'int32',
        'total_value' => 'int32',
        'vouchers' => null
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
        'attributes' => 'attributes',
        'cart_id' => 'cart_id',
        'groups' => 'groups',
        'items' => 'items',
        'pre_order' => 'pre_order',
        'shipping_date' => 'shipping_date',
        'total_discount' => 'total_discount',
        'total_value' => 'total_value',
        'vouchers' => 'vouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'cart_id' => 'setCartId',
        'groups' => 'setGroups',
        'items' => 'setItems',
        'pre_order' => 'setPreOrder',
        'shipping_date' => 'setShippingDate',
        'total_discount' => 'setTotalDiscount',
        'total_value' => 'setTotalValue',
        'vouchers' => 'setVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'cart_id' => 'getCartId',
        'groups' => 'getGroups',
        'items' => 'getItems',
        'pre_order' => 'getPreOrder',
        'shipping_date' => 'getShippingDate',
        'total_discount' => 'getTotalDiscount',
        'total_value' => 'getTotalValue',
        'vouchers' => 'getVouchers'
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
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['cart_id'] = $data['cart_id'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['pre_order'] = $data['pre_order'] ?? null;
        $this->container['shipping_date'] = $data['shipping_date'] ?? null;
        $this->container['total_discount'] = $data['total_discount'] ?? null;
        $this->container['total_value'] = $data['total_value'] ?? null;
        $this->container['vouchers'] = $data['vouchers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cart_id'] === null) {
            $invalidProperties[] = "'cart_id' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['total_discount'] === null) {
            $invalidProperties[] = "'total_discount' can't be null";
        }
        if ($this->container['total_value'] === null) {
            $invalidProperties[] = "'total_value' can't be null";
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
     * Gets attributes
     *
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[]|null $attributes Attributes of the Cart. Cart level attributes are specific to the cart or for the full cart contents. Ingrid Delivery Checkout can set varied delivery scenarios based on such attributes. Ex. [“PRIO”, “AB-testID”].
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id Unique cart id for the customers cart on the merchant side.
     *
     * @return self
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \OpenAPI\Client\Model\CartGroup[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \OpenAPI\Client\Model\CartGroup[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\CartItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\CartItem[] $items Information about the individual order items. This can be used by the shipping rule engine to calculate the best shipping option.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets pre_order
     *
     * @return bool|null
     */
    public function getPreOrder()
    {
        return $this->container['pre_order'];
    }

    /**
     * Sets pre_order
     *
     * @param bool|null $pre_order Indicated if the order can be shipped earliest on the provided shipping date.
     *
     * @return self
     */
    public function setPreOrder($pre_order)
    {
        $this->container['pre_order'] = $pre_order;

        return $this;
    }

    /**
     * Gets shipping_date
     *
     * @return \OpenAPI\Client\Model\ShippingDate|null
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param \OpenAPI\Client\Model\ShippingDate|null $shipping_date shipping_date
     *
     * @return self
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return int
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param int $total_discount Total non-negative discount amount in cents. Example `2000` is `20.00`.
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return int
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param int $total_value Total non-negative cart value in cents after discounts applying. Example `20000` represents `200.00`.
     *
     * @return self
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets vouchers
     *
     * @return string[]|null
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param string[]|null $vouchers Vouchers that can be used in price/filter rules.
     *
     * @return self
     */
    public function setVouchers($vouchers)
    {
        $this->container['vouchers'] = $vouchers;

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


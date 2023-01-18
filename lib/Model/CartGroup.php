<?php
/**
 * CartGroup
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
 * CartGroup Class Doc Comment
 *
 * @category Class
 * @description Optional specification of group to which the cart items should be assigned.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CartGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cart_item_sku_list' => 'string[]',
        'consolidatable' => 'bool',
        'contents' => '\OpenAPI\Client\Model\GroupContent[]',
        'group_id' => 'string',
        'header' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cart_item_sku_list' => null,
        'consolidatable' => null,
        'contents' => null,
        'group_id' => null,
        'header' => null
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
        'cart_item_sku_list' => 'cart_item_sku_list',
        'consolidatable' => 'consolidatable',
        'contents' => 'contents',
        'group_id' => 'group_id',
        'header' => 'header'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart_item_sku_list' => 'setCartItemSkuList',
        'consolidatable' => 'setConsolidatable',
        'contents' => 'setContents',
        'group_id' => 'setGroupId',
        'header' => 'setHeader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart_item_sku_list' => 'getCartItemSkuList',
        'consolidatable' => 'getConsolidatable',
        'contents' => 'getContents',
        'group_id' => 'getGroupId',
        'header' => 'getHeader'
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
        $this->container['cart_item_sku_list'] = $data['cart_item_sku_list'] ?? null;
        $this->container['consolidatable'] = $data['consolidatable'] ?? null;
        $this->container['contents'] = $data['contents'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contents'] === null) {
            $invalidProperties[] = "'contents' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
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
     * Gets cart_item_sku_list
     *
     * @return string[]|null
     */
    public function getCartItemSkuList()
    {
        return $this->container['cart_item_sku_list'];
    }

    /**
     * Sets cart_item_sku_list
     *
     * @param string[]|null $cart_item_sku_list Deprecated: use contents instead. List of cart item SKUs (unique product identifiers) that belong to the given group. SKUs in the list must match the ones provided on cart items [deprecated].
     *
     * @return self
     */
    public function setCartItemSkuList($cart_item_sku_list)
    {
        $this->container['cart_item_sku_list'] = $cart_item_sku_list;

        return $this;
    }

    /**
     * Gets consolidatable
     *
     * @return bool|null
     */
    public function getConsolidatable()
    {
        return $this->container['consolidatable'];
    }

    /**
     * Sets consolidatable
     *
     * @param bool|null $consolidatable Indicates, that the group could be consolidated (merged into single group with other consolidatable groups).
     *
     * @return self
     */
    public function setConsolidatable($consolidatable)
    {
        $this->container['consolidatable'] = $consolidatable;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return \OpenAPI\Client\Model\GroupContent[]
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param \OpenAPI\Client\Model\GroupContent[] $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id Unique identifier of group passed when doing split of shipments.
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string|null $header Header text containing arbitrary information related to the group.
     *
     * @return self
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

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


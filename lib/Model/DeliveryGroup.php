<?php
/**
 * DeliveryGroup
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
 * DeliveryGroup Class Doc Comment
 *
 * @category Class
 * @description Summary of the order.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addresses' => '\OpenAPI\Client\Model\Addresses',
        'category' => '\OpenAPI\Client\Model\DeliveryGroupCategory',
        'delivery_time' => '\OpenAPI\Client\Model\DeliveryGroupDeliveryTime',
        'external_id' => 'string',
        'group_id' => 'string',
        'header' => 'string',
        'items' => '\OpenAPI\Client\Model\DeliveryGroupItem[]',
        'pricing' => '\OpenAPI\Client\Model\DeliveryGroupPricing',
        'selection' => '\OpenAPI\Client\Model\DeliveryGroupSelection',
        'shipping' => '\OpenAPI\Client\Model\DeliveryGroupShipping',
        'tos_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addresses' => null,
        'category' => null,
        'delivery_time' => null,
        'external_id' => null,
        'group_id' => null,
        'header' => null,
        'items' => null,
        'pricing' => null,
        'selection' => null,
        'shipping' => null,
        'tos_id' => null
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
        'addresses' => 'addresses',
        'category' => 'category',
        'delivery_time' => 'delivery_time',
        'external_id' => 'external_id',
        'group_id' => 'group_id',
        'header' => 'header',
        'items' => 'items',
        'pricing' => 'pricing',
        'selection' => 'selection',
        'shipping' => 'shipping',
        'tos_id' => 'tos_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'category' => 'setCategory',
        'delivery_time' => 'setDeliveryTime',
        'external_id' => 'setExternalId',
        'group_id' => 'setGroupId',
        'header' => 'setHeader',
        'items' => 'setItems',
        'pricing' => 'setPricing',
        'selection' => 'setSelection',
        'shipping' => 'setShipping',
        'tos_id' => 'setTosId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'category' => 'getCategory',
        'delivery_time' => 'getDeliveryTime',
        'external_id' => 'getExternalId',
        'group_id' => 'getGroupId',
        'header' => 'getHeader',
        'items' => 'getItems',
        'pricing' => 'getPricing',
        'selection' => 'getSelection',
        'shipping' => 'getShipping',
        'tos_id' => 'getTosId'
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
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['delivery_time'] = $data['delivery_time'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['selection'] = $data['selection'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['tos_id'] = $data['tos_id'] ?? null;
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
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\Addresses|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\Addresses|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupCategory|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupDeliveryTime|null
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupDeliveryTime|null $delivery_time delivery_time
     *
     * @return self
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

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
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id Identifier of delivery group used to perform splitting of shipments.
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
     * @param string|null $header Header text containing arbitrary information related to the delivery group.
     *
     * @return self
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupItem[]|null $items Cart items that belong to the delivery group.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupPricing|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupPricing|null $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets selection
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupSelection|null
     */
    public function getSelection()
    {
        return $this->container['selection'];
    }

    /**
     * Sets selection
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupSelection|null $selection selection
     *
     * @return self
     */
    public function setSelection($selection)
    {
        $this->container['selection'] = $selection;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Model\DeliveryGroupShipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Model\DeliveryGroupShipping|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets tos_id
     *
     * @return string|null
     */
    public function getTosId()
    {
        return $this->container['tos_id'];
    }

    /**
     * Sets tos_id
     *
     * @param string|null $tos_id Identifier of order created based on completed session. By default, orders are created asynchronously so the identifier might need to be re-fetched.
     *
     * @return self
     */
    public function setTosId($tos_id)
    {
        $this->container['tos_id'] = $tos_id;

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



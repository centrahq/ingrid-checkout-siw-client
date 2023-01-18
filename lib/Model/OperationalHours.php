<?php
/**
 * OperationalHours
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
 * OperationalHours Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OperationalHours implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperationalHours';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'free_text' => 'string[]',
        'fri' => 'string',
        'mon' => 'string',
        'sat' => 'string',
        'sun' => 'string',
        'thu' => 'string',
        'tue' => 'string',
        'wed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'free_text' => null,
        'fri' => null,
        'mon' => null,
        'sat' => null,
        'sun' => null,
        'thu' => null,
        'tue' => null,
        'wed' => null
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
        'free_text' => 'free_text',
        'fri' => 'fri',
        'mon' => 'mon',
        'sat' => 'sat',
        'sun' => 'sun',
        'thu' => 'thu',
        'tue' => 'tue',
        'wed' => 'wed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'free_text' => 'setFreeText',
        'fri' => 'setFri',
        'mon' => 'setMon',
        'sat' => 'setSat',
        'sun' => 'setSun',
        'thu' => 'setThu',
        'tue' => 'setTue',
        'wed' => 'setWed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'free_text' => 'getFreeText',
        'fri' => 'getFri',
        'mon' => 'getMon',
        'sat' => 'getSat',
        'sun' => 'getSun',
        'thu' => 'getThu',
        'tue' => 'getTue',
        'wed' => 'getWed'
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
        $this->container['free_text'] = $data['free_text'] ?? null;
        $this->container['fri'] = $data['fri'] ?? null;
        $this->container['mon'] = $data['mon'] ?? null;
        $this->container['sat'] = $data['sat'] ?? null;
        $this->container['sun'] = $data['sun'] ?? null;
        $this->container['thu'] = $data['thu'] ?? null;
        $this->container['tue'] = $data['tue'] ?? null;
        $this->container['wed'] = $data['wed'] ?? null;
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
     * Gets free_text
     *
     * @return string[]|null
     */
    public function getFreeText()
    {
        return $this->container['free_text'];
    }

    /**
     * Sets free_text
     *
     * @param string[]|null $free_text free_text
     *
     * @return self
     */
    public function setFreeText($free_text)
    {
        $this->container['free_text'] = $free_text;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return string|null
     */
    public function getFri()
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param string|null $fri fri
     *
     * @return self
     */
    public function setFri($fri)
    {
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets mon
     *
     * @return string|null
     */
    public function getMon()
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param string|null $mon mon
     *
     * @return self
     */
    public function setMon($mon)
    {
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return string|null
     */
    public function getSat()
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param string|null $sat sat
     *
     * @return self
     */
    public function setSat($sat)
    {
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return string|null
     */
    public function getSun()
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param string|null $sun sun
     *
     * @return self
     */
    public function setSun($sun)
    {
        $this->container['sun'] = $sun;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return string|null
     */
    public function getThu()
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param string|null $thu thu
     *
     * @return self
     */
    public function setThu($thu)
    {
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return string|null
     */
    public function getTue()
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param string|null $tue tue
     *
     * @return self
     */
    public function setTue($tue)
    {
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return string|null
     */
    public function getWed()
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param string|null $wed wed
     *
     * @return self
     */
    public function setWed($wed)
    {
        $this->container['wed'] = $wed;

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


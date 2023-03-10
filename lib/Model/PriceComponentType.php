<?php
/**
 * PriceComponentType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * PriceComponentType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceComponentType
{
    /**
     * Possible values of this enum
     */
    const UNDEFINED = 'PRICE_COMPONENT_TYPE_UNDEFINED';
    const SHIPPING = 'PRICE_COMPONENT_TYPE_SHIPPING';
    const ADDON = 'PRICE_COMPONENT_TYPE_ADDON';
    const _RETURN = 'PRICE_COMPONENT_TYPE_RETURN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
            self::SHIPPING,
            self::ADDON,
            self::_RETURN,
        ];
    }
}



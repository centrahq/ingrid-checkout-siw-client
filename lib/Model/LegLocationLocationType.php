<?php
/**
 * LegLocationLocationType
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
 * LegLocationLocationType Class Doc Comment
 *
 * @category Class
 * @description LocationType represents a type of a location that takes part in a delivery.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LegLocationLocationType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'LOCATION_TYPE_UNKNOWN';
    const WAREHOUSE = 'LOCATION_TYPE_WAREHOUSE';
    const STORE = 'LOCATION_TYPE_STORE';
    const HOME = 'LOCATION_TYPE_HOME';
    const PICKUP = 'LOCATION_TYPE_PICKUP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::WAREHOUSE,
            self::STORE,
            self::HOME,
            self::PICKUP,
        ];
    }
}



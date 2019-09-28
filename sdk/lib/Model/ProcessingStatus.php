<?php
/**
 * ProcessingStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ProcessingStatus Class Doc Comment
 *
 * @category Class
 * @description The processing status of the command.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProcessingStatus
{
    /**
     * Possible values of this enum
     */
    const QUEUEING = 'QUEUEING';
    const RUNNING = 'RUNNING';
    const VALIDATED_AND_RUNNING = 'VALIDATED_AND_RUNNING';
    const RUNNING_BUT_WITH_ERRORS = 'RUNNING_BUT_WITH_ERRORS';
    const SUCCESSFUL = 'SUCCESSFUL';
    const PARTIAL_SUCCESS = 'PARTIAL_SUCCESS';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUEUEING,
            self::RUNNING,
            self::VALIDATED_AND_RUNNING,
            self::RUNNING_BUT_WITH_ERRORS,
            self::SUCCESSFUL,
            self::PARTIAL_SUCCESS,
            self::ERROR,
        ];
    }
}



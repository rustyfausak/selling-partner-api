<?php
/**
 * GetContentDocumentIncludedDataType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model;
use \Evers\SellingPartnerApi\ObjectSerializer;

/**
 * GetContentDocumentIncludedDataType Class Doc Comment
 *
 * @category Class
 * @description The type of data to include in the response, such as the contents or the metadata of the A+ Content documents.
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetContentDocumentIncludedDataType
{
    /**
     * Possible values of this enum
     */
    const CONTENTS = 'CONTENTS';
    const METADATA = 'METADATA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONTENTS,
            self::METADATA,
        ];
    }
}



<?php
/**
 * Currency
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.11
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    const AUD = 'AUD';
const BGN = 'BGN';
const BRL = 'BRL';
const CAD = 'CAD';
const CHF = 'CHF';
const CNY = 'CNY';
const CZK = 'CZK';
const DKK = 'DKK';
const EUR = 'EUR';
const GBP = 'GBP';
const HKD = 'HKD';
const HRK = 'HRK';
const HUF = 'HUF';
const IDR = 'IDR';
const ILS = 'ILS';
const INR = 'INR';
const ISK = 'ISK';
const JPY = 'JPY';
const KRW = 'KRW';
const MXN = 'MXN';
const MYR = 'MYR';
const NOK = 'NOK';
const NZD = 'NZD';
const PHP = 'PHP';
const PLN = 'PLN';
const RON = 'RON';
const RSD = 'RSD';
const RUB = 'RUB';
const SEK = 'SEK';
const SGD = 'SGD';
const THB = 'THB';
const _TRY = 'TRY';
const UAH = 'UAH';
const USD = 'USD';
const ZAR = 'ZAR';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUD,
self::BGN,
self::BRL,
self::CAD,
self::CHF,
self::CNY,
self::CZK,
self::DKK,
self::EUR,
self::GBP,
self::HKD,
self::HRK,
self::HUF,
self::IDR,
self::ILS,
self::INR,
self::ISK,
self::JPY,
self::KRW,
self::MXN,
self::MYR,
self::NOK,
self::NZD,
self::PHP,
self::PLN,
self::RON,
self::RSD,
self::RUB,
self::SEK,
self::SGD,
self::THB,
self::_TRY,
self::UAH,
self::USD,
self::ZAR,        ];
    }
}

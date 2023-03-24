<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethod
{
    /**
     * Possible values of this enum
     */
    const ARUHITEL = 'aruhitel';
const BANKCARD = 'bankcard';
const BARION = 'barion';
const BARTER = 'barter';
const CASH = 'cash';
const CASH_ON_DELIVERY = 'cash_on_delivery';
const COUPON = 'coupon';
const ELORE_UTALAS = 'elore_utalas';
const EP_KARTYA = 'ep_kartya';
const KOMPENZACIO = 'kompenzacio';
const LEVONAS = 'levonas';
const ONLINE_BANKCARD = 'online_bankcard';
const PAYLIKE = 'paylike';
const PAYONEER = 'payoneer';
const PAYPAL = 'paypal';
const PAYPAL_UTOLAG = 'paypal_utolag';
const PAYU = 'payu';
const PICK_PACK_PONT = 'pick_pack_pont';
const POSTAI_CSEKK = 'postai_csekk';
const POSTAUTALVANY = 'postautalvany';
const SKRILL = 'skrill';
const SZEP_CARD = 'szep_card';
const TRANSFERWISE = 'transferwise';
const UPWORK = 'upwork';
const UTALVANY = 'utalvany';
const VALTO = 'valto';
const WIRE_TRANSFER = 'wire_transfer';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARUHITEL,
self::BANKCARD,
self::BARION,
self::BARTER,
self::CASH,
self::CASH_ON_DELIVERY,
self::COUPON,
self::ELORE_UTALAS,
self::EP_KARTYA,
self::KOMPENZACIO,
self::LEVONAS,
self::ONLINE_BANKCARD,
self::PAYLIKE,
self::PAYONEER,
self::PAYPAL,
self::PAYPAL_UTOLAG,
self::PAYU,
self::PICK_PACK_PONT,
self::POSTAI_CSEKK,
self::POSTAUTALVANY,
self::SKRILL,
self::SZEP_CARD,
self::TRANSFERWISE,
self::UPWORK,
self::UTALVANY,
self::VALTO,
self::WIRE_TRANSFER,        ];
    }
}

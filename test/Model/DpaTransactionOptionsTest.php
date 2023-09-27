<?php
/**
 * DpaTransactionOptionsTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MastercardApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Checkout, Save Card On File, Delete Saved Card On File And Confirmations API
 *
 * Click to Pay checkout used by Merchants to receive payload data from the Click to Pay System and send the results of transaction authorisation back to the Click to Pay System. Endpoints are available to retrieve payload data and send the outcome of a payment or checkout.  The signing of the request is as per the process documented at [https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol](https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol)  The signing process and calcualtion of body hash follows draft given by Google and documented at [https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html](https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html)
 *
 * The version of the OpenAPI document: 1.3.2
 * Contact: apisupport@mastercard.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace MastercardApiClient\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * DpaTransactionOptionsTest Class Doc Comment
 *
 * @category    Class
 * @description When provided, Mastercard&#39;s SRCI will use the &#x60;dpaTransactionOptions&#x60; to perform a checkout and return the transaction credentials for the same:  * For Subsequent Payment, &#x60;dpaTransactionOptions.transaction.Amount&#x60; will be combined with the &#x60;dpaTransactionOptions&#x60; object passed in the Init Transaction operation. Note that all other settings within this &#x60;dpaTransactionOptions&#x60; (including the &#x60;orderType&#x60; as \&quot;SPLIT_SHIPMENT\&quot;) will be ignored. * For Split Shipment, set &#x60;dpaTransactionOptions.orderType&#x60; &#x3D; \&quot;SPLIT_SHIPMENT\&quot;. Note that all other settings within this dpaTransactionOptions will be ignored. The dpaTransactionOptions object passed in the Init Transaction operation for the first split shipment will override this object.
 * @package     MastercardApiClient
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class DpaTransactionOptionsTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "DpaTransactionOptions"
     */
    public function testDpaTransactionOptions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "transaction_amount"
     */
    public function testPropertyTransactionAmount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "payment_options"
     */
    public function testPropertyPaymentOptions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "order_type"
     */
    public function testPropertyOrderType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
<?php
/**
 * CheckoutApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace MastercardApiClient\Test\Api;

use \MastercardApiClient\Configuration;
use \MastercardApiClient\ApiException;
use \MastercardApiClient\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * CheckoutApiTest Class Doc Comment
 *
 * @category Class
 * @package  MastercardApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutApiTest extends TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for checkout
     *
     * Used either for Server to Server Checkout (allow the SRCI server to perform a checkout), or to obtain the encrypted transaction payload via the response..
     *
     */
    public function testCheckout()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}

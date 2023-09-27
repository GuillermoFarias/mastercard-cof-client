# MastercardApiClient


Click to Pay checkout used by Merchants to receive payload data from the Click to Pay System and send the results of transaction authorisation back to the Click to Pay System. Endpoints are available to retrieve payload data and send the outcome of a payment or checkout.

The signing of the request is as per the process documented at [https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol](https://developer.mastercard.com/support-article/what-authentication-requirements-are-there-to-use-the-raw-rest-protocol)

The signing process and calcualtion of body hash follows draft given by Google and documented at [https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html](https://tools.ietf.org/id/draft-eaton-oauth-bodyhash-00.html)


For more information, please visit [https://developer.mastercard.com/support](https://developer.mastercard.com/support).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MastercardApiClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new MastercardApiClient\Api\CardOnFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_card_id = ea9862e0-f937-4b4b-932d-2653bdd55ef9; // string | Merchant Card ID for a consumer. This is returned by Save Card on File endpoint.
$x_openapi_clientid = 3f34bev5-55dc-4c2d-a971-3ec37175364k; // string | Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the Click to Pay Client ID present in the request body.
$src_dpa_id = b756a2b0-ef62-4c62-a6de-f72e75ce5f17; // string | Identifies the connecting client. This will be the DPA ID of the v2 merchant.
$x_src_trace_id = 39a9af3f-e27c-49f2-b924-26b74938d013; // string | Trace Id of the present checkout session. If present, can be used to trace the calls within a checkout session.
$correlation_id = 82cb0848-918c-495f-86ba-ca5130365d48; // string | Unique identifier generated by an SRC System. If an srcCorrelationId is generated and returned to a participant, it must be included in all subsequent messages sent to the SRC System within the same transaction context.
$merchant_account_id = fd569a31-1215-4cdd-8627-65a42167b902; // string | Merchant issued Account ID for a consumer. It serves as an integration check. It will be validated against, if `merchantCardId` was generated with an `merchantAccountId` in SaveCOF operation.

try {
    $apiInstance->deleteCOF($merchant_card_id, $x_openapi_clientid, $src_dpa_id, $x_src_trace_id, $correlation_id, $merchant_account_id);
} catch (Exception $e) {
    echo 'Exception when calling CardOnFileApi->deleteCOF: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sandbox.api.mastercard.com/srci/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CardOnFileApi* | [**deleteCOF**](docs/Api/CardOnFileApi.md#deletecof) | **DELETE** /merchantCards/{merchantCardId} | Delete a previously saved card on file.
*CardOnFileApi* | [**saveCOF**](docs/Api/CardOnFileApi.md#savecof) | **POST** /merchantCards | Saves a Card on File (COF)
*CheckoutApi* | [**checkout**](docs/Api/CheckoutApi.md#checkout) | **POST** /checkout | Used either for Server to Server Checkout (allow the SRCI server to perform a checkout), or to obtain the encrypted transaction payload via the response.
*TransactionApi* | [**postConfirmation**](docs/Api/TransactionApi.md#postconfirmation) | **POST** /checkout/confirmations | Send results of payment authorization to Unified Checkout Solutions.

## Models

- [AccountReference](docs/Model/AccountReference.md)
- [AccountReferenceData](docs/Model/AccountReferenceData.md)
- [AccountReferenceType](docs/Model/AccountReferenceType.md)
- [AssuranceData](docs/Model/AssuranceData.md)
- [CardOnFileMaskedCard](docs/Model/CardOnFileMaskedCard.md)
- [CardOnFileRequest](docs/Model/CardOnFileRequest.md)
- [CardOnFileResponse](docs/Model/CardOnFileResponse.md)
- [CheckoutAddress](docs/Model/CheckoutAddress.md)
- [CheckoutCardResponse](docs/Model/CheckoutCardResponse.md)
- [CheckoutDigitalCardData](docs/Model/CheckoutDigitalCardData.md)
- [CheckoutEncryptedPayload](docs/Model/CheckoutEncryptedPayload.md)
- [CheckoutMaskedCard](docs/Model/CheckoutMaskedCard.md)
- [CheckoutMaskedConsumer](docs/Model/CheckoutMaskedConsumer.md)
- [CheckoutReference](docs/Model/CheckoutReference.md)
- [CheckoutReferenceData](docs/Model/CheckoutReferenceData.md)
- [CheckoutReferenceType](docs/Model/CheckoutReferenceType.md)
- [CheckoutRequest](docs/Model/CheckoutRequest.md)
- [CheckoutResponse](docs/Model/CheckoutResponse.md)
- [CheckoutToken](docs/Model/CheckoutToken.md)
- [CheckoutType](docs/Model/CheckoutType.md)
- [ConfirmationData](docs/Model/ConfirmationData.md)
- [Detail](docs/Model/Detail.md)
- [Details](docs/Model/Details.md)
- [DigitalCardData](docs/Model/DigitalCardData.md)
- [DigitalCardFeature](docs/Model/DigitalCardFeature.md)
- [DigitalCardFeatureContentType](docs/Model/DigitalCardFeatureContentType.md)
- [DpaTransactionOptions](docs/Model/DpaTransactionOptions.md)
- [DynamicData](docs/Model/DynamicData.md)
- [DynamicDataType](docs/Model/DynamicDataType.md)
- [Error](docs/Model/Error.md)
- [Errors](docs/Model/Errors.md)
- [MaskedAddress](docs/Model/MaskedAddress.md)
- [PaymentOptions](docs/Model/PaymentOptions.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PlainCard](docs/Model/PlainCard.md)
- [PostbackConfirmationRequest](docs/Model/PostbackConfirmationRequest.md)
- [TransactionAmount](docs/Model/TransactionAmount.md)
- [VerificationData](docs/Model/VerificationData.md)
- [VerificationType](docs/Model/VerificationType.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

apisupport@mastercard.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.2`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

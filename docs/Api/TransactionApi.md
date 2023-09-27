# MastercardApiClient\TransactionApi

All URIs are relative to https://sandbox.api.mastercard.com/srci/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postConfirmation()**](TransactionApi.md#postConfirmation) | **POST** /checkout/confirmations | Send results of payment authorization to Unified Checkout Solutions. |


## `postConfirmation()`

```php
postConfirmation($x_openapi_clientid, $postback_confirmation_request, $merchant_transaction_id, $x_src_cx_flow_id)
```

Send results of payment authorization to Unified Checkout Solutions.

Use the confirmations endpoint to notify the SRCI the outcome of a checkout or payment.  The confirmation data is sent in the request body and normally the response will be 204 (No Content) .  If an error response is returned, the response body will include further information about the reason for the error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MastercardApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_openapi_clientid = 3f34bev5-55dc-4c2d-a971-3ec37175364k; // string | Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the SRC Client ID present in the request body.
$postback_confirmation_request = new \MastercardApiClient\Model\PostbackConfirmationRequest(); // \MastercardApiClient\Model\PostbackConfirmationRequest
$merchant_transaction_id = 0a4e0d3.34f4a04b.390515165b8f87a5a0694cd752752ff6717fce21; // string | Merchant Checkout Transaction Identifier which is returned in the checkoutResponse to either checkoutWithCard or checkoutWithNewCard JavaScript methods and links the client-side JavaScript calls and server-side API calls for a specific transaction. Optional for Subsequent Payment or Subsequent Split Shipment.
$x_src_cx_flow_id = 34F4A04B.B9EF8486-E8C1-44F3-88DC-D4F516A354DC.1587777300; // string | The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response.

try {
    $apiInstance->postConfirmation($x_openapi_clientid, $postback_confirmation_request, $merchant_transaction_id, $x_src_cx_flow_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->postConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_openapi_clientid** | **string**| Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the SRC Client ID present in the request body. | |
| **postback_confirmation_request** | [**\MastercardApiClient\Model\PostbackConfirmationRequest**](../Model/PostbackConfirmationRequest.md)|  | |
| **merchant_transaction_id** | **string**| Merchant Checkout Transaction Identifier which is returned in the checkoutResponse to either checkoutWithCard or checkoutWithNewCard JavaScript methods and links the client-side JavaScript calls and server-side API calls for a specific transaction. Optional for Subsequent Payment or Subsequent Split Shipment. | [optional] |
| **x_src_cx_flow_id** | **string**| The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

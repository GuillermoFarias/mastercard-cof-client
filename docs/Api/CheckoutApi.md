# MastercardApiClient\CheckoutApi

All URIs are relative to https://sandbox.api.mastercard.com/srci/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkout()**](CheckoutApi.md#checkout) | **POST** /checkout | Used either for Server to Server Checkout (allow the SRCI server to perform a checkout), or to obtain the encrypted transaction payload via the response. |


## `checkout()`

```php
checkout($x_openapi_clientid, $checkout_transaction_request, $x_src_cx_flow_id): \MastercardApiClient\Model\CheckoutResponse
```

Used either for Server to Server Checkout (allow the SRCI server to perform a checkout), or to obtain the encrypted transaction payload via the response.

This operation provides for two situations:  1. Server to Server checkout, where the SRCI server initiates a checkout directly. This is not currently supported. 2. Allows SRCI server to fetch the transaction credentials of a checkout transaction initated via DCF. This is the typical use case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MastercardApiClient\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_openapi_clientid = 3f34bev5-55dc-4c2d-a971-3ec37175364k; // string | Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the SRC Client ID present in the request body.
$checkout_transaction_request = {"dpaTransactionOptions":{"transactionAmount":{"transactionAmount":100.0,"transactionCurrencyCode":"USD"}},"srcDpaId":"b756a2b0-ef62-4c62-a6de-f72e75ce5f17","correlationId":"ba7a2034-3c9e-4d74-b0e9-d77435fd35d7","checkoutType":"CLICK_TO_PAY","checkoutReference":{"type":"MERCHANT_TRANSACTION_ID","data":{"merchantTransactionId":"0a4e0d3.34f4a04b.47ee82c373dd4fd5398f3980b39eb6d648b9687c"}}}; // \MastercardApiClient\Model\CheckoutRequest
$x_src_cx_flow_id = 34F4A04B.B9EF8486-E8C1-44F3-88DC-D4F516A354DC.1587777300; // string | The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response.

try {
    $result = $apiInstance->checkout($x_openapi_clientid, $checkout_transaction_request, $x_src_cx_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->checkout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_openapi_clientid** | **string**| Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the SRC Client ID present in the request body. | |
| **checkout_transaction_request** | [**\MastercardApiClient\Model\CheckoutRequest**](../Model/CheckoutRequest.md)|  | |
| **x_src_cx_flow_id** | **string**| The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response. | [optional] |

### Return type

[**\MastercardApiClient\Model\CheckoutResponse**](../Model/CheckoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

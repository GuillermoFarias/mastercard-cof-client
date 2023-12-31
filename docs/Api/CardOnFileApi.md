# MastercardApiClient\CardOnFileApi

All URIs are relative to https://sandbox.api.mastercard.com/srci/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCOF()**](CardOnFileApi.md#deleteCOF) | **DELETE** /merchantCards/{merchantCardId} | Delete a previously saved card on file. |
| [**saveCOF()**](CardOnFileApi.md#saveCOF) | **POST** /merchantCards | Saves a Card on File (COF) |


## `deleteCOF()`

```php
deleteCOF($merchant_card_id, $x_openapi_clientid, $src_dpa_id, $x_src_trace_id, $correlation_id, $merchant_account_id)
```

Delete a previously saved card on file.

The Delete Card on File operation will delete the card with the specified Merchant card identifier. The Merchant card identifier may be associated with a Recurring payment or a Split shipment.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_card_id** | **string**| Merchant Card ID for a consumer. This is returned by Save Card on File endpoint. | |
| **x_openapi_clientid** | **string**| Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the Click to Pay Client ID present in the request body. | |
| **src_dpa_id** | **string**| Identifies the connecting client. This will be the DPA ID of the v2 merchant. | |
| **x_src_trace_id** | **string**| Trace Id of the present checkout session. If present, can be used to trace the calls within a checkout session. | [optional] |
| **correlation_id** | **string**| Unique identifier generated by an SRC System. If an srcCorrelationId is generated and returned to a participant, it must be included in all subsequent messages sent to the SRC System within the same transaction context. | [optional] |
| **merchant_account_id** | **string**| Merchant issued Account ID for a consumer. It serves as an integration check. It will be validated against, if &#x60;merchantCardId&#x60; was generated with an &#x60;merchantAccountId&#x60; in SaveCOF operation. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveCOF()`

```php
saveCOF($x_openapi_clientid, $card_on_file_request, $x_src_cx_flow_id, $x_src_trace_id): \MastercardApiClient\Model\CardOnFileResponse
```

Saves a Card on File (COF)

Tokenize consumer’s card to return merchantCardId using FPAN (outside checkout). Merchants can then store the merchantCardId and card details, and use them on a subsequent transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MastercardApiClient\Api\CardOnFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_openapi_clientid = 3f34bev5-55dc-4c2d-a971-3ec37175364k; // string | Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the Click to Pay Client ID present in the request body.
$card_on_file_request = {"merchantTransactionId":"0a4e0d3.34f4a04b.d4c3b4d0b02629ddfeabc5339dd1ca534bca9248","srcDpaId":"b756a2b0-ef62-4c62-a6de-f72e75ce5f17","correlationId":"ba7a2034-3c9e-4d74-b0e9-d77435fd35d7","merchantAccountId":"fd569a31-1215-4cdd-8627-65a42167b902"}; // \MastercardApiClient\Model\CardOnFileRequest
$x_src_cx_flow_id = 39a9af3f-e27c-49f2-b924-26b74938d013; // string | The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response.
$x_src_trace_id = 39a9af3f-e27c-49f2-b924-26b74938d013; // string | Trace Id of the present checkout session. If present, can be used to trace the calls within a checkout session.

try {
    $result = $apiInstance->saveCOF($x_openapi_clientid, $card_on_file_request, $x_src_cx_flow_id, $x_src_trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardOnFileApi->saveCOF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_openapi_clientid** | **string**| Open API key to make the server to server call to Mastercard SRCI. This ID is provided to the client during the onboarding process to make OAuth1.0 based signed requests. The value MUST match the Click to Pay Client ID present in the request body. | |
| **card_on_file_request** | [**\MastercardApiClient\Model\CardOnFileRequest**](../Model/CardOnFileRequest.md)|  | |
| **x_src_cx_flow_id** | **string**| The X-SRC-CX-FLOW-ID helps in routing and session affinity. Usage of X-SRC-CX-FLOW-ID in requests ensures requests by the same client are directed to the same server. When you make your initial API call, use the X-SRC-CX-FLOW-ID, returned in one of the client-side calls checkoutWithNewCard() or checkoutWitCard(). If you do not send X-SRC-CX-FLOW-ID in your request or if the field is empty, the Click to Pay system generates one and responds with the X-SRC-CX-FLOW-ID in the header. The X-SRC-CX-FLOW-ID returned in the response can be used in the subsequent calls to ensure these calls are directed to the same server that returned the initial response. | [optional] |
| **x_src_trace_id** | **string**| Trace Id of the present checkout session. If present, can be used to trace the calls within a checkout session. | [optional] |

### Return type

[**\MastercardApiClient\Model\CardOnFileResponse**](../Model/CardOnFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

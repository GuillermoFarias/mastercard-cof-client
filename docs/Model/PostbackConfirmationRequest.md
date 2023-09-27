# # PostbackConfirmationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_id** | **string** | Correlation ID. |
**merchant_transaction_id** | **string** | Merchant Checkout Transaction Identifier which is returned in the checkoutResponse to either checkoutWithCard or checkoutWithNewCard JavaScript methods and links the client-side JavaScript calls and server-side API calls for a specific transaction. Optional for Subsequent Payment or Subsequent Split Shipment. | [optional]
**confirmation_data** | [**\MastercardApiClient\Model\ConfirmationData**](ConfirmationData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # CardOnFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_transaction_id** | **string** | Merchant Checkout Transaction Identifier which is returned in the checkoutResponse to either checkoutWithCard or checkoutWithNewCard JavaScript methods and links the client-side JavaScript calls and server-side API calls for a specific transaction. Optional for Subsequent Payment or Subsequent Split Shipment. | [optional]
**src_dpa_id** | **string** | Client ID. This will be the DPA ID of the v2 merchant. |
**correlation_id** | **string** | Correlation Id. Must be passed when merchantTransactionId is passed. | [optional]
**merchant_account_id** | **string** | Merchant issued Account ID for a consumer. If provided, it serves as an integration check. | [optional]
**account_reference** | [**\MastercardApiClient\Model\AccountReference**](AccountReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

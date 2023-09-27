# # CheckoutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**src_dpa_id** | **string** | Client ID. This is the DPA ID of the merchant. |
**merchant_account_id** | **string** | Merchant issued Account ID for a consumer. It serves as an integration check. It must be provided, if Merchant is using a Saved card and had specified the same during the SaveCOF operation. | [optional]
**correlation_id** | **string** | Correlation ID for this transaction. If available within the present checkout session (e.g. received in an earlier API response during the present session), then it must be provided, otherwise a new checkout session will be initiated. | [optional]
**checkout_type** | [**\MastercardApiClient\Model\CheckoutType**](CheckoutType.md) |  |
**checkout_reference** | [**\MastercardApiClient\Model\CheckoutReference**](CheckoutReference.md) |  |
**dpa_transaction_options** | [**\MastercardApiClient\Model\DpaTransactionOptions**](DpaTransactionOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

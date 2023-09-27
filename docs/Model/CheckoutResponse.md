# # CheckoutResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_transaction_id** | **string** | Merchant Checkout Transaction Identifier which is returned in the checkoutResponse to either checkoutWithCard or checkoutWithNewCard JavaScript methods and links the client-side JavaScript calls and server-side API calls for a specific transaction. Optional for Subsequent Payment or Subsequent Split Shipment. |
**encrypted_payload** | [**\MastercardApiClient\Model\CheckoutEncryptedPayload**](CheckoutEncryptedPayload.md) |  |
**correlation_id** | **string** | Correlation ID. |
**merchant_card_id** | **string** | Merchant card identifer. | [optional]
**assurance_data** | [**\MastercardApiClient\Model\AssuranceData**](AssuranceData.md) |  | [optional]
**masked_card** | [**\MastercardApiClient\Model\CheckoutMaskedCard**](CheckoutMaskedCard.md) |  | [optional]
**masked_consumer** | [**\MastercardApiClient\Model\CheckoutMaskedConsumer**](CheckoutMaskedConsumer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

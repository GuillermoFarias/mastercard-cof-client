# # Dpa

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supported_card_brands** | **string[]** | Card networks that are supported for DPA registration. For example, MASTERCARD, VISA. |
**dpa_data** | [**\MastercardApiClient\Model\DpaData**](DpaData.md) |  |
**debit_token_requested** | **bool** | Applicable only for US country, default value: true | [optional]
**merchant_country_code** | **string** | Country code for the registering merchant in ISO format. It is also required for the phone number field. |
**merchant_category_codes** | **string[]** | The category code describing the merchant&#39;s business, service, or product, as assigned to them by Mastercard. | [optional]
**supported_checkout_types** | **string[]** | Supported checkout types,these include - CLICK_TO_PAY, GUEST_CHECKOUT_TOKENIZATION, CARD_ON_FILE_TOKENIZATION. | [optional]
**three_ds_defaultdata** | [**\MastercardApiClient\Model\ThreeDSDefaultData**](ThreeDSDefaultData.md) |  | [optional]
**acquirer_data** | [**\MastercardApiClient\Model\AcquirerData[]**](AcquirerData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

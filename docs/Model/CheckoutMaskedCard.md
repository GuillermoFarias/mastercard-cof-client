# # CheckoutMaskedCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**src_digital_card_id** | **string** | &lt; Unique Identifier of the Card. Reference representing the PAN or Payment Token that enables a non-SRCPI entity to identify the underlying PAN. A single PAN can have one or more SRC Digital Card Reference Identifiers. Digital Card information can be accompanied with SRC Digital Card Reference Identifier. It is associated with the SRC Profile to which the Digital Card belongs and is unique within an SRC System. |
**pan_bin** | **string** | First significant digits of the PAN included in an unmasked form. |
**pan_last_four** | **string** | Attribute of the Payment Card that represents the Last four digits of the PAN included in an unmasked form. |
**digital_card_data** | [**\MastercardApiClient\Model\CheckoutDigitalCardData**](CheckoutDigitalCardData.md) |  |
**pan_expiration_month** | **string** | Expiration month of the Payment Card expressed as a two-digit calendar month used for presentation purposes. | [optional]
**pan_expiration_year** | **string** | Expiration year of the Payment Card expressed as four-digit calendar year, used for presentation purposes. | [optional]
**masked_cardholder_full_name** | **string** | Masked cardholder Full Name. | [optional]
**masked_cardholder_first_name** | **string** | Masked cardholder First Name. | [optional]
**masked_cardholder_last_name** | **string** | Masked cardholder Last Name. | [optional]
**payment_card_descriptor** | **string** | Conveys the card brand, and will be a free-form string, to be defined within an SRC Programme. | [optional]
**payment_card_type** | **string** | Conveys the card type. For example:CREDIT, DEBIT, PREPAID, COMBO, FLEX. Note:COMBO and FLEX for applicable regions only. | [optional]
**digital_card_features** | [**\MastercardApiClient\Model\DigitalCardFeature[]**](DigitalCardFeature.md) | Card benefits associated with a Digital Card to be presented to the Consumer at the time of checkout. | [optional]
**masked_billing_address** | [**\MastercardApiClient\Model\MaskedAddress**](MaskedAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ThreeDSDefaultData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_acquirer_bin** | **string** | The bank identification number assigned by Mastercard to the respective acquirer to identify the acquirer. If this is not populated &amp; acquirerData has only one entry, this field will be populated with &#39;acquirerData.acquirerBin&#39;. | [optional]
**default_acquirer_merchant_id** | **string** | The default ID that acquirer assigns to merchants. If this field is not populated &amp; acquirerData has only one entry, this field will be populated with &#39;acquirerData.acquirerMerchantId&#39;. | [optional]
**default_merchant_category_code** | **string** | The category code captured at DPA level. If this is not populated &amp; merchantCategoryCode has only one entry, this field will be populated with merchantCategoryCode[0]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # AcquirerData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acquirer_ica** | **string** | Passed as a value for DE 32 field in the authorization message for acquirers. One acquirer ICA can have multiple acquirer BINs. |
**acquirer_bin** | **string** | Passed as a value for DE 31 field in the clearing message. Each acquirer BIN belongs to only one ICA. | [optional]
**acquirer_merchant_id** | **string** | A distinctive, numerical code that the acquirer assigns to merchants once they successfully open their merchant account. The MID identifies a merchant to their acquirer. Must be less than or equal to 25 characters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

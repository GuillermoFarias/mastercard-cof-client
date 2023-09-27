# # ConfirmationData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkout_event_type** | **string** | Event type associated with the update. Valid values are:    * 01 - Authorise   * 02 - Capture   * 03 - Refund   * 04 - Cancel   * 05 - Fraud   * 06 - Chargeback   * 07 - Other | [optional]
**checkout_event_status** | **string** | Event type associated with the order. Valid values are:    * 01 - Created   * 02 - Confirmed   * 03 - Cancelled   * 04 - Fraud Cancelled   * 05 - Others   * 06-50 - EMVCo future use   * 51-99 - SRC System specific | [optional]
**confirmation_status** | **string** | Status of the event as provided by the SRC Initiator in the Confirmation message. Valid values are:    * 01 - Success   * 02 - Failure   * 03 - Other | [optional]
**confirmation_reason** | **string** | Description of the reason for the event associated with the order. | [optional]
**confirmation_timestamp** | **string** | Date and time of the event completion corresponding to the Confirmation event by the SRC Initiator. | [optional]
**network_authorization_code** | **string** | Authorisation code associated with an approved transaction. | [optional]
**network_transaction_identifier** | **string** | Unique authorisation related tracing value assigned by a Payment Network and provided in an authorisation response. | [optional]
**payment_network_reference** | **string** | Transaction identifier as provided by a Payment Network after authorisation has been complete. | [optional]
**transaction_amount** | [**\MastercardApiClient\Model\TransactionAmount**](TransactionAmount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

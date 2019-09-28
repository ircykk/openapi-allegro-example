# # RefundDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The payment refund identifier. | 
**payment** | [**\OpenAPI\Client\Model\RefundPayment**](RefundPayment.md) |  | [optional] 
**reason** | **string** | Reason for a payment refund. | 
**status** | **string** | Current status of payment refund. | 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time when the refund was created provided in ISO 8601 format. | 
**total_value** | [**\OpenAPI\Client\Model\RefundTotalValue**](RefundTotalValue.md) |  | 
**line_items** | [**\OpenAPI\Client\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#39;s line items which can be refunded. | [optional] 
**delivery** | [**\OpenAPI\Client\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional] 
**overpaid** | [**\OpenAPI\Client\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional] 
**surcharges** | [**\OpenAPI\Client\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional] 
**additional_services** | [**\OpenAPI\Client\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



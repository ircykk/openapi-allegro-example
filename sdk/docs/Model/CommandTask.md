# # CommandTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | Modified field as JSON path. | [optional] 
**finished_at** | [**\DateTime**](\DateTime.md) | Date of completion of the modification. Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ | [optional] 
**message** | **string** | General fail reason. You should check the errors structure to get more detailed information of the encountered errors. | [optional] 
**offer** | [**\OpenAPI\Client\Model\OfferId**](OfferId.md) |  | [optional] 
**scheduled_at** | [**\DateTime**](\DateTime.md) | Date of the modification schedule. Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ | [optional] 
**status** | **string** | Available statuses: NEW, SUCCESS, FAIL | [optional] 
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) | The list of error objects explaining the problems with command processing for the given offer. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



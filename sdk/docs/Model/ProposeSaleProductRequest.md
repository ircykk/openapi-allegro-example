# # ProposeSaleProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Suggested product name. | 
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | 
**eans** | **string[]** | A list of codes that identify this product. Currently this can include EAN, ISBN, and UPC identifier types. | [optional] 
**images** | [**\OpenAPI\Client\Model\ImageUrl[]**](ImageUrl.md) | List of product images. At least one image is required. | 
**parameters** | [**\OpenAPI\Client\Model\ProductParameter[]**](ProductParameter.md) | List of product parameters. | 
**description** | [**\OpenAPI\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



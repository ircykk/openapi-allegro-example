# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. | 
**name** | **string** | Product name. | 
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | 
**eans** | **string[]** | A list of codes that identify this product. Currently this can include EAN, ISBN, and UPC identifier types. | [optional] 
**images** | [**\OpenAPI\Client\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional] 
**parameters** | [**\OpenAPI\Client\Model\ProductParameter[]**](ProductParameter.md) | List of product parameters. | [optional] 
**offer_requirements** | [**\OpenAPI\Client\Model\OfferRequirements**](OfferRequirements.md) |  | [optional] 
**compatibility_list** | [**\OpenAPI\Client\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional] 
**tecdoc_specification** | [**\OpenAPI\Client\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional] 
**description** | [**\OpenAPI\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



# OpenAPI\Client\CompatibilityListApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleCompatibilityListSupportedCategoriesGet**](CompatibilityListApi.md#saleCompatibilityListSupportedCategoriesGet) | **GET** /sale/compatibility-list/supported-categories | Get list of categories where compatibility list is supported
[**saleCompatibleProductsGet**](CompatibilityListApi.md#saleCompatibleProductsGet) | **GET** /sale/compatible-products | Get list of compatible products
[**saleCompatibleProductsGroupsGet**](CompatibilityListApi.md#saleCompatibleProductsGroupsGet) | **GET** /sale/compatible-products/groups | Get list of compatible product groups



## saleCompatibilityListSupportedCategoriesGet

> \OpenAPI\Client\Model\CompatibilityListSupportedCategoriesDto saleCompatibilityListSupportedCategoriesGet()

Get list of categories where compatibility list is supported

Compatibility list is available in particular categories, this resource allows to get the list of these categories with additional details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->saleCompatibilityListSupportedCategoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->saleCompatibilityListSupportedCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CompatibilityListSupportedCategoriesDto**](../Model/CompatibilityListSupportedCategoriesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saleCompatibleProductsGet

> \OpenAPI\Client\Model\CompatibleProductsListDto saleCompatibleProductsGet($type, $if_modified_since, $group_id, $tecdoc_k_typ_nr, $tecdoc_n_typ_nr, $phrase, $limit, $offset)

Get list of compatible products

Resource allows to fetch compatible products of given type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = CAR; // string | Type of compatible products. You can find available types in the response for the GET <a href=\"/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
$if_modified_since = Mon, 01 Dec 2018 10:00:00 GMT; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if `phrase` parameter is used.
$group_id = 'group_id_example'; // string | Group identifier from `/sale/compatible-products/groups` resource. Parameter is required when parameter `tecdoc.kTypNr` or `tecdoc.nTypNr` or `phrase` is not specified.
$tecdoc_k_typ_nr = 'tecdoc_k_typ_nr_example'; // string | Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
$tecdoc_n_typ_nr = 'tecdoc_n_typ_nr_example'; // string | Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
$phrase = 'phrase_example'; // string | Query for compatible products. When used, parameters: `group.id`, `limit`, `offset` and header `If-Modified-Since` are ignored.
$limit = 200; // int | The limit of returned items. If `phrase` parameter is present, parameter is ignored and maximum value is set to `200`.
$offset = 0; // int | The offset of returned items. If `phrase` parameter is present, parameter is ignored.

try {
    $result = $apiInstance->saleCompatibleProductsGet($type, $if_modified_since, $group_id, $tecdoc_k_typ_nr, $tecdoc_n_typ_nr, $phrase, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->saleCompatibleProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of compatible products. You can find available types in the response for the GET &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\&quot;&gt;supported-categories&lt;/a&gt; resource. You can use value provided in &#x60;itemsType&#x60;, for categories where &#x60;inputType&#x3D;ID&#x60;. |
 **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if &#x60;phrase&#x60; parameter is used. | [optional]
 **group_id** | **string**| Group identifier from &#x60;/sale/compatible-products/groups&#x60; resource. Parameter is required when parameter &#x60;tecdoc.kTypNr&#x60; or &#x60;tecdoc.nTypNr&#x60; or &#x60;phrase&#x60; is not specified. | [optional]
 **tecdoc_k_typ_nr** | **string**| Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, &#x60;group.id&#x60; parameter is ignored. | [optional]
 **tecdoc_n_typ_nr** | **string**| Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, &#x60;group.id&#x60; parameter is ignored. | [optional]
 **phrase** | **string**| Query for compatible products. When used, parameters: &#x60;group.id&#x60;, &#x60;limit&#x60;, &#x60;offset&#x60; and header &#x60;If-Modified-Since&#x60; are ignored. | [optional]
 **limit** | **int**| The limit of returned items. If &#x60;phrase&#x60; parameter is present, parameter is ignored and maximum value is set to &#x60;200&#x60;. | [optional] [default to 200]
 **offset** | **int**| The offset of returned items. If &#x60;phrase&#x60; parameter is present, parameter is ignored. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\CompatibleProductsListDto**](../Model/CompatibleProductsListDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saleCompatibleProductsGroupsGet

> \OpenAPI\Client\Model\CompatibleProductsGroupsDto saleCompatibleProductsGroupsGet($type, $if_modified_since, $limit, $offset)

Get list of compatible product groups

Compatible products are organized in groups, this resource allows to browse these groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompatibilityListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = CAR; // string | Type of compatible products. You can find available types in the response for the GET <a href=\"/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
$if_modified_since = Mon, 01 Dec 2018 10:00:00 GMT; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format.
$limit = 200; // int | The limit of returned items.
$offset = 0; // int | The offset of returned items.

try {
    $result = $apiInstance->saleCompatibleProductsGroupsGet($type, $if_modified_since, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilityListApi->saleCompatibleProductsGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of compatible products. You can find available types in the response for the GET &lt;a href&#x3D;\&quot;/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get\&quot;&gt;supported-categories&lt;/a&gt; resource. You can use value provided in &#x60;itemsType&#x60;, for categories where &#x60;inputType&#x3D;ID&#x60;. |
 **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. | [optional]
 **limit** | **int**| The limit of returned items. | [optional] [default to 200]
 **offset** | **int**| The offset of returned items. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\CompatibleProductsGroupsDto**](../Model/CompatibleProductsGroupsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


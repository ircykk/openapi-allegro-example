# OpenAPI\Client\CategoriesAndParametersApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoriesUsingGET**](CategoriesAndParametersApi.md#getCategoriesUsingGET) | **GET** /sale/categories | Get IDs of Allegro categories
[**getCategoryUsingGET1**](CategoriesAndParametersApi.md#getCategoryUsingGET1) | **GET** /sale/categories/{categoryId} | Get a category by ID
[**getFlatParametersUsingGET2**](CategoriesAndParametersApi.md#getFlatParametersUsingGET2) | **GET** /sale/categories/{categoryId}/parameters | Get parameters supported by a category



## getCategoriesUsingGET

> \OpenAPI\Client\Model\CategoriesDto getCategoriesUsingGET($parent_id)

Get IDs of Allegro categories

Use this resource to traverse the Allegro categories tree. It returns the list of the given category's children or a list of the main Allegro categories. <a href=\"../../sale/#categories\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = '954b95b6-43cf-4104-8354-dea4d9b10ddf'; // string | The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned.

try {
    $result = $apiInstance->getCategoriesUsingGET($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoriesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**| The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned. | [optional] [default to &#39;954b95b6-43cf-4104-8354-dea4d9b10ddf&#39;]

### Return type

[**\OpenAPI\Client\Model\CategoriesDto**](../Model/CategoriesDto.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCategoryUsingGET1

> \OpenAPI\Client\Model\CategoryDto getCategoryUsingGET1($category_id)

Get a category by ID

Use this resource to get the details of a specific category. <a href=\"../../news/2018-07-09-wielowariantowosc/#01\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6061; // string | The category ID.

try {
    $result = $apiInstance->getCategoryUsingGET1($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getCategoryUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\OpenAPI\Client\Model\CategoryDto**](../Model/CategoryDto.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFlatParametersUsingGET2

> \OpenAPI\Client\Model\CategoryParameterList getFlatParametersUsingGET2($category_id)

Get parameters supported by a category

Use this resource to get the list of parameters that are supported by the given category. <a href=\"../../sale/#parameters\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriesAndParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 709; // string | The category ID.

try {
    $result = $apiInstance->getFlatParametersUsingGET2($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesAndParametersApi->getFlatParametersUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\OpenAPI\Client\Model\CategoryParameterList**](../Model/CategoryParameterList.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


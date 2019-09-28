# OpenAPI\Client\ProductsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFlatProductParametersUsingGET**](ProductsApi.md#getFlatProductParametersUsingGET) | **GET** /sale/categories/{categoryId}/product-parameters | [BETA] Get product parameters available in given category
[**getSaleProduct**](ProductsApi.md#getSaleProduct) | **GET** /sale/products/{productId} | [BETA] Get all data of the particular product
[**getSaleProducts**](ProductsApi.md#getSaleProducts) | **GET** /sale/products | [BETA] Get search products results
[**proposeSaleProduct**](ProductsApi.md#proposeSaleProduct) | **POST** /sale/product-proposals | [BETA] Propose a product



## getFlatProductParametersUsingGET

> \OpenAPI\Client\Model\CategoryProductParameterList getFlatProductParametersUsingGET($category_id)

[BETA] Get product parameters available in given category

Use this resource to get the list of product parameters available in given category. You can use these parameters to create a new product. <a href=\"../../productization\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 709; // string | The category ID.

try {
    $result = $apiInstance->getFlatProductParametersUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getFlatProductParametersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\OpenAPI\Client\Model\CategoryProductParameterList**](../Model/CategoryProductParameterList.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSaleProduct

> \OpenAPI\Client\Model\SaleProductDto getSaleProduct($product_id)

[BETA] Get all data of the particular product

Use this resource to retrieve all data of the particular product. <a href=\"../../productization/#details\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | The product identifier.

try {
    $result = $apiInstance->getSaleProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The product identifier. |

### Return type

[**\OpenAPI\Client\Model\SaleProductDto**](../Model/SaleProductDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSaleProducts

> \OpenAPI\Client\Model\GetSaleProductsResponse getSaleProducts($ean, $phrase, $category_id, $a_filters_id, $page_id)

[BETA] Get search products results

Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. <a href=\"../../productization/#search\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 'ean_example'; // string | The EAN values can include EAN, ISBN, and UPC identifier types.
$phrase = 'phrase_example'; // string | Search phrase.
$category_id = 'category_id_example'; // string | The category identifier to filter results.
$a_filters_id = 127448=2; // string | You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:   ````   {     \"id\": \"127448\",     \"name\": \"Kolor\",     \"type\": \"SINGLE\",     \"values\": [       {         \"name\": \"biały\",         \"value\": \"2\"       },       {         \"name\": \"czarny\",         \"value\": \"1\" }     ]   }   ```` You can use 'Kolor' filter to query results, i.e.: 127448=2 (for \"biały\") or 127448=1 (for \"czarny\")
$page_id = 'page_id_example'; // string | A \"cursor\" to the next set of results.

try {
    $result = $apiInstance->getSaleProducts($ean, $phrase, $category_id, $a_filters_id, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN values can include EAN, ISBN, and UPC identifier types. | [optional]
 **phrase** | **string**| Search phrase. | [optional]
 **category_id** | **string**| The category identifier to filter results. | [optional]
 **a_filters_id** | **string**| You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;   {     \&quot;id\&quot;: \&quot;127448\&quot;,     \&quot;name\&quot;: \&quot;Kolor\&quot;,     \&quot;type\&quot;: \&quot;SINGLE\&quot;,     \&quot;values\&quot;: [       {         \&quot;name\&quot;: \&quot;biały\&quot;,         \&quot;value\&quot;: \&quot;2\&quot;       },       {         \&quot;name\&quot;: \&quot;czarny\&quot;,         \&quot;value\&quot;: \&quot;1\&quot; }     ]   }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Kolor&#39; filter to query results, i.e.: 127448&#x3D;2 (for \&quot;biały\&quot;) or 127448&#x3D;1 (for \&quot;czarny\&quot;) | [optional]
 **page_id** | **string**| A \&quot;cursor\&quot; to the next set of results. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetSaleProductsResponse**](../Model/GetSaleProductsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proposeSaleProduct

> \OpenAPI\Client\Model\SaleProductDto proposeSaleProduct($propose_sale_product_request)

[BETA] Propose a product

Use this resource to propose a product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$propose_sale_product_request = new \OpenAPI\Client\Model\ProposeSaleProductRequest(); // \OpenAPI\Client\Model\ProposeSaleProductRequest | 

try {
    $result = $apiInstance->proposeSaleProduct($propose_sale_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proposeSaleProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **propose_sale_product_request** | [**\OpenAPI\Client\Model\ProposeSaleProductRequest**](../Model/ProposeSaleProductRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SaleProductDto**](../Model/SaleProductDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.beta.v1+json
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


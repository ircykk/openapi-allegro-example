# OpenAPI\Client\SizeTablesApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTableUsingGET**](SizeTablesApi.md#getTableUsingGET) | **GET** /sale/size-tables/{tableId} | Get a size table details
[**getTablesUsingGET**](SizeTablesApi.md#getTablesUsingGET) | **GET** /sale/size-tables | Get the user&#39;s size tables



## getTableUsingGET

> \OpenAPI\Client\Model\PublicTableDto getTableUsingGET($table_id)

Get a size table details

Use this resource to get selected size table. <a href=\"../../news/2018-04-19-news_tabele_rozmiarow/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 'table_id_example'; // string | tableId

try {
    $result = $apiInstance->getTableUsingGET($table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTableUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table_id** | **string**| tableId |

### Return type

[**\OpenAPI\Client\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTablesUsingGET

> \OpenAPI\Client\Model\PublicTablesDto getTablesUsingGET($user_id)

Get the user's size tables

Use this resource to get all size tables assigned to a seller account. <a href=\"../../news/2018-04-19-news_tabele_rozmiarow/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | user.id

try {
    $result = $apiInstance->getTablesUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| user.id |

### Return type

[**\OpenAPI\Client\Model\PublicTablesDto**](../Model/PublicTablesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


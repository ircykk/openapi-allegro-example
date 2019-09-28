# OpenAPI\Client\AfterSaleServicesApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublicSellerListingUsingGET**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET) | **GET** /after-sales-service-conditions/implied-warranties | Get the user&#39;s implied warranties
[**getPublicSellerListingUsingGET1**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET1) | **GET** /after-sales-service-conditions/return-policies | Get the user&#39;s return policies
[**getPublicSellerListingUsingGET2**](AfterSaleServicesApi.md#getPublicSellerListingUsingGET2) | **GET** /after-sales-service-conditions/warranties | Get the user&#39;s warranties



## getPublicSellerListingUsingGET

> \OpenAPI\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic getPublicSellerListingUsingGET($seller_id, $limit, $offset)

Get the user's implied warranties

Use this resource to get seller implied warranties listing. <a href=\"../../news/2017-04-05-news_warunki_oferty/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your implied warranties only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your implied warranties only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic**](../Model/ImpliedWarrantiesListImpliedWarrantyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPublicSellerListingUsingGET1

> \OpenAPI\Client\Model\ReturnPoliciesListReturnPolicyBasic getPublicSellerListingUsingGET1($seller_id, $limit, $offset)

Get the user's return policies

Use this resource to get seller return policies listing. <a href=\"../../news/2017-04-05-news_warunki_oferty/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your return policies only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET1($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your return policies only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ReturnPoliciesListReturnPolicyBasic**](../Model/ReturnPoliciesListReturnPolicyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPublicSellerListingUsingGET2

> \OpenAPI\Client\Model\WarrantiesListWarrantyBasic getPublicSellerListingUsingGET2($seller_id, $limit, $offset)

Get the user's warranties

Use this resource to get seller warranties listing. <a href=\"../../news/2017-04-05-news_warunki_oferty/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your warranties only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET2($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your warranties only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WarrantiesListWarrantyBasic**](../Model/WarrantiesListWarrantyBasic.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


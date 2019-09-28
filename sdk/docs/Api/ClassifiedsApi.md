# OpenAPI\Client\ClassifiedsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignClassifiedPackagesUsingPUT**](ClassifiedsApi.md#assignClassifiedPackagesUsingPUT) | **PUT** /sale/offer-classifieds-packages/{offerId} | Assign packages to a classified
[**getClassifiedPackageConfigurationUsingGET**](ClassifiedsApi.md#getClassifiedPackageConfigurationUsingGET) | **GET** /sale/classifieds-packages/{packageId} | Get the configuration of a package
[**getClassifiedPackageConfigurationsForCategoryUsingGET**](ClassifiedsApi.md#getClassifiedPackageConfigurationsForCategoryUsingGET) | **GET** /sale/classifieds-packages | Get configurations of packages
[**getClassifiedPackagesUsingGET**](ClassifiedsApi.md#getClassifiedPackagesUsingGET) | **GET** /sale/offer-classifieds-packages/{offerId} | Get classified packages assigned to an offer



## assignClassifiedPackagesUsingPUT

> assignClassifiedPackagesUsingPUT($offer_id, $classified_packages)

Assign packages to a classified

Use this resource to assign classified packages to an offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$classified_packages = new \OpenAPI\Client\Model\ClassifiedPackages(); // \OpenAPI\Client\Model\ClassifiedPackages | Packages that should be assigned to the classified.

try {
    $apiInstance->assignClassifiedPackagesUsingPUT($offer_id, $classified_packages);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->assignClassifiedPackagesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **classified_packages** | [**\OpenAPI\Client\Model\ClassifiedPackages**](../Model/ClassifiedPackages.md)| Packages that should be assigned to the classified. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getClassifiedPackageConfigurationUsingGET

> \OpenAPI\Client\Model\ClassifiedPackageConfig getClassifiedPackageConfigurationUsingGET($package_id)

Get the configuration of a package

Use this resource to retrieve the configuration of a classifieds package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | The classifieds package ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationUsingGET($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The classifieds package ID. |

### Return type

[**\OpenAPI\Client\Model\ClassifiedPackageConfig**](../Model/ClassifiedPackageConfig.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getClassifiedPackageConfigurationsForCategoryUsingGET

> \OpenAPI\Client\Model\ClassifiedPackageConfigs getClassifiedPackageConfigurationsForCategoryUsingGET($category_id)

Get configurations of packages

Use this resource to retrieve configurations of classifieds packages for a category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The category ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationsForCategoryUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationsForCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\OpenAPI\Client\Model\ClassifiedPackageConfigs**](../Model/ClassifiedPackageConfigs.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getClassifiedPackagesUsingGET

> \OpenAPI\Client\Model\ClassifiedResponse getClassifiedPackagesUsingGET($offer_id)

Get classified packages assigned to an offer

Use this resource to retrieve classified packages currently assigned to an offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.

try {
    $result = $apiInstance->getClassifiedPackagesUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. |

### Return type

[**\OpenAPI\Client\Model\ClassifiedResponse**](../Model/ClassifiedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

